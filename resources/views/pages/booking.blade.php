@extends('layouts.app')

{{-- including the title.blade.php file --}}
@include('inc.title')

   <?php $departure = $_POST["departure"];
   $arrival = $_POST["arrival"];
   $date = $_POST["date"]; ?>
<div class="selection-outer">
<div class="selection">
<h1>Confirm Your Flight</h1>
<div class="user-choice">Departure Airport: <span><?php echo $departure; ?></span></div>
<div class="user-choice">Arrival Airport: <span><?php echo $arrival; ?></span></div>
<div class="user-choice">Date of Departure: <span><?php echo $date; ?></span></div>
</div>

@guest
<div class="booking-login">
  <h1>Please login to continue with your booking</h1>
<a href="{{ route('login') }}"><button>Login / Register</button></a>
</div>
@else
<h2>{{ Auth::user()->name }}, we have confirmed your flight on email address: {{ Auth::user()->email }}</h2>
@endguest
</div>






@include('inc.footer')
