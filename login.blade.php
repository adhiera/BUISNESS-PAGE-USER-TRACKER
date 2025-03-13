<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
        }
        .card-header {
            background: #007bff;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .btn-custom {
            background: #007bff;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background: #0056b3;
        }
        .card-footer a {
            color: #007bff;
            font-weight: bold;
            text-decoration: none;
        }
        .card-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-center text-white">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-custom w-100">Login</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <p>Don't have an account? <a href="#">Register</a></p>
                        <p><a href="#">Forgot Password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
