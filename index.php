<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Grimm</title>
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
            <!-- Post class hvor articlerne befinder sig i -->
            <div class="post">
                <!-- Article med billede, overskrift og beskrivelse af billedet -->
                <article> <img src="IMG/Billede-1.png" alt="">
                    <h2>Grimm sæson 3</h2>
                    <br>
                    <!-- Viser hvornår billedet er slået op -->
                    <div class="time">
                        <p>31/5-2017</p>
                    </div>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia explicabo perspiciatis in, sapiente sint tempore optio minima cumque id tempora porro maxime nemo facilis sed facere quisquam, quae, perferendis vero! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti magni itaque similique qui, ab, repellendus veritatis rerum ipsam suscipit aut libero. Accusamus vero voluptatem deserunt, incidunt repellendus porro at minus.</p>
                </article>
            </div>
            <!-- Min aside med log ind -->
            <aside>
                <h2>Log ind</h2>
                <form> Brugernavn:
                    <br>
                    <input type="text" name="brugernavn" placeholder="Brugernavn">
                    <br> Password:
                    <br>
                    <input type="text" name="password" placeholder="Password">
                    <br>
                    <br>
                    <input type="submit" value="Log ind"> </form>
            </aside>
        </main>
        <footer>
            <p>Dette billede er lagt op af Lasse Vangsgaard </p>
        </footer>
    </div>
</body>

</html>