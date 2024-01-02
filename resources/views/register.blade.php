@extends('layouts.baselayout')
@section('content')
@if ($token)
    <div>Token is sent</div>
@else
    <div>
        <form class="grid m-3 border-2 rounded-md shadow-md w-fit" action="" method="POST">
            @csrf
            <div class="m-3">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input name="email" type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter your email" required>
            </div>

            <input type="submit" value="Send Registration Link" class="m-3 text-white my-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none">
            <span class="w-full px-4 bg-red-300 text-red-950 error_banner">
                @error('error')
                    {{$message}}
                @enderror
            </span>
            <div class="m-3">Already have an account ? <a class="underline" href="/login">Login</a></div>
        </form>
    </div>
@endif
@endsection