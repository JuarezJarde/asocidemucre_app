<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Asocidemucre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-primary d-flex align-items-center" style="height: 100vh;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body text-center p-4">
                        <h3 class="fw-bold text-primary mb-4">Asocidemucre</h3>
                        <form action="../controllers/AuthController.php" method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="username" placeholder="Usuario" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 fw-bold">Entrar al Sistema</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>