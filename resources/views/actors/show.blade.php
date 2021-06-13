@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <div class="flex-none">
            <img class="w-64 lg:w-96" src="https://image.tmdb.org/t/p/w500//xCEg6KowNISWvMh8GvPSxtdf9TO.jpg"
                alt="the photo of the film">
        </div>
        <div class="md:ml-24">
            <h2 class="text-4xl mt-4 md:mt-0 font-semibold"> {{ $actor['name'] }}</h2>
            <div class="flex items-center text-gray:600 text-sm mt-1 ">
                <span><img class="w-4 ..."
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Star_icon_stylized.svg/1077px-Star_icon_stylized.svg.png"
                        alt="star"></span>
                <span class="ml-2">stuff</span>


            </div>
            <p class="text-gray-300 mt-8">
                oveviewr
            </p>
        </div>
    </div>
</div>


<!-- <div class="credits border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Credits</h2>
        <ul class="list-disc leading-loose pl-5 mt-8">
           

        </ul>
    </div>
</div> -->
<!-- end credits-->
@endsection