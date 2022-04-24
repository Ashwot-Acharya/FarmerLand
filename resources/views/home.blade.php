<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <title>Farmer Land</title>
</head>
<body>
    @extends('layout')
<div class="swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide "style="overflow:hidden; height: 300px;"><img src="{{asset('media/two.jpg')}}" class="w-full" > </div>
    <div class="swiper-slide" style="overflow:hidden; height: 300px;" ><img src="{{asset('media/one.jpg')}}" class="w-full" ></div>
    <div class="swiper-slide" style="overflow:hidden; height: 300px;"><img src="{{asset('media/three.jpg')}}" class="w-full"></div>
    ...
  </div>
  <div class="swiper-pagination"></div>

  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <div class="swiper-scrollbar"></div>
</div>
<style>
    .swiper-slide img {
  position: relative;
  top: 50%;
  transform: translateY(-50%);
}
    </style>
<script>
    const swiper = new Swiper('.swiper', {


  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

    </script>
    @section('content')
    <div>
<p class="p-3 text-2xl "> Community Posts </p>
<div class="flex  justify-center">

    <div class="grid grid-cols-3 gap-4 " >
    @if ($posts->count())
        @foreach ($posts as $post)

            <div class="mb-4 p-4 bg-gray-100 rounded " >
            <a href="" class="font-serif font-weight-bold text-xl font-italic" > {{$post->user->username}} </a>
            <br>
            <span class=" p-3 text-blue-900  text-sm"> {{$post->created_at->toTimeString()}} </span>
            <div class="prose prose-lg">
            {!!$post->Text!!}
            </div>

            @if ($post->media != 'no_value')
            @if (($post->media)[-3] != 'm')
                <div class="align-content-center">
             <img style="height: 400px;"  src="{{ asset('media/' . $post->media)}}">
        </div>
            @elseif ($post->media[-1]=='4')
            <div class="align-content-center">
            <video width="400px" controls>
            <source src="{{asset('media/' . $post->media)}}" type="video/mp4">
            Your browser does not support the video .
         </video>
        </div>
         @else
         <div class="align-content-center">
         <audio class="p-3" controls>
         <source src="{{asset('media/' . $post->media)}}" type="audio/mp3">

        </audio>
</div>
         @endif
            @endif


            </div>

         @endforeach
          <div class="p-3 w-full rounded-full ">  {{ $posts->links('pagination::tailwind') }} </div>
    @else
    Farmers land is a website that focuses on creating a beautiful community for the farmers all around the globe. Farmers can share videos, audio , pictures , solve problems and learn new technology to help improve their agriculture etc.    @endif
</div>
</div>




</div>
@endsection
</body>
</html>
