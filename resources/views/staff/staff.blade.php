@extends('layouts.app')

<div class="admin-container">
<div class="sidebar">
  <ul>
  <li>Staff Panel</li>
  <a href=""><li>Statistics</li></a>
  <a href=""><li>Staff</li></a>
  <a href=""><li>FLights</li></a>
  <a href=""><li>Messages</li></a>
  <a href=""><li>Rota</li></a>
  <a href=""><li>Contact Admin</li></a>
  </ul>

</div>

<div class="admin-welcome">

<h1>Welcome, {{ Auth::user()->name }}</h1>

</div>

<div class="staff-graph">
<img src="images/logo.png">
</div>

</div>



@include('inc.footer')
