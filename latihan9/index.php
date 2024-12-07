<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retail - Login System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-secondary-subtle">

    <div class="container d-flex vh-100 align-items-center justify-content-center">
        <div class="card w-25 shadow-sm p-4">
            <h4 class="card-title">Retail Application</h4>
            <hr>
            <?php
            session_start();
            if (isset($_SESSION["pesan"])) {
                ?>
                <div class="text-center text-danger fs-6"><?= $_SESSION['pesan']; ?></div>
                <?php
                session_unset();
            }
            ?>
            <form action="login.php" method="POST">
                <div class="mb-2">
                    <label for="username" class="form-label">Username</label>
                    <input class="form-control" type="text" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary py-3">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>