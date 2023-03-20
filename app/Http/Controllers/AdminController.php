<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\Video;

class AdminController extends Controller
{
    public function view_category()
    {
        $data=category::all();
        return view('admin.category',compact('data'));
    }
    public function view_product()
    {
        $data=category::all();
        return view('admin.product',compact('data'));
    }
    public function add_category(Request $request)
    {
        $data=new category;
        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');
        
    }
    // delete category
    public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Category Deleted Successfully');
    }
    // remove course
    public function delete_course($id)
    {
        $data=course::find($id);
        $data->delete();
        return redirect()->back()->with('message','Course Deleted Successfully');
    }

    // Add coourse
    function add_course(Request $request)
    {
        $course=new course;
        $course->title=$request->title;
        $course->description=$request->description;
        $course->price=$request->price;
        $course->discount_price=$request->dis_price;
        
        $course->category=$request->category;
        // store image
        // store image in variable
        $image=$request->image;
        
                // give unique name
        $imagename=time().'.'.$image->getClientOriginalExtension();
        // move to the file
        $request->image->move('course_picture',$imagename);
        // insert in database
        $course->image=$imagename;
        
        
        
        
        
        
        $course->save();
        return redirect()->back()->with('message','Course Added Successfully');
    }

    // update course
    function update_course(Request $request,$id)
    {
        $course=course::find($id);
        $course->title=$request->title;
        $course->description=$request->description;
        $course->price=$request->price;
        $course->discount_price=$request->dis_price;
        
        $course->category=$request->category;
        // store image
        // store image in variable
        $image=$request->image;
        if($image)
        {

        
        // give unique name
        $imagename=time().'.'.$image->getClientOriginalExtension();
        // move to the file
        $request->image->move('course_picture',$imagename);
        // insert in database
        $course->image=$imagename;
        }
        
        $course->save();
        return redirect()->back()->with('message','Course Updated Successfully');
    }

    public function show_course()
    {
        $show_course=Course::all();
        return view('admin.view_course',compact('show_course'));
    }
    // edit course

    public function edit_course($id)
    {
        $course=course::find($id);
        $category=category::all();
        return view('admin.edit_course',compact('course','category'));
    }
    public function upload_video($id)
    {
        $video_id=$id;
        $data=video::select('*')
        ->where([
            ['course_id','=',$id] 
        ])->get();
        // dd($data);
        
        return view('admin.upload_video',compact('video_id','data'));
    }

    // upload video
    public function upload_course_video(Request $request)
    {
        $video=new video();

        $file=$request->video;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->video->move('course_video',$filename);
        $video->video=$filename;


        $video->title=$request->title;
        $video->description=$request->desc;
        $video->course_id=$request->corse_id;

        // $video=$request->video;
        
        //         // give unique name
        // $videoname=time().'.'.$video->getClientOriginalExtension();
        // // move to the file
        // $request->video->move('course_video',$videoname);
        // // insert in database
        // $video->video=$videoname;
        $video->save();
        return redirect()->back()->with('message','Video Upload Successfully');
    }
    // adding course in cart
    
}