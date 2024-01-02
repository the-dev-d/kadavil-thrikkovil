@extends('layouts.baselayout')
@section('content')
<form action={{route('login')}} method="POST" class="grid gap-3 m-3 border-2 rounded-md shadow-md w-fit">
    {{ csrf_field() }}
    <div class="m-3">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
        <input name="email" type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your email" required>
    </div>
   
    <div class="m-3">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
        <input name="password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your password" required>
    </div>

    <button type="submit" class="text-white m-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  mb-2 focus:outline-none">Login</button>
    <span class="w-full px-4 bg-red-300 text-red-950 error_banner">
        @error('login')
            {{$message}}
        @enderror
    </span>
    <div class="m-3">New to this website ? <a class="underline" href="/register">Create Account</a></div>
</form>
@endsection