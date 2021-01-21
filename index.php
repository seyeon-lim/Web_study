<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        /////HomePage Head/////
        include_once('./view/head.php');
        
        /////HomePage MainLeft/////
        include_once('./view/main_left.php');
        
        /////Data Directory Scan/////
        //include_once('./list.php');
        // $dir = "./data";
        //$list = print_list($dir);

        /////Read Data Directory Files into a string/////
        if(isset($_GET['q']) && isset($_GET['item'])){
            echo htmlspecialchars(file_get_contents($dir."/".$_GET['q']."/".$_GET['item'].".php"));
            include_once($dir."/".$_GET['q']."/".$_GET['item'].".php");
        }
        // else{
            // echo "Hello World!!!";
        // }



        ?>
        
    </body>
</html>