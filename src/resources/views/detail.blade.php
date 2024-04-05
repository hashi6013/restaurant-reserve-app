@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="detail-wrapper">
    <div class="restaurant-detail">
    <!-- データベースから持ってきた飲食店情報 -->
    </div>
    <div class="reservation">
        <h3 class="reservation-title">予約</h3>
        <input type="date">
        <input type="time">
        <select name="" id=""></select>
        <div class="reservation-input-container">
            <div class="reservation-input__content">
                <dl class="reservation-input__content-list">
                    <dt class="reservation-input__content-term">Shop</dt>
                    <dd class="reservation-input__content-description">
                        <!-- 店舗名 -->
                    </dd>
                    <dt class="reservation-input__content-term">Date</dt>
                    <dd class="reservation-input__content-description">
                        <!-- 日付 -->
                    </dd>
                    <dt class="reservation-input__content-term">Time</dt>
                    <dd class="reservation-input__content-description">
                    <!-- 時間 -->
                    </dd>
                    <dt class="reservation-input__content-term">Number</dt>
                    <dd class="reservation-input__content-description">
                        <!-- 人数 -->
                    </dd>
                </dl>
            </div>
        </div>
        <div class="reservation-button">
            <button class="reservation-button__submit">予約する</button>
        </div>
    </div>
</div>
@endsection