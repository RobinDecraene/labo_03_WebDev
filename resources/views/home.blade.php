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
      <td><img src="{{ $image->image }}"></td>
      <td>{{ $image->bronlocatie }}</td>
      <td>
        <form action="{{ route('delete', $image->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Verwijder</button>
      </form>
      </td>
    </tr>
      
    @endforeach
  </table>
 
  <a href="/create">
    <button>Sla nieuwe afbeelding op</button>
  </a>

</main>

@endsection