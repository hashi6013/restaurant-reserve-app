@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/post.css') }}">
@endsection

@section('content')
<div class="thanks__content">
    <div class="thanks__content-container">
        <div class="thanks__heading">
            <h2 class="thanks__heading-title">投稿ありがとうございます</h2>
            <div class="thanks__link">
                <a class="thanks__link-item" href="/">戻る</a>
            </div>
        </div>
    </div>
</div>
@endsection