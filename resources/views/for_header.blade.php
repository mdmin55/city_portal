
@extends('loyouts.app')
@section('for_header')
<div class="h-60 items-center flex flex-row justify-evenly bg-no-repeat bg-cover" style="background-image: url('./build/img/1.png') ">
<div class="flex items-center  ">
            <img src='./build/img/logo white.png' class='m-5 w-36'> 
            <h1 class="text-white text-3xl font-bold">Сделаем <br>лучше вместе!</h1>
</div>
<div class="text-white text-3xl flex flex-col items-center">
    <h1>Решенные проблемы</h1>
    <p class="font-bold">454</p>
</div>
   
</div>
@endsection
@section('header')
    @include('header')
@endsection


