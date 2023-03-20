<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4c44cda4ea.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <style>
      .div_center{
        text-align: center;
        padding-top: 40px;
        color: white;
      }
      .h2_font{
        font-size: 40px;
        padding-bottom: 40px;
      }
      .input_color{
        color: black;
      }
      .div_center_form{
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
      .images{
        margin: auto;
      }
    </style>
</head>
  <body>
    <div class="row min-vh-100">
        {{-- sidebar --}}
        @include('admin.sidebar')
        <div class="col-md-10">
          {{-- navbar --}}
           @include('admin.navbar') 
           @if(session()->has('message'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{session()->get('message')}}
                <button type="button" class="btn-close btn-success" data-bs-dismiss="alert" aria-label="Close">X</button>
              </div>
              @endif
            <div class="row min-vh-100 bg-black">
              
              
              <div class="div_center">
                <h2 class="h2_font">Update Course</h2>
                <form action="{{url('update_course',$course->id)}}" method="POST" enctype="multipart/form-data" class="col-md-5 div_center_form">
                  @csrf
                  <div class="mb-3">
                    <label for="title" class="form-label">Course Title</label>
                    <input type="text" class="form-control" name="title" id="" placeholder="Write course title" required value="{{$course->title}}">
                  </div>
                  <div class="mb-3">
                    <label for="description" class="form-label">Course Description</label>
                    <input type="text" class="form-control" name="description" id="" placeholder="Write course description" required value="{{$course->description}}">
                  </div>
                  <div class="mb-3">
                    <label for="price" class="form-label">Course Price</label>
                    <input type="number" min="0" class="form-control" name="price" id="" placeholder="Course Price" required value="{{$course->price}}">
                  </div>
                  <div class="mb-3">
                    <label for="Price" class="form-label">Discount Price</label>
                    <input type="number" min="0" class="form-control" name="dis_price" id="" placeholder="Write if any discount available" value="{{$course->discount_price}}">
                  </div>
                  <div class="mb-3">
                    <label for="Category" class="form-label">Category</label>
                    <select class="form-select" name="category" required aria-label="Default select example">
                      <option value="" selected="">Add a category here</option>
                      @foreach ($category as $category)
                      <option value="{{$category->category_name}}" >{{$category->category_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Current Course Image</label>
                    <img class="images" height="100" width="100" src="/course_picture/{{$course->image}}" alt="">
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Change Course Image Here</label>
                    <input  type="file" name="newimage" id="formFile">
                  </div>
                  
                  
                  <button type="submit" class="btn btn-primary">Update</button>
                </form>
              </div>
              
                             
            </div>
              
          </div>
    </div> 
        <div class="container-fluid bg-dark text-light ">
            <p class="text-center mb-0">Copyright E-Learning 2023 | All right reserved</p>
        </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>