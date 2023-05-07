@extends('app')

@section('styles')
  @vite(['resources/css/app.css'])


@section('content')

<main>
  <table>
    <tr>
      <th>Title</th>
      <th>Url</th>
      <th>Image</th>
      <th></th>
    </tr>

    @foreach ($uploads as $upload)
    <tr>
      <td>{{ $upload->title}}</td>
      <td>{{ $upload->url }}</td>
      <td><img src="{{ $upload->url }}"></td>
      <td>
        <form action="{{ route('delete', $upload->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">Verwijder</button>
      </form>
      </td>
    </tr>
      
    @endforeach
  </table>
 
    <button>Sla nieuwe afbeelding op</button>


</main>

@endsection