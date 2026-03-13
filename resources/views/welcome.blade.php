@extends('layout.index')

@section('title','Home')

@section('content')

@include('partials.header')

<main>
    <section class="carousel next">
        <div class="list">

            <article class="item other_1">
                <div class="main-content" 
                style="background-color: #d0b7df;">
                    <div class="content">
                        <h2>iPhone 17</h2>
                        <p class="price">From $799</p>
                        <p class="description">
                            Experience the future of smartphones.
                        </p>
                        <button class="btn">
                            Learn More
                        </button>
                    </div>
                </div>
                <figure class="image">
                    <img src="img/iphone17/iphone17_purple.png" alt="iPhone 17">
                    <div class="color-dots">
                        <button class="dot active" data-index="0" style="background:#d2cfd3" title="White"></button>
                        <button class="dot" data-index="1" style="background:#d0b7df" title="Purple"></button>
                        <button class="dot" data-index="2" style="background:#9aa986" title="Green"></button>
                        <button class="dot" data-index="3" style="background:#afbfd7" title="Blue"></button>
                        <button class="dot" data-index="4" style="background:#6c6c6c" title="Black"></button>
                    </div>
                </figure>
            </article>

            <article class="item active">
                <div class="main-content" 
                style="background-color: #d2cfd3;">
                    <div class="content">
                        <h2>iPhone 17</h2>
                        <p class="price">From $799</p>
                        <p class="description">
                            Experience the future of smartphones.
                        </p>
                        <button class="btn">
                            Learn More
                        </button>
                    </div>
                </div>
                <figure class="image">
                    <img src="img/iphone17/iphone17_white.png" alt="iPhone 17">
                    <div class="color-dots">
                        <button class="dot active" data-index="0" style="background:#d2cfd3" title="White"></button>
                        <button class="dot" data-index="1" style="background:#d0b7df" title="Purple"></button>
                        <button class="dot" data-index="2" style="background:#9aa986" title="Green"></button>
                        <button class="dot" data-index="3" style="background:#afbfd7" title="Blue"></button>
                        <button class="dot" data-index="4" style="background:#6c6c6c" title="Black"></button>
                    </div>
                </figure>
            </article>

            <article class="item other_2">
                <div class="main-content" 
                style="background-color: #9aa986;">
                    <div class="content">
                        <h2>iPhone 17</h2>
                        <p class="price">From $799</p>
                        <p class="description">
                            Experience the future of smartphones.
                        </p>
                        <button class="btn">
                            Learn More
                        </button>
                    </div>
                </div>
                <figure class="image">
                    <img src="img/iphone17/iphone17_green.png" alt="iPhone 17">
                    <div class="color-dots">
                        <button class="dot active" data-index="0" style="background:#d2cfd3" title="White"></button>
                        <button class="dot" data-index="1" style="background:#d0b7df" title="Purple"></button>
                        <button class="dot" data-index="2" style="background:#9aa986" title="Green"></button>
                        <button class="dot" data-index="3" style="background:#afbfd7" title="Blue"></button>
                        <button class="dot" data-index="4" style="background:#6c6c6c" title="Black"></button>
                    </div>
                </figure>
            </article>

            <article class="item">
                <div class="main-content" 
                style="background-color: #afbfd7;">
                    <div class="content">
                        <h2>iPhone 17</h2>
                        <p class="price">From $799</p>
                        <p class="description">
                            Experience the future of smartphones.
                        </p>
                        <button class="btn">
                            Learn More
                        </button>
                    </div>
                </div>
                <figure class="image">
                    <img src="img/iphone17/iphone17_blue.png" alt="iPhone 17">
                    <div class="color-dots">
                        <button class="dot active" data-index="0" style="background:#d2cfd3" title="White"></button>
                        <button class="dot" data-index="1" style="background:#d0b7df" title="Purple"></button>
                        <button class="dot" data-index="2" style="background:#9aa986" title="Green"></button>
                        <button class="dot" data-index="3" style="background:#afbfd7" title="Blue"></button>
                        <button class="dot" data-index="4" style="background:#6c6c6c" title="Black"></button>
                    </div>
                </figure>
            </article>

            <article class="item">
                <div class="main-content" 
                style="background-color: #6c6c6c;">
                    <div class="content">
                        <h2>iPhone 17</h2>
                        <p class="price">From $799</p>
                        <div class="color-dots">
                            <button class="dot active" data-index="0" style="background:#d2cfd3" title="White"></button>
                            <button class="dot" data-index="1" style="background:#d0b7df" title="Purple"></button>
                            <button class="dot" data-index="2" style="background:#9aa986" title="Green"></button>
                            <button class="dot" data-index="3" style="background:#afbfd7" title="Blue"></button>
                            <button class="dot" data-index="4" style="background:#6c6c6c" title="Black"></button>
                        </div>
                        <button class="btn">
                            Learn More
                        </button>
                    </div>
                </div>
                <figure class="image">
                    <img src="img/iphone17/iphone17_black.png" alt="iPhone 17">
                    <figcaption>Experience the future of smartphones.</figcaption>
                </figure>
            </article>

        </div>
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
    </section>
</main>

@endsection