<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-7xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Pannel') }}
        </h1>
    </x-slot>


    <x-container class="my-10" style="max-width: 65%">
        <h1 class="text-3xl font-bold">Member Enrollment</h1>

        <div class="grid border text-lg grid-cols-1 grid-cols-2 grid-cols-3 grid-cols-4 grid-cols-5 grid-cols-6 grid-cols-7 grid-cols-8 grid-cols-9 grid-cols-10 grid-cols-11">

            <div>{{--For the image--}}
                PICTURE
            </div>

            <div>ID</div>

            <div>NAME</div>

            <div>EMAIL</div>

            <div>PASSWORD</div>

            <div>NUMBER</div>

            <div>DOB</div>

            <div>TECH STACK</div>

            <div>ROLE</div>

            <div>CREATED AT</div>

            <div>EDIT</div>

            {{--For Printing of the member data--}}



        </div>


    </x-container>


</x-app-layout>
