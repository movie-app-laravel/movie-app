@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <div class="flex-none">
            <img class="w-64 lg:w-96" src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}"
                alt="the photo of the film">
        </div>
        <div class="md:ml-24">
            <h2 class="text-4xl mt-4 md:mt-0 font-semibold"> {{$movie['title']}}</h2>
            <div class="flex items-center text-gray:600 text-sm mt-1 ">
                <span><img class="w-4 ..."
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Star_icon_stylized.svg/1077px-Star_icon_stylized.svg.png"
                        alt="star"></span>
                <span class="ml-1">{{$movie['vote_average']*10}}%</span>
                <span class="mx-2">|</span>
                <span>{{$movie['release_date']}}</span>
                <span class="mx-2">|</span>
                <span>
                    @foreach($movie['genres'] as $genre)
                    {{$genre['name']}}
                    @if(!$loop -> last), @endif
                    @endforeach
                </span>
            </div>
            <p class="text-gray-300 mt-8">
                {{$movie['overview']}}
            </p>
            <div class="mt-12">
                <h4 class="text-white font-semibold">Featured Cast</h4>
                <div class="flex mt-4">

                    <!-- <div class="ml-8">
                        <div>eman</div>
                        <div class="text-sm text-gray-400">stort</div>
                    </div> -->

                </div>
            </div>
            @if(count($movie ['videos']['results'])>0)
            <div class="mt-12">
                <a href="https://www.youtube.com/watch?v={{$movie ['videos']['results']['0']['key']}}">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Play Trailer
                    </button>
                </a>
            </div>
            @endif
        </div>
    </div>
</div>


<!-- <div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

        </div>
    </div>
</div> -->
@endsection