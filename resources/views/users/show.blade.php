@extends('layouts.app')
@section('title', 'View A Single User')
@section('content')
  {{-- Header Start --}}
    <header class="p-3 flex justify-between items-center">
      <div>
        <h1 class="text-3xl font-light text-gray-700">{{ __('View A Single User') }}</h1>
      </div>
      <div>
        <a href="{{ route('users.index') }}" class="px-3 py-2 block bg-blue-500 hover:bg-blue-600 text-blue-100 hover:text-blue-50 rounded-sm border border-blue-400 focus:outline-none font-light">
          <span class="pr-2"><i class="fal fa-chevron-left"></i></span>
          <span>{{ __('Return') }}</span>
        </a>
      </div>
    </header>
  {{-- Header End --}}

  <div class="grid grid-cols-12 gap-4">
    <div class="col-span-3">
      <div class="p-3 bg-white shadow-lg rounded">
        <div class="flex items-center">
          <div class="pr-4">
            <img src="http://tristanelliott.co.za/development/users/User1.jpg" class="block w-20 h-20 rounded-full" alt="{{ $user->name }}">
          </div>
          <div class="pr-3">
            <h1 class="text-xl font-light text-gray-600">{{ $user->name }}</h1>
            <p class="text-sm font-light text-gray-400 py-1">{{ $user->email }}</p>
          </div>
        </div>
      </div>
      <div class="p-3 bg-white shadow-lg rounded mt-5">
        <p class="text-sm font-light text-gray-400 py-3">Additional Information</p>
      </div>
    </div>
    <div class="col-span-9">
      <div class="p-3 bg-white rounded shadow-lg">
        <div class="p-3">
          <h1 class="text-xl font-light text-gray-600">{{ __('Projects') }}</h1>
        </div>
      </div>
    </div>
  </div>


@endsection
