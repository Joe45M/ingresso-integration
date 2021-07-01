<x-guest-layout>
    <div class="bg-green-500">
        <div class="max-w-7xl mx-auto h-52 flex flex-col justify-end pb-5">
            <h1 class="text-6xl text-white font-bold">Events</h1>
        </div>
    </div>
    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                @if($events)
                    @foreach($events as $event)
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white relative">
                                <span class="bg-green-500 p-2 rounded-bl-md text-white absolute right-0 top-0">{{ $event->get('city_desc') }}</span>
                                <p class="text-2xl text-gray-700 mb-3">{{ $event->get('event_desc') }}</p>
                                <div class="flex mb-5 text-gray-500">
                                    <x-location-icon></x-location-icon>
                                    {{ $event->get('structured_info')?->address?->value ?? 'Unknown' }}
                                </div>
                                <p class="text-gray-500">{{ $event->get('event_info') ? truncate_string($event->get('event_info')) : 'No description.' }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                <p class="mb-5 text-xl">Sorry, no events found.</p>
                @endif
            </div>
        </div>
    </div>
</x-guest-layout>
