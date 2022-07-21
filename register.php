<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card-body justify-content-center mt-5" style="background-color: #F1F1F1; border-radius: 15px">
                    <h3 class="text-center font-weight-light my-4" style="font-family: habibi; font-weight: bold;">REGISTER</h3>
                    <div class="container">
                        <form method="POST" action="register-proses.php">
                            <div class="mb-3">
                                <label class="mb-2" style="font-family: habibi; font-size: 20px;">Nama</label>
                                <input type="text" class="form-control" name="nama" required style="border-radius: 10px; font-family: habibi; font-size: 20px;">
                            </div>
                            <div class="mb-3">
                                <label class="mb-2" style="font-family: habibi; font-size: 20px;">No Kartu Keluarga</label>
                                <input type="text" class="form-control" name="nokk" minlength="16" required style="border-radius: 10px; font-family: habibi; font-size: 20px;">
                            </div>
                            <div class="mb-3">
                                <label class="mb-2" style="font-family: habibi; font-size: 20px;">Email</label>
                                <input type="email" class="form-control" name="email" required style="border-radius: 10px; font-family: habibi; font-size: 20px;">
                            </div>
                            <div class="mb-3">
                                <label class="mb-2" style="font-family: habibi; font-size: 20px;">Password</label>
                                <input type="password" class="form-control" name="password" minlength="8" required style="border-radius: 10px; font-family: habibi; font-size: 20px;">
                            </div>

                            <input type="hidden" class="form-control" name="status_user" required value="Warga">

                            <button type="submit" class="btn btn-primary mt-3 w-100" style="background-color: #194B77 ; border-radius: 10px; width: 380px; font-size: 20px;font-family: habibi;">Register</button>
                        </form>
                    </div>
                    <div class="small mt-5" style="text-align: center; font-family:habibi; font-size:20px; ">Sudah daftar? <a href=" index.php" style="text-decoration: none;">Silahkan login!</a></div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>