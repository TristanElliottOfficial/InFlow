@extends('layouts.auth')
@section('title', 'Login')
@section('content')

  <div class="h-screen bg-gray-100">
    <div class="flex justify-center items-center">
      <div class="w-1/4 bg-white border rounded-sm border-gray-200 shadow-2xl">
        <!-- Login & Register Form Below -->
        <div class="px-6 py-3 border-b-4 bg-gray-700 border-indigo-500">
          <h4 class="text-4xl font-thin text-gray-200">{{ __('InFlow') }}</h4>
          <p class="font-light text-gray-400 text-xs uppercase">{{ __('Login') }}</p>
        </div>
        <form action="{{ route('login') }}" method="post" class="px-6 py-3">
          @csrf
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
            <label for="remember" class="flex items-center">
              <input type="checkbox" name="remember" id="remember">
              <span class="text-sm pl-2 font-light text-gray-600">{{ __('Remember Me') }}</span>
            </label>
          </div>
          <div class="py-2">
            <button class="px-3 py-2 bg-indigo-500 hover:bg-indigo-600 rounded-sm font-light text-sm text-blue-50 w-full">{{ __('Login') }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
