<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-7xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Members') }}
        </h1>
    </x-slot>


<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 md:grid-cols-4 gap-4">

    @foreach($members as $member)
        @if($member->role!=NULL)
            <x-container class="mt-4 max-h-52">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    <div>
                        <img alt='justanimage' src="{{asset('storage/'.$member->image)}}"
                        class="rounded-full w-32 h-32">
                    </div>
                    <div>
                        <h2 class="text-2xl truncate">{{$member->role}}</h2>
                        <h2 class="text-2xl truncate">{{$member->techStack}} Developer</h2>
                        <h2 class="text-lg truncate"> {{$member->email}}</h2>
                        <h2>{{$member->number}}</h2>
                    </div>
                </div>
                <h1 class="text-3xl truncate">{{$member->name}}</h1>


            </x-container>

        @endif
    @endforeach


</div>


</x-app-layout>
