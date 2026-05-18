<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-7xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Pannel') }}
        </h1>
    </x-slot>


    <x-container class="my-10" style="max-width: 65%">
        <h1 class="text-3xl font-bold">Member Enrollment</h1>


    @foreach($members as $member)
            <x-container class="bg-gray-600 mt-4">
                <form>
                <table>
                    <tr>
                        <td>
                            <img alt='justanimage' src="{{asset('storage/'.$member->image)}}"
                                 class="rounded-full w-32 h-32">
                            <x-text-input class="mt-2 h-8 w-32" value="{{$member->image}}" name="image"></x-text-input>
                        </td>
                        <td class="align-middle">
                                <table>
                                    <tr>
                                        <td>
                                            <label for="name" class="ml-4">Name:</label>
                                        </td>
                                        <td>
                                            <x-text-input class="h-9 w-48 " id="name" name="name"
                                                          value="{{$member->name}}"></x-text-input>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="email" class="ml-4">Mail:</label>
                                        </td>
                                        <td>
                                            <x-text-input class="h-9 w-48" id="email" name="email"
                                                          value="{{$member->email}}"></x-text-input>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="password" class="ml-4">Password:</label>
                                        </td>
                                        <td>
                                            <x-text-input class="h-9 w-48" id="password" name="password"
                                                          value="{{$member->password}}"></x-text-input>
                                        </td>
                                    </tr>
                                </table>
                        </td>
                        <td>


                        </td>
                </table>
                </form>
             </x-container>
        @endforeach

    </x-container>


</x-app-layout>
