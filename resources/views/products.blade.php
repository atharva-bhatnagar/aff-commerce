<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Aff-commerce</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
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

        /* Main Content Styling */
        .main-content {
            padding: 20px;
            text-align: center;
        }

        /* Product Grid Styling */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
            margin-bottom: 400px;
        }

        /* Product Card Styling */
        .product-card {
            background-color: #fff;
            max-width: 300px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            width: 100%;
            height: 250px;
            border-radius: 8px;
            margin-bottom: 10px;
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
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <div>
            <span style="font-weight: bold; font-size: 1.5em;">Aff-commerce</span>
        </div>
        <div>
            <a href="{{ route('home')}}">Home</a>
            <a href="{{route('about')}}">About</a>
            <a href="{{route('login')}}">Login</a>
            <a href="">Products</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Explore Our Products</h1>

        <!-- Product Grid -->
        <div class="product-grid">
            <!-- Product Card 1 -->
            @foreach ($products as $product)

            <div class="product-card" onclick="window.location.href='{{$product['link']}}'">
                <img src="{{asset($product->image)}}" alt="Product 1">
                <h3>{{$product['title']}}</h3>
                <p>{{$product['desc']}}</p>
            </div>
                
            @endforeach
            
            {{-- <!-- Product Card 2 -->
            <div class="product-card" onclick="window.location.href='product-link-2'">
                <img src="product-image-2.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>Short description of Product 2.</p>
            </div>

            <!-- Add more product cards as needed --> --}}

        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>Copyright @ 2023</p>
    </footer>

</body>
</html>
