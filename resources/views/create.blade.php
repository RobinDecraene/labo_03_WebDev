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
      <label for="bronlocatie" class="form-label">Bronlocatie</label>
      <input
          type="text"  name="bronlocatie" id="bronlocatie" value="{{ old('bronlocatie') }}"
          @if($errors->has('bronlocatie')) style="border-color: red;" @endif>
    </div>

    <div>
      <label for="image" class="form-label">Image</label>
      <input
          type="text"  name="image" id="image" value="{{ old('image') }}"
          @if($errors->has('image')) style="border-color: red;" @endif>
    </div>

    <div>
      <button type="submit" >Voeg nieuwe afbeelding toe</button>
    </div>

  </form>


@endsection