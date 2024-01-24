<x-base-app>
    @include('layouts.navbar')
    <div class="container grid h-screen p-3 mx-auto place-items-center">
        <div class="grid w-full gap-5 p-10 m-3 mt-20 overflow-hidden border-2 rounded-md shadow-md lg:gap-10 lg:w-1/2 border-slate-200">
            <div class="grid lg:gap-3">
                <div class="text-xl capitalize">{{$name}}</div>
                <div>
                    <div class="text-2xl font-semibold">Rs. {{$price}}</div>
                    <h5 class="text-sm lg:mt-2 text-slate-400">+3% payment gateway charge</h5>
                </div>
            </div>
            <form action={{route('booking')}} class="grid gap-3 my-3 lg:gap-6" method="POST">
                {{ csrf_field() }}
                <input class="hidden" type="text" name="offering" value={{$id}}>
                <div class="">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                    <input pattern="^[A-Za-z]+(?:[.\s][A-Za-z]+)*$" name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter name" required>
                </div>
                <select name="star" id="star" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    @foreach ($stars as $star )
                        <option value={{$star->id}}>{{$star->name}}</option>
                    @endforeach
                </select>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  mb-2 focus:outline-none">
                    Rs.{{round($price*100/97,2)}}
                </button>
            </form>
        </div>
        
    </div>
</x-base-app>