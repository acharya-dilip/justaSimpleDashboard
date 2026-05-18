<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-7xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Pannel') }}
        </h1>
    </x-slot>


    <x-container class="my-10" style="max-width: 65%">
        <h1 class="text-3xl font-bold">Member Enrollment</h1>

        <div class=" md:my-5 max-sm:overflow-x-auto">
            <table class="table-auto w-[100%]">
                <thead class="font-roboto text-slate-500 font-medium leading-normal">
                <tr class="border rounded-md">
                    <th class="border py-2 px-2 w-[10%]">Image</th>
                    <th class="border py-2 px-2">ID</th>
                    <th class="border py-2 px-2">Name</th>
                    <th class="border py-2 px-2">Email</th>
                    <th class="border py-2 px-2">Password</th>
                    <th class="border py-2 px-2">Number</th>
                    <th class="border py-2 px-2 w-[10%]">Tech Stack</th>
                    <th class="border py-2 px-2 w-[10%]">Role</th>
                    <th class="border py-2 px-2 w-[10%]">DOB</th>
                    <th class="border py-2 px-2 w-[10%]">Created At</th>
                    <th class="border py-2 px-2 w-[10%]">Edit</th>
                    <th class="border py-2 px-2 w-[10%]">Delete</th>

                </tr>
                </thead>
                <tbody class="font-roboto text-slate-500 font-medium leading-normal">

                @foreach ($members as $member)
                    <tr class="border rounded-md text-center">
                        <td class="border py-4 px-2"></td>
                        <td class="border py-4 px-2"></td>
                        <td class="border py-4 px-2"></td>
                        <td class="border py-4 px-2"></td>
                        <td class="border py-4 px-2"></td>
                        <td class="border py-4 px-2"></td>
                        <td class="border py-4 px-2"></td>
                        <td class="border py-4 px-2"></td>
                        <td class="border py-4 px-2"></td>
                        <td class="border py-4 px-2"></td>



                        <td class="border py-4 text-center px-2">
                                    {{--For Editing--}}
                        </td>

                        <td class="border py-4 text-center px-2">
                                    {{--For Deleting--}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </x-container>


</x-app-layout>
