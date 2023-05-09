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
<<<<<<< HEAD
      <td><img src="images/cats.jpg"></td>
=======
      <td><img src="{{ $upload->url }}"></td>
>>>>>>> 4e5382e2dde518e9d1f7f6ae886f69e0f6252032
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
 
  <a href="/create">
    <button>Sla nieuwe afbeelding op</button>
  </a>

</main>

@endsection