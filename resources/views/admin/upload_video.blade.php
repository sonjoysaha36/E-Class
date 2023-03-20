{{-- <h1>Upload video</h1>
<h1>{{$video_id}}</h1> --}}

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
                <h2 class="h2_font">Upload video</h2>
                <form action="{{url('upload_course_video')}}" method="POST" enctype="multipart/form-data" class="col-md-5 div_center_form">
                  @csrf
                  <div class="mb-3">
                    <label for="title" class="form-label">Video Title</label>
                    <input type="text" class="form-control" name="title" id="" placeholder="Write video title" required>
                  </div>
                  <div class="mb-3">
                    <label for="title" class="form-label">Video Description</label>
                    <input type="text" class="form-control" name="desc" id="" placeholder="Write Description Here" required>
                  </div>
                  <input type="hidden" id="postId" name="corse_id" value="{{$video_id}}" />
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Your Video Here</label>
                    <input class="form-control" type="file" name="video" required id="formFile">
                  </div>
                  <button type="submit" class="btn btn-primary">Upload</button>
                </form>
              </div>
              <div>
                <table class="table table-dark table-striped">
                  <tr>
                    <th>Video Title</th>
                    <th>Video Description</th>
                    <th>Video</th>
                    <th>Action</th>
                  </tr>
                  @foreach ($data as $data)
                  <tr class="align-middle">
                    <td>{{$data->title}}</td>
                    <td>{{$data->description}}</td>
                    
                    <td>
                      {{-- <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" controls="true" src="/course_video/{{$data->video}}" allowfullscreen></iframe>
                      </div> --}}
                      <video width="200px" height="150px" class="video-fluid z-depth-1" loop controls muted>
                        <source src="/course_video/{{$data->video}}" type="video/mp4" />
                      </video>
                    </td>
                    {{-- <td>{{$data->video}}</td> --}}
                    <td><a onclick="return confirm('Are You Sure To Delete This')" class="btn btn-danger" href="{{url('delete_category',$data->id)}}">Delete</a></td>
                  </tr>
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