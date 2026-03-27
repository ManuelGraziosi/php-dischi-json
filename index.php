<?php

$file_string = file_get_contents("disks.json");

$file_decoded = json_decode($file_string, true);

//var_dump($file_decoded);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">

    <title>EX - PHP Dischi</title>
</head>

<body>
    <div class="container">

        <header>
            NAV
            <hr>
        </header>
        <section>
            <h1>Benvenuto nell'elenco dei disci</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                <?php
                foreach ($file_decoded as $disk) {
                    ?>
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo $disk["cover_url"] ?>"
                                 class="card-img-top"
                                 alt="<?php echo $disk["title"] ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $disk["title"] ?></h5>
                                <p class="card-text">Author: <?php echo $disk["artist"] ?></p>
                                <p class="card-text">Year: <?php echo $disk["year"] ?></p>
                                <p class="card-text">Genre: <?php echo $disk["genre"] ?></p>

                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

        </section>
    </div>

</body>

</html>