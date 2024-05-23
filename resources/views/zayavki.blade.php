
@extends('loyouts.app')

@section('header')
    @include('header')
@endsection

@section('zayavki')
<div class="flex flex-col place-items-center "> 
<div class="flex items-center mt-24 p-20 rounded-2xl flex-col bg-white w-2/4">
   <h1 class="text-center font-bold text-2xl mb-6">Создать заявку</h1>

    <input type="text"  class=" px-3 py-2 mb-6 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-2/4  rounded-md sm:text-sm focus:ring-1"  placeholder="Введите название заявки"/>
    <input type="text"  class=" px-3 py-2 mb-6 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-2/4  rounded-md sm:text-sm focus:ring-1"  placeholder="Введите описание"/>
    <select class=" px-3 py-2 mb-6 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-2/4  rounded-md sm:text-sm focus:ring-1">
	<option>Категория</option>
	<option>Благоустройства парков</option>
	<option>Ремонт дорог</option>
	<option>Ремонт детских плащадок</option>
</select>
<div class="mb-6">
    <input  type="file" class="block w-full text-sm text-slate-500
      file:mr-4 file:py-2 file:px-4
      file:rounded-xl file:border-0
      file:text-sm file:font-semibold
      file:bg-sky-50 file:text-sky-500
      hover:file:bg-sky-100
    "/>
</div>

    <button class=" bg-sky-600 p-3 rounded-xl text-white w-1/6 font-bold">Подать заявку</button>
</div>
</div>
@endsection
