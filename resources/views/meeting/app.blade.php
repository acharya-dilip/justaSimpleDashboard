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




</x-app-layout>
