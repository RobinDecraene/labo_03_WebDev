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

    @foreach ($images as $image)
    <tr>
      <td><img src=""></td>
      <td></td>
      <td><button type="submit">Verwijder</button></td>
    </tr>
      
    @endforeach
  </table>
 
  <button>Sla nieuwe afbeelding op</button>

</main>

@endsection