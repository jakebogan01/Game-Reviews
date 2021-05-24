<x-app-layout title="Delete">
    
    <!--
    start delete menu***
    -->
        <div class="flex justify-center mt-28 mb-8 mx-2 md:mx-0">
            <div class="w-12/12 md:w-10/12 lg:w-8/12 bg-white p-6 rounded-lg">
                <table class="w-full my-12 sm:my-0">
                    <tr class="text-left">
                        <th class="py-2">#</th>
                        <th>Title</th>
                        <th>Year</th>
                        <th>Amount</th>
                    </tr>
                    @foreach ($games as $game)
                        @if ($game->id % 2)
                            <tr class="bg-gray-100">
                        @endif
                                <td class="py-3 pl-3">{{ $game->id }}</td>
                                <td>{{ $game->title }}</td>
                                <td>{{ $game->year }}</td>
                                <td>&#36;{{ $game->price }}</td>
                                <td class="text-right">
                                    <form action="{{ route('games.destroy',$game->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-7 py-2 rounded font-medium hover:bg-red-600"><i class="fa fa-trash text-xl" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                    @endforeach
                </table>
                <div class="mt-10 mb-4">
                    <a href="{{ route('admin') }}" class="focus:outline-none bg-gray-900 text-white px-4 py-3 rounded-lg font-medium cursor-pointer text-md hover:bg-white hover:text-gray-900 border-2 border-gray-900"><i class="fa fa-angle-double-left" aria-hidden="true"></i>&nbsp; Go Back</a>
                </div>
            </div>
        </div>
    <!--
    end delete menu***
    -->

    <x-message></x-message>
    
</x-app-layout>