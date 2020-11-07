@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="">
        @foreach($stocks as $stock)
            <div class="mx-auto" style="max-width:1200px">
                <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;"> {{ $stock -> name }}</h1>
                    <img src="/image/{{ $stock->imgpath }}" alt="" class="mx-auto d-block"style="width: 800px; height: 400px; " >
                        <div class="">
                            <div class=" flex-row flex-wrap mycart_box">
                                {{ $stock -> fee }}円<br>
                                {{ $stock->detail }}<br>
                            </div>
                        </div>
                    <form method="post" action="mycart">
                        @csrf
                        <input type="hidden" name="stock_id" value="{{ $stock->id }}">
                        <div class="text-center">
                            <button type="submit" class=" btn btn-primary btn-lg"> カートに入れる</button>
                        </div>
                    </form>
                <a class="text-center" href="/">商品一覧へ</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
