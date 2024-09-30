<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Login Page</title>
    <style>
    body {
        background: cornflowerblue;
        font-family: 'Arial', sans-serif;
    }

    .card {
        border-radius: 20px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        position: relative;
    }

    .card-body {
        background: #ffffff;
        padding: 2rem;
    }

    .login-image {
        max-width: 100%;
        height: auto;
        border-radius: 20px;
    }

    .form-control,
    .form-select {
        border-radius: 0.5rem;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 0.5rem;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    .form-text a {
        color: #007bff;
        text-decoration: none;
    }

    .form-text a:hover {
        text-decoration: underline;
    }

    .card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.1);
        z-index: -1;
    }
    </style>
</head>

<body>

    <section class="vh-100 d-flex align-items-center justify-content-center">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-10 col-xl-9">
                    <div class="card text-black">
                        <div class="card-body p-md-5">
                            <div class="row">
                                <!-- Form Section -->
                                <div class="col-md-6 d-flex justify-content-center align-items-center">
                                    <form action="proses_login.php" method="post">
                                        <div class="mb-4">
                                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input name="username" type="text" id="username"
                                                        class="form-control" />
                                                    <label class="form-label" for="form3Example3">Username</label>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input name="password" type="password" id="password"
                                                        class="form-control" />
                                                    <label class="form-label" for="form3Example4">Password</label>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                <button type="submit" class="btn btn-primary btn-lg">LOGIN</button>
                                            </div>
                                            <center>
                                                <p class="form-text">Belum punya akun? <a
                                                        href="register.php">Registrasi</a></p>
                                            </center>
                                        </div>
                                    </form>
                                </div>
                                <!-- Image Section -->
                                <div class="col-md-6 d-flex justify-content-center align-items-center">
                                    <img src="img/aaa.jpg" alt="Login Image" class="login-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>