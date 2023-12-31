<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>No Access</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, Helvetica, sans-serif
        }

        .main {
            text-align: center;
        }

        .main img {
            width: 200px;
        }

        .main a {
            background: #af0000;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
            transition: all 0.3s ease
        }

        .main a:hover {
            background: #e94444;
        }
    </style>
</head>

<body>
    <div class="main">
        <img src="{{ asset('forbidden.png') }}" alt="">
        <h2>You Don't have access to this page</h2>
        <a href="{{ url('/site') }}">Go To Home</a>
    </div>
</body>

</html>
