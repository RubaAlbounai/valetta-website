@extends('layouts.app')

@section('content')
<style>
    /* ===== GLOBAL STYLES ===== */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background: #f5f5f5;
    }

    .book-section {
        padding: 50px 20px;
        text-align: center;
        color: #333;
    }

    .book-section h2 {
        font-size: 32px;
        margin-bottom: 20px;
    }

    .book-section p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    .contact-buttons {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .contact-buttons a {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 15px 25px;
        text-decoration: none;
        color: white;
        background-color: #c0392b;
        border-radius: 8px;
        font-weight: bold;
        transition: background 0.3s;
    }

    .contact-buttons a:hover {
        background-color: #e74c3c;
    }

    /* ===== MENU IMAGES ===== */
    .menu-preview {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin: 40px 0;
        flex-wrap: wrap;
    }

    .menu-preview img {
        width: 100%;
        max-width: 420px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        cursor: zoom-in;
        transition: transform 0.3s;
    }

    .menu-preview img:hover {
        transform: scale(1.05);
    }

    /* ===== LIGHTBOX ===== */
    .lightbox {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,0.8);
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .lightbox img {
        max-width: 90%;
        max-height: 90%;
        border-radius: 12px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.4);
    }

    .lightbox .close {
        position: absolute;
        top: 20px;
        right: 30px;
        font-size: 32px;
        color: #fff;
        cursor: pointer;
        font-weight: bold;
    }

    @media(max-width: 768px) {
        .contact-buttons {
            flex-direction: column;
        }
    }
</style>

<div class="book-section">
    <h2>Book a Table</h2>
    <pЗабронировать столик теперь очень просто! Свяжитесь с нами напрямую, используя любой из следующих способов:</p>

    <!-- MENU IMAGES -->
    <div class="menu-preview">
        <img src="{{ asset('images/menu1.jpeg') }}" alt="Menu 1" onclick="openLightbox(this.src)">
        <img src="{{ asset('images/menu2.jpeg') }}" alt="Menu 2" onclick="openLightbox(this.src)">
    </div>

    <div class="contact-buttons">
        <a href="tel:+79199617088">📞 Call Now</a>
        <a href="https://wa.me/79199617088" target="_blank">💬 WhatsApp</a>
        <a href="https://t.me/79199617088" target="_blank">💬 Telegram</a>
        <a href="https://www.instagram.com/valletta_moscow?igsh=YXFoYTVlZHM5ZzFi" target="_blank">📸 Instagram</a>
    </div>
</div>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
    <span class="close" onclick="closeLightbox()">×</span>
    <img id="lightbox-img" src="">
</div>

<script>
    function openLightbox(src) {
        document.getElementById('lightbox-img').src = src;
        document.getElementById('lightbox').style.display = 'flex';
    }

    function closeLightbox() {
        document.getElementById('lightbox').style.display = 'none';
    }
</script>

@endsection
