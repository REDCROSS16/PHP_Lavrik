<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <div class="logo__title h3">My site</div>
            </div>
        </div>
    </header>
    <nav class="site-nav">
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a class='nav-link' href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href="index.php?c=add">Add</a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href="index.php?c=contacts">Contacts</a>
                </li>
            </ul>
        </div>
    </nav>

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