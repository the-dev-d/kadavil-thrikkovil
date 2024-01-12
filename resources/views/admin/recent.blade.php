<x-admin-menu :user=$user> 
    <form method="POST" class="w-full h-screen p-6 overflow-y-auto border-2 rounded-md">
        {{ csrf_field() }}
        <div  class="flex items-end gap-3 my-3">
            <div>
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Search field</label>
                <select value='{{$searched}}'  id="countries" name="search" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option {{$searched=='name' ? 'selected' : ''}} value="name">പേര്</option>
                <option {{$searched=='star' ? 'selected' : ''}} value="star">നക്ഷത്രം</option>
                <option {{$searched=='mail' ? 'selected' : ''}} value="mail">മെയിൽ</option>
                </select>
            </div>
            <div>
                <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input value="{{$value}}" name="value" type="search" id="search" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </div>
            <a href="recent" class="p-4 border-2 rounded-md">
                <span class="material-symbols-outlined">
                    refresh
                </span>
            </a>
        </div>
        <div class="grid w-full gap-3 bg-white rounded-md">

            <div class="relative overflow-x-auto">
                <table class="w-full text-left border-2 text-g rounded-mdray-500 text-md rtl:text-right dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-lg">
                                പേര് 
                            </th>
                            <th scope="col" class="px-6 py-3 text-lg">
                                നക്ഷത്രം 
                            </th>
                            <th scope="col" class="px-6 py-3 text-lg">
                                മെയിൽ 
                            </th>
                            <th scope="col" class="px-6 py-3 text-lg">
                                സമയം  
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 text-lg font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$booking->booking_name}}
                            </th>
                            <td class="px-6 py-4 text-lg">
                                {{$booking->star_name}}
                            </td>
                            <td class="px-6 py-4 text-lg">
                                {{$booking->email}}
                            </td>
                            <td class="px-6 py-4 text-lg">
                                {{$booking->booking_date}}
                            </td>
                            {{-- <td class="px-6 py-4 text-lg">
                                @if ($booking->completed)
                                    <span class="p-4 text-green-500 material-symbols-outlined">
                                        done
                                    </span>
                                @else
                                    <button onclick="markAsComplete(this)" data-booking='{{$booking->booking_id}}'' type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        <span class="material-symbols-outlined">
                                            done
                                        </span>
                                    </button>
                                @endif
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </form>
    {{-- @push('head')
        <script defer>
            console.log("Hello")
            const markAsComplete = async (target) => {
                const id = target.dataset.booking;
                const url = new URL( '{{URL::to('/')}}'+'/admin/complete' );
                url.searchParams.append('id', id);
                const res = await fetch(url);
                const parsed = await res.json();

                if(parsed.status) {
                    const span = document.createElement('span');
                    span.classList.add("text-green-500");
                    span.classList.add("material-symbols-outlined");
                    span.classList.add("p-4");
                    span.innerHTML = "done";
                    target.parentNode.replaceChild(span, target);
                }
            }
        </script>
    @endpush  --}}
</x-admin-menu>