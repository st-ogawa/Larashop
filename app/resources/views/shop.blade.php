@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
           <div class="">
               <div class="d-flex flex-row flex-wrap">

                    @foreach($stocks as $stock)

                        <div class="col-xs-6 col-sm-4 col-md-4">
                            <div class="mycart_box">
                                {{ $stock -> name }} <br>
                                <a href="products/{{$stock->id}}">
                                <img src="/image/{{ $stock->imgpath }}" alt="" class="incart" style="width:300px;hight:100px;" >
                                <br></a>

                            </div>
                        </div>
                    @endforeach
               </div>
               <div class="text-center" style="width:200px; margin:20px auto;">
               {{ $stocks->links() }}
           </div>
           <a class="text-center" href="/">商品一覧へ</a>
       </div>
   </div>
</div>
@endsection
