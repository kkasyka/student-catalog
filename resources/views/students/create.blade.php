<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавление студента</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 40px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 8px 0 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background: #2563eb;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            color: #2563eb;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Добавить студента</h1>

    <form action="/students" method="POST">
        @csrf

        <label>ФИО</label>
        <input type="text" name="full_name"
               value="{{ old('full_name') }}"
               placeholder="Введите ФИО">

        @error('full_name')
        <div class="error">{{ $message }}</div>
        @enderror

        <label>Группа</label>
        <input type="text" name="group_name"
               value="{{ old('group_name') }}"
               placeholder="Введите группу">

        @error('group_name')
        <div class="error">{{ $message }}</div>
        @enderror

        <label>Email</label>
        <input type="email" name="email"
               value="{{ old('email') }}"
               placeholder="Введите Email">

        @error('email')
        <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Сохранить</button>
    </form>

    <a href="/students">Вернуться к списку</a>
</div>

</body>
</html>

