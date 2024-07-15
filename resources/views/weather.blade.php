<!DOCTYPE html>
<html>
<head>
    <title>Weather in {{ $city }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            background-image: url('https://i.pinimg.com/736x/c8/9b/35/c89b354abcdffe8fd86f4c820ab89951.jpg'); /* Ganti dengan gambar sesuai cuaca */
            background-size: cover;
            color: #fff;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .weather-info {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .weather-info p {
            margin: 10px 0;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Weather in {{ $city }}</h1>

        @if($weather)
            <div class="weather-info">
                <p>Temperature: {{ $weather['data'][0]['temp'] }} &deg;C</p>
                <p>Weather: {{ $weather['data'][0]['weather']['description'] }}</p>
                <p>Humidity: {{ $weather['data'][0]['rh'] }} %</p>
                <p>Wind Speed: {{ $weather['data'][0]['wind_spd'] }} m/s</p>
            </div>
        @else
            <p>Unable to retrieve weather data. Please try again later.</p>
        @endif
    </div>
</body>
</html>
