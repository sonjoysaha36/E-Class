<div class="container">
  <h1 style="font-size: xx-large;
  font-weight: bold;">All Courses</h1>
  <div class="row gx-5 mt-3">
    @foreach ($course as $course)
      <div class="col-md-6 mb-3">
          <div class="row p-2 bg-white border rounded">
              <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="/course_picture/{{$course->image}}"></div>
              <div class="col-md-6 mt-1">
                  <h5>{{$course->title}}</h5>
                  <div class="d-flex flex-row">
                      <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                  </div>
                  <div class="mt-1 mb-1 spec-1">{{substr($course->description,0,115) }}...</div>
                  
              </div>
              <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                  <div class="d-flex flex-row align-items-center">
                      <h4 class="mr-1">${{$course->discount_price}}</h4><span class="strike-text">${{$course->price}}</span>
                  </div>
                  <h6 class="text-success">Including all vat</h6>
                  <div class="d-flex flex-column mt-4">
                    <a href="" class="btn btn-outline-primary btn-sm mt-2">Details</a>
                    {{-- <button class="btn btn-outline-primary btn-sm mt-2" type="button" href="{{url('add_cart',$course->id)}}">Add to Cart</button> --}}
                    <a href="{{url('add_cart',$course->id)}}" class="btn btn-outline-primary btn-sm mt-2">Add to Cart</a>
                  </div>
              </div>
          </div>
          
      </div>
      @endforeach
    </div>
    <p class="text-end mt-2"><a class="text-decoration-none text-dark" href="#">View all >></a></p> 
    </div>
  </div>

</div>
