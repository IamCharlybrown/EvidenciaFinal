<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9dbb855c24.js" crossorigin="anonymous"></script>
    <style>
        .mainTitle h1 {
            transform: scale(1);
            opacity: 0.3;
            transition: transform 1.5s ease, opacity 1s ease;
        }
    </style>
    <script>
        window.onload = function () {
            var titles = document.querySelectorAll('.mainTitle h1');
            titles.forEach(function (title) {
                title.style.transform = 'scale(1.4)';
                title.style.opacity = '1';
            });
        };
    </script>
</head>

<body>