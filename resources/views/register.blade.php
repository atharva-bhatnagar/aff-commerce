<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <form action="#" method="post">
        @csrf
        <h2>Registration Form</h2>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" >

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" >

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" >

        {{-- <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required> --}}

        <p>Already have an account?<a href="{{route('login')}}">login</a></p>

        <input type="submit" value="Register">
    </form>
    @if ($errors->any())
        @foreach ($errors->all() as $err)
            <div>
                <p style="color: red">{{$err}}</p><br/>
            </div>
        @endforeach
    @endif

</body>
</html>