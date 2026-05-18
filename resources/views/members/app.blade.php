<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-7xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Members') }}
        </h1>
    </x-slot>


<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2">

    @foreach($members as $member)
        @if($member->role!=NULL)
            <x-container class="mt-10">
                <div class="text-xl">

                    <h1> {{$member->name}}</h1>
                    <h2>{{$member->role}}</h2>
                    <h2> {{$member->email}}</h2>

                    <div class="size-40 mb-20">
                        <img alt='justanimage' src="{{asset('storage/'.$member->image)}}"
                             class="rounded w-auto max-h-9xl">
                    </div>

                    <h2>{{$member->techStack}}</h2>
                    <h2>{{$member->number}}</h2>
                    <h2>{{$member->dob}}</h2>

                </div>

            </x-container>

        @endif
    @endforeach


</div>


</x-app-layout>
