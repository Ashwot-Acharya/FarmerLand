<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<nav class="p-3 bg-blue-900  text-white flex justify-between mb-6 " >

<ul>
    <div class=" text-center">
   <a href="{{route('home')}}"> <h1 class="text-2xl bold font-serif "> Farmer's land
   <span class="material-icons">
agriculture
</span>
   </h1> </a>
</div>
</ul>
<ul>
    <div class="flex">
        @if (auth()->user())
<li>
<div class="dropdown">
  <button class="font-serif dropbtn">{{auth()->user()->username}}</button>
  <div class="dropdown-content pl-3 ">
    <a href="{{route('profile')}}">Dashboard</a>
    <form action="{{route('logout')}}" method="post"> @csrf <button class="bla"> Logout </button> </form>
    <a href="{{route('changepwd')}}"> Change password</a>
  </div>
</div>
</li>

<li><div class="p-3">  <a class="text-white font-serif py-2 px-4 hov rounded-full" href="/post"> <span class="material-icons">
create
</span> </a> </div></li>

        @else
        <li><div class="p-3">  <a class="text-white font-serif py-2 px-4 hov rounded-full" href="/login"> Login </a> </div></li>
    <li><div class="p-3"><a class="text-white font-serif py-2 px-4 hov rounded-full" href="/register"> registration </a> </div></li>

        @endif

</div>
</ul>
</nav>
<style>
.dropbtn {
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}
.bla{
    padding:12px 16px;;
    color:black;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: lightgray;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  display: block;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown:hover .dropbtn {
  background-color: red;
}

.hov:hover{
    background-color:red;
}

</style>

@yield('content')

</body>
</html>
