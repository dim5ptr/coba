<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
</head>
<body>
    <h1>Welcome to Our Weather App</h1>
    <form action="{{ route('weather') }}" method="GET">
        <input type="text" name="city" placeholder="Enter city name">
        <button type="submit">Check Weather</button>
    </form>
</body>
</html>
