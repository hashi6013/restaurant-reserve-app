@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('search')
<form class="search-form" action="">
    @csrf
    <div class="search-form__group">
        <select name="" id="">All areas</select>
        <select name="" id="">all genres</select>
        <input type="text" placeholder="Search ...">
    </div>
</form>
@endsection

@section('content')
<!-- 多分foreach文でまわす -->
<div class="card">
    <div class="card__img">
        <!-- DBに登録した画像 -->
    </div>
    <div class="card__content">
        <h2 class="card__content-title">
            <!-- 店舗名 -->
        </h2>
        <div class="card__content-tag">
            <p class="card__content-tag-item"><!-- 店舗地域 --></p>
            <p class="card__content-tag-item"><!-- 店舗ジャンル --></p>
        </div>
        <div class="card__content-link">
            <a href="card__content-link-item">
                <!-- 詳しく見るボタン -->
            </a>
            <button>
                <!-- お気に入りボタン -->
            </button>
        </div>
    </div>
</div>
@endsection