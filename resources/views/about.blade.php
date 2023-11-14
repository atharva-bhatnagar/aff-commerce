<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Aff-commerce</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
            display: flex;
            flex-direction: column;
            align-items: center;
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
        p{
            width: 60%;
            align-self: center;
            line-height: 20px;
            letter-spacing: 3px;
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
            <a href="">About</a>
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('products')}}">Products</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <h1>About us</h1>
        <p>Aff-commerce emerges as the vanguard of a transformative era in affiliate marketing, seamlessly blending innovation and empowerment. At its core, Aff-commerce is a dynamic platform designed to revolutionize the way affiliate marketers connect products with consumers.<br> Our mission is to empower affiliate marketers with cutting-edge tools and a collaborative space for effective and authentic product promotion.

            With a user-centric approach, Aff-commerce introduces a user-friendly interface that simplifies the affiliate marketing process.<br> Marketers can curate personalized profiles, establishing a unique brand identity that resonates with their audience. The platform facilitates efficient product management, making it a central hub for showcasing endorsed products.<br><br>
            
            One of Aff-commerce's key features is the integration of blogs, allowing affiliate marketers to communicate directly with their audience. This innovative approach enables marketers to go beyond conventional promotional content, fostering creativity and independence in their marketing endeavors.<br>
            
            Efficiency, creativity, and independence define Aff-commerce's ethos. Marketers can explore a diverse range of products from various affiliates in one centralized location, eliminating the need for individual landing pages.<br> Aff-commerce is not just a platform; it's a catalyst for change, empowering affiliate marketers to forge meaningful connections with their audience and succeed in the dynamic landscape of e-commerce. Join us on this journey where innovation meets empowerment, and affiliate marketing is redefined for a new era.</p>
    </div>

    <!-- Footer -->
    <footer>
        <p>Copyright @ 2023</p>
    </footer>

</body>
</html>
