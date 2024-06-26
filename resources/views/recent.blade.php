<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold w-full border-b-2 border-slate-400">Recent Bookings</h3>
                       <div class="py-3 grid gap-2">
                        @if ($bookings)

                            @foreach ( $bookings as $booking)
                                <div class="grid-cols-2 gap-4 grid list-icon-item p-3 shadow-sm border-2 border-slate-300 rounded-md">
                                    <div class="grid place-items-center">
                                        @if ($booking->completed)
                                            <span class="material-symbols-outlined text-green-400">
                                                done
                                            </span>
                                        @else
                                            <span class="material-symbols-outlined">
                                                schedule
                                            </span>
                                        @endif
                                        
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <div class="capitalize text-xl ">
                                                {{$booking->offering_name}} 
                                            </div>
                                            <span>{{$booking->created_at}}</span>
                                            <div class="text-lg">
                                                {{$booking->booked_name}} - {{$booking->star_name}}
                                            </div>
                                        </div>
                                        <span class="text-base font-semibold">Rs.{{$booking->price}}</span>
                                    </div>
                                </div>
                            @endforeach
                    @endif
                       </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
