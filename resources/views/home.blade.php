@extends('app')

@section('styles')
  @vite(['resources/css/app.css'])


@section('content')

<main>
  <table>
    <tr>
      <th>title</th>
      <th>url</th>
      <th>Image</th>
    </tr>

    @foreach ($uploads as $upload)
    <tr>
      <td>{{ $upload->title}}></td>
      <td>{{ $upload->url }}</td>
      <td><img src="{{ $upload->upload }}"></td>
      <td>
        <form action="{{ route('delete', $upload->id) }}" method="POST">
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