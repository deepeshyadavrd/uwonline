@extends('layouts.app')

@section('title', 'Solid Wood Furniture Online')

@section('content')

<section class="hero-bento">
    <a href="/beds" class="bento-card large">
        <h2>Solid Wood Beds</h2>
        <p>Handcrafted for lifetime comfort</p>
    </a>

    <a href="/sofas" class="bento-card">
        <h2>Wooden Sofas</h2>
        <p>Elegant & durable</p>
    </a>

    <a href="/dining-tables" class="bento-card">
        <h2>Dining Tables</h2>
        <p>Made for gatherings</p>
    </a>

    <a href="/storage-furniture" class="bento-card highlight">
        <h2>Storage Furniture</h2>
        <p>Smart & spacious</p>
    </a>
    <a href="/study-tables" class="bento-card highlight">
        <h2>Study Table</h2>
        <p>Smart & spacious</p>
    </a>
</section>

<section class="popular-categories">
    <h2 class="section-title">Popular Categories</h2>

    <div class="popular-wrapper">
        <div class="popular-track">
            <a class="category-card" href="/beds">Beds</a>
            <a class="category-card" href="/sofas">Sofa Sets</a>
            <a class="category-card" href="/dining">Dining Sets</a>
            <a class="category-card" href="/tv-unit">Tv Unit</a>
            <a class="category-card" href="/shoe-rack">Shoe Rack</a>
            <a class="category-card" href="/console-table">console-table</a>
            <a class="category-card" href="/coffee-tables">Coffee Tables</a>
            <a class="category-card" href="/cane-furniture">Cane Furniture</a>
            <a class="category-card" href="/cane-furniture">Cane Furniture</a>
            <a class="category-card" href="/cane-furniture">Cane Furniture</a>
            <a class="category-card" href="/cane-furniture">Cane Furniture</a>
            <a class="category-card" href="/cane-furniture">Cane Furniture</a>
        </div>
    </div>
</section>

<section class="products">
    <h2>Featured Products</h2>

    <div class="product-grid">
        <div class="product-card">
            <div class="img"></div>
            <h3>Wooden Bed</h3>
            <p>₹32,000</p>
        </div>

        <div class="product-card">
            <div class="img"></div>
            <h3>Dining Table</h3>
            <p>₹28,000</p>
        </div>
    </div>
</section>

<section class="usp">
    <div>🚚 Free Delivery</div>
    <div>🪵 Solid Wood</div>
    <div>🛠 1 Year Warranty</div>
</section>

@endsection
