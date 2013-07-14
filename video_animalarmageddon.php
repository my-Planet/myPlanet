<?php

/*  exemple ANIMAL ARMAGEDDON      --------------------------------------------
    --------------------------------------------------------------------------- */
$mysql  = "DROP TABLE IF EXISTS `video_library`";

$mysql  = "CREATE TABLE `video_library` ( ";
    $mysql .= "`genre_ID` int(11) NOT NULL, ";
    $mysql .= "`subgenre_ID` int(11) NOT NULL, ";
    $mysql .= "`thema_ID` int(11) NOT NULL, ";
    $mysql .= "`subthema_ID` int(11) NOT NULL, ";
    $mysql .= "`library_ID` varchar(40) NOT NULL, ";
    $mysql .= "`library_cover` varchar(255) NOT NULL, ";
    $mysql .= "`library_title` varchar(255) NOT NULL, ";
    $mysql .= "`library_subtitle` varchar(255) NOT NULL, ";
    $mysql .= "`library_ensubtitle` varchar(255) NOT NULL, ";
    $mysql .= "`library_time` time NOT NULL, ";
    $mysql .= "`library_year` int(11) NOT NULL, ";
    $mysql .= "`library_diffusion` varchar(255) NOT NULL, ";
    $mysql .= "`library_language` varchar(255) NOT NULL, ";
    $mysql .= "`library_subtitles` varchar(255) NOT NULL, ";
    $mysql .= "`library_season` int(11) NOT NULL, ";
    $mysql .= "`library_episode` int(11) NOT NULL, ";
    $mysql .= "`library_maxepisode` int(11) NOT NULL, ";
    $mysql .= "`library_localfile` varchar(255) NOT NULL, ";
    $mysql .= "`library_sourcefile` varchar(255) NOT NULL, ";
    $mysql .= "`library_chainefile` varchar(255) NOT NULL, ";
    $mysql .= "`library_quality` varchar(255) NOT NULL, ";
    $mysql .= "`library_widthfile` int(11) NOT NULL, ";
    $mysql .= "`library_heightfile` int(11) NOT NULL, ";
    $mysql .= "`library_description` text NOT NULL, ";
$mysql .= "PRIMARY KEY (`library_ID`) ";
$mysql .= ") ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8";



/*  exemple ANIMAL ARMAGEDDON      --------------------------------------------
    --------------------------------------------------------------------------- */
$mysql  = "DROP TABLE IF EXISTS `video_keywords`";

$mysql  = "CREATE TABLE `video_keywords` ( ";
    $mysql .= "`keyw_ID` varchar(40) NOT NULL, ";
    $mysql .= "`keyw_word` varchar(255) NOT NULL, ";
$mysql .= "PRIMARY KEY (`keyw_ID`, `keyw_word`) ";
$mysql .= ") ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8";



