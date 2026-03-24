<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login - Asocidemucre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fuente Inter (más moderna y elegante) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body class="d-flex align-items-center justify-content-center">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="card login-card">
                    <div class="card-body p-4">
                        <div class="login-header">
                            <h3>Asocidemucre</h3>
                            <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Ingresa a tu cuenta</p>
                        </div>
                        
                        <form action="../controllers/AuthController.php" method="POST">
                            <div class="mb-4">
                                <label class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="username" placeholder="Tu nombre de usuario" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="password" placeholder="••••••••" required>
                            </div>
                            
                           <button type="button" class="btn btn-login w-100 mt-2" onclick="window.location.href='dashboard.php'">Entrar al Sistema</button>
                            
                            <div class="login-footer">
                                &copy; <?php echo date('Y'); ?> Asocidemucre
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>