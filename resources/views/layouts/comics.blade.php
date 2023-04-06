@extends('layouts.app')

<!--assegno il valore Comics al titolo della pagina -->
@section('page-title','Comics')

@section('content')
<section class="show-comics">
    <div class="min-container">
        <div class="card-comics action">
            <img src="{{ $thumb }}"  alt="img-Comics">
        </div>
    </div>
</section>
<section class="info-comics">
    <div class="min-container">
        <div class="row">
            <div class="col-8">
                <h1 class="title">
                    {{ $title }}
                </h1>
                <div class="row price">
                    <div class="col-9">
                        <p class="price"> 
                           <span class="lightgreen">U.S. Price:</span> {{ $price }}
                        </p>
                        <h3 class="lightgreen">available</h3>
                    </div>
                    <div class="col-3">
                        <button class="check">Check Availabity</button>
                    </div>
                </div>
                <p class="descrtion">
                    {{ $description }}
                </p>
            </div>
            <div class="col-4">
                <h4 class="title-adv">advertisement</h4>
                <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="adv">
            </div>
        </div>
    </div>
</section>
<section class="info-author">
    <div class="min-container">
        <div class="row">
            <div class="col-6">
                <div class="card talent">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list_title"><h3>Talent</h3></li>
                        <li class="list-group-item info">
                            <h4 class="col-2">Art by</h4>
                            <p class="col-8">
                                @foreach ($artists as $artist)
                                {{ $artist }}
                                @endforeach
                            </p>
                        </li>
                        <li class="list-group-item info">
                            <h4 class="col-2">Written by</h4>
                            <p class="col-8">
                                @foreach ($writers as $writer)
                                {{ $writer }}
                                @endforeach
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="card speces">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list_title"><h3>specs</h3></li>
                        <li class="list-group-item info">
                            <h4 class="col-2">Series:</h4>
                            <p class="col-8 serie">{{ $series }}</p>
                        </li>
                        <li class="list-group-item info">
                            <h4 class="col-2">U.S. Price:</h4>
                            <p class="col-8">{{ $price }}</p>
                        </li>
                        <li class="list-group-item info">
                            <h4>On sale date:</h4>
                            <p class="col-8">{{ $sale_date }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection