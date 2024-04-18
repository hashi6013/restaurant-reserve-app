@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="mypage">
    <div class="mypage-container">
        <div class="mypage__name">
            <h2 class="mypage__name-text">
                {{$users->name}}さん
            </h2>
        </div>
        <div class="mypage__reservation">
            <h3 class="mypage__reservation-title">予約状況</h3>
            @foreach ($profiles as $key=>$profile)
            <div class="mypage__reservation-card">
                <div class="mypage__reservation-card-container">
                    <div class="mypage__reservation-card-layout">
                        <i class="fa-regular fa-clock"></i>
                        
                        <h4 class="mypage__reservation-card-title">
                            予約{{$key+1}}
                        </h4>
                    <!-- バツボタン -->
                        <form class="mypage__reservation-card-button" action="">
                            <button class="mypage__reservation-card-button-delete">
                                <i class="fa-regular fa-circle-xmark"></i>
                            </button>
                        </form>
                    </div>
                    <div class="card-content">
                        <dl class="card-content__list">
                            <div class="card-content__list-layout">
                                <dt class="card-content__list-term">Shop</dt>
                                
                                <dd class="card-content__list-description">
                                    {{$profile->restaurant->restaurant_name}}
                                </dd>
                            </div>
                            <div class="card-content__list-layout">
                                <dt class="card-content__list-term">Date</dt>
                                <dd class="card-content__list-description">
                                    {{$profile->reserve_date}}
                                </dd>
                            </div>
                            <div class="card-content__list-layout">
                                <dt class="card-content__list-term">Time</dt>
                                <dd class="card-content__list-description">
                                    {{ substr($profile->reserve_time, 0, 5) }}
                                </dd>
                            </div>
                            <div class="card-content__list-layout">
                                <dt class="card-content__list-term">Number</dt>
                                <dd class="card-content__list-description">
                                    {{$profile->reserve_number}}人
                                </dd>
                                @endforeach
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card-container">
            
            <h3 class="card__name">お気に入り店舗</h3>
            @foreach($favorites as $favorite)
            <article class="card">
                <div class="card__img">
                    <img src="{{ asset('storage/'.$favorite->restaurant->restaurant_image)}}" width="240" height="120" alt="お店の画像" decoding="async">
                </div>
                <div class="card__content">
                    <h4 class="card__content-title">
                        {{$favorite->restaurant->restaurant_name}}
                    </h4>
                    <div class="card__content-tag">
                        <p class="card__content-tag-item">
                            #{{$favorite->restaurant->area->prefecture}}
                        </p>
                        <p class="card__content-tag-item card__content-tag-item--genre">
                            #{{$favorite->restaurant->genre->content}}
                        </p>
                    </div>
                    <div class="card__content-link">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
                
            </article>
            
            @endforeach
            
        </div>
    </div>
</div>

@endsection