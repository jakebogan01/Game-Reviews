<x-app-layout title="Details">

<!--
start game details***
-->
    <div class="mt-28 mb-8 mx-2 px-4 md:mx-0">
        <div class="max-w-screen-lg mx-auto bg-white p-6 rounded-lg">
            <div class="flex flex-col sm:flex-row">
                <div class="w-full">
                    <!-- game banner -->
                    <div class="w-full sm:w-4/5 h-52 rounded-lg relative overflow-hidden bg-center bg-no-repeat bg-cover" style="background-image: url('{{ $game->url }}');"></div>
                </div>
                <div class="w-full sm:pl-10 flex flex-col justify-between">
                    <h1 class="my-8 sm:my-0 sm:mb-4 text-3xl font-semibold text-center">{{ $game->title }}</h1>
                    <table class="border-separate w-11/12 my-4 sm:my-12 md:my-0" align="center">
                        <tr>
                            <td class="py-3"><strong>Release Date: </strong></td>
                            <td class="text-right">{{ $game->year }}</td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" class="bg-blue-500 text-white px-7 py-3 rounded-lg font-medium hover:bg-blue-600">Buy &nbsp;<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></button>
                            </td>
                            <td class="text-right">${{ $game->price }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!--
end game details***
-->

<!--
start game description***
-->
    <div class="mb-8 mx-2 md:mx-0 px-4">
        <div class="max-w-screen-lg mx-auto bg-white p-6 rounded-lg">
            <h2 class="mb-4 text-3xl font-semibold">Description</h2>
            <p class="my-7">{{ $game->description }}</p>
            <div class="pb-4 pt-5">
                <a href="{{ route('home') }}" class="focus:outline-none bg-gray-900 text-white px-4 py-3 rounded-lg font-medium cursor-pointer text-md hover:bg-white hover:text-gray-900 border-2 border-gray-900"><i class="fa fa-angle-double-left" aria-hidden="true"></i>&nbsp; Go Back</a>
            </div>
        </div>
    </div>
<!--
end game description***
-->

</x-app-layout>