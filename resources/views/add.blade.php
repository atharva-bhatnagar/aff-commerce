<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Aff-commerce</title>
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
            margin-bottom: 200px;
        }

        /* Form Styling */
        .form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
            
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="file"] {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
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
            <a href="{{route('profile')}}">My Products</a>
            
        </div>
        <form action="/logout" method="post">
            @csrf
            <button type="submit">Logout</button> 
        </form>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <h1>User Profile</h1>

        <!-- Form -->
        <form class="form" action="{{route('add.product')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="desc">Description:</label>
            <input type="text" id="desc" name="desc" required>

            <label for="desc">Link:</label>
            <input type="text" id="link" name="link" required>


            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="4" required></textarea>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>

            <input type="submit" value="Add">
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <p>Copyright @ 2023</p>
    </footer>

</body>
</html>
