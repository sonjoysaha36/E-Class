<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E-Class</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <script
      src="https://kit.fontawesome.com/4c44cda4ea.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="home/css/style.css">
    <style>
     .center{
       margin: auto;
       width: 50%;
       text-align: center;
       padding: 30px;
     }
     .t_head{
       border: 1px solid gray;
     }
     .th_deg{
       font-size: 30px;
       padding: 5px;
       background: skyblue;
     }
     #Cart{
      fill:green;
      }

    </style>
  </head>
  <body>
    {{-- first nav bar --}}
    @include('home.header')
    @if(session()->has('message'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="btn-close btn-success" data-bs-dismiss="alert" aria-label="Close">X</button>
              </div>
              @endif
    {{-- Slider --}}
    <div class="center">
      <table>
        <tr class="t_head">
          <th class="t_head th_deg">Course Title</th>
          <th class="t_head th_deg">Course Description</th>
          <th class="t_head th_deg">Price</th>
          <th class="t_head th_deg">image</th>
          <th class="t_head th_deg">Action</th>
        </tr>
        @foreach ($cart as $cart)
            
        
        <tr class="t_head">
          <td class="t_head">{{$cart->course_title}}</td>
          <td class="t_head">{{$cart->course_description}}</td>
          <td class="t_head">${{$cart->price}}</td>
          <td class="t_head"><img src="/course_picture/{{$cart->image}}" alt=""></td>
          <td class="t_head">
            {{-- <a href="{{url('/remove_cart',$cart->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to remove this course ?')">Remove</a> --}}
            <div class="d-flex flex-column">
              <a href="{{url('enroll_course',$cart->id)}}" class="btn btn-outline-primary btn-sm mt-2">Enroll Now</a>
              {{-- <button class="btn btn-outline-primary btn-sm mt-2" type="button" href="{{url('add_cart',$course->id)}}">Add to Cart</button> --}}
              <a href="{{url('/remove_cart',$cart->id)}}" class="btn btn-outline-danger btn-sm mt-2" onclick="return confirm('Are you sure to remove this course ?')">Remove</a></td>
        </tr>
        @endforeach
      </table>
    </div>

    {{-- footer --}}
    @include('home.footer')
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
