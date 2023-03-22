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
      #Cart{
      fill:green;
      }
      .image_size{
        height: 150px;
      }
      .custom_height{
        min-height:100px;
      }
    </style>
  </head>
  <body>
    {{-- first nav bar --}}
    @include('home.header')
    {{-- Slider --}}
    <div class="container">
      <div class="jumbotron jumbotron-fluid bg-primary-subtle">
        <div class="container">
          <h1 class="display-4 fw-bold py-3">My learning</h1>
        </div>
      </div>
      <div class="row">
        @foreach ($enroll as $enroll)
        
        <div class="col-md-3 mt-3">
          <a href="{{url('/playlist',$enroll->course_id)}}">
          <div class="card" style="width: 18rem;">
            <img src="/course_picture/{{$enroll->image}}" class="card-img-top image_size" alt="...">
            <div class="card-body custom_height">
              <p class="card-text ">{{$enroll->course_title}}</p>
            </div>
          </div>
        </a>
        </div>
      
        @endforeach
        
    </div>

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
