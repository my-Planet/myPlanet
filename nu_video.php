<?php

$sql_list = array();

/*  ---------------------------------------------------------------------------
    VIDEO_GENRE
    ---------------------------------------------------------------------------
*/    
$mysql  = "DROP TABLE IF EXISTS `video_genre`";
array_push($sql_list, $mysql);

$mysql  = "CREATE TABLE `video_genre` ( ";
    $mysql .= "`genre_ID` int(11) NOT NULL AUTO_INCREMENT, ";
    $mysql .= "`genre_name` varchar(32) NOT NULL, ";
    $mysql .= "`genre_description` varchar(255) NOT NULL, ";
    $mysql .= "PRIMARY KEY (`genre_ID`) ";
    $mysql .= ") ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8";
array_push($sql_list, $mysql);

/*  ---------------------------------------------------------------------------
    VIDEO_subGENRE
    ---------------------------------------------------------------------------
*/    
$mysql  = "DROP TABLE IF EXISTS `video_subgenre`";
array_push($sql_list, $mysql);

$mysql  = "CREATE TABLE `video_subgenre` ( ";
    $mysql .= "`genre_ID` int(11) NOT NULL, ";
    $mysql .= "`subgenre_ID` int(11) NOT NULL AUTO_INCREMENT, ";
    $mysql .= "`subgenre_name` varchar(32) NOT NULL, ";
    $mysql .= "`subgenre_description` varchar(255) NOT NULL, ";
    $mysql .= "PRIMARY KEY (`subgenre_ID`) ";
    $mysql .= ") ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8";
array_push($sql_list, $mysql);

/*  ---------------------------------------------------------------------------
    VIDEO_THEMA
    ---------------------------------------------------------------------------
*/
$mysql  = "DROP TABLE IF EXISTS `video_thema`";
array_push($sql_list, $mysql);

$mysql  = "CREATE TABLE `video_thema` ( ";
    $mysql .= "`thema_ID` int(11) NOT NULL AUTO_INCREMENT, ";
    $mysql .= "`thema_name` varchar(32) NOT NULL, ";
    $mysql .= "`thema_description` varchar(255) NOT NULL, ";
    $mysql .= "PRIMARY KEY (`thema_ID`) ";
    $mysql .= ") ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8";
array_push($sql_list, $mysql);

/*  ---------------------------------------------------------------------------
    VIDEO_subCATEGORY
    ---------------------------------------------------------------------------
*/
$mysql  = "DROP TABLE IF EXISTS `video_thema`";
array_push($sql_list, $mysql);

$mysql  = "CREATE TABLE `video_subthema` ( ";
    $mysql .= "`thema_ID` int(11) NOT NULL, ";
    $mysql .= "`subthema_ID` int(11) NOT NULL AUTO_INCREMENT, ";
    $mysql .= "`subthema_name` varchar(32) NOT NULL, ";
    $mysql .= "`subthema_description` varchar(255) NOT NULL, ";
    $mysql .= "PRIMARY KEY (`subthema_ID`) ";
    $mysql .= ") ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8";
array_push($sql_list, $mysql);



/*  exemple ANIMAL ARMAGEDDON      --------------------------------------------
    --------------------------------------------------------------------------- */
$mysql  = "INSERT INTO `video_genre` (genre_ID, genre_name, genre_description) VALUES ";
$mysql .= "( ";
    $mysql .= "1, ";
    $mysql .= "'conférence', ";
    $mysql .= "'Media non-narratif (par opposition aux Documentaires et aux Fictions)' ";
$mysql .= ") ";
array_push($sql_list, $mysql);

$mysql  = "INSERT INTO `video_genre` (genre_ID, genre_name, genre_description) VALUES ";
$mysql .= "( ";
    $mysql .= "2, ";
    $mysql .= "'documentaire', ";
    $mysql .= "'Media faisant le point sur un savoir, un fait de société, etc' ";
$mysql .= ") ";
array_push($sql_list, $mysql);

$mysql  = "INSERT INTO `video_genre` (genre_ID, genre_name, genre_description) VALUES ";
$mysql .= "( ";
    $mysql .= "3, ";
    $mysql .= "'fiction', ";
    $mysql .= "'Inclus les séries, les films, les animations, etc.' ";
$mysql .= ") ";
array_push($sql_list, $mysql);


/*  exemple ANIMAL ARMAGEDDON      --------------------------------------------
    --------------------------------------------------------------------------- */
$mysql  = "INSERT INTO `video_subgenre` (genre_ID, subgenre_ID, subgenre_name, subgenre_description) VALUES ";
$mysql .= "( ";
    $mysql .= "2, ";
    $mysql .= "1, ";
    $mysql .= "'scientifique', ";
    $mysql .= "'Documentaire faisant le point sur un savoir scientifique ou une croyance d\'un point de vue scientifique.', ";
$mysql .= ") ";
array_push($sql_list, $mysql);


/*  exemple ANIMAL ARMAGEDDON      --------------------------------------------
    --------------------------------------------------------------------------- */
$mysql  = "INSERT INTO `video_thema` (thema_ID, thema_name, thema_description) VALUES ";
$mysql .= "( ";
    $mysql .= "1, ";
    $mysql .= "'évolution', ";
    $mysql .= "'évolution de la vie sur Terre.', ";
$mysql .= ") ";
array_push($sql_list, $mysql);


/*  exemple ANIMAL ARMAGEDDON      --------------------------------------------
    --------------------------------------------------------------------------- */
$mysql  = "INSERT INTO `video_subthema` (thema_ID, subthema_ID, subthema_name, subthema_description) VALUES ";
$mysql .= "( ";
    $mysql .= "1, ";
    $mysql .= "1, ";
    $mysql .= "'Extinction de l\'Ordovicien-Silurien', ";
    $mysql .= "'-440 millions d\'années', ";
$mysql .= ") ";
array_push($sql_list, $mysql);

$mysql  = "INSERT INTO `video_subthema` (thema_ID, subthema_ID, subthema_name, subthema_description) VALUES ";
$mysql .= "( ";
    $mysql .= "1, ";
    $mysql .= "2, ";
    $mysql .= "'Extinction du Dévonien', ";
    $mysql .= "'entre -380 et -365 millions d\'années', ";
$mysql .= ") ";
array_push($sql_list, $mysql);

$mysql  = "INSERT INTO `video_subthema` (thema_ID, subthema_ID, subthema_name, subthema_description) VALUES ";
$mysql .= "( ";
    $mysql .= "1, ";
    $mysql .= "3, ";
    $mysql .= "'Extinction Permien-Trias', ";
    $mysql .= "'-252 millions d\'années', ";
$mysql .= ") ";
array_push($sql_list, $mysql);

$mysql  = "INSERT INTO `video_subthema` (thema_ID, subthema_ID, subthema_name, subthema_description) VALUES ";
$mysql .= "( ";
    $mysql .= "1, ";
    $mysql .= "4, ";
    $mysql .= "'Extinction du Trias-Jurassique', ";
    $mysql .= "'-200 millions d\'années', ";
$mysql .= ") ";
array_push($sql_list, $mysql);






print_r($sql_list);



?>
