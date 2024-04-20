@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('search')

<form class="search-form" action="/search" method="get">
    @csrf
    <div class="search-form__group">
        <div class="search-form__select-container">
            <select class="search-form__select" name="area_id" id="" value="{{request('area')}}">
                <option hidden value="">All areas</option>
                @foreach ($areas as $area)
                <option value="{{$area['id']}}" @if(request('area_id')==$area->id) selected @endif>{{$area['prefecture']}}</>
                @endforeach
            </select>
        </div>
        <div class="search-form__select-container">
            <select class="search-form__select" name="genre_id" value="{{request('genre')}}">
                <option hidden value="">All genres</option>
                @foreach ($genres as $genre)
                <option value="{{$genre['id']}}" @if(request('genre_id')==$genre->id) selected @endif>{{$genre['content']}}</option>
                @endforeach
            </select>
        </div>
        <label>
            <input class="search-form__input" type="text" name="keyword" value="{{request('keyword')}}" placeholder="Search ...">
        </label>
    </div>
    <div class="search-form__button">
        <button class="search-form__button-submit" type="submit" area-label="検索する">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>
</form>
@endsection

@section('content')

<div class="cards">
    <div class="cards-container">
        @foreach($restaurants as $restaurant)
        <article class="card">
            <div class="card__img">
                <img src="{{ asset('storage/'.$restaurant->restaurant_image)}}" width="240" height="160" alt="お店の画像" decoding="async">
            </div>
            <div class="card__content">
                <h2 class="card__content-title">
                    {{ $restaurant->restaurant_name }}
                </h2>
                <div class="card__content-tag">
                    <p class="card__content-tag-item">
                        #{{ $restaurant->area->prefecture }}
                    </p>
                    <p class="card__content-tag-item card__content-tag-item--genre">
                        #{{$restaurant->genre->content }}
                    </p>
                </div>
                <div class="card__content-link">
                    <a class="card__content-link-item" href="/detail/{{$restaurant->id}}">
                        詳しくみる
                    </a>
                    @if(Auth::check())
                    @if($restaurant->favorite_by_auth_user())
                    <a href="{{ route('restaurant.unlike', ['id' => $restaurant->id]) }}">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                    @else
                    <a href="{{ route('restaurant.favorite', ['id' => $restaurant->id]) }}" class="favorite">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                    @endif
                    
                    @endif
                </div>
            </div>
        </article>
        @endforeach
    </div>
</div>



@endsection


