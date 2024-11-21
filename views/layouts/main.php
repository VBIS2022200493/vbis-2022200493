<?php ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobile Store</title>
    <style>
        .custom-header{
            width: 100%;
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
    <header class="custom-header">
        HEADER PAGE
    </header>
    <main>
        {{ RENDER_SECTION }}
    </main>
</body>
<footer class="custom-header">
    FOOTER PAGE
</footer>
</html>
