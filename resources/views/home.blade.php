@extends('app')

@section('styles')
  @vite(['resources/css/app.css'])


@section('content')

<main>
  <table>
    <tr>
      <th>Image</th>
      <th>Bestandslocatie</th>
      <th></th>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
 
  <a class="btn" href="#">Sla nieuwe afbeelding op</a>

</main>

@endsection