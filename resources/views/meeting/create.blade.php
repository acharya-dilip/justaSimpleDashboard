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
            <x-text-input id="agenda" name="agenda" class="h-12 w-full mt-1 font-bold text-2xl mb-4"></x-text-input>


            <div class="grid grid-cols-1 sm:grid-cols-2">

                <div>
                    <h1 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Time:') }}
                    </h1>
                </div>
                <div>
                    <h1 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Location:') }}
                    </h1>
                </div>
                <div>
                    <x-text-input id="time" name="time" class="h-12 mt-1 font-bold text-2xl" style="width:98%;"></x-text-input>
                </div>
                <div>
                    <x-text-input id="location" name="location" class="h-12 mt-1 font-bold text-2xl" style="width:100%;"></x-text-input>
                </div>

            </div>





        </form>


    </x-container>




</x-app-layout>
