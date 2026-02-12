<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #1a2332 0%, #2C3E50 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-container {
            max-width: 450px;
            width: 100%;
            padding: 20px;
        }

        .login-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .login-header {
            background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
            padding: 40px 30px;
            text-align: center;
            color: white;
        }

        .login-header i {
            font-size: 4rem;
            margin-bottom: 15px;
        }

        .login-header h2 {
            margin: 0;
            font-weight: 700;
            font-size: 1.8rem;
        }

        .login-header p {
            margin: 10px 0 0 0;
            opacity: 0.9;
        }

        .login-body {
            padding: 40px 30px;
        }

        .form-label {
            font-weight: 600;
            color: #1a2332;
            margin-bottom: 8px;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #ED1C24;
            box-shadow: 0 0 0 0.2rem rgba(237, 28, 36, 0.1);
        }

        .input-group-text {
            background: #f8f9fa;
            border: 2px solid #e9ecef;
            border-right: none;
            border-radius: 10px 0 0 10px;
            color: #666;
        }

        .input-group .form-control {
            border-left: none;
            border-radius: 0 10px 10px 0;
        }

        .btn-login {
            background: linear-gradient(135deg, #ED1C24 0%, #C41419 100%);
            color: white;
            border: none;
            padding: 14px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1.1rem;
            width: 100%;
            transition: all 0.3s;
            margin-top: 10px;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(237, 28, 36, 0.3);
            color: white;
        }

        .alert {
            border-radius: 10px;
            border: none;
            padding: 15px;
            margin-bottom: 20px;
        }

        .login-footer {
            text-align: center;
            padding: 20px;
            background: #f8f9fa;
            color: #666;
            font-size: 0.9rem;
        }

        .password-toggle {
            cursor: pointer;
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
            z-index: 10;
        }

        .password-wrapper {
            position: relative;
        }

        @media (max-width: 576px) {
            .login-container {
                padding: 10px;
            }

            .login-body {
                padding: 30px 20px;
            }

            .login-header {
                padding: 30px 20px;
            }

            .login-header i {
                font-size: 3rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <i class="fas fa-shield-halved"></i>
                <h2>Panel de Administración</h2>
                <p>Cruz Roja Huila</p>
            </div>

            <div class="login-body">
                @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
                </div>
                @endif

                @if($errors->has('login'))
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle me-2"></i>{{ $errors->first('login') }}
                </div>
                @endif

                <form action="{{ route('login.post') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">
                            <i class="fas fa-user me-2"></i>Usuario
                        </label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" 
                                   value="{{ old('username') }}" placeholder="Ingrese su usuario" required autofocus>
                        </div>
                        @error('username')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label">
                            <i class="fas fa-lock me-2"></i>Contraseña
                        </label>
                        <div class="password-wrapper">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" 
                                       placeholder="Ingrese su contraseña" required>
                            </div>
                            <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                        </div>
                        @error('password')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-login">
                        <i class="fas fa-sign-in-alt me-2"></i>Iniciar Sesión
                    </button>
                </form>
            </div>

            <div class="login-footer">
                <i class="fas fa-lock me-1"></i> Área Privada - Solo Personal Autorizado
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>