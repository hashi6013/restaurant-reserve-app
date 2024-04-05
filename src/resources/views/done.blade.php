@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
<div class="thanks__content">
    <div class="thanks__heading">
        <h2 class="thanks__heading-title">ご予約ありがとうございます</h2>
        <div class="thanks__heading-link">
            <a class="thanks__heading-link-item" href="/">戻る</a>
        </div>
    </div>
</div>
@endsection