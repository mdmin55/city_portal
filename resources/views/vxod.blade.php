@extends('loyouts.app')
@section('header')
    @include('header')
@endsection

@section('title')
Авторизация
@endsection

@section('vxod')
<div class="flex flex-col place-items-center "> 
<div class="flex items-center mt-24 p-20 rounded-2xl flex-col bg-white w-2/4">
   <h1 class="text-center font-bold text-2xl mb-6">Авторизация</h1>

    <input type="text"  class=" px-3 py-2 mb-6 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-2/4  rounded-md sm:text-sm focus:ring-1"  placeholder="Введите логин"/>
    <input type="password"  class=" px-3 py-2 mb-6 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-2/4  rounded-md sm:text-sm focus:ring-1"  placeholder="Введите пароль"/>
<button class=" bg-sky-600 p-3 rounded-xl text-white w-1/6 font-bold">Вход</button>
</div>
</div>
@endsection