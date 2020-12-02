@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
  {{-- Welcome Alert Start --}}
  <div class="p-2 border border-green-500 bg-green-200 rounded-sm text-green-700">
    <p class="p-2 font-light">{{ __('Welcome to your dashboard, Here you have an overview of the entire application.') }}</p>
  </div>
  {{-- Welcome Alert End --}}
@endsection
