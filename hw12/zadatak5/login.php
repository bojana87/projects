<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<div class="main-wrapper">
    <div class="container">
        <?php include './components/header.php';?>
       
        <div class="page-content center-content">
            <form class="contact-form">
                <fieldset>
                    <legend>Login</legend>
                    <label class="form-field">Email:
                        <input type="email" name="email" placeholder="Your email ..." required>
                    </label>
                    <label class="form-field">Password:
                        <input type="password" name="password" placeholder="Your password ..." required>
                    </label>
                    <button type="submit" class="btn btn-primary">Login</button>
                </fieldset>
            </form>
        </div>

        <?php include './components/footer.php';?>
        
    </div>
</div>
    
</body>
</html>