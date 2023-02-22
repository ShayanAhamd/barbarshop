<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Client;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $business_name = "";
        $business_name = session()->get('business_id');
        if (!empty($business_name)) {
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        $clients = DB::table('clients')->get();
        return view('index', compact('clients'));
    }
    public function services($customer_id = "0")
    {

        // die($slug);
        $business_name = "";
        $business_name = session()->get('business_id');
        if (!empty($business_name)) {
            $customers = "";
            if ($customer_id) {
                session()->put('customer_id', $customer_id);
                $customer_id = session()->get('customer_id');
                $customers = DB::table('customers')->where('client_id', $business_name)->where('id', $customer_id)->first();
            }
            $categories = DB::table('categories')->where('client_id', $business_name)->get();
            return view('services', compact('categories', 'customers'));
        } else {
            return redirect('/')->with('status', 'The link was broken');
        }
    }
    public function subcategories(Request $request)
    {
        $business_name = "";
        $business_name = session()->get('business_id');
        $category_id = $request->category_id;
        if (!empty($business_name)) {
            $customers = "";

            $customer_id = session()->get('customer_id');
            $customers = DB::table('customers')->where('id', $customer_id)->first();


            if (Category::where('id', $category_id)->exists()) {
                $category = Category::where('id', $category_id)->first();
                $subcategories = DB::table('subcategories')->where('category_id', $category->id)->get();
            }
            // return view('services1',compact('category','subcategories','customers'));
            return response()->json([
                'html' => view('services1', compact('category', 'subcategories', 'customers'))->render()
            ]);
        } else {
            return redirect('/')->with('status', 'The link was broken');
        }
    }

    public function customers(Request $request)
    {
        // print_r($request->search);die();
        // DB::enableQueryLog();
        $business_name = "";
        $business_name = session()->get('business_id');
        if ($request->ajax()) {
            $customers = DB::table('customers')->where('client_id', $business_name)->where('title', 'LIKE', '%' . $request->search . "%")->orWhere('first_name', 'LIKE', '%' . $request->search . "%")->orWhere('last_name', 'LIKE', '%' . $request->search . "%")->get();
            // dd(\DB::getQueryLog());
            if (count($customers) > 0) {
                return view('ajaxSearchCustomers', compact('customers'));
            } else {
                return response()->json([
                    "message" => "No customers found",
                    "type" => "error"
                ]);
            }
        } else {
            $customers = Customer::where('client_id', $business_name)->paginate(10);
            return view('customers', compact('customers'));
        }
    }

    public function customerDetail($customer_id)
    {
        $business_name = session()->get('business_id');
        if (!empty($business_name)) {
            if ($customer_id) {
                $customers = DB::table('customers')->where('client_id', $business_name)->where('id', $customer_id)->first();
                $orders = Order::select('*')->where('client_id', $business_name)->where('customer_id', $customer_id)->get()->toArray();
            }

            return view('customerdetail')->with(['customers' => $customers, 'orders' => $orders]);
        } else {
            return redirect('/')->with('status', 'The link was broken');
        }
    }
    public function orderDetail(Request $request, $id)
    {
        $orders = Order::where('id', $id)->first();
        return view('orderview', compact('orders'));
    }

    public function Logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('index');
    }
}
