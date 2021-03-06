<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Document</title>
</head>
<body class="">
@extends('layout')
@section('content')
<div class="flex p-4 justify-center">
    <div class="w-4/12 bg-blue-200 p-3 rounded-lg" >
        <h2 class="text-center text-2xl p-3 "> Login</h2>
            @if (session('status'))
            <div class="p-4">
            <div class="text-white bg-red-700 w-full px-3 py-3 p-4 w-full rounded border-2">

                    {{session('status')}}
                    </div>
</div>
            @endif
        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="p-4">
                <label for="username" class="sr-only" > usename</label>
                <input type="text" name="username" id="username" placeholder="Username" value="{{old('username')}}" class=" bg-gray-200 w-full p-4 rounded-lg border-2" />
            </div>
            @error('username')
            <div class="pl-4 text-red-500 text-sm">
                {{$message}}
            </div>

            @enderror

            <div class="p-4">
                <label for="password" class="sr-only" > password</label>
                <input type="password" name="password" id="password" placeholder="Enter password" value="" class="bg-gray-200 w-full p-4 rounded-lg border-2" />

            </div>

            @error('password')
            <div class="text-sm text-red-500 pl-4" >
                {{$message}}
            </div>

            @enderror

            <div class="p-4">
                <button type="submit" class="bg-blue-400 px-3 py-3 p-4 w-full rounded text-white"> Login </button>
            </div>



        </form>
        </div>

</div>
@endsection
</body>
</html>
