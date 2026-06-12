<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class=".container-fluid">
        <div class="row justify-content-center align-items-center min-vh-100 bg-secondary">
            <div class="col-md-3">
                <div class="card shadow border-0 mb-4">
                    <div class="card-header text-center fw-bold fs-4">Login</div>
                    <div class="card-body">
                        <form action="<?php echo base_url('auth/validationLogin')?>" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                </label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                </label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="d-flex flex-row justify-content-center gap-2">
                                <button class="btn btn-primary" type="submit">Login</button>
                                <a href="<?php echo base_url('Auth/validationSignup')?>" class="btn btn-secondary">Sign Up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>