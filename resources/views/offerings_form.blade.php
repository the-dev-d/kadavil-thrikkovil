<x-base-app>
    @include('layouts.navbar')
<div class="p-3 mt-20 m-3 overflow-hidden border-2 rounded-md shadow-md border-slate-200 w-fit">
    <div>
        <div class="text-xl capitalize">{{$name}}</div>
        <div class="text-lg font-semibold">Rs. {{$price}}</div>
    </div>
    <form action={{route('booking')}} class="grid gap-6 my-3" method="POST">
        {{ csrf_field() }}
        <input class="hidden" type="text" name="offering" value={{$id}}>
        <div class="">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
            <input name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter name" required>
        </div>
        <select name="star" id="star" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            @foreach ($stars as $star )
                <option value={{$star->id}}>{{$star->name}}</option>
            @endforeach
        </select>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  mb-2 focus:outline-none">Book</button>
    </form>
</div>

</x-base-app>