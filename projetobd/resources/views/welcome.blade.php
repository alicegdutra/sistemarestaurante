<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f3e7;
        }
        .card {
            border-radius: 1rem;
            background-color: #fffaf0;
        }
        .card-body {
            padding: 2rem;
        }
        .btn-primary {
            background-color: #5a3825;
            border-color: #5a3825;
            width: 150px;
        }
        .btn-primary:hover {
            background-color: #4a2f20;
            border-color: #4a2f20;
        }
        .card-title {
            color: #5a3825;
            margin-bottom: 1.5rem;
        }
        .container {
            max-width: 400px;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-12">
        <div class="card shadow-lg">
            <div class="card-body text-center">
                <h5 class="card-title">Sistema de Controle C&B</h5>
                @auth
                    <a href="/dashboard" class="btn btn-primary mb-2">
                        Acessar o sistema
                    </a>
                @else
                    <div class="d-flex justify-content-center gap-2">
                        <a href="/login" class="btn btn-primary">
                            Acessar o sistema
                        </a>
                        <a href="/register" class="btn btn-primary">
                            Crie sua conta
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
