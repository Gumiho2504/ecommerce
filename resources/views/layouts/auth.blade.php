<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title","Ecommerce")</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield("style")
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">

    @yield("content")
</body>
@yield("script")
</html>
