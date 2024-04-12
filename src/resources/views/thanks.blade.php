@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="register-thanks__content">
    <div class="register-thanks__content-container">
        <div class="register-thanks__heading">
            <h2 class="register-thanks__heading-title">会員登録ありがとうございます</h2>
            <div class="register-thanks__link">
                <a class="register-thanks__link-item" href="/">ホームへ</a>
            </div>
        </div>
    </div>
</div>
@endsection