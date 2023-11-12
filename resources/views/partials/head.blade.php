<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ __('content.title') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ __('content.description') }}" />
    <meta name="keywords" content="{{ __('content.keywords') }}" />
    <meta name="author" content="{{ __('content.author') }}" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <style>
        :root {
            --bs-primary: #fb6e14;
            /* Your new primary color */
            --bs-primary-rgb: 251, 108, 19;
            /* Your new primary color */
        }

        .btn-primary,
        .btn-primary:hover,
        .btn-primary:focus {
            background-color: var(--bs-primary);
            border-color: var(--bs-primary);
        }

        .btn-outline-primary {
            --bs-btn-color: var(--bs-primary);
            --bs-btn-border-color: var(--bs-primary);
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: var(--bs-primary);
            --bs-btn-hover-border-color: var(--bs-primary);
            --bs-btn-focus-shadow-rgb: 13, 110, 253;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: var(--bs-primary);
            --bs-btn-active-border-color: var(--bs-primary);
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: var(--bs-primary);
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: var(--bs-primary);
            --bs-gradient: none;
        }

        .navbar-toggler {
            border-color: var(--bs-primary);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(40, 167, 69, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        .text-primary {
            color: var(--bs-primary);
        }

        a {
            color: rgba(var(--bs-primary-rgb), var(--bs-link-opacity, 0.8));
            text-decoration: underline;
        }

        /* Additional styles can be added here */
        html {
            scroll-behavior: smooth;
            /* color: #fb6e14; */
        }

        body {
            font-family: 'Tajawal', sans-serif !important;
        }

        .bg-y {
            background-image: url('{{ url('template/images/yellow.jpg') }}');
        }

        .navbar {
            background-image: url('{{ url('template/images/red.jpg') }}');
            /* Add your background image URL here */
            background-repeat: repeat;
        }

        .navbar-brand img {
            height: 30px;
            /* Adjust the size of your logo */
        }

        .footer {
            background-image: url('{{ url('template/images/red.jpg') }}');
            /* Add your background image URL here */
            background-repeat: repeat;
            color: white;
            /* Adjust text color as needed */
        }
    </style>
</head>
