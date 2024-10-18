<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Styles -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                background-color: #f0f4f8;
                color: #4a5568;
            }
            .guest-container {
                max-width: 400px;
                margin-top: 50px;
                border-radius: 15px;
                background-color: white;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
                padding: 30px;
            }
            .logo-container {
                margin-bottom: 30px;
            }
            .logo-container svg {
                height: 80px;
                width: 80px;
                fill: #4a90e2;
            }
            .bg-light-custom {
                background-color: #e2edf8;
            }
        </style>
    </head>
    <body class="d-flex justify-content-center align-items-center min-vh-100 bg-light-custom">
        <div class="guest-container text-center">
            <!-- Logo -->
            <div class="logo-container">
                <a href="/">
                    <x-application-logo />
                </a>
            </div>

            <!-- Content Slot -->
            <div>
                {{ $slot }}
            </div>
        </div>

        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
