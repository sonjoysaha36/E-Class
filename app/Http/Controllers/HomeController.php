<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Course;
use App\Models\Cart;

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
            return view('home.userpage',compact('data','course'));
        }
    }
    public function index()
    {
        $data=category::all();
        $course=course::all();
        return view('home.userpage',compact('data','course'));
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
}