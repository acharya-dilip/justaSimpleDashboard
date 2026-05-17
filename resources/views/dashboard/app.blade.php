<x-app-layout>
   <x-slot name="header">
    <h1 class="font-semibold text-7xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}

    </h1>
    <form method="get" action="{{ route('dashboard.create') }}">
        <x-primary-button>
            <h2>Create Post</h2>
        </x-primary-button>
    </form>

   </x-slot>

    @foreach($posts as $post)
        <div class="flex justify-center">
            <x-container class="my-10 max-w-4xl max-h-4xl">

                <div class="flex left-0 text-3xl ">
                    {{$post->description}}
                </div>
                <br>
                @if($post->image_path)

                    <div class="flex justify-center mb-10">
                        <img alt='justanimage' src="{{asset('storage/'.$post->image_path)}}"
                            class="rounded w-auto max-h-9xl">
                    </div>
            @endif
        </x-container>
        </div>

    @endforeach

</x-app-layout>
