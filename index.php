<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kitchen Sink</title>
        <meta name="description" content="Component library built for Liberty Websites">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="public/styles/main.css">
    </head>
    <body>

        <!-- Add your site or application content here -->
        <?php
          echo "components:";
        ?>
        <?php
          require_once './components/colors.php';
          require_once './components/grid.php';
          require_once './components/fonts.php';
        ?>
        <script src="public/js/main.js"></script>

    </body>
</html>
