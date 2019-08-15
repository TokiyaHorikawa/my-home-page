<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hello Vue</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script type="text/javascript">
        window.Laravel = window.Laravel || {};
        window.Laravel.csrfToken = "{{csrf_token()}}";
    </script>
</head>
<body>
<div id="app">
    <example-component></example-component>
</div>
<script src=" {{ mix('js/app.js') }} "></script>
</body>
</html>
