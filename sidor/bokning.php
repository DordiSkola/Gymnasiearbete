<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bokning.css">
    <title>Boka | D&H Strength</title>
</head>

<body>

    <header>

        <div class="navbar">
            <nav>
                <a href="../index.php"><img src="../images/D&H Strength Gym Emblem.png" alt="home" class="logo"></a>
                <a href="gyms.php">Våra gym</a>
                <a href="medlemskap.php">Medlemskap</a>
                <a href="bokning.php">Boka</a>
                <a href="medlemskap.php" id="lbox">Bli medlem</a>
            </nav>
        </div>
    </header>

    <section class="val">

        <div class="delning">
            <div class="delning-innehall">
                <div class="hej">
                    <div class="text">

                        <h1><span>BOKA DIN TRÄNING</span></h1>
                        <p>Enkel bokning av gym och tider</p>
                    </div>

                    <form class="bokningsval" id="bokningsform">
                        <label for="gym">Välj gym</label>
                        <select id="gym" name="gym" required>
                            <option value="">Välj ett gym</option>
                            <option value="Gym 1">Gym 1</option>
                            <option value="Gym 2">Gym 2</option>
                            <option value="Gym 3">Gym 3</option>
                        </select>

                        <label for="datum">Välj datum</label>
                        <input type="date" id="datum" name="datum" min="<?php echo date('Y-m-d'); ?>" required>

                        <fieldset id="tider" hidden>
                            <legend>Välj en tid</legend>

                            <label><input type="radio" name="tid" value="09:00" required> 09:00</label>
                            <label><input type="radio" name="tid" value="12:00"> 12:00</label>
                            <label><input type="radio" name="tid" value="15:00"> 15:00</label>
                            <label><input type="radio" name="tid" value="18:00"> 18:00</label>
                        </fieldset>

                        <button type="submit">Bekräfta val</button>
                        <p id="bokningsbekraftelse" aria-live="polite"></p>
                    </form>

                </div>

                <img src="../images/Realistisk2.jpeg" alt="sidobild" class="real">

            </div>
        </div>

    </section>

    <footer>
        <a href="../index.php">D&H <span>STRENGTH</span></a>

        <p>&copy;
            <?php echo date("Y"); ?> D&H STRENGTH. Alla rättigheter förbehållna.
        </p>
    </footer>

</body>

</html>