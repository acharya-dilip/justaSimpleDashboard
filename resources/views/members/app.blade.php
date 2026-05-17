<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-7xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Members') }}
        </h1>
    </x-slot>


@foreach($users as $user)
    <x-container>
        <h1> {{$user->name}}</h1>
        <h2>{{$user->role}}</h2>
        <h2> {{$user->email}}</h2>
    </x-container>

@endforeach
</x-app-layout>
