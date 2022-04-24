<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="http://cdn.ckeditor.com/4.17.1/basic/ckeditor.js"></script>
    <title>Make Post</title>
</head>
<body>
    @extends('layout')
    @section('content')
<div class="flex  justify-center">
    <div class="w-8/12 p-3 bg-white  rounded-lg" >
     <div class="text-center center" >
     </h3> Message</h3>
     <form action="{{route('post')}}"  class="p-3 bg-violet-300 " enctype="multipart/form-data"  method="post" >
         @csrf
       <div class="p-3">  <input type = "text" class=" p-3 roundedc  w-full" name="category" placeholder="Category:Like Technology, horticulture etc. (only one)">
                @error('title')
                <p class=" small-text red-200 "> This feild is required </p>
                @enderror
</div>
         <textarea name="post"></textarea>
                <script>
                var editor = CKEDITOR.replace('post');
                </script>
                @error('post')
                    <p class=" small-text red-200 "> This feild is required </p>
                @enderror
                <br>

                <input type="file" class="mb-4  p-3 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded placeholder="Images, videos or audio" name = "image"  >
                @error('image')
                <p class=" small-text red-200 "> error </p>
                @enderror
                <br>


                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"> post </button>
        </form>
     </div>

    </div>

</div>
@endsection
</body>
</html>
