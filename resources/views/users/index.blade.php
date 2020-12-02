@extends('layouts.app')
@section('title', 'All Current Users')
@section('content')
  @if (session('status'))
    <div class="p-2 border border-green-500 bg-green-200 rounded-sm text-green-700">
      <p class="p-2 font-light">{{ session('status') }}</p>
    </div>
  @endif
  {{-- Header Start --}}
    <header class="p-3 flex justify-between items-center">
      <div>
        <h1 class="text-3xl font-light text-gray-700">{{ __('Users') }}</h1>
      </div>
      <div>
        <a href="{{ route('users.create') }}" class="px-3 py-2 block bg-green-500 hover:bg-green-600 text-green-100 hover:text-green-50 rounded-sm border border-green-400 focus:outline-none font-light">
          <span class="pr-2"><i class="fal fa-user-plus"></i></span>
          <span>{{ __('Create New User') }}</span>
        </a>
      </div>
    </header>
  {{-- Header End --}}

  {{-- Main Content Start --}}
  <table class="table-auto w-full shadow-lg rounded-sm">
    <thead class="border-b-4 border-indigo-500 bg-gray-700">
      <tr>
        <th class="px-3 py-3 text-left font-light text-gray-200">{{ __('ID') }}</th>
        <th class="px-3 py-3 text-left font-light text-gray-200">{{ __('Name') }}</th>
        <th class="px-3 py-3 text-left font-light text-gray-200">{{ __('Email Address') }}</th>
        <th class="px-3 py-3 text-left font-light text-gray-200">{{ __('Email Verified') }}</th>
        <th class="px-3 py-3 text-left font-light text-gray-200">{{ __('Date Registered') }}</th>
        <th class="px-3 py-3 text-left font-light text-gray-200">{{ __('Actions') }}</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr class="px-3 py-3 bg-gray-200 @if($user->email_verified_at === null) border-l-4 border-red-500 @else border-green-500 @endif">
          <td class="px-3 py-3 font-light text-left text-gray-600">{{ $user->id }}</td>
          <td class="px-3 py-3 font-light text-left text-gray-600">{{ $user->name }}</td>
          <td class="px-3 py-3 font-light text-left text-gray-600">{{ $user->email }}</td>
          <td class="px-3 py-3 font-light text-left text-gray-600">
            @if($user->email_verified_at === null)
              <span class="p-1 border border-red-500 bg-red-200 text-red-500 rounded-sm">{{ __('Not Verified') }}</span>
            @else
              <span class="p-1 border border-green-500 bg-green-200 text-green-500 rounded-sm">{{ __('Verified') }}</span>
            @endif
          </td>
          <td class="px-3 py-3 font-light text-left text-gray-600">{{ $user->created_at }}</td>
          <td class="px-3 py-3 font-light text-left text-gray-600">
            <a href="{{ route('users.show', $user->id) }}" class="pr-2 text-blue-500"><i class="fal fa-eye text-blue-600 pr-1"></i>{{ __('View') }}</a>
            <a href="{{ route('users.edit', $user->id) }}" class="pr-2 text-yellow-500"><i class="fal fa-pencil text-yellow-600 pr-1"></i>{{ __('Edit') }}</a>
            <a href="{{ route('users.destroy', $user->id) }}" class="pr-2 text-red-500"><i class="fal fa-trash-alt text-red-600 pr-1"></i>{{ __('Trash') }}</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {{-- Main Content End --}}

@endsection
