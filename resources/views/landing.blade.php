<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            margin-top: 90px;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        .head {
            background-image: url("https://wallpaperaccess.com/full/1395908.jpg");
            background-size: cover;
            color: white;
            padding: 40px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 80%;
            height: 200px;
        }

        .head h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .head h4 {
            margin-top: 10px;
            font-size: 1.2em;
            color: white;
        }

        .head form {
            margin-top: 20px;
        }

        .head input[type="text"] {
            width: 50%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1em;
        }

        .head button[type="submit"] {
            width: 10%;
            height: 42px;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.59);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }

        .head button[type="submit"]:hover {
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="head">
        <h1>LET'S GET TO KNOW ABOUT THE WEATHER</h1>
        <h4>Search your country now!</h4>
        <form action="{{ route('weather') }}" method="GET">
            <input type="text" name="city" placeholder="Enter city name">
            <button type="submit">go!</button>
        </form>
    </div>
</body>
</html>
