

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merouane School</title>
    <link rel="icon" href="/Images/Logo.png">
</head>
<body>
    <header>
        <img src="#" alt="Merouanos logo">

    </header>
        <h1>Welcome</h1>
        <form action="checkDb.php" method="GET">
            <fieldset>
                    <legend></legend>
                    <label for="us">Username:*</label>
                    <input type="text" id="us" name="username" required placeholder="James Bond">
                    <label for="pass">Password:*</label>
                    <input type="password" required id="pass" name="password" >
                    <input type="submit" value="login">
            </fieldset>
            
        </form>


        <form action="signIn.php">
            <label for="create">Or if you don't have an account press here</label>
            <input type="submit" value="Create an account"> 
        </form>

    </main>


</body>
</html>



