@extends('app')

@section('styles')
  @vite(['resources/css/app.css'])


@section('content')

  <form action="{{ route('store') }}" method="POST">
        @csrf
        @method('POST')

        <h1>Voeg een nieuwe afbeelding toe</h1>

        @if($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div>
      <label for="title" class="form-label">Title</label>
      <input
          type="text"  name="title" id="title" value="{{ old('title') }}"
          @if($errors->has('title')) style="border-color: red;" @endif>
    </div>

    <div>
      <label for="url" class="form-label">Url</label>
      <input
          type="text"  name="url" id="url" value="{{ old('url') }}"
          @if($errors->has('url')) style="border-color: red;" @endif>
    </div>

    <div>
      <button type="submit" >Voeg nieuwe afbeelding toe</button>
    </div>

  </form>


@endsection