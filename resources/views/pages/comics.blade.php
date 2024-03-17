@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <main>
        <div class="banner w-100 ">
            <div class="uppercase title">current series</div>
        </div>
        <div class="col-10 m-center">
            <div id="slider" class="flex">
                    @foreach ($currentSeries as $comic)
                        <div class="slide">
                            <figure>
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </figure>
                            <h4 class="uppercase">{{ $comic['title'] }}</h4>
                        </div>
                    @endforeach
            </div>
            <div class="flex justify-center">
                <button class="uppercase">load more</button>
            </div>
        </div>
    </main>
@endsection