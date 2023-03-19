<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Strefa bilarda</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style><?php include('styles/style.css'); ?></style>
    </head>
    <body>
    <?php 
        require('Elements/header.php');
        require('Elements/menu_nav.php');
        if(isset($_GET['page'])){
            $str=$_GET['page'];
        }
        else{
            $str = 'home';
        }
        switch($str){
            case 'home':
                include_once('Elements/content.php');
                break;
            case 'price-list':
                include_once('Elements/price-list.php');
                break;
            case 'whereToFinde':
                include_once('Elements/whereToFinde.php');
                break;
            case 'gallery':
                include_once('Elements/gallery.php');
                break;
            default:
                include_once('Elements/content.php');

        }
        require('Elements/footer.php');
    ?>
    <script src="scripts/script.js"></script>
    </body>
</html>