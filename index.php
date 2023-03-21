<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    
    <section>

        <form action="App/main.php" method="post">

            <div class="input-group">
            
                <span class="input-group-text">user_name and password</span>
                
                <input type="email" aria-label="email" name="email" id="email" required placeholder="input email here">
                <input type="password" aria-label="password" name="password" id="password" required placeholder="input password here">
            
            </div>

            <div class="input-group mb-3">
            
                <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Send</button>
            
            </div>
            
        </form>

    </section>

    <footer>

        <div>

            <p>

                by this system being an academic activity the access password is public:<br>
                email: demo@demo.com <br>
                password: 123456789

            </p>

        </div>

    </footer>

</body>
</html>