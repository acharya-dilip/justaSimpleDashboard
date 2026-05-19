<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-7xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Meeting') }}
        </h1>
        <form method="get" action="{{ route('meeting.create') }}">
            <x-primary-button>
                <h2>Create Meeting</h2>
            </x-primary-button>
        </form>
    </x-slot>

    @foreach($meetings as $meeting)

        <x-container>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-0">

                <div>

                    <h1 class="font-semibold text-7xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{$meeting->agenda}} </h1>



                </div>

            </div>
        </x-container>



    @endforeach
</x-app-layout>
