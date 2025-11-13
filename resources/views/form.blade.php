<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="{{ route('sonuc') }}" method="post">
        @csrf

        <textarea name="metin"> </textarea> <br>
        <input type="submit" name="ilet" value="Gönder">
    </form>
</body>
</html>