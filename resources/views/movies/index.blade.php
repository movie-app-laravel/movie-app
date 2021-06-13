@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-blue-500 text-lg font-semibold">Popular Movies</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach($popularMovies as $popularMovie)
            <div class="mt-8">
                <a href="{{ route('movies.show', $popularMovie['id']) }}"><img class="hover:opacity-75"
                        src="{{'https://image.tmdb.org/t/p/w500/'.$popularMovie['poster_path']}}"
                        alt="the photo of the film">
                </a>
                <div class="mt-2">
                    <a href="{{ route('movies.show', $popularMovie['id']) }}"
                        class="text-lg mt-2 hover:text-gray:300 hover:opacity-75">
                        {{$popularMovie['title']}}
                    </a>
                    <div class="flex items-center text-gray:600 text-sm mt-1 ">
                        <span><img class="w-4 ..."
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Star_icon_stylized.svg/1077px-Star_icon_stylized.svg.png"
                                alt="star"></span>
                        <span class="ml-1">{{$popularMovie['vote_average']*10}}%</span>
                        <span class="mx-2">|</span>
                        <span>{{$popularMovie['release_date']}}</span>
                    </div>
                    <div class="text-gray:400 text-sm ">
                        @foreach($popularMovie['genre_ids'] as $genre)
                        {{$genres->get($genre)}}
                        @if(!$loop -> last), @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <!-- end pouplar-movies -->

    <div class=" now-playing-movies py-24">
        <h2 class="uppercase tracking-wider text-blue-500 text-lg font-semibold">Now Playing</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach($nowPlayingMovies as $nowPlayingMovie)
            <div class="mt-8">
                <a href="{{ route('movies.show', $nowPlayingMovie['id']) }}"><img class="hover:opacity-75"
                        src="{{'https://image.tmdb.org/t/p/w500/'.$nowPlayingMovie['poster_path']}}"
                        alt="the photo of the film">
                </a>
                <div class="mt-2">
                    <a href="{{ route('movies.show', $nowPlayingMovie['id']) }}"
                        class="text-lg mt-2 hover:text-gray:300 hover:opacity-75">
                        {{$nowPlayingMovie['title']}}
                    </a>
                    <div class="flex items-center text-gray:600 text-sm mt-1 ">
                        <span>
                            <img class="w-4 ..."
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Star_icon_stylized.svg/1077px-Star_icon_stylized.svg.png"
                                alt="star">
                        </span>
                        <span class="ml-1">{{$nowPlayingMovie['vote_average']*10}}%</span>
                        <span class="mx-2">|</span>
                        <span>{{$nowPlayingMovie['release_date']}}</span>
                    </div>
                    <div class="text-gray:400 text-sm ">
                        @foreach($nowPlayingMovie['genre_ids'] as $genre)
                        {{$genres->get($genre)}}
                        @if(!$loop -> last), @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- end now-playing-movies -->
    <div class=" now-playing-movies py-0">
        <h2 class="uppercase tracking-wider text-blue-500 text-lg font-semibold">Top Rated</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach($topRatedMovies as $topRatedMovie)
            <div class="mt-8">
                <a href="{{ route('movies.show', $topRatedMovie['id']) }}"><img class="hover:opacity-75"
                        src="{{'https://image.tmdb.org/t/p/w500/'.$topRatedMovie['poster_path']}}"
                        alt="the photo of the film">
                </a>
                <div class="mt-2">
                    <a href="{{ route('movies.show', $topRatedMovie['id']) }}"
                        class="text-lg mt-2 hover:text-gray:300 hover:opacity-75">
                        {{$topRatedMovie['title']}}
                    </a>
                    <div class="flex items-center text-gray:600 text-sm mt-1 ">
                        <span><img class="w-4 ..."
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Star_icon_stylized.svg/1077px-Star_icon_stylized.svg.png"
                                alt="star"></span>
                        <span class="ml-1">{{$topRatedMovie['vote_average']*10}}%</span>
                        <span class="mx-2">|</span>
                        <span>{{$topRatedMovie['release_date']}}</span>
                    </div>
                    <div class="text-gray:400 text-sm ">
                        @foreach($topRatedMovie['genre_ids'] as $genre)
                        {{$genres->get($genre)}}
                        @if(!$loop -> last), @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- end top-rated-movies -->
</div>
@endsection