$mysql  = "INSERT INTO `video_library` (genre_ID, subgenre_ID, thema_ID, subthema_ID, library_ID, library_cover, library_title, library_subtitle, library_ensubtitle, library_time, library_year, library_diffusion, library_language, library_subtitles, library_season, library_episode, library_maxepisode, library_localfile, library_sourcefile, library_quality, library_widthfile, library_heightfile) VALUES ";
$mysql .= "( ";
/*  genre_ID    */  $mysql .= "2, ";
/*  subgenre_ID */  $mysql .= "1, ";
/*  thema_ID    */  $mysql .= "1, ";
/*  subthema_ID */  $mysql .= "1, ";
/*  KEY_MD5     */  $mysql .= "md5('Animal Armageddon: la menace invisible'), ";
/*  COVER       */  $mysql .= "'Animal-Armageddon-01.jpg', ";
/*  TITLE       */  $mysql .= "'Animal Armageddon:', ";
/*  subTITLE    */  $mysql .= "'la menace invisible.', ";
/*  ensubTITLE  */  $mysql .= "'Death ray.', ";
/*  TIME        */  $mysql .= "00:47:03, ";
/*  YEAR        */  $mysql .= "2009, ";
/*  DIFF        */  $mysql .= "'France 5', ";
/*  LANGUAGE    */  $mysql .= "'Français', ";
/*  SUBTITLES   */  $mysql .= "'non', ";
/*  SEASON      */  $mysql .= "0, ";
/*  EPISODE     */  $mysql .= "1, ";
/*  maxEPISODE  */  $mysql .= "8, ";
/*  localFILE   */  $mysql .= "'Animal Armageddon x01-fr - La Menace invisible [Death Rays][440] - Ordovicien-Silurien.mp4', ";
/*  sourceFILE  */  $mysql .= "'DailyMotion', ";
/*  chaineFILE  */  $mysql .= "'Tetranychus', ";
/*  sourceLINK  */  $mysql .= "'http://www.dailymotion.com/video/xco173_animal-armageddon-la-menace-invisib_tech?search_algo=2#.UcYj-RxOKpo', ";
/*  qualityFILE */  $mysql .= "'Low Res.', ";
/*  widthFILE   */  $mysql .= "512, ";
/*  heightFILE  */  $mysql .= "304, ";
/*  DESCRIPTION */  $mysql .= "'L\'extinction de l\'Ordovicien-Silurien est la disparition d\'une proportion significative des espèces animales et végétales présentes sur la Terre, il y a environ 440 millions d\'années (à la limite entre l\'Ordovicien et le Silurien).<br>Une théorie propose que la Terre ait été frappée par un sursaut gamma issu d\'une supernova. Cette irradiation aurait alors provoqué des changements dans l\'atmosphère, entraînant une dégradation de la couche d\'ozone et un assombrissement global de forte ampleur, cause de la glaciation. Cette théorie ne fait cependant pas l\'unanimité dans la communauté scientifique.' ";
$mysql .= ") ";

$mysql  = "INSERT INTO `video_keywords` (keyw_ID, keyw_word) VALUES ";
$mysql .= "(md5('Animal Armageddon: la menace invisible'), 'extinction massive'), ";
$mysql .= "(md5('Animal Armageddon: la menace invisible'), 'ordovicien'), ";
$mysql .= "(md5('Animal Armageddon: la menace invisible'), 'silurien'), ";
$mysql .= "(md5('Animal Armageddon: la menace invisible'), 'rayon gamma'), ";
$mysql .= "(md5('Animal Armageddon: la menace invisible'), 'théorie'), ";
$mysql .= "(md5('Animal Armageddon: la menace invisible'), 'ordovicien'), ";
$mysql .= "(md5('Animal Armageddon: la menace invisible'), 'gondwada'), ";
$mysql .= "(md5('Animal Armageddon: la menace invisible'), 'trilobite'), ";
$mysql .= "(md5('Animal Armageddon: la menace invisible'), 'astrapis'), ";
$mysql .= "(md5('Animal Armageddon: la menace invisible'), 'trilobite'), ";
$mysql .= "(md5('Animal Armageddon: la menace invisible'), 'euryptéride'), ";
$mysql .= "(md5('Animal Armageddon: la menace invisible'), 'orthocère'), ";
$mysql .= "(md5('Animal Armageddon: la menace invisible'), 'nautiloïde'), ";
$mysql .= "(md5('Animal Armageddon: la menace invisible'), 'acanthodien'), ";
$mysql .= "(md5('Animal Armageddon: la menace invisible'), 'poumon'), ";
$mysql .= "(md5('Animal Armageddon: la menace invisible'), 'mâchoire') ";




