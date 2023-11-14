<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aff-commerce</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        h1{
            width: 100%;
        }

        /* Navbar Styling */
        nav {
            background-color: #3498db;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        /* Image Styling */
        img {
            width: 45%;
            display: block;
            margin: 20px auto;
        }

        /* Main Content Styling */
        .main-content {
            padding: 20px;
            text-align: center;
        }

        /* Footer Styling */
        footer {
            background-color: #333;
            color: #ccc;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        button{
            border: none;
            border-radius: 20px;
            font-size: 15px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <div>
            <span style="font-weight: bold; font-size: 1.5em;">Aff-commerce</span>
        </div>
        <div>
            <a href="">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('products')}}">Products</a>

        </div>
    </nav>

    <!-- Image -->
    <h1>Welcome to Aff-commerce</h1>
    <img src="affcom.jpg" alt="Aff-commerce Image">

    <!-- Main Content -->
    <div class="main-content">
        
        <p>Your gateway to a revolutionary affiliate marketing experience. Join us in transforming promotions and empowering marketers.</p>
        <button onclick='location.href="http://127.0.0.1:8000/register"'>Get Started</button>
    </div>

    <!-- Footer -->
    <footer>
        <p>Copyright @ 2023</p>
    </footer>

</body>
</html>
