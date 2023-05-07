@extends('app')

@section('styles')
  @vite(['resources/css/app.css'])


@section('content')

<div>
  <form action="{{ route('store') }}" method="POST">
    @csrf

    
  </form>
</div>

@endsection