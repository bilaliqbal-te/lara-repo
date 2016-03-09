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
    </style>
</head>

<body>
<div class="container">
    <h1 class="title">Add TODO</h1>
    <div class="content">
        <form action="{{ action('TodoController@store') }}" method="post">
            <label>Message</label>
            <textarea name="message"></textarea>
            {{ csrf_field() }}
            <br />
            <input type="submit" value="Add Todo" />
        </form>
    </div>
</div>
</body>
</html>
