<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lab 2')</title>
    <!-- стили и скрипты -->
<style>
        /* Основной стиль страницы */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
        }

        /* Контейнер с отступами */
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Заголовки */
        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Стиль для формы */
        form {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        select,
        button {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Стиль для таблицы */
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f1f1f1;
        }

        table td {
            background-color: #fff;
        }

        table tr:hover td {
            background-color: #f9f9f9;
        }

        .badge {
            background-color: #6c757d;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
        }

        /* Стиль для пагинации */
        .pagination {
            list-style: none;
            padding: 0;
            text-align: center;
            margin-top: 20px;
        }

        .pagination li {
            display: inline-block;
            margin: 0 5px;
        }

        .pagination a,
        .pagination span {
            display: inline-block;
            padding: 8px 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: #007bff;
            text-decoration: none;
        }

        .pagination a:hover {
            background-color: #f1f1f1;
        }

        .pagination .active a {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }
    </style>
<style>
   .article-details {
    margin-bottom: 20px;
}

/* Стиль для списка тегов */
.tags ul {
    list-style-type: none;
    padding-left: 0;
}

.tags li {
    background-color: #f8f9fa;
    border-radius: 4px;
    padding: 5px 10px;
    display: inline-block;
    margin: 5px;
    font-size: 14px;
    border: 1px solid #ccc;
}

.tags h3 {
    font-size: 18px;
    margin-bottom: 10px;
}
</style>

</head>
<body>
    <header>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
    </footer>
</body>
</html>

