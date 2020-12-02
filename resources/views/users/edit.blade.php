@extends('layouts.app')
@section('title', 'Edit A User')
@section('content')
  {{-- Header Start --}}
    <header class="p-3 flex justify-between items-center">
      <div>
        <h1 class="text-3xl font-light text-gray-700">{{ __('Edit A User') }}</h1>
      </div>
      <div>
        <a href="{{ route('users.index') }}" class="px-3 py-2 block bg-blue-500 hover:bg-blue-600 text-blue-100 hover:text-blue-50 rounded-sm border border-blue-400 focus:outline-none font-light">
          <span class="pr-2"><i class="fal fa-chevron-left"></i></span>
          <span>{{ __('Return') }}</span>
        </a>
      </div>
    </header>
  {{-- Header End --}}
@endsection
