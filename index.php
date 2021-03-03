<?php 

require_once  __DIR__ . '/app/server.php' ;
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>PHP DISCHI</title>
</head>
<body>
    <div id="root" class="container">
        <header>
            <div class="container">
                <img src="img/logo.png" alt="logo" />
            </div>
        </header>
        <div class="cds-container container">
            <!-- Disco ad esempio -->
            <?php 
                foreach ($discs as $key => $disc) {
            ?>
            <div class="cd">
                <img src="<?php echo $disc['poster'] ?>" alt="">
                <h3><?php echo $disc['title'] ?></h3>
                <span class="author"><?php echo $disc['author']?></span>
                <span class="year"><?php echo $disc['year']?></span>
            </div>
            <?php  } ?>
        </div>
    </div>
</body>

</html>
</html>