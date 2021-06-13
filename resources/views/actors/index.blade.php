@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="popular-actors">
        <h2 class="uppercase tracking-wider text-blue-500 text-lg font-semibold">Popular Actors</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach($popularActors as $popularActor)
            <div class="mt-8">
                <a href="{{ route('actors.show', $popularActor['id']) }}"><img class="hover:opacity-75"
                        src="{{'https://image.tmdb.org/t/p/w500/'.$popularActor['profile_path']}}"
                        alt="the photo of the film">
                </a>
                <div class="mt-2">
                    <a href="{{ route('actors.show', $popularActor['id']) }}"
                        class="text-lg mt-2 hover:text-gray:300 hover:opacity-75">
                        {{$popularActor['name']}}
                    </a>
                    <!-- <div class="text-sm trunccate text-gray:400"> {{$popularActor['known_for_department']}} </div> -->

                </div>
            </div>
            @endforeach

        </div>
    </div>
    <br> <br> <br>
    <!-- end pouplar-actors -->
</div>
@endsection