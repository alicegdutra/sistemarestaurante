<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee&Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            background-color: #f5f5dc;
            color: #4b3621;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
        }

        .navbar {
            background-color: #4b3621;
        }

        .navbar-brand, .nav-link, .dropdown-toggle {
            color: #f5f5dc !important;
        }

        .navbar-brand:hover, .nav-link:hover, .dropdown-toggle:hover {
            color: #d2b48c !important;
        }

        .dropdown-menu {
            background-color: #4b3621;
        }

        .dropdown-item {
            color: #f5f5dc;
        }

        .dropdown-item:hover {
            background-color: #6f4e37;
            color: #f5f5dc;
        }

        footer {
            background-color: #4b3621;
            color: #f5f5dc;
            text-align: center;
            padding: 10px 0;
            width: 100%;
        }

        .btn {
            background-color: #6f4e37;
            color: #f5f5dc;
            border: 2px solid #4b3621;
        }

        .btn:hover {
            background-color: #8b5e3c;
        }

        .btn-danger {
            background-color: #d2b48c !important;
            color: #4b3621 !important;
            border: 2px solid #d2b48c !important;
        }

        .btn-danger:hover {
            background-color: #e6bea5 !important;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="/dashboard">Coffee&Book</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.camilocoffeestore.com.br/" target="_blank">Conheça nossa Loja!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cliente">Clientes</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/profile">Perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="POST">
                                @CSRF
                                <button type="submit" class="dropdown-item">Sair</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container content my-5">
    {{$slot}}
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <p>&copy; 2024 Sistema de Restaurante Coffee&Book. Todos os direitos reservados.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
