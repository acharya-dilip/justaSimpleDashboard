<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-7xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Meeting') }}
        </h1>
        @leader
        <form method="get" action="{{ route('meeting.create') }}">
            <x-primary-button>
                <h2>Create Meeting</h2>
            </x-primary-button>
        </form>
        @endleader
    </x-slot>

    @foreach($meetings as $meeting)

        <div class="flex justify-center">
            <x-container class="mt-6" style="width: 65%;">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">

                    <div>
                        <h1 class="font-semibold text-5xl ml-2 text-gray-800 dark:text-gray-200 leading-tight">
                            {{$meeting->agenda}} </h1>

                            <h1 class=" bg-gray-800 font-semibold text-3xl p-4 text-gray-800 dark:text-gray-200 leading-tight mt-2">
                                {{$meeting->date}} at {{$meeting->time}} </h1>

                        <h1 class="font-semibold ml-3 text-2xl text-gray-800 mt-3 dark:text-gray-200 leading-tight">
                            {{$meeting->context}} </h1>

                    </div>
                    <div>
                        <div class="embed-map-fixed">
                            <div class="embed-map-container">
                                <iframe class="embed-map-frame" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&height=400&hl=en&q={{$meeting->latitude}}%2C%20{{$meeting->longitude}}&t=&z=14&ie=UTF8&iwloc=B&output=embed">

                                </iframe>
                                <a href="https://brushjjaemu.net" style="font-size:2px!important;color:gray!important;position:absolute;bottom:0;left:0;z-index:1;max-height:1px;overflow:hidden">Brush Jjaemu</a>
                            </div>
                            <style>.embed-map-fixed{position:relative;text-align:right;width:600px;height:400px;}.embed-map-container{overflow:hidden;background:none!important;width:600px;height:400px;}.embed-map-frame{width:600px!important;height:400px!important;}
                            </style>
                        </div>
                    </div>
                </div>
            </x-container>
        </div>

    @endforeach
</x-app-layout>
