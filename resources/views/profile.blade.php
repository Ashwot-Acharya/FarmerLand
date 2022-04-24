
<head>
    <title>Profile </title>
    <link rel="stylesheet" href="{{asset('scss/dashboard.css')}}">
</head>

@extends('layout')

@section('content')

<!-- section 1  -->
<section id="three" class="form">
      <div class="login-wrap  bg-white p-6 ">
         <p class="text-xl font-weight-bold"> My Posts:</p>
          <div class="p-6">
        @if ($posts->count())
        @foreach ($posts as $post)
            <div class="mb-4 p-4 bg-gray-300 rounded " >
            <a href="" class="font-bold" > {{$post->user->username}} </a>
            <span class="text-sm"> {{$post->created_at->toTimeString()}} </span>
             {!!$post->Text!!}
             @if ($post->media != 'no_value')
            @if (($post->media)[-3] != 'm')
             <img style="width: 200px;"  src="{{ asset('media/' . $post->media)}}">
            @else
            <video width="200" height="240" controls>
            <source src="{{asset('media/' . $post->media)}}" type="video/mp4">
            Your browser does not support the video tag.
         </video>
         @endif
            @endif

             <br>

                <form action="{{url('/post/delete/').'/'.$post->id}}" method="post" >
                    @csrf
                <button type="submit" class="bg-gray-400 hover:bg-blue-300 text-white font-bold py-2 px-4 rounded-full"  > Delete </button>    </form>

            </div>

         @endforeach
         {{ $posts->links('pagination::tailwind') }}

    @else
    There are no posts
    @endif



</div>
</div>

</section>


@endsection


