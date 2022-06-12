<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Brands;
use App\Models\Categories;
use App\Models\Images;
use App\Models\Orders;
use App\Models\Products;
use App\Models\User;
use App\Models\Cart;
use App\Models\Savelist;
use Session; 
use Hash;


class PagesController extends Controller
{
    //

    public function home(){

       /* Query Builder
        $images=DB:: table('images')->get();
         $product=DB:: table('products')->get();
           $newproduct=DB:: table('products')->get(); */

           $images=Images::get();
         $product=Products::orderBy('id', 'DESC')->get();
           $newproduct=Products::get();

         return view('home', compact('product','images','newproduct'));
    	
    }


     public function products(){
        $images=Images::get();
         $product=Products::orderBy('id', 'DESC')->get();
        return view('products', compact('product','images'));
        
    }

public function brands(){
        $brands= Brands::get();
        $images=Images::get();
         $products=Products::orderBy('id', 'DESC')->get();
      
       
        return view('brands', compact('products', 'brands','images'));
    }


     public function contact(){
        return view('contact');
    }


// Add, Update, Join and Internel pages
    public function cart(){
        $cart= DB:: table('carts')
            ->join('products', 'products.id', '=', 'carts.product_id')
            //->join('images', 'carts.product_id', '=', 'images.product_id')
            ->select('products.*', 'carts.quantity')
            ->get();

         $images= DB:: table('images')->get();
    	return view('cart', compact('cart','images'));
    }


    public function profile($id){
        $users= DB:: table('users')->where('id',$id)->first();
        return view('internal.profile', compact('users'));
    }



    public function savelist(){
        $savelist= DB:: table('savelists')
            ->join('products', 'products.id', '=', 'savelists.product_id')
            //->join('images', 'savelists.product_id', '=', 'images.product_id')
            ->select('savelists.*','products.*')
            ->get();

             $images= DB:: table('images')->get();
            $carts= DB:: table('carts')->get();
        
        return view('internal.savelist', compact('savelist','carts','images'));
    }



     public function payments($amount,$t_pro,$t_quan,$iq){

        return view('internal.payments', compact('amount','t_pro','t_quan','iq'));
    }


    public function onpayments($amount,$t_pro,$t_quan,$iq){

        return view('internal.onpayment', compact('amount','t_pro','t_quan','iq'));
    }


    public function offpayments($amount,$t_pro,$t_quan,$iq){

        return view('internal.offpayment', compact('amount','t_pro','t_quan','iq'));
    }


     public function details($id){
         $single_pro= DB:: table('products')
            ->join('categories', 'products.cat_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->join('images', 'products.id', '=', 'images.product_id')
        ->select('products.*', 'categories.cat_name','brands.brand_name','images.image_name')
            ->where('products.id', '=', $id)
            ->first(); 
            //return $single_pro;

        return view('internal.details', compact('single_pro'));
            //compact('product','images','brands'));
    }


    public function test(){
    $users= DB::table('users')->get();

    	return view('test', compact( 'users',));
    }



 public function add_to_cart(Request $cart, $id)

    {
         $row=DB:: table('carts')->where('product_id',$id)->get();
         if(count($row)!=0){ return redirect()->back()
            ->with('success', "Item already in the cart!");
            } else {
            
          $data= array();
        $data['product_id'] = $id;
        $data['quantity'] = $cart->quantity;
        DB:: table('carts')->insert($data);

        return redirect('cart')->with('success', "Added to card!");
       // , compact('users'));
       }
    }


    public function add_to_list(Request $list, $id)

    {  
        $row=DB:: table('savelists')->where('product_id',$id)->get();
         if(count($row)!=0){ return redirect()->back()
            ->with('success', "Item already in the Savelist!");
            } else {

          $data= array();
        $data['product_id'] = $id;
        DB:: table('savelists')->insert($data);

        return redirect('savelist')->with('success', "Added to savelist!");
       // , compact('users'));
       }
    }


public function up_quantity(Request $req, $id){
        
         $data= array();
        $data['quantity'] = $req->quantity;
         Cart::where('product_id', $id)->update($data);
        return redirect('cart')->with('success', "Quantity Updated!");
    }


public function delete_cart($id){
        
         Cart::where('product_id', $id)->delete();
        return redirect('cart')->with('success', "Item removed from cart!");
    }


    public function delete_list($id){
        
         Savelist::where('product_id', $id)->delete();
        return redirect('savelist')->with('success', "Item removed from savelists!");
    }

public function orders(Request $req, $amount,$quantity){
        
        //Breaking ids and quantities, getting product names and joining them

        $iq=$req->iq; $names='';
        $iq=explode('-', $iq);
        foreach($iq as $i){ 
            $end=explode(',', $i);
            list($id)=explode(',', $i); $q=end($end); 

            $pro=Products::where('id',$id)->first(); 
            if($pro) $names=$names.$pro->pro_name.' x ('.$q.')'.',';
            }
          // return $names;

         $data= array();
         $data['cus_id'] = uniqid();
         $data['product_names'] = $names;
         $data['cust_name'] = $req->name;
         $data['cus_address'] = $req->address;
         $data['cus_phone'] = $req->phone;
         $data['quantity'] = $quantity;
         $data['total'] = $amount;
         Orders::insert($data);
         Cart::query()->delete();
        return redirect('cart')->with('success', "Order Placed Succesfully!");
    }




public function updateProfile(Request $req, $id){
       
 // if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
     // return redirect()->route('dashboard');} else return redirect()->back();

// use abobe or below both are okay

        $user_id=$id;
        $old=$req->old_pass;
        $user=DB::table('users')->where('id',$id)->first();
        if(Hash::check($old, $user->password)) {
         
      
         $data['name'] = $req->name;
         $data['email'] = $req->email;
         $data['password'] = password_hash($req->new_pass,PASSWORD_DEFAULT);
        
         User::where('id',$id)->update($data);
         return response()->json(['message' => 'Status Changed!']);
       
    } //else { //return response()->json(['message' => 'Status Changed!']); } 
     
    

    }



//Class closes
}
