<?php //CONTROLLEUR\\

    require('modele/modele.php'); 

    function pageWall(){

        $posts= getPosts();
    
        require('view/wall.php');
    }
    
    function insertWall(){

        $insertPosts= insertPosts();

        require('view/insert.php');
    }

    function pageGolden(){

        $posts=getGolden();

        require('view/golden.php');
    }

    function insertGolden(){

        $addGolden= addGolden();

        require('view/insertGolden.php');
    }