$mysql  = "INSERT INTO `video_library` (genre_ID, subgenre_ID, thema_ID, subthema_ID, library_ID, library_cover, library_title, library_subtitle, library_ensubtitle, library_time, library_year, library_diffusion, library_language, library_subtitles, library_season, library_episode, library_maxepisode, library_localfile, library_sourcefile, library_quality, library_widthfile, library_heightfile) VALUES ";
$mysql .= "( ";
/*  genre_ID    */  $mysql .= "2, ";
/*  subgenre_ID */  $mysql .= "1, ";
/*  thema_ID    */  $mysql .= "1, ";
/*  subthema_ID */  $mysql .= "2, ";
/*  KEY_MD5     */  $mysql .= "md5('Animal Armageddon: la Terre en Enfer'), ";
/*  COVER       */  $mysql .= "'Animal-Armageddon-02.jpg', ";
/*  TITLE       */  $mysql .= "'Animal Armageddon:', ";
/*  subTITLE    */  $mysql .= "'La Terre en Enfer.', ";
/*  ensubTITLE  */  $mysql .= "'Hell on Earth.', ";
/*  TIME        */  $mysql .= "00:45:59, ";
/*  YEAR        */  $mysql .= "2009, ";
/*  DIFF        */  $mysql .= "'France 5', ";
/*  LANGUAGE    */  $mysql .= "'Français', ";
/*  SUBTITLES   */  $mysql .= "'non', ";
/*  SEASON      */  $mysql .= "0, ";
/*  EPISODE     */  $mysql .= "2, ";
/*  maxEPISODE  */  $mysql .= "8, ";
/*  localFILE   */  $mysql .= "'Animal Armageddon x02-fr - La Terre en enfer [Hell on Earth][380] - Dévonien.mp4', ";
/*  sourceFILE  */  $mysql .= "'YouTube', ";
/*  chaineFILE  */  $mysql .= "'HOMININESAPIENS', ";
/*  sourceLINK  */  $mysql .= "'http://www.youtube.com/watch?v=DXfsRiW5m_Y', ";
/*  qualityFILE */  $mysql .= "'HD.', ";
/*  widthFILE   */  $mysql .= "1280, ";
/*  heightFILE  */  $mysql .= "720, ";
/*  DESCRIPTION */  $mysql .= "'L\'extinction du Dévonien est l\'une des grandes destructions d\'espèces animales et végétales de l\'histoire de la vie sur Terre.<br>Elle se situe entre -380 et -365 millions d\'années, sur 6 évènements biologiques, et porte sur environ 75 % des espèces (benthos, récifs, brachiopodes) et ne concerne que peu les plantes et arthropodes continentaux.<br>La fermeture de la Paléotéthys (une aire océanique ouverte au nord du Gondwana) modifie la circulation atmosphérique et le climat se réchauffe. L\'élévation du niveau des mers amène des eaux peu oxygénées sur les plateaux continentaux. Une flore et une faune y prolifèrent, favorisées par un afflux de nutriments continentaux. Cependant, le climat se refroidit de nouveau et les faunes adaptées à ces eaux chaudes disparaissent.<br>On constate aussi l\'existence de cratères d\'impacts datant de cette époque (Frasnien supérieur) ; ce facteur de bouleversement parait cependant secondaire.[réf. nécessaire] Cependant, une extinction de masse remontant à -360 millions d\'années est imputée à une série d\'impacts météoritiques, dont le cratère du East Warburton Basin près de Melbourne en Australie.' ";
$mysql .= ") ";

$mysql  = "INSERT INTO `video_keywords` (keyw_ID, keyw_word) VALUES ";
$mysql .= "(md5('Animal Armageddon: la Terre en Enfer'), 'extinction massive'), ";
$mysql .= "(md5('Animal Armageddon: la Terre en Enfer'), 'dévonien'), ";
$mysql .= "(md5('Animal Armageddon: la Terre en Enfer'), 'dévonien supérieur'), ";
$mysql .= "(md5('Animal Armageddon: la Terre en Enfer'), 'théorie'), ";
$mysql .= "(md5('Animal Armageddon: la Terre en Enfer'), 'trilobite'), ";
$mysql .= "(md5('Animal Armageddon: la Terre en Enfer'), 'nautiloïde'), ";
$mysql .= "(md5('Animal Armageddon: la Terre en Enfer'), 'dunkleosteus'), ";
$mysql .= "(md5('Animal Armageddon: la Terre en Enfer'), 'placoderme'), ";
$mysql .= "(md5('Animal Armageddon: la Terre en Enfer'), 'eusthenopteron'), ";
$mysql .= "(md5('Animal Armageddon: la Terre en Enfer'), 'tiktaalik'), ";
$mysql .= "(md5('Animal Armageddon: la Terre en Enfer'), 'materpiscis'), ";










