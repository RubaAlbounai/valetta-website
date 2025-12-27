@extends('layouts.app')

@section('content')
<style>
    /* ===== GLOBAL STYLES ===== */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background: #f5f5f5; /* نفس الخلفية لبقية الصفحات */
    }

    .location-section {
        padding: 50px 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 40px;
    }

    .location-info {
        flex: 1;
        min-width: 300px;
        max-width: 500px;
        color: #333; /* نفس لون النصوص */
    }

    .location-info h2 {
        font-size: 32px;
        margin-bottom: 20px;
    }

    .location-info p {
        margin: 10px 0;
        font-size: 16px;
    }

    .location-info .btn-direction {
        display: inline-block;
        padding: 12px 25px;
        margin-top: 15px;
        background-color: #c0392b; /* نفس لون أزرار الحجز */
        color: white;
        text-decoration: none;
        border-radius: 8px;
        font-weight: bold;
        transition: background 0.3s;
    }

    .location-info .btn-direction:hover {
        background-color: #e74c3c;
    }

    .map-container {
        flex: 1;
        min-width: 300px;
        max-width: 600px;
        height: 400px;
        border-radius: 10px;
        overflow: hidden;
    }

    /* Carousel صغير للصور */
    .location-images {
        margin-top: 40px;
        margin-left:35%;
        display: flex;
        gap: 15px;
        overflow-x: auto;
        scroll-behavior: smooth;
    }

    .location-images img {
        height: 150px;
        border-radius: 10px;
        flex-shrink: 0;
    }

    @media(max-width: 768px) {
        .location-section {
            flex-direction: column;
            align-items: center;
        }

        .map-container {
            width: 100%;
            height: 300px;
        }
    }
</style>

<div class="location-section">
    <div class="location-info">
        <h2>Find Us</h2>
        <p><strong>Address:</strong> Petrovka Street, 17с5, Moscow, Russia</p>
        <p><strong>Phone:</strong> +7(919)961-7088</p>
        <p><strong>Hours:</strong> 08:30 – 22:00</p>
        <p><strong>Rating:</strong> ⭐ 5.0 (311 reviews)</p>
        <a href="https://yandex.com/maps/-/CLuBj-9k" target="_blank" class="btn-direction">Get Directions</a>
    </div>

    <div class="map-container">
        <!-- Yandex Map Embed -->
        <iframe src="https://yandex.com/map-widget/v1/?um=constructor%3ACLuBj-9k&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
    </div>
</div>

<div class="location-images">
    <img src="{{asset('images/location1.webp')}}" alt="Restaurant view 1">
    <img src="{{asset('images/location2.webp')}}" alt="Restaurant view 2">
    <img src="{{asset('images/location3.webp')}}" alt="Restaurant view 3">
</div>

@endsection
