<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
    <title>PHP Ajax Dischi</title>
</head>
<body>
<?php include './server.php' ?>

    <header>
        <img class="ms_logo" src="./img/logo-small.svg" alt="">
    </header>

    <main>
        <div class="container">
            <div class="ms_box p-5">
                <?php foreach ($discs as $disk){ ?>
                <div class="p-4 ms_cards mx-3 mt-4">
                    <a href="">
                        <img class="ms_img" src="<?php echo $disk['poster'] ?>" alt="">
                        <div class="text-center mt-3">
                            <h3><?php echo $disk['title'] ?></h3>
                            <h5 class="ms_t-g"><?php echo $disk['author'] ?></h5>
                            <div class="ms_t-g"><?php echo $disk['year'] ?></div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </main> 
</body>
</html>     