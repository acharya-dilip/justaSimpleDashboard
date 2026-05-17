<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-7xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Post') }}

        </h1>
    </x-slot>


<x-container>

    <h1 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Description:') }}

    </h1>

    <form enctype="multipart/form-data" method="post" action="{{route('dashboard.create.post')}}">
        @csrf
        <x-text-area class="w-full" name="description"></x-text-area>


        <h1 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Images:') }}

        </h1>
        <br>
        <input type="file" accept="image/*" id="image" name="image">
        <br>
        <br>
        <div class="flex justify-end">
            <x-primary-button>
                {{ __('Submit') }}
            </x-primary-button>
        </div>


    </form>

</x-container>




</x-app-layout>
