<div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand fs-3 fw-bold" href="{{url('/redirect')}}">E-Class</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              ><i class="fa-brands fa-dropbox"></i>
              CATEGORIES
            </a>
            <ul class="dropdown-menu">
              @foreach ($data as $data)
                  
              
              <li><a class="dropdown-item" href="">{{$data->category_name}}</a></li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""
              ><i class="fa-solid fa-book"></i> EBOOK</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/my_learning')}}"
              ><i class="fa-solid fa-book-open"></i> My Learning</a
            >
          </li>
        </ul>
        {{-- <a href=""><img class="icon mx-2" src="/home/image/cart.png" alt=""></a> --}}
        <a type="button" class="btn btn-outline-light position-relative mx-2" href="{{url('show_cart')}}">
          {{-- <img class="icon" src="/home/image/cart.png" alt=""> --}}
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	        width="24px" height="24px" viewBox="0 0 40 36" style="enable-background:new 0 0 40 36;" xml:space="preserve">
          <g id="Page-1_4_" sketch:type="MSPage">
	        <g id="Desktop_4_" transform="translate(-84.000000, -410.000000)" sketch:type="MSArtboardGroup">
		      <path id="Cart" sketch:type="MSShapeGroup" class="st0" d="M94.5,434.6h24.8l4.7-15.7H92.2l-1.3-8.9H84v4.8h3.1l3.7,27.8h0.1
			    c0,1.9,1.8,3.4,3.9,3.4c2.2,0,3.9-1.5,3.9-3.4h12.8c0,1.9,1.8,3.4,3.9,3.4c2.2,0,3.9-1.5,3.9-3.4h1.7v-3.9l-25.8-0.1L94.5,434.6"
			    />
	        </g>
          </g>
          </svg>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            {{$carts}}
          </span>
        </a>
        
        <form class="d-flex" role="search">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success" type="submit">
            Search
          </button>
        </form>
      </div>
      @if (Route::has('login'))
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-2">
        @auth
        <li class="nav-item">
          <x-app-layout>
  
          </x-app-layout>
        </li>
        @else
      <li class="nav-item">
        <a class="btn btn-primary" id="logincss" href="{{ route('login') }}"
          >Login</a
        >
      </li>
      <li class="nav-item">
        <a class="btn btn-success" href="{{ route('register') }}"
          >Register</a
        >
      </li>
      @endauth
    </ul>

    @endif
    </div>
  </nav>
</div>
{{-- second nav bar --}}
<div>
  
  <nav class="navbar-danger bg-danger">
    <div class="container-fluid">
      <marquee direction="scroll">
      <ul class="nav d-flex justify-content-around">
        <li class="nav-item">
          <a class="nav-link text-white" href="">Lifestyle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="">Music</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="">Cooking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="">Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="">Design</a>
        </li>
        
      </ul>
    </marquee>
    </div>
  </nav>

</div>