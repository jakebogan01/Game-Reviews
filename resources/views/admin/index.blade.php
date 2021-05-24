<x-app-layout title="Admin Panel">

<!--
start admin panel***
-->
    <div class="flex justify-center mt-28 mb-8 mx-2 md:mx-0">
        <div class="bg-white p-8 rounded-lg">
            <h1 class="text-center mb-6 text-2xl">Admin Panel</h1>
            <div class="flex flex-col sm:flex-row justify-between">
                <!-- buttons to manipulate the database -->
                <div class="flex flex-col mr-10 w-full">
                    <a href="{{ route('games.create') }}" class="focus:outline-none bg-white border-2 border-gray-900 px-12 py-8 rounded-lg font-medium mb-2 cursor-pointer text-lg hover:bg-gray-900 hover:text-white text-center">Add Game</a>
                    <a href="{{ route('games.delete') }}" class="focus:outline-none bg-white border-2 border-gray-900 px-12 py-8 rounded-lg font-medium cursor-pointer text-lg hover:bg-gray-900 hover:text-white text-center">Delete Game</a>
                </div>
                <!-- users info -->
                <div class="flex flex-col justify-between w-full">
                    <div>
                        <table class="w-full my-12 sm:my-0">
                            <tr>
                                <td><strong>Name: </strong></td>
                                <td class="text-right">{{ auth()->user()->name }}</td>
                            </tr>
                            <tr>
                                <td><strong>Username: </strong></td>
                                <td class="text-right">{{ auth()->user()->username }}</td>
                            </tr>
                            <tr>
                                <td><strong>Email: </strong></td>
                                <td class="text-right">{{ auth()->user()->email }}</td>
                            </tr>
                        </table>
                    </div>
                    <!-- button to edit users data -->
                    <button class="focus:outline-none bg-gray-900 text-white w-full py-1 rounded-lg font-medium cursor-pointer text-md hover:bg-white hover:text-gray-900 border-2 border-gray-900">Edit</button>
                </div>
            </div>
        </div>
    </div>
<!--
end admin panel***
-->

    <x-message></x-message>

</x-app-layout>