@extends('layouts.app')

@section('main-content')

<section class="jumbotron-container">
    <img src="{{ Vite::asset('resources/assets/laravel-comics/images/jumbotron.jpg') }}" alt="Jumbotron image">
</section>
<section class="comics-section df-c">
    <div class="comics-section-titlewrapper">
        <h2>Current series</h2>
    </div>
    <div class="container-comics">
        @foreach ($comics as $comic)
        <article class="card">
            <img src="{{$comic['thumb']}}" alt="comic image">
            <p>{{$comic['series']}}</p>
        </article>
        @endforeach
    </div>
    <div class="button-wrapper">
        <button>Load more</button>
    </div>
</section>
<section class="infobuy-section df-jc">
    <div class="container df-se">
        <article>
            <img src="{{ Vite::asset('resources/assets/laravel-comics/images/buy-comics-digital-comics.png') }}" alt="digital comics logo">
            <span>Digital Comics</span>
        </article>
        <article>
            <img src="{{ Vite::asset('resources/assets/laravel-comics/images/buy-comics-merchandise.png') }}" alt="dc merchandise tshirt logo">
            <span>Dc Merchandise</span>
        </article>
        <article>
            <img src="{{ Vite::asset('resources/assets/laravel-comics/images/buy-comics-subscriptions.png') }}" alt="subscription plan logo">
            <span>Subscriptions</span>
        </article>
        <article>
            <img class="my-pin-size" src="{{ Vite::asset('resources/assets/laravel-comics/images/buy-comics-shop-locator.png') }}" alt="pin shop locator">
            <span>Comics Shop Locator</span>
        </article>
        <article>
            <img src="{{ Vite::asset('resources/assets/laravel-comics/images/buy-dc-power-visa.svg') }}" alt="cars visa logo">
            <span>DC Power Visa</span>
        </article>
    </div>
</section>
@endsection