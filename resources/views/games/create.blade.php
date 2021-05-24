<x-app-layout title="Create">

<!--
start add game form***
-->
    <div class="flex justify-center mt-28 mb-8 mx-2 md:mx-0">
        <div class="w-full md:w-10/12 lg:w-6/12 bg-white p-6 rounded-lg">
            <h1 class="text-center mb-6 text-2xl">Add Game</h1>
            <form action="{{ route('games.store') }}" method="post">
                @csrf
                <table class="w-full my-12 sm:my-0 ">
                    <tr>
                        <td class="flex mt-1">
                            <strong><label for="title">Title of game:</label></strong>
                        </td>
                        <td>
                            <input type="text" id="title" name="title" placeholder="Pacman" class="bg-gray-200 w-full rounded-md pl-3 py-1 focus:outline-none border-2 focus:border-gray-900 @error('title') border-red-500 @enderror" value="{{ old('title') }}">
                            <!-- error message if not validated -->
                            @error('title')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="flex mt-5">
                            <strong><label for="title">Year Released:</label></strong>
                        </td>
                        <td>
                            <input list="year" name="year" id="name" placeholder="1980" class="bg-gray-200 w-full rounded-md pl-3 py-1 focus:outline-none border-2 focus:border-gray-900 mt-4 @error('year') border-red-500 @enderror" value="{{ old('year') }}">
                            <!-- error message if not validated -->
                            @error('year')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                            <datalist id="year">
                                @php
                                    // gives selection between 1980 and current year
                                    $right_now = getdate();
                                    $this_year = $right_now['year'];
                                    $start_year = 1980;
                                    while ($start_year <= $this_year) {
                                        echo "<option>{$start_year}</option>";
                                        $start_year++;
                                    }
                                @endphp
                            </datalist>
                        </td>
                    </tr>
                    <tr>
                        <td class="flex mt-5">
                            <strong><label for="price">Price:</label></strong>
                        </td>
                        <td>
                            <input type="number" id="price" name="price" min="0.00" max="10000.00" step="0.01" placeholder="&#36;0.00" class="bg-gray-200 w-full rounded-md pl-3 py-1 focus:outline-none border-2 focus:border-gray-900 mt-4 @error('price') border-red-500 @enderror" value="{{ old('price') }}"/>
                            <!-- error message if not validated -->
                            @error('price')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="flex mt-5">
                            <strong><label for="url">URL Image:</label></strong>
                        </td>
                        <td>
                            <input type="url" id="url" name="url" placeholder="http://www.image/" class="bg-gray-200 w-full rounded-md pl-3 py-1 focus:outline-none border-2 focus:border-gray-900 mt-4 @error('url') border-red-500 @enderror" value="{{ old('url') }}">
                            <!-- error message if not validated -->
                            @error('url')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="flex mt-5">
                            <strong><label for="description">Description:</label></strong>
                        </td>
                        <td>
                            <textarea name="description" id="description" cols="30" rows="4" placeholder="Pac-Man is a maze action game developed and..." class="bg-gray-200 w-full rounded-md pl-3 py-1 focus:outline-none border-2 focus:border-gray-900 mt-4 @error('description') border-red-500 @enderror" value="{{ old('description') }}"></textarea>
                            <!-- error message if not validated -->
                            @error('description')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </td>
                    </tr>
                </table>
                <div class="mt-4">
                    <!-- submit button to add game to home page -->
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded-lg font-medium w-full hover:bg-blue-600">Submit</button>
                </div>
            </form>
        </div>
    </div>
<!--
end add game form***
-->

</x-app-layout>