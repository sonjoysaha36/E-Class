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
      .resize{
        width: 80px;
        height: 80px;
        border-radius: 50%;
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
              <div>
                <table class="table table-dark table-striped align-middle">
                  <tr>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>Course Title</th>
                    <th>Course Price</th>
                    <th>image</th>
                    <th>Action</th>
                  </tr>
                  @foreach ($data as $data)
                  @if ($data->payment_status == 0)
                  <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->course_title}}</td>
                    <td>$ {{$data->price}}</td>
                    <td>
                      <img class="resize" src="/course_picture/{{$data->image}}" alt="">
                    </td>
                    <td><div class="d-flex"><a href="{{url('approve_request',$data->id)}}" class="btn btn-primary">Approve</a>
                      
                    </div>
                    <a href="{{url('delete_request',$data->id)}}" class="btn btn-success mt-2">Remove</a></td>
                  </tr>
                  @endif
                  @endforeach
                </table>
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