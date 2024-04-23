@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/review.css') }}">
@endsection

@section('content')
<div class="review">
    <div class="review-container">
        <div class="review__inner">
            <h2 class="review__title">レビュー</h2>
            <form class="review-form" action="/review/post" method="post">
                @csrf
                <dl class="review-list">
                    <div class="review-list-layout">
                        <dt class="review-list__term">Shop</dt>
                        <dd class="review-list__description">{{$review->restaurant_name}}</dd>
                    </div>
                    <div class="review-list-layout">
                        <dt class="review-list__term">Rate</dt>
                        <dd class="review-list__description review-list__rate">
                            <p class="review-list__rate-text">Excellent</p>
                            <input type="hidden" name="restaurant_id" value="{{$review['id']}}">
                            <input class="review-list__rate-input" id="star5" type="radio" name="stars" value="5">
                            <label class="review-list__rate-label" for="star5">
                                ★
                            </label>
                            <input class="review-list__rate-input" id="star4" type="radio" name="stars" value="4">
                            <label class="review-list__rate-label" for="star4">
                                ★
                            </label>
                            <input class="review-list__rate-input" id="star3" type="radio" name="stars" value="3">
                            <label class="review-list__rate-label" for="star3">
                                ★

                            </label>
                            <input class="review-list__rate-input" id="star2" type="radio" name="stars" value="2">
                            <label class="review-list__rate-label" for="star2">
                                ★
                            </label>
                            <input class="review-list__rate-input" id="star1" type="radio" name="stars" value="1">
                            <label class="review-list__rate-label" for="star1">
                                ★
                            </label>
                            <div class="form__error">
                            <!-- バリデーション -->
                            </div>
                        </dd>
                    </div>
                    <div class="review-list-layout">
                        <dt class="review-list__term">Comment</dt>
                        <dd class="review-list__description">
                            <textarea class="review-list__description--textarea" name="comment" id="" cols="30" rows="10" placeholder="コメントを入力してください">
                            </textarea>
                            <div class="form__error">
                            <!-- バリデーション -->
                            </div>
                        </dd>
                    </div>
                </dl>
                <div class="review-link">
                    <a class="review-link__item" href="/detail/{{$review->id}}">
                        戻る
                    </a>
                    <button class="review-link__submit" type="submit">投稿する</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection