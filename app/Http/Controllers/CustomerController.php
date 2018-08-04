<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;
use Hash;

class CustomerController extends Controller
{
    
    public function index()
    {
        $customer_id = Auth::user()->customer_id;
        $customer = User::where('customer_id', $customer_id)->first();
        return view('pages.index', compact('customer'));
    }

    public function buatCustomer(Request $req)
    {
       
        $customer = DB::table('tbl_customer')->insert([
            'customer_name' => $req->customer_name,
            'customer_email' => $req->customer_email,
            'password' => md5($req->password),
            'mobile_number' => $req->mobile_number,
            'status_jual' => "0"
        ]);

        Session::put('customer_name',$req->customer_name);
        return redirect('/');      

    }

    public function customer_login(Request $request)
    {
      $customer_email=$request->customer_email;
      $password=md5($request->password);
      $result=DB::table('tbl_customer')
              ->where('customer_email',$customer_email)
              ->where('password',$password)
              ->first();

             if ($result) {
               
               Session::put('customer_id',$result->customer_id);
               return redirect('/');
             }else{
                
                return redirect('/login-check');
             }

    }

    public function customer()
    {
       $customer_info=DB::table('tbl_customer')->get();
       $manage_category=view('pages.customer')
           ->with('customer_info',$customer_info);
       return view('customer')
           ->with('pages.customer');    
    }

}