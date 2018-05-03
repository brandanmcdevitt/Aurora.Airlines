@extends('layouts.app')

<div class="admin-container">
<div class="sidebar">
  <ul>
  <li>Admin Panel</li>
  <a href=""><li>Statistics</li></a>
  <a href=""><li>Staff</li></a>
  <a href=""><li>FLights</li></a>
  <a href=""><li>Messages</li></a>
  <a href=""><li>Issues</li></a>
  <a href=""><li>Database</li></a>
  </ul>

</div>

<div class="admin-welcome">

<h1>Welcome, {{ Auth::user()->name }}</h1>

</div>

<div class="graph">
<img src="images/graph.png">
</div>

</div>



@include('inc.footer')
