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
    public function products(Request $request)
    {
        $business_name = "";
        $business_name = session()->get('business_id');
        $subcategory_id = $request->subcategory_id;
        if (!empty($business_name)) {
            $customers = "";
            $customer_id = session()->get('customer_id');
            $customers = DB::table('customers')->where('id', $customer_id)->first();

            if (Subcategory::where('id', $subcategory_id)->exists()) {
                $category = Category::where('id', $subcategory_id)->first();
                $subcategory = Subcategory::where('id', $subcategory_id)->first();
                $products = Product::where('subcategory_id', $subcategory->id)->get();
                $discounts = DB::table('discounts')->where('client_id', $business_name)->get();
            }
            return response()->json([
                'html' => view('products', compact('subcategory', 'products', 'customers', 'category', 'discounts'))->render()
            ]);

        } else {
            return redirect('/')->with('status', 'The link was broken');
        }
    }

    public function addToCart(Request $request)
    {
        $id = $request->prod_id;
        $business_name = session()->get('business_id');
        $discounts = DB::table('discounts')->where('client_id', $business_name)->get();
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
  
        $cart[$id] = [
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
            "subtotal" => $product->price,
            "grand_total" => "",
            "notes" => ""
        ];

        session()->put('cart', $cart);

        if (count((array) session('cart'))) {
            return view('ajaxcart', compact('discounts'));
        } else {
            return response()->json([
                "message" => "No product found",
                "type" => "error"
            ]);
        }
    }

    public function Plus(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');

            $percentage = $cart[$request->id]['discount_fixed_amount'];
            $product = Product::findOrFail($request->id);

            if (isset($cart[$request->id])) {
                $cart[$request->id]['id'] = $request->id;
                $cart[$request->id]['quantity']++;
                $cart[$request->id]['price'] += $product->price;
                $totalamount  = $cart[$request->id]['orignalPrice'] * $cart[$request->id]['quantity'];
                $cart[$request->id]['subtotal'] =  $totalamount;

                if ($percentage) {

                    $fixedDiscount = ($percentage / 100) * $cart[$request->id]['orignalPrice'];
                    $totalDisc = $fixedDiscount * $cart[$request->id]['quantity'];
                    $cart[$request->id]['discount_value'] = number_format($totalDisc, 2);
                    $totalPrice = $cart[$request->id]['orignalPrice'] * $cart[$request->id]['quantity'];
                    $cart[$request->id]['totalPrice'] = $totalPrice;
                    $amout_after_total_disc = $totalPrice - $cart[$request->id]['discount_value'];
                    $total_amount_after_discount_fromat = number_format($amout_after_total_disc, 2, '.', '');
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

            $cart[$request->id]['due_Price_after_discount'] = number_format($price, 2);
            $cart[$request->id]['grand_total'] = $subtotal;
            $cart[$request->id]['totalDiscount'] = number_format($discount, 2);

            echo json_encode($cart[$request->id]);
        }
    }
    public function Minus(Request $request)
    {
        // dd($request);
        if ($request->id && $request->quantity) {
            // echo $request->quantity;die();
            $cart = session()->get('cart');
            $percentage = $cart[$request->id]['discount_fixed_amount'];
            $product = Product::findOrFail($request->id);
    
            if (isset($cart[$request->id])) {
                $cart[$request->id]['id'] = $request->id;
                if ($cart[$request->id]['quantity'] > 1) {
                    $cart[$request->id]['quantity']--;
                    $cart[$request->id]['price'] -= $product->price;
                    $totalamount = $cart[$request->id]['orignalPrice'] * $cart[$request->id]['quantity'];
                    $cart[$request->id]['subtotal'] =  $totalamount;

                    if ($percentage) {

                        $fixedDiscount = ($percentage / 100) * $cart[$request->id]['orignalPrice'];
                        $totalDisc = $fixedDiscount * $cart[$request->id]['quantity'];
                        $cart[$request->id]['discount_value'] =  number_format($totalDisc, 2);
                        $totalPrice = $cart[$request->id]['orignalPrice'] * $cart[$request->id]['quantity'];
                        $amout_after_total_disc = $totalPrice - $cart[$request->id]['discount_value'];
                        $total_amount_after_discount_fromat = number_format($amout_after_total_disc, 2, '.', '');
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
            $cart[$request->id]['due_Price_after_discount'] = number_format($price, 2);
            $cart[$request->id]['grand_total'] = $subtotal;
            $cart[$request->id]['totalDiscount'] = number_format($discount, 2);
            echo json_encode($cart[$request->id]);
        }
    }
    public function adddiscount(Request $request)
    {
        if ($request->id && $request->name && $request->disc_id && $request->discount && $request->percentage) {
            $cart = session()->get('cart');
            //  dd($cart); die;
            if (isset($cart[$request->id])) {
                $cart[$request->id]['id'] = $request->id;
                $cart[$request->id]['discount_id'] = $request->disc_id;
                $cart[$request->id]['discount_name'] = $request->name;
                $cart[$request->id]['discount_fixed_amount'] = $request->percentage;
                $total_discount = $request->discount * $cart[$request->id]['quantity'];
                $cart[$request->id]['discount_value'] = number_format($total_discount, 2);
                $priceAfterDiscout = $cart[$request->id]['subtotal'] -  $cart[$request->id]['discount_value'];
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
                if ($value['discount_value']) {
                    $discount += $value['discount_value'];
                }
            }
            $cart[$request->id]['due_Price_after_discount'] = number_format($price, 2);
            $cart[$request->id]['totalDiscount'] = number_format($discount, 2);
            echo json_encode($cart[$request->id]);
        }
    }

    public function addnotes(Request $request)
    {
        if ($request->id && $request->notes) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                $cart[$request->id]['notes'] = $request->notes;
                session()->put('cart', $cart);
            }
            echo json_encode($cart[$request->id]);
        }
    }

    public function remove(Request $request)
    {
        $id = $request->prod_id;
        $business_name = session()->get('business_id');
        $discounts = DB::table('discounts')->where('client_id', $business_name)->get();

        if ($id) {
            $cart = session()->get('cart');
            if (isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
                return view('ajaxdeletecartitem', compact('discounts'));
            } else {
                return response()->json([
                    "message" => "this is some issue try again!",
                    "type" => "error"
                ]);
            }
        }
    }
    public function destorycart(Request $request)
    {
        if ($request->session()->has('cart') && $request->session()->get('cart') != '') {

            $request->session()->forget('cart');
        }
        return redirect()->back()->with('success', 'product renove from cart');
    }
    public function placeorder(Request $request)
    {
        $client_id = session()->get('business_id');
        $customer_id = session()->get('customer_id');
        $totalamount = $request->subtotal;
        // $grandtotal = $request->duetotal;
        // dd($request->duetotal); die();
        // $totaldiscount = $request->totaldiscount;


        $order = new Order();
        $order->client_id = $client_id;
        $order->tracking_no = 'en' . rand(1111, 9999);
        $order->customer_id = $customer_id;
        $order->total_amount = $totalamount;
        $order->duetotal = $request->duetotal;
        $order->totaldiscount = $request->totaldiscount;

        $order->order_date = Carbon::now();

        $order->save();
        $cartItem = session()->get('cart');
        //  dd($cartItem); die();
        foreach ($cartItem as $item) {
            //    dd($item['discount_value']); die; 
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $item['id'],
                'qty' => $item['quantity'],
                'price' => $item['orignalPrice'],
                'disc_price' => $item['price'],
                'discount_id' => $item['discount_id'],
                'discount_name' => $item['discount_name'],
                'disc_amount' => $item['discount_value'],
                'disc_percentage' => $item['discount_fixed_amount'],
                'notes' => $item['notes'],
            ]);
        }

        if ($request->session()->has('cart') && $request->session()->get('cart') != '') {

            $request->session()->forget('cart');
            return response()->json(['status', 'order placed successfully']);
        }
        return redirect()->back()->with('success', 'order place successfully');
    }

    public function getAllDiscounts(Request $request)
    {
        $prod_id = $request['prod_id'];
        $prod_price = $request['prod_price'];
        $business_name = session()->get('business_id');
        $discounts = DB::table('discounts')->where('client_id', $business_name)->get();
        if ($discounts) {
            $data_discounts = [];
            foreach ($discounts as $key => $value) {
                $data_discounts[$key]['prod_id'] = $prod_id;
                $data_discounts[$key]['prod_price'] = $prod_price;
                $data_discounts[$key]['disc_id'] = $value->id;
                $data_discounts[$key]['client_id'] = $value->client_id;
                $data_discounts[$key]['name'] = $value->name;
                $data_discounts[$key]['percentage'] = $value->percentage;
            }
            return response()->json([
                'data' => $data_discounts,
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'msg' => 'No discounts found'
            ]);
        }
    }
    
}
