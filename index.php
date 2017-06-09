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
                <?php 
                if(isset($_SESSION['username'])&& !empty($_SESSION['username'])){?>
                    <a href="articleside.html">
                        <input type="button" value="Lav en ny artikel"> </a>
                    <?php    
                }
                ?>
                        <?php 
                    if(isset($_SESSION ['username']) && !empty($_SESSION['username'])){ ?>
                            <section>
                                <!-- Min aside med log ind hvis brugeren er logget ind -->
                                <aside>
                                    <h2>Velkommen:</h2>
                                    <form>
                                        <h4>
                            <?php echo $_SESSION['username']; ?>
                            </h4> <a href="logout.php?logout=true">Log ud</a> </form>
                                </aside>
                            </section>
                            <?php        
                    } else{
                    ?>
                                <section>
                                    <!-- Min aside med log ind hvis brugeren ikke er logget ind -->
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
                                <?php } ?>
                                    <!-- Post class hvor articlerne befinder sig i -->
                                    <div class="post">
                                        <!-- Her inkludere jeg den php fil som indholder alt hvad der har med selve artiklens udsende at gøre -->
                                        <?php include "fetchDb.php";?>
                                    </div>
            </main>
            <!-- Footer med en beskrivelse om hvem der har lagt billedet op -->
            <footer>
                <p>Denne hjemmeside er lavet af Lasse Vangsgaard </p>
            </footer>
        </div>
    </body>

    </html>