@extends('layouts.app')

<!--assegno il valore home al titolo della pagina -->
@section('page-title','Home')

@section('content')
    <section class="home">
        <div class="container black">
            <div class="main-content">
                <button class="series">Current series</button>
                <div class="comics">
                    <!-- @dump($comics) -->
                    @foreach ($comics as $comic)
                    <div class="card-comics">
                        <img src="{{ $comic['thumb'] }}" alt="img-Comics">
                        <h3 class="card-text">{{$comic['series']}}</h3>
                    </div>
                    @endforeach
                </div>
                <!-- fumetti -->
                <button class="load">Load more</button>
            </div>
        </div>

        <div class="container blue">
            <div class="shop-items">
                <ul class="items">
                    <li> 
                        <a href="#">
                            <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                            Digital comics
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                            Dc merchandise
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                            subscription
                        </a>
                    </li>
                    <li class="shop">
                        <a href="#">
                            <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                            comic shop locator
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                            dc power visa
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection