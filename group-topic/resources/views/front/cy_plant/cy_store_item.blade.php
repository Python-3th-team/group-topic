@extends('layouts/footer')


@section('css')

    <link rel="stylesheet" href="{{asset('css/cy_store.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>千暘植務店</title>

@endsection

@section('content')
    <div class="shop_store">
        <header>
            <div class="bg-color">
                <div class="bg-bar"></div>
                <div class="cy_logo">
                    <a href="/cy_store">
                        <img src="./img/cy_plant/cy_logo_big.png" alt="">
                    </a>
                </div>
                <div class="cy_types" >
                    <div class="cy_type">種苗</div>
                    <div class="cy_type">觀葉</div>
                    <div class="cy_type">多肉</div>
                    <div class="cy_type">盆栽</div>
                </div>
                <div class="shimmer_logo">
                    <a href="/sc_store">
                        <img src="./img/sc_shop/sc_logo_big.png" alt="">
                    </a>
                </div>
                <div class="deco_line">
                    <a href="/shop_store">
                        <span>ALL.</span>
                    </a>
                </div>
                <div class="deco_line2">

                </div>
            </div>
        </header>
        <main>
            <div class="item container">
                <div class="item_img">
                    <div class="img">
                        <img src="{{asset('/storage/'.$product->img)}}" alt="">
                        {{-- <img src="/stroage/.{{$product->img}}" alt=""> --}}
                    </div>
                </div>
                <div class="item_content">
                    <div class="white_bar"></div>
                    <span>品名</span>
                    <span class="product_title">{{$product->title}}</span>
                    <div class="white_bar"></div>
                    <span>介紹</span>
                    <span class="item_intro">{!!$product->content!!}</span>
                    <div class="white_bar"></div>
                    <div class="item_pay">
                        <div class="qty">
                            <span>數量</span>
                            {{-- <input type="number" class=".qty_input" value="1" min="0"> --}}
                            <span class=".qty_input">10</span>
                            <span>個</span>
                            <div class="arrow">
                                <img src="{{asset('img/shop_store/up-arrow.svg')}}" alt="">
                                <img src="{{asset('img/shop_store/down-arrow.svg')}}" alt="">
                            </div>
                        </div>
                        <div class="price">
                            <span>單價</span>
                            <span>{{$product->price}}元</span>
                        </div>
                    </div>
                    <div class="white_bar"></div>
                    <button class="btn btn-primary">加入購物車</button>
                </div>
            </div>
        </main>
    </div>
@endsection


@section('js')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@endsection
