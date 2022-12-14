<?php
include __DIR__ . '../includes/discs.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php discs</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- INTESTAZIONE -->
    <header class="p-3">
        <div>
            <a href="https://open.spotify.com/"><img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="Spotify logo"></a>
        </div>
    </header>
    <!-- CORPO PRINCIPALE CON GALLERY -->
    <main>
        <div class="container py-5">
            <div class="row g-4 d-flex flex-wrap">
                <?php foreach ($discs as $disc) { ?>                
                    <div class="column">
                        <a class="text-decoration-none" href="#">
                            <div class="disc-card p-3 text-center">
                                <img class="w-100 mb-4" src="<?php echo $disc['poster'] ?>" alt="<?php echo $disc['title'] ?>">
                                <h3 class="mb-4"><?php echo strtoupper($disc['title']) ?></h3>
                                <h5><?php echo $disc['author'] ?></h5>
                                <p><?php echo $disc['year'] ?></p>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>

