<div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand fs-3 fw-bold" href="#">E-Class</a>
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
        </ul>
        <a href=""><img class="icon mx-2" src="/home/image/cart.png" alt=""></a>
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