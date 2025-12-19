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

<section class="categories">
    <h2>Shop by Category</h2>

    <div class="category-grid">
        <div class="category-card">Beds</div>
        <div class="category-card">Sofas</div>
        <div class="category-card">Dining</div>
        <div class="category-card">Storage</div>
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
