<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Course;
use App\Models\Cart;
use App\Models\Enroll;
use App\Models\Video;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.home');
        }
        else{
            $data=category::all();
            $course=course::all();
            $id=Auth::user()->id;
            $carts=cart::where('user_id','=',$id)->count();
            return view('home.userpage',compact('data','course','carts'));
        }
    }
    public function index()
    {
        if(Auth::id()){

        
        $id=Auth::user()->id;
        $data=category::all();
        $course=course::all();
        $carts=cart::where('user_id','=',$id)->count();
        return view('home.userpage',compact('data','course','carts'));
        }
        else{
            $data=category::all();
            $course=course::all();
            $carts=0;
            return view('home.userpage',compact('data','course','carts'));
        }
    }
    public function add_cart($id)
    {
        if(Auth::id()){
            // return redirect()->back();
            $user=Auth::user();
            $course=course::find($id);
            // dd($user);
            $cart=new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->course_title=$course->title;
            $cart->course_description=$course->description;
            $cart->image=$course->image;
            if($course->discount_price!=null){
                $cart->price=$course->discount_price;  
            }
            else{
                $cart->price=$course->price;

            }
            
            $cart->course_id=$course->id;
            $cart->user_id=$user->id;
            $cart->save();
            return redirect()->back();
        }

        else{
            return redirect('login');
        }
    }

    // show cart
    public function show_cart()
    {
        if(Auth::id()){
        $id=Auth::user()->id;
        $cart=cart::where('user_id','=',$id)->get();
        $carts=cart::where('user_id','=',$id)->count();
        $data=category::all();
        return view('home.show_cart',compact('data','cart','carts'));
        }
        else{
            return redirect('login');
        }
        
    }
    // remove cart
    public function remove_cart($id)
    {
        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back()->with('message','Course Remove From Cart Successfully');
    }
    public function enroll_course($id)
    {
        $cart=cart::find($id);
        $user=Auth::user();
        // dd($cart->name);
        
        
        // foreach($cart as $cart)
        // {
        //     dd($cart);
            $enroll=new enroll;
            $enroll->name=$cart->name;
            $enroll->email=$cart->email;
            $enroll->course_title=$cart->course_title;
            $enroll->course_description=$cart->course_description;
            $enroll->image=$cart->image;
            $enroll->price=$cart->price;
            $enroll->course_id=$cart->course_id;
            $enroll->user_id=$user->id;
            $enroll->payment_status=0;
            $enroll->delivery_status=0;
            // $enroll->course_id=$cart->course_id;

            $enroll->save();

            $cart_id=$cart->id;
            $cart_delete=cart::find($cart_id);
            $cart_delete->delete();

            return redirect()->back()->with('message','Enroll Successful! Please Clear Payment to Continue This Course');
            
        // }
        
    }
    public function my_learning()
    {
        if(Auth::id()){
        $data=category::all();
        $user=Auth::user();
        $user_id=$user->id;
        $carts=cart::where('user_id','=',$user_id)->count();
        $enroll=enroll::where('user_id','=',$user_id)->get();
        return view('home.my_learning',compact('data','enroll','carts'));
        }
        else{
            return redirect('login');
        }
        
    }
    public function playlist($id)
    {
        $data=category::all();
        $video=video::where('course_id','=',$id)->get();
        $course=course::find($id);
        $course_title=$course->title;
        $id=Auth::user()->id;
        $carts=cart::where('user_id','=',$id)->count();
        
        // dd($video);
        return view('home.playlist',compact('video','data','course_title','carts'));
    }
}