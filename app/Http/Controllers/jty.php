<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function products($subcategory_id)
    {
        $business_name = "";
        $business_name = session()->get('business_id');
        if(!empty($business_name)){
            $customers = "";
             $customer_id = session()->get('customer_id');
                $customers = DB::table('customers')->where('id',$customer_id)->first();

           if(Subcategory::where('id',$subcategory_id)->exists()) {
                $category = Category::where('id',$subcategory_id)->first();
                $subcategory = Subcategory::where('id',$subcategory_id)->first();
                $products = Product::where('subcategory_id',$subcategory->id)->get();
                $discounts = DB::table('discounts')->where('client_id',$business_name)->get();
            }
           
                return view('products',compact('subcategory','products','customers','category','discounts'));
        } else {
            return redirect('/')->with('status','The link was broken');
            }
    }

    public function addToCart(Request $request)
    {
        $product_id = $request->prod_id;
        // dd( $product_id);
        $product = Product::findOrFail($product_id);
        // dd($product);
        $cart = session()->get('cart', []);
       // dd($cart);
        $cart[$product_id] = [
            "id" => $product->id,
            "name" => $product->name,
            "quantity" => 1,
            "orignalPrice" => $product->price, 
            "price" => $product->price,
            'totalPrice' => "",
            "discount_id" => "",
            "discount_name" => "",
            "discount_value" => "",
            "discount_fixed_amount" => "",
            "subtotal" => $product->price ,
            "grand_total" => "",
            "notes" => ""
        ];

         session()->put('cart', $cart);
         $cart = session()->get('cart');
         if(count($cart) > 0) {
            return view('prod',compact('cart'));
         }else{
            return response()->json([
                "message"=>"No customers found",
                "type"=>"error"
            ]);
         }
         
        //    return response()->json([
        //         "result"=>$cart
        //     ]);
        //return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    { 
        if($request->id && $request->quantity)
        {
            $cart = session()->get('cart');
            $percentage=$cart[$request->id]['discount_fixed_amount'];
            $product = Product::findOrFail($request->id);

            if(isset($cart[$request->id])) 
            {
                $cart[$request->id]['id'] = $request->id;
                $cart[$request->id]['quantity']++;
                $cart[$request->id]['price'] += $product->price;
                $totalamount  = $cart[$request->id]['orignalPrice'] * $cart[$request->id]['quantity'];
                $cart[$request->id]['subtotal'] =  $totalamount ;
                if($percentage)
                {
                    $fixedDiscount = ($percentage/100) * $cart[$request->id]['orignalPrice'];
                    $totalDisc = $fixedDiscount*$cart[$request->id]['quantity'];
                    $discount_fromat = number_format($totalDisc, 2, '.', '');
                    $cart[$request->id]['discount_value'] = $discount_fromat;
                    // $cart[$request->id]['subtotal'] = $cart[$request->id]['orignalPrice'];
                    $totalPrice = $cart[$request->id]['orignalPrice'] * $cart[$request->id]['quantity'];
                    $cart[$request->id]['totalPrice'] = $totalPrice;
                    $amout_after_total_disc = $totalPrice - $cart[$request->id]['discount_value'];
                    $total_amount_after_discount_fromat = number_format( $amout_after_total_disc, 2, '.', '');
                    $cart[$request->id]['price'] = $total_amount_after_discount_fromat;
                }
           
            }
                    session()->put('cart', $cart);
                    $cart = session()->get('cart');
                    $price = 0;
                    $subtotal = 0;
                    $discount = 0;
                        foreach ($cart as $key => $value) {
                            $price += $value['price']; 
                            $subtotal += $value['subtotal']; 
                            if ($value['discount_value']) {
                                $discount += $value['discount_value']; 
                            }
                        }
                        $cart[$request->id]['due_Price_after_discount'] = $price;
                        $cart[$request->id]['grand_total'] = $subtotal;
                        $cart[$request->id]['totalDiscount'] = $discount;  
                        echo json_encode($cart[$request->id]);
                    //    print_r($cart);die();
                        // session()->flash('success', 'Cart updated successfully');
        }
    }
    public function updatequantity(Request $request)
    {
        // dd($request);
        if($request->id && $request->quantity){
            // echo $request->quantity;die();
            $cart = session()->get('cart');
            $percentage=$cart[$request->id]['discount_fixed_amount'];
            
            $product = Product::findOrFail($request->id);
            // dd($product->price);
        if(isset($cart[$request->id])) {
            $cart[$request->id]['id'] = $request->id;
            if($cart[$request->id]['quantity'] > 1) {
                $cart[$request->id]['quantity']--;
                $cart[$request->id]['price'] -= $product->price;
                $totalamount = $cart[$request->id]['orignalPrice'] * $cart[$request->id]['quantity'];
                $cart[$request->id]['subtotal'] =  $totalamount;
                if($percentage){
                    $fixedDiscount = ($percentage/100) * $cart[$request->id]['orignalPrice'];
                    $totalDisc = $fixedDiscount*$cart[$request->id]['quantity'];
                    $discount_fromat = number_format($totalDisc, 2, '.', '');
                    $cart[$request->id]['discount_value'] =  $discount_fromat;
                    $totalPrice = $cart[$request->id]['orignalPrice'] * $cart[$request->id]['quantity'];
                    $amout_after_total_disc = $totalPrice - $cart[$request->id]['discount_value'];
                    $total_amount_after_discount_fromat = number_format( $amout_after_total_disc, 2, '.', '');
                    $cart[$request->id]['price'] = $total_amount_after_discount_fromat;
                } 
            }
        }
    
        session()->put('cart', $cart);
        $cart = session()->get('cart');

        $price = 0;
        $subtotal = 0;
        $discount = 0;
            foreach ($cart as $key => $value) {
                $price += $value['price']; 
                $subtotal += $value['subtotal'];
                if ($value['discount_value']) {
                    $discount += $value['discount_value']; 
                }
                
            }  
            $cart[$request->id]['due_Price_after_discount'] = $price;
            $cart[$request->id]['grand_total'] = $subtotal;
            $cart[$request->id]['totalDiscount'] = $discount;
        echo json_encode($cart[$request->id]);
        //    print_r($cart);die();
            // session()->flash('success', 'Cart updated successfully');
        }
    }
    public function adddiscount(Request $request)
    {
        if ($request->id && $request->name && $request->disc_id && $request->discount && $request->percentage) {
            $cart = session()->get('cart');
            
            if(isset($cart[$request->id])) {
                $cart[$request->id]['id'] = $request->id;
                $cart[$request->id]['discount_id'] = $request->disc_id;
                $cart[$request->id]['discount_name'] = $request->name;
                $cart[$request->id]['discount_fixed_amount'] = $request->percentage;
                $total_discount = $request->discount * $cart[$request->id]['quantity'];
                $total_discount_fromat = number_format($total_discount, 2, '.', '');
                $cart[$request->id]['discount_value'] = $total_discount_fromat;
                $priceAfterDiscout = $cart[$request->id]['price'] -  $cart[$request->id]['discount_value'];
                $total_amount_after_discount_fromat = number_format($priceAfterDiscout, 2, '.', '');
                $cart[$request->id]['price']   = $total_amount_after_discount_fromat;
               
                session()->put('cart', $cart);
            }
           
            
            $cart = session()->get('cart');
              //dd($cart);
            $price = 0;
            $discount = 0;
            foreach ($cart as $key => $value) {
                $price += $value['price']; 
                if($value['discount_value']) { 
                    $discount += $value['discount_value']; 
                }
                

            }
            $cart[$request->id]['due_Price_after_discount'] = $price;
            $cart[$request->id]['totalDiscount'] = $discount;
            echo json_encode($cart[$request->id]);

        }
    }
    public function addnotes(Request $request)
    {
        if ($request->id && $request->notes) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                $cart[$request->id]['notes'] = $request->notes;
                session()->put('cart', $cart);
            }
            echo json_encode($cart[$request->id]);
        }
    }
  
    public function remove(Request $request)
    {
        // dd("here");
        $product_id = $request->prod_id;
        if($product_id) {
            $cart = session()->get('cart');
            if(isset($cart[$product_id])) {
                unset($cart[$product_id]);
                session()->put('cart', $cart);
                // dd(session()->get('cart'));
            }
           // echo json_encode($cart[$product_id]);

            // return redirect()->back()->with('success', 'product remove from cart');
        $cart = session()->get('cart');

        return response()->json([
            "cart"=> $cart
        ]);

        }
    }
    public function destorycart(Request $request)
    {
        if($request->session()->has('cart') && $request->session()->get('cart') != '') {

            $request->session()->forget('cart');
          
          }
          return redirect()->back()->with('success', 'product renove from cart');
       
        
    }
    public function placeorder(Request $request)
    {
       
        $client_id = session()->get('business_id');
        $customer_id = session()->get('customer_id');
        //dd($customer_id);
       
        //dd($customers);
        $order = new Order();
        $order->client_id = $client_id;
        $order->customer_id = $customer_id;
        $order->order_date = Carbon::now();
        $order->save();
        $cartItem = session()->get('cart');
        //dd($cartItem);
        foreach($cartItem as $item)
        {
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $item['id'],
                'qty' => $item['quantity'],
                'price' => $item['orignalPrice'],
                'discount_id' => $item['discount_id'],
                'discount_name' => $item['discount_name'],
                'notes' => $item['notes']
            ]);
        }
        
      
        if($request->session()->has('cart') && $request->session()->get('cart') != '') {

            $request->session()->forget('cart');
            return response()->json(['status','order placed successfully']);
          
          }
        return redirect()->back()->with('success', 'order place successfully');



        
    }
}
