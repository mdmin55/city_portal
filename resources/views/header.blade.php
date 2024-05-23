@extends('loyouts.app')



@section('header')

<div class="bg-white w-screen h-15 text-2xl">
    <div class="flex justify-between items-center">
        <div class="flex p-2 items-center">
        <a href="/">
  <img src="build/img/logo.png" class="w-12 m-2 ml-16 mr-6" alt="Logo">
</a>
            <!-- <a href="/gotovo_zayavki " class="mr-5 hover:text-sky-600 hover:underline">Решенные заявки </a>
            <a href="zayavki" class="hover:text-sky-600 hover:underline"> Заявки</a> -->
        
        <div class="flex justify-between">
            <a href="/vxod " class="mr-5 hover:text-sky-600 hover:underline">Вход</a>
            <a href="/registratia " class="mr-10  hover:text-sky-600 hover:underline">Регистрация</a>  
        </div></div>
    </div>
</div>
@endsection