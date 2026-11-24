<?php
require_once '../assets/config/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/auth.css">
    <title>Login | D&H Strength</title>
</head>

<body class="login">

    <header>
        <div class="navbar">
            <nav>
                <a href="../index.php"><img src="../images/D&H Strength Gym Emblem.png" alt="home" class="logo"></a>
                <a href="gyms.php">Våra gym</a>
                <a href="medlemskap.php">Medlemskap</a>
                <a href="bokning.php">Boka</a>
            </nav>
        </div>
    </header>



    <main class="auth-container">

        <div>
            <h1>VÄLKOMMEN TILLBAKA</h1>
            <p>Your journey to Strength continues</p>
        </div>

        <div class="auth-form">

            <h2>LOGGA IN</h2>
            <p>Välkommen tillbaka till D&H Strength</p>

            <form action="" method="POST">

                <label>EMAIL</label>
                <input type="email" name="email" required>

                <label>LÖSENORD</label>
                <input type="password" name="password" required>

                <button type="submit">LOGGA IN</button>

            </form>

            <p>
                Har inget konto?
                <a href="register.php">Registrera</a>
            </p>

        </div>

    </main>
</body>

</html>