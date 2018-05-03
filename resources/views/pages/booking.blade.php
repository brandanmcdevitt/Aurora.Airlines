@extends('layouts.app')

{{-- including the title.blade.php file --}}
@include('inc.title')

   <?php $departure = $_POST["departure"];
   $arrival = $_POST["arrival"];
   $date = $_POST["date"]; ?>

<div class="selection">
<h1>Your Selection</h1>
<div class="user-choice">Departure Airport: <span><?php echo $departure; ?></span></div>
<div class="user-choice">Arrival Airport: <span><?php echo $arrival; ?></span></div>
<div class="user-choice">Date of Departure: <span><?php echo $date; ?></span></div>
</div>


@include('inc.footer')
