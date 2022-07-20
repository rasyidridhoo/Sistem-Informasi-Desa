<?php include('koneksi.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        h3 {
            font-family: Habibi;
            font-weight: bold;
            font-size: 32px;
        }

        label {
            font-family: Habibi;
            font-size: 20px;
        }

        a {
            font-family: Habibi;
        }

        a:link {
            text-decoration: none;
        }

        .btn {
            background-color: #194B77;
            border: #194B77;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5" style="background-color: #f1f1f1;">
                    <h3 class="text-center font-weight-light my-4">SIDESA</h3>
                    <div class="card-body">
                        <div class="container">
                            <form method="POST" action="login-proses.php">
                                <div class="mb-3">
                                    <label class="mb-2">Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2">Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div style="background-color: #194b77;">
                                <button type="submit" name="submit" class="btn btn-primary mt-2 w-100">Login</button>
                            </form>
                        </div>
                        <div class="small mt-5" style="text-align: center; font-family:habibi; font-size:20px;"> Belum punya akun? <a href=" register.php">Registrasi disini!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

</body>

</html>