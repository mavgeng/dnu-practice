<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Site</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS ссылка -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }
        header {
            width: 100%;
            background: #333;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }
        nav {
            width: 100%;
            background: #f0f0f0;
            padding: 0.5rem 0;
            text-align: center;
        }
        nav a {
            margin: 0 1rem;
            color: #333;
            text-decoration: none;
        }
        .content {
            width: 80%;
            max-width: 800px;
            flex: 1;
        }
        .news-item {
            border-bottom: 1px solid #ccc;
            padding: 1rem 0;
        }
        .news-item:last-child {
            border-bottom: none;
        }
        .news-title {
            font-size: 1.5rem;
            color: #333;
        }
        .news-summary {
            font-size: 1rem;
            color: #666;
        }
        .create-button-container {
            position: fixed;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            width: 100%;
        }

        .create-button {
            padding: 1rem 2rem;
            background-color: #333; /* Цвет фона кнопки */
            color: #fff; /* Цвет текста кнопки */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .create-button:hover {
            background-color: #555; /* Цвет фона кнопки при наведении */
        }
        footer {
            width: 100%;
            background: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
<header>
    <h1>News Site</h1>
</header>
<nav>
    <a href="{{ route('index') }}">Home</a>
    @foreach ($categoriess as $category)
        <a href="{{ route('posts.by.category', $category->id) }}">{{ $category->title }}</a>
    @endforeach
</nav>
<div class="content">
    @yield('content')
</div>
<footer>
    <p>2024 Oles Honchar Dnipro National University Matvieiev Evhenii ПЗ-22у-1</p>
</footer>
</body>
</html>
