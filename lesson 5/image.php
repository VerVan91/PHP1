<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
    <link rel="stylesheet" href="public_html/css/style.css">
</head>

<body>

    <div class="container">

        <header>
            <div class="logo">Shop</div>

            <div class="clearfix"></div>
        </header>

        <main>
            <div class="image_big">
                <a href="index.php">Вернуться обратно</a>

                <?php
                include_once("config.php");

                $idImage = $_GET['id'];
                $sqlImg = "SELECT * FROM gallery WHERE id='$idImage'";
                

                if (mysqli_query($connect, $sqlImg)) {
                    $image = mysqli_fetch_assoc(mysqli_query($connect, $sqlImg));
                    $update = "UPDATE gallery SET Count=Count+1 WHERE id=$idImage";
                    mysqli_query($connect, $update);
                }
                ?>

                <img src="<?= "./public_html/images/big/".$image['Name'].".jpg" ?>" alt="image<?= $idImage ?>">

                <h2 class="count">Количество просмотров: <?= ++$image['Count'] ?></h2>
            </div>
        </main>


    </div>

</body>

</html>