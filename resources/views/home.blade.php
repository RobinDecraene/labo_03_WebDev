@extends('app')

@section('styles')
  @vite(['resources/css/app.css'])


@section('content')

<main>
 <div class="topRow">
    <ul>
      <li>Image</li>
      <li>Bestandslocatie</li>
      <li></li>
    </ul>
  </div>
  <div class="imgRow">

  </div>
  <a class="btn" href="#">Sla nieuwe afbeelding op</a>

</main>

@endsection