@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:700px">
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">
            {{ $message ??'' }}</h1>

           <div class="">
               <div class="d-flex flex-row flex-wrap ">
                    @foreach($data as $item)
                        <div class="mycart_box ">
                            {{ $item->name}}  <br>
                            {{ $item->fee}}円 <br>
                            <a href="products/{{$item->id}}">
                            <img src="/image/{{ $item->imgpath }}" alt="" class="incart" style="width:700px">
                            <br></a>
                        </div>
                    @endforeach
                </div>
               <a href="/">商品一覧へ</a>
           </div>
       </div>
   </div>
</div>

@endsection
