<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'IoT Module Monitoring by Chaitra Acharekar')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: #f8f9fa;
            margin-top: 20px;
        }
        .chart-container {
            max-width: 800px;
            margin: 0 auto;
        }
        .table thead th {
            background-color: #6c757d;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('modules.index') }}">IoT Monitoring</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('modules.index') }}">Module Status</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('modules.create') }}">Register New Module</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mt-5">
        @yield('content')
    </div>

    <footer class="footer mt-5">
        <div class="container">
            <p>WeBreathe Task by Chaitra Acharekar &copy; {{ date('Y') }} IoT Module Monitoring System.</p>
            <p>GitHub: <a href="https://github.com/TheGeekScript" target="_blank" class="text-black">@TheGeekScript</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
                Email ID: <a href="mailto:web.chaitra@gmail.com" class="text-black">web.chaitra@gmail.com</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
                Phone: <a href="tel:+918454099091" class="text-black">+91 8454 0990 91</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>