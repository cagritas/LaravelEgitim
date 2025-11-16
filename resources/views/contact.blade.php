<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Contact Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <!-- Basic training form that posts to the contact request controller. -->
    <!-- Surface a simple success message after the controller redirects back. -->
    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <form action="{{ route('contact.submit') }}" method="post">
        @csrf
        <label>Full Name</label>
        <input type="text" name="full_name"><br>
        <label>Phone Number</label>
        <input type="text" name="phone_number"><br>
        <label>Email</label>
        <input type="text" name="email"><br>
        <label>Message</label>
        <!-- Capture the message field that the middleware inspects -->
        <textarea name="message" placeholder="Type your training message here"></textarea> <br>
        <input type="submit" name="submit" value="Send">
    </form>
</body>
</html>
