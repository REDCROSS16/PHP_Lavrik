<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <div class="logo__title h3">My site</div>
                <div class="logo__subtitle h6">About some themes</div>
            </div>
        </div>
    </header>

    <div class="site-content">
        <div class="container">

        <?=$content;?>

        </div>
    </div>
        <footer class="site-footer">
        <div class="container">
            &copy; RED CROSS inc.
        </div>

        </footer>
</body>
</html>        