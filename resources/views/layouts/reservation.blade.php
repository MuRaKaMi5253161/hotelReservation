<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>TravelHub ホテル予約フォーム</title>
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
</head>

<body>
    <header>
    </header>

    <main>
        <p>予約情報入力 >> お客様情報入力 >> 予約情報確認 >> 予約完了</p>
        <h2>@yield('title', '予約')</h2>
        <p>@yield('description')</p>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2023 0401</p>
    </footer>
</body>

</html>
