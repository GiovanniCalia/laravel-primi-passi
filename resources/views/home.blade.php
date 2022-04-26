<?php

use PhpParser\Node\Stmt\Foreach_;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>

    <!-- STYLE CSS -->
    <style>
        *{
            text-align: center;
        }
        li{
            list-style-type: none;
        }
    </style>
</head>
<body>
    <h1>Hello World!</h1>
    <ol>
        <li><a href="{{ route('head') }}">Vai qui</a></li>
        <li><a href="{{ route('head2') }}">Oppure qui</a></li>
    </ol>

    <ul>
        @foreach ($links as $link)
          <li>{{ $user['name'] ?? '' }}</li>
        @endforeach
    </ul>
</body>
</html>