<!DOCTYPE html>
<html>
<head>
    <title>Todo App</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
        }

        .content {
            width: 900px;
            display: inline-block;
        }

        .title {
            font-size: 42px;
        }

        table{
            border-collapse: collapse;
        }
        td{
            text-align: left;
        }
    </style>
</head>

<body>
<div class="container">
    <h1 class="title">Laravel TODO App</h1>
    <div class="content">
        <table width="100%" border="1">
            <tr>
                <th>ID</th>
                <th>Message</th>
            </tr>
            @if(count($todos) > 0)
                @foreach($todos as $todo)
                <tr>
                    <td>{{ $todo->id }}</td>
                    <td>{{ $todo->message }}</td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="2" style="text-align:center">No record found.</td>
                </tr>
            @endif
        </table>
    </div>
</div>
</body>
</html>
