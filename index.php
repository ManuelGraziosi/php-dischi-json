<?php

require_once "functions.php";
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
    <div class="container py-5">
        <header>
            NAV
            <a href="./">Home</a>
            <a href="server.php">Form</a>
            <hr>
        </header>
        <section>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">

                    <div class="card shadow-sm">
                        <div class="card-body">

                            <h1 class="h4 mb-4 text-center">Aggiungi album</h1>

                            <form action="server.php"
                                  method="POST">

                                <div class="mb-3">
                                    <label for="title"
                                           class="form-label">Titolo</label>
                                    <input type="text"
                                           class="form-control"
                                           id="title"
                                           name="title"
                                           required>
                                </div>

                                <div class="mb-3">
                                    <label for="artist"
                                           class="form-label">Artista</label>
                                    <input type="text"
                                           class="form-control"
                                           id="artist"
                                           name="artist"
                                           required>
                                </div>

                                <div class="mb-3">
                                    <label for="year"
                                           class="form-label">Anno</label>
                                    <input type="number"
                                           class="form-control"
                                           id="year"
                                           name="year"
                                           required>
                                </div>

                                <div class="mb-3">
                                    <label for="cover_url"
                                           class="form-label">URL Copertina</label>
                                    <input type="text"
                                           class="form-control"
                                           id="cover_url"
                                           name="cover_url">
                                </div>

                                <div class="mb-3">
                                    <label for="genre"
                                           class="form-label">Genere</label>
                                    <input type="text"
                                           class="form-control"
                                           id="genre"
                                           name="genre">
                                </div>

                                <div class="d-grid">
                                    <button type="submit"
                                            class="btn btn-primary">
                                        Aggiungi album
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </section>

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