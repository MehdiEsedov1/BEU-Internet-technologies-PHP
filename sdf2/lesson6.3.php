<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <h3 class="text-center mb-5">Esas Sehife</h3>
            <div class="col-md-5 col-12">
                <form method="post" action="lesson6.2.php">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="secim" value="giris">
                        <label class="form-check-label">
                            Giris
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="secim" value="qeydiyyat">
                        <label class="form-check-label">
                            Qeydiyyat
                        </label>
                        <br>
                    </div>
                    <label class="form-label mt-3">Ad</label>
                    <input type="ad" class="form-control" name="ad" placeholder="ad daxil edin">
                    <label class="form-label mt-3">Soyad</label>
                    <input type="soyad" class="form-control" name="soyad" placeholder="soyad daxil edin">
                    <label class="form-label mt-3">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                    <label class="form-label mt-3">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="password">
                    <input class="btn btn-info mt-3 text-white " type="submit" name="submit">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>
