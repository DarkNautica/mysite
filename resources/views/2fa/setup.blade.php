<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Two-Factor Authentication Setup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Two-Factor Authentication Setup</h1>

    <div class="alert alert-info text-center">
        A verification code has been sent to your email. Please enter it on the verification page.
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('2fa.verify') }}" class="btn btn-primary">Go to Verification Page</a>
    </div>
</div>
</body>
</html>
