@extends('layouts.app')

<!--assegno il valore Comics al titolo della pagina -->
@section('page-title','Comics')

@section('content')
<section class="show-comics">
    <div class="min-container">
        <div class="card-comics action">
            <img src="https://m.media-amazon.com/images/I/91ytkCTqkEL.jpg" alt="img-Comics">
        </div>
    </div>
</section>
<section class="info-comics">
    <div class="min-container">
        <div class="row">
            <div class="col-8">
                <h1 class="title">
                    Action Comics #1000: The Deluxe Edition
                </h1>
                <div class="row price">
                    <div class="col-9">
                        <p class="price">U.S. Price:$19.99</p>
                        <h3>available</h3>
                    </div>
                    <div class="col-3">
                        <button>Check Availabity</button>
                    </div>
                </div>
                <p class="descrtion">
                    The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!
                </p>
            </div>
            <div class="col-4">
                <h4>advertisement</h4>
                <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="adv">
            </div>
        </div>
    </div>
</section>
<section class="info-author">
    <div class="min-container">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h3>Talent</h3></li>
                        <li class="list-group-item">
                            <h4>Art by</h4>
                            <p></p>
                        </li>
                        <li class="list-group-item">
                            <h4>Written by</h4>
                            <p>
                            Brad Meltzer, Tom King, Scott Snyder, Geoff Johns, Brian Michael Bendis, Paul Din, Louise Simonson, Richard Donner,Marv Wolfman, Peter J. Tomasi, Dan Jurgens,Jerry Siegel, Paul Levitz
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><h3>specs</h3></li>
                        <li class="list-group-item">
                            <h4>Series</h4>
                            <p>Action Comics</p>
                        </li>
                        <li class="list-group-item">
                            <h4>U.S. Price:</h4>
                            <p>$19.99</p>
                        </li>
                        <li class="list-group-item">
                            <h4>On sale date:</h4>
                            <p>20-oct-2018</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection