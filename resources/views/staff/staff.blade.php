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
<p>Excepteur qui tempor Lorem veniam sunt laboris non incididunt mollit amet fugiat. Proident culpa minim nostrud est cupidatat minim ea est proident anim ut sunt aliquip consectetur sit minim excepteur. Reprehenderit duis Lorem mollit sint enim quis consequat nostrud sunt elit nisi laboris. Nostrud cupidatat commodo tempor officia sunt ipsum nulla veniam reprehenderit non nulla sit eiusmod mollit.</p>

<p>Laboris sint dolor Lorem laboris deserunt Lorem cillum incididunt enim cupidatat quis ipsum qui sit duis esse. Proident ipsum tempor ipsum officia proident tempor laborum Lorem elit excepteur labore irure aliqua pariatur. Tempor nisi elit voluptate id labore ex elit irure et excepteur adipisicing laborum id duis voluptate. Fugiat dolore minim anim occaecat et non nulla.</p>
<p>Commodo nisi id adipisicing Lorem laborum ut ex ad do. Eu ut fugiat dolore ex veniam minim id. Non in Lorem irure qui elit dolore amet. Sint veniam est sint minim ex occaecat ipsum do cillum consequat deserunt cupidatat consectetur ea nostrud fugiat voluptate. Ipsum officia enim consequat in velit eiusmod tempor irure. Nulla nulla pariatur dolore occaecat sunt Lorem duis ex.</p>
</div>

</div>



@include('inc.footer')
