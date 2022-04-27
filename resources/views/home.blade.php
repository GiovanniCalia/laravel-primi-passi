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

    {{-- @dd($links) --}}

    <h1>Hello World!</h1>

    <ul>
        @foreach ($links as $link)
          <li><a href="{{ route($link['name']) }}">{{ $link['name'] }}</a></li>
        @endforeach
    </ul>
</body>
</html>