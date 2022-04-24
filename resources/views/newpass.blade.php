<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layout')
    @section('content')
<div class="sign-up-htm">
<form action="{{route('changepwd')}}" method="post">
            @if (session('status'))
            <div class="p-4"> <div id='session-s' class="text-white bg-red-700 w-full px-3 py-3 p-4 w-full rounded border-2">{{session('status')}}</div></div>
            @endif

            @csrf

            <div class="p-4">
                <label for="oldpassword" class="sr-only" > Old password</label>
                <input type="password" name="oldpassword" id="oldpassword" placeholder="old password" value="{{old('password')}}" class=" bg-gray-200 w-full p-4 rounded-lg border-2" />
            </div>
            @error('oldpassword')
            <div class="pl-4 text-red-500 text-sm">
                {{$message}}
            </div>

            @enderror

            <div class="p-4">
                <label for="password" class="sr-only" >New password</label>
                <input type="password" name="newpassword" id="newpassword" placeholder="new password" value="" class="bg-gray-200 w-full p-4 rounded-lg border-2" />

            </div>

            @error('password')
            <div class="text-sm text-red-500 pl-4" >
                {{$message}}
            </div>
            @enderror

            <div class="p-4">
                <label for="password" class="sr-only" >New password</label>
                <input type="password" name="password_confirmation" id="newpassword" placeholder="new password" value="" class="bg-gray-200 w-full p-4 rounded-lg border-2" />

            </div>

            @error('password')
            <div class="text-sm text-red-500 pl-4" >
                {{$message}}
            </div>


            @enderror

            <div class="p-4">
                <button type="submit" class="bg-blue-400 px-3 py-3 p-4 w-full rounded text-white"> Change  </button>
            </div>



        </form>
</div>
@endsection
</body>
</html>
