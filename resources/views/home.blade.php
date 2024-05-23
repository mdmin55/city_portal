@extends('loyouts.app')
@section('title')
Главная страница
@endsection

@section('for_header')
    @include('for_header')
@endsection

@section('header')
    @include('header')
@endsection

@section('home')
<div class="flex flex-col items-center gap-y-2 m-3">
    <h1 class="text-center text-4xl mt-5">Мы готовы решить проблемы нашего города!</h1>
     <p class="text-2xl">**Оставлять заявки можно только после входа в личный кабинет**</p>
</div>
 <h1 class="text-4xl font-bold text-center mt-20">Недавно решенные проблемы</h1>
<div class="flex flex-col items-center  mt-16">
   <div class="flex flex-row  mb-12  ">
        <div class=" flex flex-col mr-16 ">
            <div class="img_hover w-96 h-96 bg-cover"></div>
            <div class=" text-xl mt-3 ">Благоустройство парка “Дружба” <br> 07.2020 - 08.2020 <br> “Благоустройство парков”</div>
        </div>
        <div class=" flex flex-col ">
            <div class="img_hover2 w-96 h-96 bg-cover"></div>
            <div class=" text-xl mt-3 ">Благоустройство парка “Дружба” <br> 07.2020 - 08.2020 <br> “Благоустройство парков”</div>
        </div>
   </div>
   <div class="flex flex-row gap-x-4">
        <div class=" flex flex-col mr-16">
        <div class="img_hover3 w-96 h-96 bg-cover"></div>       
             <div class=" text-xl mt-3 ">Благоустройство парка “Дружба” <br> 07.2020 - 08.2020 <br> “Благоустройство парков”</div>
        </div>
        <div class=" flex flex-col ">
        <div class="img_hover4 w-96 h-96 bg-cover"></div>
                    <div class=" text-xl mt-3  ">Благоустройство парка “Дружба” <br> 07.2020 - 08.2020 <br> “Благоустройство парков”</div>
        </div>
   </div>
</div>



@endsection

@section('footer')
    @include('footer')
@endsection