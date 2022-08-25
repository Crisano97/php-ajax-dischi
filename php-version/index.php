<?php 
    include 'db/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax Dischi</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <span class="color-white">LOGO</span>
        </div>
    </header>
    <main>
        <div class="main-container">
            <?php foreach($albums as $album){ ?>
                <div class="album-card">
                    <!-- echo $album['poster'] -->
                    <img class="album-img" src="<?php echo $album['poster']; ?>" alt="">
                    <h2 class="color-white">
                        <?php echo $album['title']; ?>
                    </h2>
                    <span>
                        <?php echo $album['author']?>
                    </span>
                    <span>
                        <?php echo $album['year']?>
                    </span>
                </div>
                
            <?php } ?>
        </div>
        
    </main>
    
</body>
</html>