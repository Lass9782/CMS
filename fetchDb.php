<?php
/*Her henter vi connect.php*/
require_once "connect.php";

//Vælg alt fra articles tabellen
$statement = $DBH->prepare("SELECT * FROM articles");
/*Udføre koden*/
$statement->execute();

/*Her bliver artiklen lavet udfra de informationer som databasen har modtaget fra brugeren*/
while ($row = $statement->fetch(PDO::FETCH_ASSOC)){ ?>
    <article> <img src="IMG/<?php echo $row['imgSrc'] ?>.png" alt="<?php echo $row['imgAlt'] ?>">
        <h2><?php echo $row['heading'] ?></h2>
        <br>
        <!-- Viser hvornår billedet er slået op -->
        <div class="time">
            <p>
                <?php echo $row['time'] ?>
            </p>
        </div>
        <br>
        <p>
            <?php echo $row['articleText'] ?>
        </p>
    </article>
    <?php
}
?>