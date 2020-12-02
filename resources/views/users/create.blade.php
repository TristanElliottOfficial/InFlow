@extends('layouts.app')
@section('title', 'Create A New User')
@section('content')
  {{-- Header Start --}}
    <header class="p-3 flex justify-between items-center">
      <div>
        <h1 class="text-3xl font-light text-gray-700">{{ __('Create A New User') }}</h1>
      </div>
      <div>
        <a href="{{ route('users.index') }}" class="px-3 py-2 block bg-blue-500 hover:bg-blue-600 text-blue-100 hover:text-blue-50 rounded-sm border border-blue-400 focus:outline-none font-light">
          <span class="pr-2"><i class="fal fa-chevron-left"></i></span>
          <span>{{ __('Return') }}</span>
        </a>
      </div>
    </header>
  {{-- Header End --}}

  {{-- Main Content Section Start --}}
    <div class="p-3 bg-white shadow-lg">
      <form class="p-3" action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="py-2">
          <label for="name" class="text-xs block font-light text-gray-500 pb-2 uppercase">{{ __('Username') }}</label>
          <input type="text" id="name" name="name" class="block font-light text-sm px-3 py-2 bg-gray-100 w-full border @error('name') border-red-500 @enderror rounded-sm focus:outline-none" placeholder="Username">
          @error('name')<p class="text-red-500 font-light text-xs py-3">{{ $message }}</p>@enderror
        </div>
        <div class="py-2">
          <label for="email" class="text-xs block font-light text-gray-500 pb-2 uppercase">{{ __('Email Address') }}</label>
          <input type="email" id="email" name="email" class="block font-light text-sm px-3 py-2 bg-gray-100 w-full border @error('email') border-red-500 @enderror rounded-sm focus:outline-none" placeholder="Email Address">
          @error('email')<p class="text-red-500 font-light text-xs py-3">{{ $message }}</p>@enderror
        </div>
        <div class="py-2">
          <label for="password" class="text-xs block font-light text-gray-500 pb-2 uppercase">{{ __('Password') }}</label>
          <input type="password" id="password" name="password" class="block font-light text-sm px-3 py-2 bg-gray-100 w-full border @error('password') border-red-500 @enderror rounded-sm focus:outline-none" placeholder="Password">
          @error('password')<p class="text-red-500 font-light text-xs py-3">{{ $message }}</p>@enderror
        </div>
        <div class="py-2">
          <button class="px-3 py-2 block bg-green-500 hover:bg-green-600 text-green-100 hover:text-green-50 rounded-sm border border-green-400 focus:outline-none font-light">
            <span class="pr-2"><i class="fal fa-user-plus"></i></span>
            <span>{{ __('Create User') }}</span>
          </button>
        </div>
      </form>
    </div>
  {{-- Main Content Section End --}}

@endsection
