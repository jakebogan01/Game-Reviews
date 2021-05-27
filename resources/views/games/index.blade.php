<x-app-layout title="Home">
<!--
start game menu***
-->
    <div class="flex justify-center mt-28 mb-8 mx-2 md:mx-0">
        <div class="w-12/12 md:w-10/12 lg:w-8/12 bg-white p-6 rounded-lg">
            @if (count($games) == 0)
                <div>
                    <h1 class="mb-4 text-3xl font-semibold text-center">There are no current games at the moment!</h1>
                </div>
            @else
                <div>
                    <!-- 1 featured game -->
                    <h1 class="mb-4 text-3xl font-semibold">Featured Games</h1>
                    @foreach($games as $game)
                        <a href="{{ route('games.show',$game->id) }}">
                            <div class="w-full h-48 md:h-80 cursor-pointer rounded-lg relative overflow-hidden flex justify-center items-center my-6 feature_list" style="background-image: url('{{ $game->url }}'); background-repeat: no-repeat; background-size: cover; background-position: bottom center;">
                                <div class="bg-gray-900 bg-opacity-90 w-full h-full absolute -left-full layover"></div>
                                <h2 class="text-white relative -right-full z-10 layover_title text-2xl">{{ $game->title }}</h2>
                            </div>
                        </a>
                        @if (count($games) >= 0)
                            <!-- only shows 1 featured game -->
                            @break
                        @endif
                    @endforeach
                </div>
                <!-- other games -->
                <h1 class="mb-4 text-3xl font-semibold">Other Games</h1>
                <div class="grid grid-cols-2 gap-6">
                    <!-- showcase 10 games only -->
                    @foreach($games as $i => $game)
                        <a href="{{ route('games.show',$game->id) }}" @if ($loop->first) class="hidden" @endif>
                            <div class="w-full h-28 md:h-40 cursor-pointer rounded-lg relative overflow-hidden text-center flex justify-center items-center feature_list pl-2" style="background-image: url('{{ $game->url }}'); background-repeat: no-repeat; background-size: cover; background-position: top center;">
                                <div class="bg-gray-900 bg-opacity-90 w-full h-full absolute -left-full layover"></div>
                                <h2 class="text-white relative -right-full z-10 layover_title text-md md:text-2xl">{{ $game->title }}</h2>
                            </div>
                        </a>
                        @if ($i >= 10 && !$more)
                            <!-- only shows 10 games -->
                            @break
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </div>
<!--
end game menu***
-->

<!--
start show more button***
-->
    @if (count($games) >= 10 && !$more)
        <!-- if user clicks show more, button doesn't display -->
        <div class="flex justify-center mb-8">
            <div class="w-8/12 bg-white rounded-lg">
                <form action="{{ route('games.update') }}" method="post">
                    @csrf
                    <button type="submit" class="focus:outline-none bg-blue-500 text-white px-4 py-3 rounded-lg font-medium w-full flex flex-col justify-center items-center hover:bg-blue-600">
                        Show More
                        <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
    @endif
<!--
end show more button***
-->

</x-app-layout>