<x-app-layout>

<x-slot name="header">
        <h1 class="font-semibold text-7xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Meeting') }}

        </h1>
</x-slot>


    <x-container class="m-10" style="max-width: 65%;">

        <form method="POST" action="{{route('meeting.store')}}">
            @csrf
                <h1 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Meeting Agenda:') }}
                </h1>
            <x-text-input id="agenda" name="agenda" class="h-12 w-full mt-1 font-bold text-2xl mb-4" required></x-text-input>


            <div class="grid grid-cols-1 sm:grid-cols-2">

                <div>
                    <h1 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Date:') }}
                    </h1>
                </div>
                <div>
                    <h1 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Time:') }}
                    </h1>
                </div>
                <div>
                    <x-text-input id="date" name="date" class="h-12 mt-1 font-bold text-2xl" style="width:98%;" required></x-text-input>
                </div>
                <div>
                    <x-text-input id="time" name="time" class="h-12 mt-1 font-bold text-2xl" style="width:98%;" required></x-text-input>
                </div>

            </div>


            <h1 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight mt-4">
                {{ __('Location:') }}
            </h1>
            <x-text-input id="location" name="location" class="h-12 w-full mt-1 font-bold text-2xl " required></x-text-input>


            <div class="grid grid-cols-1 sm:grid-cols-2">

                <div>
                    <h1 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight mt-4">
                        {{ __('Latitude') }}
                    </h1>
                </div>
                <div>
                    <h1 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight mt-4">
                    {{ __('Longitude') }}
                </div>
                <div>
                    <x-text-input id="latitude" name="latitude" class="h-12 mt-1 font-bold text-2xl" style="width:98%;" required></x-text-input>
                </div>
                <div>
                    <x-text-input id="longitude" name="longitude" class="h-12 mt-1 font-bold text-2xl" style="width:98%;" required></x-text-input>
                </div>
            </div>

            <h1 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight mt-4">
                {{ __('Context:') }}
            </h1>
            <x-text-area class="w-full h-36" name="context" required></x-text-area>


            <div class=" flex justify-end">
                <x-primary-button class="mt-4 h-10">
                    {{ __('Submit') }}
                </x-primary-button>
            </div>







        </form>


    </x-container>




</x-app-layout>
