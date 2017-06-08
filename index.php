<?php session_start(); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/style.css">
        <title>Forside</title>
    </head>

    <body>
        <!-- Wrapper til indholdet  -->
        <div class="wrapper">
            <!-- Header med billede -->
            <header><img src="IMG/header_image.png" alt=""></header>
            <!-- Menuen -->
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#">Forside</a></li>
                        <li><a href="">Log ind</a></li>
                        <li><a href="">Kontakt</a></li>
                        <li><a href="">Om os</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Main med article og log ind -->
            <main>
                <a href="articleside.html">
                    <input type="button" value="Lav en ny artikel"> </a>
                <section>
                    <!-- Min aside med log ind -->
                    <aside>
                        <h2>Log ind</h2>
                        <form action="checkUser.php" method="post">
                            <label for="user">Brugernavn:</label>
                            <br>
                            <input type="text" id="user" placeholder="Brugernavn" name="formUsername">
                            <br>
                            <label for="pass">Password:</label>
                            <br>
                            <input type="text" id="pass" placeholder="Password" name="formPassword">
                            <br>
                            <br>
                            <input type="submit" value="Log ind"> </form>
                    </aside>
                </section>
                <!-- Post class hvor articlerne befinder sig i -->
                <div class="post">
                    <article class="form"> </article>
                    <!-- Her inkludere jeg den php fil som indholder alt hvad der har med selve artiklens udsende at gøre -->
                    <?php include "fetchDb.php";?>
                </div>
            </main>
            <!-- Footer med en beskrivelse om hvem der har lagt billedet op -->
            <footer>
                <p>Dette billede er lagt op af Lasse Vangsgaard </p>
            </footer>
        </div>
    </body>

    </html>