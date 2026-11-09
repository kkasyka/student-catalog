<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Каталог студентов</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            color: #333;
        }

        a {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #2563eb;
            color: white;
        }

        .success {
            background: #dcfce7;
            padding: 12px;
            margin-bottom: 15px;
            color: #166534;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Каталог студентов</h1>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <a href="/students/create">Добавить студента</a>

    @if($students->isEmpty())
        <p>Студентов пока нет</p>
    @else
        <table>
            <thead>
            <tr>
                <th>№</th>
                <th>ФИО</th>
                <th>Группа</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $index => $student)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $student->full_name }}</td>
                    <td>{{ $student->group_name }}</td>
                    <td>{{ $student->email }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>

</body>
</html>
