<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Products - Aff-commerce</title>
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
        }

        /* Product Card Styling */
        .product-card {
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            max-width: 300px;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            max-width: 100%;
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
        button{
            border: none;
            border-radius: 20px;
            font-size: 15px;
            padding: 10px 20px;
            background-color: white;
            color: #3498db;
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
            <a href="{{route('add')}}">Add</a>
            <a href="">My Products</a>
            
        </div>
        <form action="/logout" method="post">
            @csrf
            <button type="submit">Logout</button> 
        </form>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <h1>My Products</h1><br><br>

        @foreach ($products as $product)

            <div class="product-card" onclick="window.location.href='{{$product['link']}}'">
                <img src="{{asset($product->image)}}" alt="Product 1">
                <h3>{{$product['title']}}</h3>
                <p>{{$product['desc']}}</p>
            </div>
                
            @endforeach

        {{-- <!-- Product Grid -->
        <div class="product-grid">
            <!-- Product Card 1 -->
            <div class="product-card" onclick="window.location.href='product-link-1'">
                <img src="product-image-1.jpg" alt="Product 1">
                <h3>Product 1</h3>
                <p>Short description of Product 1.</p>
            </div>

            <!-- Product Card 2 -->
            <div class="product-card" onclick="window.location.href='product-link-2'">
                <img src="product-image-2.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>Short description of Product 2.</p>
            </div> --}}

            <!-- Add more product cards as needed -->

        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>Copyright @ 2023</p>
    </footer>

</body>
</html>