$mysql  = "INSERT INTO `video_library` (genre_ID, subgenre_ID, thema_ID, subthema_ID, library_ID, library_cover, library_title, library_subtitle, library_ensubtitle, library_time, library_year, library_diffusion, library_language, library_subtitles, library_season, library_episode, library_maxepisode, library_localfile, library_sourcefile, library_quality, library_widthfile, library_heightfile) VALUES ";
$mysql .= "( ";
/*  genre_ID    */  $mysql .= "2, ";	/*	documentaire	*/
/*  subgenre_ID */  $mysql .= "1, ";	/*	scientifique	*/
/*  thema_ID    */  $mysql .= "1, ";	/*	evolution		*/
/*  subthema_ID */  $mysql .= "3, ";	/*	xx	*/
/*  KEY_MD5     */  $mysql .= "md5('Animal Armageddon: La Terre embrasée'), ";
/*  COVER       */  $mysql .= "'Animal-Armageddon-03.jpg', ";
/*  TITLE       */  $mysql .= "'Animal Armageddon:', ";
/*  subTITLE    */  $mysql .= "'La Terre embrasée.', ";
/*  ensubTITLE  */  $mysql .= "'The Great Dying.', ";
/*  TIME        */  $mysql .= "00:47:52, ";
/*  YEAR        */  $mysql .= "2009, ";
/*  DIFF        */  $mysql .= "'France 5', ";
/*  LANGUAGE    */  $mysql .= "'Français', ";
/*  SUBTITLES   */  $mysql .= "'non', ";
/*  SEASON      */  $mysql .= "0, ";
/*  EPISODE     */  $mysql .= "3, ";
/*  maxEPISODE  */  $mysql .= "8, ";
/*  localFILE   */  $mysql .= "'Animal Armageddon x03-fr - La Terre embrasée [The Great Dying][252] - Permien-Trias.mp4', ";
/*  sourceFILE  */  $mysql .= "'DailyMotion', ";
/*  chaineFILE  */  $mysql .= "'Tetranychus', ";
/*  sourceLINK  */  $mysql .= "'http://www.dailymotion.com/video/xcpdxe_animal-armageddon-la-terre-embrasee_tech#.UdCkH2ItxQE', ";
/*  qualityFILE */  $mysql .= "'Low Res.', ";
/*  widthFILE   */  $mysql .= "512, ";
/*  heightFILE  */  $mysql .= "304, ";
/*  DESCRIPTION */  $mysql .= "'L\'extinction Permien-Trias ou extinction permienne est une extinction massive survenue il y a environ 252 millions d\'années. Elle délimite l\'ère géologique du Permien et celle du Trias, donc la limite entre le Paléozoïque (l\'ère primaire) et le Mésozoïque (l\'ère secondaire).<br>Cette extinction est marquée par la disparition de 95 % des espèces marines et de 70 % des espèces vivant sur les continents, ce qui en fait la plus grande extinction massive ayant affecté la biosphère. En conséquence, retrouver un niveau de diversification équivalent a pris beaucoup plus de temps que pour les autres extinctions massives. Cet événement a été décrit par l\'auteur D. H. Erwin comme « [...] la mère de toutes les extinctions de masse. »' ";
$mysql .= ") ";

$mysql  = "INSERT INTO `video_keywords` (keyw_ID, keyw_word) VALUES ";
$mysql .= "(md5('Animal Armageddon: La Terre embrasée'), 'extinction massive'), ";
$mysql .= "(md5('Animal Armageddon: La Terre embrasée'), 'permien'), ";
$mysql .= "(md5('Animal Armageddon: La Terre embrasée'), 'trias'), ";
$mysql .= "(md5('Animal Armageddon: La Terre embrasée'), 'pangée'), ";
$mysql .= "(md5('Animal Armageddon: La Terre embrasée'), 'reptile mammalien'), ";
$mysql .= "(md5('Animal Armageddon: La Terre embrasée'), 'lystrosaure'), ";









