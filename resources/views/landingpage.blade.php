<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            padding-top: 80px; /* Penambahan padding agar konten tidak tertutupi oleh navbar */
        }

        /* Navbar */
        nav {
            background-color: #162d5b;
            color: white;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: background-color 0.5s ease;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 40px;
        }

        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #f0db4f;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background-image: url('{{ asset('storage/img/BackGround-RS.jpg') }}'); /* Ganti dengan path yang tepat */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
            color: black;
            transition: all 0.5s ease;
        }

        .hero h1 {
            font-size: 2rem;
            opacity: 0;
            transform: translateY(-50px);
            animation: fadeIn 1s forwards;
        }

        .hero a.btn {
            padding: 10px 20px;
            background-color: #f0db4f;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            margin-top: 20px;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInBtn 1.5s forwards;
        }

        .hero a.btn:hover {
            background-color: #3967c2;
            color: white;
            transform: scale(1.05);
        }

        /* Animations */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInBtn {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Additional Sections for Scroll */
        .section {
            padding: 100px 20px;
            text-align: center;
        }

        .section:nth-child(even) {
            background-color: #f4f4f4;
        }

        .section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .section p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Footer */
        footer {
            background-color: #14326d;
            color: white;
            text-align: center;
            padding: 15px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero a.btn {
                padding: 8px 16px;
                font-size: 0.9rem;
            }

            nav ul {
                flex-direction: column;
                align-items: flex-end;
            }

            nav ul li {
                margin: 10px 0;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 1.8rem;
            }

            .hero a.btn {
                padding: 8px 16px;
                font-size: 0.8rem;
            }

            nav ul {
                flex-direction: column;
                align-items: flex-end;
            }

            nav ul li {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <div class="logo">
            <a href="/"><img src="{{ asset('storage/img/logo_rsbl.png') }}" alt="Logo"></a>
            <h4>RS Bhayangkara Lumajang</h4> <!-- Gunakan path yang benar -->
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Sistem Informasi SDM RS Bhayangkara Lumajang</h1>
        <a href="{{ route('login') }}" class="btn"> Login</a>
    </div>

    <!-- Additional Content Sections for Scroll -->
    <div class="section">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis.</p>
    </div>

    <div class="section">
        <h2>Our Services</h2>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
    </div>

    <div class="section">
        <h2>Contact Us</h2>
        <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>

</body>
</html>