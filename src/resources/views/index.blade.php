@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('search')

<form class="search-form" action="">
    @csrf
    <div class="search-form__group">
        <div class="search-form__select-container">
            <select class="search-form__select" name="" id="">
                <option value="">All areas</option>
            </select>
        </div>
        <div class="search-form__select-container">
            <select class="search-form__select" name="" id="">
                <option value="">All genres</option>
            </select>
        </div>
        <label>
            <input class="search-form__input" type="text" placeholder="Search ...">
        </label>
    </div>
    <div class="search-form__button">
        <button class="search-form__button-submit" area-label="検索する">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>
</form>
@endsection

@section('content')
<!-- 多分foreach文でまわす -->
<div class="card-wrapper">
    <div class="card">
        <div class="card__img">
            <!-- レイアウト確認のため記載、実際はデータベースから持ってくる -->
            <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="" srcset="" width="180" height="120">
        </div>
        <div class="card__content">
            <h2 class="card__content-title">
                仙人
            </h2>
            <div class="card__content-tag">
                <!-- レイアウト確認のため記載、実際はデータベースから持ってくる -->
                <p class="card__content-tag-item">#東京都</p>
                <p class="card__content-tag-item">寿司</p>
            </div>
            <div class="card__content-link">
                <a href="card__content-link-item">
                    詳しく見る
                </a>
                <i class="fa-regular fa-heart"></i>
            </div>
        </div>
    </div>
</div>


@endsection


