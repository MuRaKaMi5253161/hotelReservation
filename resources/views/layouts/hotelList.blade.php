<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>TravelHub ホテル予約サイト</title>
    <link rel="stylesheet" href="{{ asset('css/hotelList.css') }}">
</head>

<body>
    <header>
        <h1>TravelHub</h1>
    </header>

    <main>
        <h2>@yield('title', '予約')</h2>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2023 0401</p>
    </footer>
</body>

</html>
