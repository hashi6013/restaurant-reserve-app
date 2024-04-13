@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="mypage">
    <div class="mypage-container">
        <div class="mypage__name">
            <h2 class="mypage__name-text">testさん</h2>
        </div>
        <div class="mypage__reservation">
            <h3 class="mypage__reservation-title">予約状況</h3>
            <div class="mypage__reservation-card">
                <div class="mypage__reservation-card-container">
                    <div class="mypage__reservation-card-layout">
                        <i class="fa-regular fa-clock"></i>
                        <h4 class="mypage__reservation-card-title">予約1</h4>
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
                                <dd class="card-content__list-description">仙人</dd>
                            </div>
                            <div class="card-content__list-layout">
                                <dt class="card-content__list-term">Date</dt>
                                <dd class="card-content__list-description">2021-04-01</dd>
                            </div>
                            <div class="card-content__list-layout">
                                <dt class="card-content__list-term">Time</dt>
                                <dd class="card-content__list-description">17:00</dd>
                            </div>
                            <div class="card-content__list-layout">
                                <dt class="card-content__list-term">Number</dt>
                                <dd class="card-content__list-description">1人</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card-container">
            
            <h3 class="card__name">お気に入り店舗</h3>
            <article class="card">
                <div class="card__img">
                    <img src="{{ asset('storage/sushi.jpg')}}" width="240" height="120" alt="お店の画像" decoding="async">
                </div>
                <div class="card__content">
                    <h4 class="card__content-title">
                        仙人
                    </h4>
                    <div class="card__content-tag">
                        <p class="card__content-tag-item">
                            #東京都
                        </p>
                        <p class="card__content-tag-item card__content-tag-item--genre">
                            #寿司
                        </p>
                    </div>
                    <div class="card__content-link">
                        <a class="card__content-link-item" href="/">
                            詳しくみる
                        </a>
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
            </article>
            
        </div>
    </div>
</div>

@endsection