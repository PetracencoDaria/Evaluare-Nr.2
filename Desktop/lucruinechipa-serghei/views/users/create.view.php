<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet">
    <style>
        .wrapper { width: 500px; padding: 20px; }
        .wrapper h2 { text-align: center; }
        .wrapper form .form-group span { color: red; }
    </style>
</head>
<body>
    <main>
        <section class="container wrapper">
            <h2 class="display-4 pt-3">Sign Up</h2>
            <form action="/products/store" method="POST">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has_error' : ''; ?>">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" value="">
                    <span class="help-block"><?php echo $username_err ?? ''; ?></span>
                </div>

                <div class="form-group <?php echo (!empty($password_err)) ? 'has_error' : ''; ?>">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" value="">
                    <span class="help-block"><?php echo $password_err ?? ''; ?></span>
                </div>

                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has_error' : ''; ?>">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" value="">
                    <span class="help-block"><?php echo $confirm_password_err ?? ''; ?></span>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-block btn-outline-success" value="Submit">
                </div>
                <p>Already have an account? <a href="/users/index">Login here</a>.</p>
            </form>
        </section>
    </main>
</body>
</html>
