<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-7xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Members') }}
        </h1>
    </x-slot>


@foreach($members as $member)
    @if($member->role!=NULL)
            <x-container class="mt-10">
                <h1> {{$member->name}}</h1>
                <h2>{{$member->role}}</h2>
                <h2> {{$member->email}}</h2>
                <img alt='justanimage' src="{{asset('storage/'.$member->image_path)}}"
                     class="rounded w-auto max-h-9xl">
                <h2>{{$member->techStack}}</h2>
                <h2>{{$member->number}}</h2>
                <h2>{{$member->dob}}</h2>
            </x-container>

        @endif
@endforeach
</x-app-layout>
