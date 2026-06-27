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

                <form class="flex justify-end" method="POST" action="{{route('admin.delete',$member->id)}}">
                    @csrf
{{--                    @method('DELETE')--}}
                    <input type="submit" value="❌️">
                </form>

                <form method="post" action="{{route('admin.update')}}">
                    @csrf
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

                            <table>
                                <tr>
                                    <td>
                                        <label for="role" class="ml-4">Role:</label>
                                    </td>
                                    <td>
                                        <x-text-input class="h-9 w-48 " id="role" name="role"
                                                      value="{{$member->role}}"></x-text-input>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="number" class="ml-4">Number:</label>
                                    </td>
                                    <td>
                                        <x-text-input class="h-9 w-48" id="number" name="number"
                                                      value="{{$member->number}}"></x-text-input>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="dob" class="ml-4">DOB:</label>
                                    </td>
                                    <td>
                                        <x-text-input class="h-9 w-48" id="dob" name="dob"
                                                      value="{{$member->dob}}"></x-text-input>
                                    </td>
                                </tr>
                            </table>

                        </td>
                        <td>

                            <table>
                                <tr>
                                    <td>
                                        <label for="id" class="ml-4">ID:</label>
                                    </td>
                                    <td>
                                        <x-text-input class="h-9 w-48 " id="id" name="id"
                                                      value="{{$member->id}}" readonly></x-text-input>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="techStack" class="ml-4">Stack:</label>
                                    </td>
                                    <td>
                                        <x-text-input class="h-9 w-48" id="techStack" name="techStack"
                                                      value="{{$member->techStack}}"></x-text-input>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="created_at" class="ml-4">Submission</label>
                                    </td>
                                    <td>
                                        <x-text-input class="h-9 w-48" id="created_at" name="created_at"
                                                      value="{{$member->created_at}}" readonly></x-text-input>
                                    </td>
                                </tr>
                            </table>


                        </td>

                    <td>

                        <input type="submit" class="size-32 text-3xl ml-4 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" value="Update">

                    </td>

                </table>
                </form>

             </x-container>
        @endforeach

    </x-container>


</x-app-layout>
