@extends('layouts.app')

@section('content')

@include('inc.title')

<div class="destination-hero">
    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>
</div>

<div class="destination-list">
    <h1>Explore Some Of Our Great Destinations..</h1>

    <div class="list-container">
        <div class="list-item">
            <h5 class="list-title">Austria</h5>
            <ul>
                <li><a href="">Salzburg</a></li>
                <li><a href="">Vienna</a></li>
            </ul>

            <h5 class="list-title">Germany</h5>
            <ul>
                <li><a href="">Berlin</a></li>
                <li><a href="">Munich</a></li>
            </ul>

            <h5 class="list-title">Poland</h5>
            <ul>
                <li><a href="">Krakow</a></li>
            </ul>

            <h5 class="list-title">Baleric Islands</h5>
            <ul>
                <li><a href="">Ibiza</a></li>
                <li><a href="">Majorca</a></li>
                <li><a href="">Menorca</a></li>
                <li><a href="">Palma</a></li>
            </ul>

            <h5 class="list-title">Canary Islands</h5>
            <ul>
                <li><a href="">Furteventura</a></li>
                <li><a href="">Gran Canaria</a></li>
                <li><a href="">Lanzarote</a></li>
                <li><a href="">Las Palmas</a></li>
                <li><a href="">Tenerife</a></li>
            </ul>

            <h5 class="list-title">Channel Islands</h5>
            <ul>
                <li><a href="">Jersey</a></li>
            </ul>
        </div>


        <div class="list-item">
            <h5 class="list-title">Croatia</h5>
            <ul>
                <li><a href="">Dubrovnik</a></li>
                <li><a href="">Pula Area</a></li>
                <li><a href="">Split Area</a></li>
            </ul>

            <h5 class="list-title">Cyprus</h5>
            <ul>
                <li><a href="">Larnaca Area</a></li>
                <li><a href="">Paphos Area</a></li>
            </ul>

            <h5 class="list-title">Czech Republic</h5>
            <ul>
                <li><a href="">Prague</a></li>
            </ul>

            <h5 class="list-title">Denmark</h5>
            <ul>
                <li><a href="">Copenhagan</a></li>
            </ul>

            <h5 class="list-title">France</h5>
            <ul>
                <li><a href="">Cannes</a></li>
                <li><a href="">Cote d'Azur</a></li>
                <li><a href="">Monaco</a></li>
                <li><a href="">Nice</a></li>
                <li><a href="">Paris</a></li>
            </ul>

            <h5 class="list-title">Hungary</h5>
            <ul>
                <li><a href="">Budapest</a></li>
            </ul>
        </div>

        <div class="list-item">
            <h5 class="list-title">Italy</h5>
            <ul>
                <li><a href="">Florence</a></li>
                <li><a href="">Lake Garda</a></li>
                <li><a href="">Lucca</a></li>
                <li><a href="">Naples</a></li>
                <li><a href="">Pisa</a></li>
                <li><a href="">Rome</a></li>
                <li><a href="">Sorrento Area</a></li>
                <li><a href="">Tuscan Riveria</a></li>
                <li><a href="">Tuscany</a></li>
                <li><a href="">Venetian Reveria</a></li>
                <li><a href="">Venice</a></li>
                <li><a href="">Verona</a></li>
            </ul>

            <h5 class="list-title">Switzerland</h5>
            <ul>
                <li><a href="">Geneva</a></li>
            </ul>

            <h5 class="list-title">United States</h5>
            <ul>
                <li><a href="">New York</a></li>
            </ul>
        </div>
    </div>
</div>

@include('inc.footer')
