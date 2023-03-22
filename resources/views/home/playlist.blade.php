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
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap");

      * {
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;
        text-transform: capitalize;
      }

      .body_playlist {
        background-color: gray;
        padding: 5px;
      }

      .container_playlist {
        max-width: 1200px;
        margin: 20px auto;
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start;
        gap: 20px;
      }

      .container_playlist .main-video-container_playlist {
        flex: 1 1 700px;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        padding: 15px;
      }

      .container_playlist .main-video-container_playlist .main-video {
        margin-bottom: 7px;
        border-radius: 5px;
        width: 100%;
      }

      .container_playlist .main-video-container_playlist .main-vid-title {
        font-size: 20px;
        color: #444;
      }

      .container_playlist .video-list-container_playlist {
        flex: 1 1 350px;
        height: 470px;
        overflow-y: scroll;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        padding: 15px;
      }

      .container_playlist .video-list-container_playlist::-webkit-scrollbar {
        width: 10px;
      }

      .container_playlist .video-list-container_playlist::-webkit-scrollbar-track {
        background-color: #fff;
        border-radius: 5px;
      }

      .container_playlist .video-list-container_playlist::-webkit-scrollbar-thumb {
        background-color: #444;
        border-radius: 5px;
      }

      .container_playlist .video-list-container_playlist .list {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 10px;
        background-color: #eee;
        cursor: pointer;
        border-radius: 5px;
        margin-bottom: 10px;
      }

      .container_playlist .video-list-container_playlist .list:last-child {
        margin-bottom: 0;
      }

      .container_playlist .video-list-container_playlist .list.active {
        background-color: #444;
      }

      .container_playlist .video-list-container_playlist .list.active .list-title {
        color: #fff;
      }

      .container_playlist .video-list-container_playlist .list .list-video {
        width: 100px;
        border-radius: 5px;
      }

      .container_playlist .video-list-container_playlist .list .list-title {
        font-size: 17px;
        color: #444;
      }

      @media (max-width: 1200px) {
        .container_playlist {
          margin: 0;
        }
      }

      @media (max-width: 450px) {
        .container_playlist .main-video-container_playlist .main-vid-title {
          font-size: 15px;
          text-align: center;
        }

        .container_playlist .video-list-container_playlist .list {
          flex-flow: column;
          gap: 10px;
        }

        .container_playlist .video-list-container_playlist .list .list-video {
          width: 100%;
        }

        .container_playlist .video-list-container_playlist .list .list-title {
          font-size: 15px;
          text-align: center;
        }
      }
      
    </style>
  </head>
  <body>
    {{-- first nav bar --}}
    @include('home.header')
    <div class="jumbotron jumbotron-fluid bg-primary-subtle">
      <div class="container">
        <h1 class="display-4 fw-bold py-3">{{$course_title}}</h1>
      </div>
    </div>
    
    {{-- playlist --}}
  <div class="body_playlist">
    <div class="container_playlist">
      <div class="main-video-container_playlist">
        <video src="/course_video/welcome.mp4" loop controls class="main-video"></video>
        <h3 class="main-vid-title">Welcome to this course</h3>
      </div>
      <div class="video-list-container_playlist">
        @foreach ($video as $video)
        <div class="list active">
          <video src="/course_video/{{$video->video}}" class="list-video"></video>
          <h3 class="list-title">{{$video->title}}</h3>
        </div>
        @endforeach
        
      </div>
    </div>
  </div>

    <!-- custom js file link  -->
    <script>
      let videoList = document.querySelectorAll(".video-list-container_playlist .list");

videoList.forEach((vid) => {
    vid.onclick = () => {
        videoList.forEach((remove) => {
            remove.classList.remove("active");
        });
        vid.classList.add("active");
        let src = vid.querySelector(".list-video").src;
        let title = vid.querySelector(".list-title").innerHTML;
        document.querySelector(".main-video-container_playlist .main-video").src = src;
        document.querySelector(".main-video-container_playlist .main-video").play();
        document.querySelector(
            ".main-video-container_playlist .main-vid-title"
        ).innerHTML = title;
    };
});
    </script>
    {{-- footer --}}
    @include('home.footer')
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
