<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account Deletion Request</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .custom-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>

<body>
    <br><br>
    <div class="custom-container">
        <h1 class="text-center">PayGuard</h1>
        <h2 class="text-center">Account Deletion Request</h2>
        <br>
        <?php if ($_POST['email']) : ?>
            <div class="alert alert-success text-center" role="alert">Your request has been submitted successfully. We will notify you within 7 days.</div>
        <?php endif; ?>

        <form action="#" method="POST">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input name="email" type="text" class="form-control" id="staticEmail" value="" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Mobile</label>
                <div class="col-sm-10">
                    <input name="mobile" type="text" class="form-control" id="inputPassword" required>
                </div>
            </div>
            <div class="col-auto text-center">
                <button type="submit" class="btn btn-primary mb-3">Send Request</button>
            </div>
        </form>
    </div>
</body>

</html>