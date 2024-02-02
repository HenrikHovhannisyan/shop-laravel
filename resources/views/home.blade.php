@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="container">
        <section id="banner">
            <button>MEN'S NEW ARRIVALS</button>
        </section>
        <section id="gift">
            <h2>THE GIFT GUIDE</h2>
            <p>UNWRAP LUXURY.</p>
            <div class="gift_container">
                <a href="#">
                    <img src="../img/gift.webp" alt="">
                    <p class="text-dark"><u>gifts for him</u></p>
                </a>
            </div>
        </section>
        <section id="shop">
            <h2>COS ATELIER 2023</h2>
            <a href="#">
                <p class="text-dark mt-3">SHOP MEN</p>
            </a>
            <a href="">
                <img src="../img/man.webp" alt="">
            </a>
        </section>
        <section id="more">
            <h2>More to explore</h2>
            <div class="d-flex justify-content-center align-items-center">
                <a href="#" class="border border-dark ps-3 pe-3 m-1">
                    <p class="text-dark">Men's Outerwear</p>
                </a>
                <a href="#" class="border border-dark ps-3 pe-3 m-1">
                    <p class="text-dark">Men's Knitwear</p>
                </a>
            </div>
        </section>
    </div>
    @include('layouts.footer')
@endsection

@section('script')
@endsection
