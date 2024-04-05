@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="mypage-wrapper">
    <div class="mypage-user">
        <h2 class="mypage-user__title">
            例さん
            <!-- データーベースから持ってくる -->
        </h2>
    </div>
    <div class="mypage-reservation">
        <div class="mypage-reservation-layout">
            <span>
                <!-- アイコン -->
            </span>
            <h3>予約id</h3>

        </div>

    </div>

</div>

@endsection