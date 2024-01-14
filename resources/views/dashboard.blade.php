<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center p-6 my-3 bg-white rounded-md shadow-sm">
                <span class="material-symbols-outlined">
                    error
                </span> 
                <p class="ml-2">വഴിപാടുകൾ ബുക്ക്  ചെയ്തതിനു ശേഷമുള്ള വഴിപാട് സമയങ്ങളിലായി ചെയ്യപ്പെടും. പൂർത്തിയായ വഴിപാട് ക്ഷേത്രത്തിൽനിന്ന് നേരിട്ട് വാങ്ങാവുന്നതാണ് </p>
            </div>
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="w-full text-lg font-semibold border-b-2 border-slate-400">Booked Today</h3>
                       <div class="grid gap-2 py-3">
                        @if ($bookings)

                            @foreach ( $bookings as $booking)
                                <div class="grid grid-cols-2 gap-4 p-3 border-2 rounded-md shadow-sm list-icon-item border-slate-300">
                                    <div class="grid place-items-center">
                                        @if ($booking->completed)
                                            <span class="text-green-400 material-symbols-outlined">
                                                done
                                            </span>
                                        @else
                                            <span class="material-symbols-outlined">
                                                schedule
                                            </span>
                                        @endif
                                        
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="grid gap-2">
                                            <div class="text-xl capitalize ">
                                                {{$booking->offering_name}} 
                                            </div>
                                            <div class="text-xl">
                                                {{$booking->booked_name}} - {{$booking->star_name}}
                                            </div>
                                            <span>{{$booking->created_at}}</span>

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
