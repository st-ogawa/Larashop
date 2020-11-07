@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:700px">
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">
            {{ Auth::user()->name }}さんのカートの中身</h1>

           <div class="">
            <p class="text-center">{{ $message ??'' }}</p>
               <div class="d-flex flex-row flex-wrap ">
                    @if($my_carts->isNotEmpty())
                        @foreach($my_carts as $my_cart)
                            <div class="mycart_box ">
                                    {{ $my_cart->stock->name}}  <br>
                                    {{ number_format($my_cart->stock->fee) }}円 <br>
                                        <img src="/image/{{ $my_cart->stock->imgpath }}" alt="" class="incart" style="width:700px">
                                        <br>


                                        <form method="post" action="/cartdelete">
                                            @csrf
                                            <input type="hidden" name="stock_id" value="{{ $my_cart->stock->id }}">
                                            <input type="submit" value="カートから削除する">
                                        </form>
                            </div>
                        @endforeach
                        <div class="text-center" style="margin:0 auto;">
                            個数：{{ $count }}個<br>
                            <p style="font-size:1.2em; font-weight:bold;">合計金額：{{ number_format($sum) }}円</p>
                            <form method="post" action="/checkout">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-lg text-center buy-btn">購入する</button>
                            </form>
                        </div>
                    @else
                        <p class="text-center" style="margin:0 auto;">カートは空です。</p>
                    @endif
               </div>
               <a href="/">商品一覧へ</a>
           </div>
       </div>
   </div>
</div>
@endsection

