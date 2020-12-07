<?php 

    function dbconnect(){

        $servername = "localhost";
        $username = "username";
        $password = "*******";
        $dbname = "glorywall";
        
        try {
            $db = new PDO("mysql:host=$servername;dbname=$dbname;port=3306", $username, $password);
            // set the PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully"; 
            return $db;
        }

        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    // function setUrl ($e){
    //     $test=$e;

    //     $url;
    //     $localUrl='http://localhost/perso/gloryWall/';
    //     $onlineUrl='https://leersmathieu.com/gloryWall/';

    //     if ($test===0){
    //         return $url = $localUrl;
    //     }else {
    //         return $url = $onlineUrl;
    //     }
        
    // }


    //POSTS = REMERCIEMENT
    function getPosts(){

        $db = dbconnect();
        $request = $db->query('SELECT * FROM glorywall');

        return $request;
    }

    function insertPosts(){

        $db = dbconnect();
        $titre;
        $texte;
        if (isset($_POST['titre']) && isset($_POST['texte'])){
    
            $titre = htmlentities($_POST['titre'],ENT_QUOTES);
            $texte = htmlentities($_POST['texte'],ENT_QUOTES);
            $request = $db->query("INSERT IGNORE INTO `glorywall` (`id`, `titre`, `texte`) VALUES (NULL,'".$titre."', '".$texte."')");

            return $request;
        }
    }

    //GOLDEN = LIVRE D'OR
    function getGolden(){

        $db = dbconnect();
        $request = $db->query('SELECT * FROM goldenbook');

        return $request;
    }

    function addGolden(){
        $db = dbconnect();
        $user;
        $text;
        if (isset($_POST['user']) && isset($_POST['text'])){
    
            $user = htmlentities($_POST['user'],ENT_QUOTES);
            $text = htmlentities($_POST['text'],ENT_QUOTES);
            $request = $db->query("INSERT IGNORE INTO `goldenbook` (`id`, `user`, `text`, `datetime`) VALUES (NULL,'".$user."', '".$text."',NOW())");

            return $request;
        }
    }