$mysql  = "INSERT INTO `video_library` (genre_ID, subgenre_ID, thema_ID, subthema_ID, library_ID, library_cover, library_title, library_subtitle, library_ensubtitle, library_time, library_year, library_diffusion, library_language, library_subtitles, library_season, library_episode, library_maxepisode, library_localfile, library_sourcefile, library_quality, library_widthfile, library_heightfile) VALUES ";
$mysql .= "( ";
/*  genre_ID    */  $mysql .= "2, ";	/*	documentaire	*/
/*  subgenre_ID */  $mysql .= "1, ";	/*	scientifique	*/
/*  thema_ID    */  $mysql .= "1, ";	/*	evolution		*/
/*  subthema_ID */  $mysql .= "4, ";	/*	xx	*/
/*  KEY_MD5     */  $mysql .= "md5('Animal Armageddon: Triasique parc'), ";
/*  COVER       */  $mysql .= "'Animal-Armageddon-04.jpg', ";
/*  TITLE       */  $mysql .= "'Animal Armageddon:', ";
/*  subTITLE    */  $mysql .= "'Triasique parc.', ";
/*  ensubTITLE  */  $mysql .= "'Strangled.', ";
/*  TIME        */  $mysql .= "00:46:47, ";
/*  YEAR        */  $mysql .= "2009, ";
/*  DIFF        */  $mysql .= "'France 5', ";
/*  LANGUAGE    */  $mysql .= "'Français', ";
/*  SUBTITLES   */  $mysql .= "'non', ";
/*  SEASON      */  $mysql .= "0, ";
/*  EPISODE     */  $mysql .= "4, ";
/*  maxEPISODE  */  $mysql .= "8, ";
/*  localFILE   */  $mysql .= "'Animal Armageddon x04-fr - Triasique parc [Strangled][200] - Trias-Jurassique.mp4', ";
/*  sourceFILE  */  $mysql .= "'YouTube', ";
/*  chaineFILE  */  $mysql .= "'HOMININESAPIENS', ";
/*  sourceLINK  */  $mysql .= "'https://www.youtube.com/watch?v=A2a8AjmJeFk', ";
/*  qualityFILE */  $mysql .= "'HD.', ";
/*  widthFILE   */  $mysql .= "1280, ";
/*  heightFILE  */  $mysql .= "720, ";
/*  DESCRIPTION */  $mysql .= "'L\'extinction du Jurassique ou extinction T-J est une extinction massive qui s\'est produite à la fin du Trias, il y a environ 200 Ma. Près de 20 % des espèces marines, les Crurotarsi les plus importants, une grande partie des Therapsida et les gros amphibiens ont disparu. La diversité biologique a été diminuée de moitié.<br>Elle s\'est produite à peu près au moment où la Pangée s\'est fracturée. On n\'en connaît pas la cause mais elle peut être due à la conjugaison :<br><ul><li>d\'un changement climatique graduel ou de fluctuations du niveau de la mer, mais ceci n\'explique pas les disparitions marines ;</li><li>d\'un ou plusieurs impacts d\'astéroïdes, mais aucun grand cratère d\'impact ne coïncide pour cette période ;</li><li>à une éruption volcanique qui aurait entraîné un réchauffement climatique global, l\'ouverture de la province magmatique centre atlantique (=(en) CAMP) semble être une des causes les plus plausibles.</li><\ul>Cette extinction a permis l\'explosion radiative des dinosaures en libérant des niches écologiques.' ";
$mysql .= ") ";

$mysql  = "INSERT INTO `video_keywords` (keyw_ID, keyw_word) VALUES ";
$mysql .= "(md5('Animal Armageddon: Triasique parc'), 'extinction massive'), ";
$mysql .= "(md5('Animal Armageddon: Triasique parc'), 'permien'), ";
$mysql .= "(md5('Animal Armageddon: Triasique parc'), 'trias'), ";
$mysql .= "(md5('Animal Armageddon: Triasique parc'), 'eudimorphodon'), ";
$mysql .= "(md5('Animal Armageddon: Triasique parc'), 'rutiodon'), ";
$mysql .= "(md5('Animal Armageddon: Triasique parc'), 'megazostrodon'), ";





?>
