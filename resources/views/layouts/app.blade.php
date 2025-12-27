<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/valletta_logo.png') }}">

    <title>Valetta Restaurant</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        :root {
            --burgundy: #8B1E24;
            --cream: #FAF7F2;
            --gold: #C9A24D;
            --dark: #1f1f1f;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: var(--cream);
            color: var(--dark);
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
            letter-spacing: 1px;
        }

        a { text-decoration: none; color: inherit; }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 32px;
            background: var(--cream);
            border-bottom: 1px solid #e5e1da;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            color: var(--burgundy);
        }

        .nav-links a {
            margin-left: 24px;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: var(--burgundy);
        }

        /* Buttons */
        .btn-primary {
            background: var(--burgundy);
            color: white;
            padding: 12px 26px;
            border-radius: 30px;
            display: inline-block;
            margin-top: 20px;
        }

        .btn-primary:hover {
            background: #6f171c;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 30px;
            font-size: 14px;
            color: #666;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo"><div class="logo">
    </div> 
           
Valetta</div>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/menu">Menu</a>
            <a href="/location">Location</a>
            <a href="/book">Book a Table</a>
        </div>
    </nav>

    <!-- Page Content -->
    @yield('content')

    <!-- Footer -->
    <footer>
        © {{ date('Y') }} Valetta Restaurant · Managed by Basem Zain
    </footer>

</body>
</html>
