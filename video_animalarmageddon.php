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




/*
 Le volume dans le lecteur C n'a pas de nom.
 Le num‚ro de s‚rie du volume est C035-0B42

 R‚pertoire de C:\Users\Corto\Videos

15/07/2013  02:10    <REP>          .
15/07/2013  02:10    <REP>          ..
08/07/2013  20:53    <REP>          --Covers
28/06/2013  03:58    <REP>          -Actu
01/07/2013  01:12    <REP>          -Animaliers
10/07/2013  03:16    <REP>          -Civilisation
14/07/2013  03:19    <REP>          -Evolution
12/07/2013  20:14    <REP>          -Fictions
22/06/2013  01:20    <REP>          -Histoire
21/06/2013  23:38    <REP>          -TED
14/07/2013  20:36    <REP>          -Univers
15/06/2013  04:38            28ÿ714 Classeur2.xlsx
15/07/2013  02:10                62 dir.bat
15/07/2013  02:10                 0 dir.txt
16/09/2010  15:51    <REP>          Games for Windows - LIVE Videos
12/02/2013  00:43    <REP>          Media Go
16/06/2013  23:52         1ÿ179ÿ648 nu_video.accdb
15/06/2013  04:56    <REP>          tests
               4 fichier(s)        1ÿ208ÿ424 octets

 R‚pertoire de C:\Users\Corto\Videos\--Covers

08/07/2013  20:53    <REP>          .
08/07/2013  20:53    <REP>          ..
14/06/2013  03:42            28ÿ739 044572-001-A_11500.jpg
14/06/2013  03:43            45ÿ651 044572-001_odysseus1_05.jpg
14/06/2013  03:43            74ÿ725 044572-001_odysseus1_06.jpg
14/06/2013  03:43            52ÿ612 044572-001_odysseus1_09.jpg
14/06/2013  04:12            54ÿ019 044572-002-A_10566.jpg
14/06/2013  04:12            64ÿ325 044572-002_odysseus2_01.jpg
14/06/2013  04:12            49ÿ360 044572-002_odysseus2_02.jpg
14/06/2013  04:12           101ÿ493 044572-002_odysseus2_03.jpg
14/06/2013  04:12            64ÿ880 044572-002_odysseus2_05.jpg
14/06/2013  04:14            41ÿ279 044572-003-A_10520.jpg
14/06/2013  04:14            44ÿ848 044572-003_odysseus3_01.jpg
14/06/2013  04:14            76ÿ490 044572-003_odysseus3_02.jpg
14/06/2013  04:14            62ÿ356 044572-003_odysseus3_03.jpg
14/06/2013  04:14            87ÿ747 044572-003_odysseus3_04.jpg
15/06/2013  23:44            80ÿ662 048904-000_ksmonsterofnix_01.jpg
15/06/2013  23:44            73ÿ293 048904-000_ksmonsterofnix_02.jpg
15/06/2013  23:44           116ÿ078 048904-000_ksmonsterofnix_03.jpg
08/07/2013  20:53    <REP>          Archives
              17 fichier(s)        1ÿ118ÿ557 octets

 R‚pertoire de C:\Users\Corto\Videos\--Covers\Archives

08/07/2013  20:53    <REP>          .
08/07/2013  20:53    <REP>          ..
16/06/2013  19:06         2ÿ943ÿ922 Animal Armageddon 01.psd
16/06/2013  21:28         8ÿ426ÿ712 Animal Armageddon 02.psd
16/06/2013  19:47         4ÿ927ÿ827 Animal Armageddon 03.psd
16/06/2013  20:35        11ÿ394ÿ131 Animal Armageddon 04.psd
16/06/2013  20:47         4ÿ456ÿ936 Animal Armageddon 05.psd
16/06/2013  21:01         2ÿ777ÿ234 Animal Armageddon 06.psd
16/06/2013  21:24         3ÿ460ÿ069 Animal Armageddon 07.psd
16/06/2013  19:05         3ÿ684ÿ160 Animal Armageddon.psd
09/06/2013  22:54         5ÿ895ÿ512 Animaux … sang froid.psd
14/06/2013  02:55        11ÿ577ÿ520 Aratta, · L'aube Des Civilisations.psd
15/06/2013  04:37        10ÿ413ÿ310 Aventure de Charles Darwin.psd
15/06/2013  02:23         2ÿ943ÿ653 Ce que Darwin ne savait pas encore.psd
12/06/2013  02:00         4ÿ128ÿ450 Civilisation de l'Indus.psd
16/06/2013  02:32         1ÿ618ÿ840 Des cannibales en Europe.psd
15/06/2013  03:18         3ÿ252ÿ240 Dinosaures vivants.psd
08/07/2013  21:01    <REP>          Fonts
09/06/2013  22:52         6ÿ762ÿ843 Force cach‚e des plantes.psd
09/06/2013  22:52         4ÿ533ÿ256 Gobekli Tepe.psd
09/06/2013  22:52         7ÿ798ÿ314 Guerre des fourmis.psd
14/06/2013  02:55        12ÿ673ÿ886 Histoire des Sum‚riens.psd
15/06/2013  04:11        10ÿ739ÿ450 Ida (Darwinius masillae).psd
13/06/2013  04:55         6ÿ957ÿ085 L'empire Perse, Persepolis.psd
14/06/2013  02:55        14ÿ849ÿ656 L'‚pop‚e de Gilgamesh.psd
12/06/2013  05:25         3ÿ435ÿ700 Le code Maya enfin d‚chiffr‚.psd
09/06/2013  22:53         6ÿ704ÿ750 Le cr‚puscule des civilisations.psd
15/06/2013  16:55        22ÿ354ÿ682 Le jour o— la terre faillit disparaitre.psd
13/06/2013  03:59         5ÿ601ÿ490 Le mystere des Nascas.psd
12/06/2013  20:14         7ÿ241ÿ603 Le Royaume des Nabat‚ens de P‚tra … H‚gra.psd
09/06/2013  22:53         3ÿ650ÿ637 Monsanto.psd
14/06/2013  02:52        18ÿ068ÿ632 M‚sopotamie Les Origines De Notre Civilisation.psd
16/06/2013  22:02         2ÿ761ÿ015 Origine de la vie-de l'eau … la terre.psd
16/06/2013  21:52         3ÿ087ÿ356 Origine de la vie-Premiers organismes.psd
16/06/2013  01:09         4ÿ053ÿ750 Origines et ‚volution de l'homme - La bip‚die.psd
12/06/2013  20:37         4ÿ519ÿ084 P‚tra les secrets de la cite de roc.psd
15/06/2013  02:02    <REP>          RnD
12/06/2013  01:18         9ÿ859ÿ838 Seigneurs Hittites.psd
13/06/2013  20:39        33ÿ743ÿ623 Sparte, une cite d'exception.psd
09/06/2013  22:53        95ÿ304ÿ246 Univers et ses mysteres s01.psd
09/06/2013  22:53        67ÿ985ÿ451 Univers et ses mysteres s02.psd
09/06/2013  22:52        34ÿ506ÿ069 Univers et ses mysteres s03.psd
16/06/2013  05:22         4ÿ095ÿ627 volution des espŠces - Exemples multiples et explications.psd
              39 fichier(s)      473ÿ188ÿ559 octets

 R‚pertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts

08/07/2013  21:01    <REP>          .
08/07/2013  21:01    <REP>          ..
08/07/2013  21:01    <REP>          action_of_the_time_new
08/07/2013  21:03    <REP>          clemente_pd
08/07/2013  21:01    <REP>          fail
08/07/2013  21:01    <REP>          false_advertising
08/07/2013  21:01    <REP>          gara
08/07/2013  21:03    <REP>          gar_a_mondtall
08/07/2013  21:01    <REP>          georg
08/07/2013  21:03    <REP>          geo_sans_light
08/07/2013  21:01    <REP>          handwriting_draft
08/07/2013  21:01    <REP>          lakestreet
13/06/2013  19:59    <REP>          stymiestylus
               0 fichier(s)                0 octets

 R‚pertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\action_of_the_time_new

08/07/2013  21:01    <REP>          .
08/07/2013  21:01    <REP>          ..
31/01/2013  09:53            34ÿ816 Action of the Time New.doc
22/03/2011  07:04           754ÿ804 Action of the Time New.ttf
               2 fichier(s)          789ÿ620 octets

 R‚pertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\clemente_pd

08/07/2013  21:03    <REP>          .
08/07/2013  21:03    <REP>          ..
21/11/2011  08:13           118ÿ464 ClementePDaa-Hairline.ttf
21/11/2011  08:13           102ÿ112 ClementePDab-HairlineItalic.ttf
21/11/2011  08:15           119ÿ340 ClementePDac-ExtraLight.ttf
21/11/2011  08:14            99ÿ760 ClementePDad-ExtraLightItal.ttf
21/11/2011  08:14           102ÿ644 ClementePDae-Light.ttf
21/11/2011  08:14            90ÿ680 ClementePDaf-LightItalic.ttf
21/11/2011  08:13            90ÿ128 ClementePDag-Book.ttf
21/11/2011  08:14            84ÿ088 ClementePDah-BookItalic.ttf
21/11/2011  08:14            87ÿ116 ClementePDai-Regular.ttf
21/11/2011  08:14            80ÿ088 ClementePDaj-RegularItalic.ttf
21/11/2011  08:14            83ÿ668 ClementePDak-SemiBold.ttf
21/11/2011  08:14            78ÿ152 ClementePDal-SemiBoldItalic.ttf
21/11/2011  08:14            80ÿ204 ClementePDam-Bold.ttf
21/11/2011  08:14            76ÿ592 ClementePDan-BoldItalic.ttf
21/11/2011  08:13            78ÿ964 ClementePDao-Heavy.ttf
21/11/2011  08:13            75ÿ392 ClementePDap-HeavyItalic.ttf
21/11/2011  08:13            71ÿ984 ClementePDaq-UltraBold.ttf
21/11/2011  08:13            70ÿ156 ClementePDar-UltraBoldItali.ttf
              18 fichier(s)        1ÿ589ÿ532 octets

 R‚pertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\fail

08/07/2013  21:01    <REP>          .
08/07/2013  21:01    <REP>          ..
10/05/2005  23:44           162ÿ324 FAIL____.TTF
               1 fichier(s)          162ÿ324 octets

 R‚pertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\false_advertising

08/07/2013  21:01    <REP>          .
08/07/2013  21:01    <REP>          ..
05/09/2009  15:54            61ÿ516 False_Advertising.ttf
               1 fichier(s)           61ÿ516 octets

 R‚pertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\gara

08/07/2013  21:01    <REP>          .
08/07/2013  21:01    <REP>          ..
18/02/1998  11:48            59ÿ020 GARABL__.TTF
18/02/1998  11:20            61ÿ092 GARARG__.TTF
               2 fichier(s)          120ÿ112 octets

 R‚pertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\gar_a_mondtall

08/07/2013  21:03    <REP>          .
08/07/2013  21:03    <REP>          ..
08/10/2012  23:58           148ÿ604 Gar-A-MondTall-Antique.ttf
09/10/2012  00:02            94ÿ800 Gar-A-MondTall.ttf
               2 fichier(s)          243ÿ404 octets

 R‚pertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\georg

08/07/2013  21:01    <REP>          .
08/07/2013  21:01    <REP>          ..
23/08/2005  11:30            34ÿ564 GeorgItalic.ttf
23/08/2005  11:30            35ÿ680 GeorgLight.ttf
23/08/2005  11:30            36ÿ524 GeorgRegular.ttf
               3 fichier(s)          106ÿ768 octets

 R‚pertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\geo_sans_light

08/07/2013  21:03    <REP>          .
08/07/2013  21:03    <REP>          ..
21/11/2004  09:26            62ÿ196 GeosansLight-Oblique.ttf
20/10/2004  16:20            60ÿ072 GeosansLight.ttf
               2 fichier(s)          122ÿ268 octets

 R‚pertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\handwriting_draft

08/07/2013  21:01    <REP>          .
08/07/2013  21:01    <REP>          ..
08/09/2011  19:00            29ÿ999 Fonts-lab_free-font_licence.pdf
08/09/2011  19:37           441ÿ360 handwriting-draft_free-version.ttf
               2 fichier(s)          471ÿ359 octets

 R‚pertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\lakestreet

08/07/2013  21:01    <REP>          .
08/07/2013  21:01    <REP>          ..
16/11/1999  15:48            85ÿ072 LAKERG__.TTF
27/10/1998  07:53             3ÿ011 TestPilotCollectiveLicense.txt
               2 fichier(s)           88ÿ083 octets

 R‚pertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\stymiestylus

13/06/2013  19:59    <REP>          .
13/06/2013  19:59    <REP>          ..
29/06/2012  19:21            11ÿ936 StymieStylus.otf
29/06/2012  19:22            11ÿ440 StymieStylus1.otf
               2 fichier(s)           23ÿ376 octets

 R‚pertoire de C:\Users\Corto\Videos\--Covers\Archives\RnD

15/06/2013  02:02    <REP>          .
15/06/2013  02:02    <REP>          ..
07/06/2013  00:13           316ÿ993 univers-et-ses-mysteres-s01e01va.jpg
07/06/2013  00:13           408ÿ481 univers-et-ses-mysteres-s01e01vb.jpg
07/06/2013  00:13           279ÿ186 univers-et-ses-mysteres-s01e01vc.jpg
07/06/2013  00:13           353ÿ110 univers-et-ses-mysteres-s01e01vd.jpg
07/06/2013  00:14           352ÿ865 univers-et-ses-mysteres-s01e01ve.jpg
07/06/2013  00:14           347ÿ017 univers-et-ses-mysteres-s01e01vf.jpg
07/06/2013  00:12           253ÿ120 univers-et-ses-mysteres-s01e02va.jpg
07/06/2013  00:12           333ÿ295 univers-et-ses-mysteres-s01e02vb.jpg
07/06/2013  00:10           365ÿ864 univers-et-ses-mysteres-s01e03va.jpg
07/06/2013  00:08           213ÿ888 univers-et-ses-mysteres-s01e04va.jpg
07/06/2013  00:09           167ÿ834 univers-et-ses-mysteres-s01e04vb.jpg
07/06/2013  00:09           133ÿ209 univers-et-ses-mysteres-s01e04vc.jpg
07/06/2013  00:09           100ÿ448 univers-et-ses-mysteres-s01e04vd.jpg
07/06/2013  00:07           251ÿ829 univers-et-ses-mysteres-s01e05va.jpg
07/06/2013  00:07           160ÿ931 univers-et-ses-mysteres-s01e05vb.jpg
07/06/2013  00:07           255ÿ212 univers-et-ses-mysteres-s01e05vc.jpg
07/06/2013  00:07           214ÿ915 univers-et-ses-mysteres-s01e05vd.jpg
07/06/2013  00:07           246ÿ510 univers-et-ses-mysteres-s01e05ve.jpg
07/06/2013  00:07           313ÿ909 univers-et-ses-mysteres-s01e05vf.jpg
07/06/2013  00:08           232ÿ826 univers-et-ses-mysteres-s01e05vg.jpg
07/06/2013  00:08           258ÿ003 univers-et-ses-mysteres-s01e05vh.jpg
07/06/2013  00:08           101ÿ749 univers-et-ses-mysteres-s01e05vi.jpg
07/06/2013  00:08           183ÿ344 univers-et-ses-mysteres-s01e05vj.jpg
07/06/2013  00:06           327ÿ199 univers-et-ses-mysteres-s01e06va.jpg
07/06/2013  00:06           309ÿ049 univers-et-ses-mysteres-s01e06vb.jpg
07/06/2013  00:06           323ÿ427 univers-et-ses-mysteres-s01e06vc.jpg
07/06/2013  00:06           152ÿ917 univers-et-ses-mysteres-s01e06vd.jpg
07/06/2013  00:04           438ÿ513 univers-et-ses-mysteres-s01e07va.jpg
07/06/2013  00:04           325ÿ034 univers-et-ses-mysteres-s01e07vb.jpg
07/06/2013  00:04           650ÿ975 univers-et-ses-mysteres-s01e07vc.jpg
07/06/2013  00:04           168ÿ153 univers-et-ses-mysteres-s01e07vd.jpg
07/06/2013  00:05           218ÿ585 univers-et-ses-mysteres-s01e07ve.jpg
07/06/2013  00:05           193ÿ242 univers-et-ses-mysteres-s01e07vf.jpg
07/06/2013  00:05           335ÿ465 univers-et-ses-mysteres-s01e07vg.jpg
07/06/2013  00:05           287ÿ389 univers-et-ses-mysteres-s01e07vh.jpg
06/06/2013  23:52           185ÿ853 univers-et-ses-mysteres-s01e08va.jpg
06/06/2013  23:55           171ÿ415 univers-et-ses-mysteres-s01e08vb.jpg
06/06/2013  23:55           179ÿ142 univers-et-ses-mysteres-s01e08vc.jpg
06/06/2013  23:55           207ÿ253 univers-et-ses-mysteres-s01e08vd.jpg
06/06/2013  23:55           273ÿ184 univers-et-ses-mysteres-s01e08ve.jpg
06/06/2013  23:55           106ÿ899 univers-et-ses-mysteres-s01e08vf.jpg
06/06/2013  23:55           228ÿ199 univers-et-ses-mysteres-s01e08vg.jpg
06/06/2013  23:56           141ÿ750 univers-et-ses-mysteres-s01e08vh.jpg
06/06/2013  23:56           122ÿ493 univers-et-ses-mysteres-s01e08vi.jpg
06/06/2013  23:43           317ÿ571 univers-et-ses-mysteres-s01e09va.jpg
06/06/2013  23:43           291ÿ122 univers-et-ses-mysteres-s01e09vb.jpg
06/06/2013  23:43           327ÿ808 univers-et-ses-mysteres-s01e09vc.jpg
06/06/2013  23:44           340ÿ545 univers-et-ses-mysteres-s01e09vd.jpg
06/06/2013  23:45           169ÿ199 univers-et-ses-mysteres-s01e09ve.jpg
06/06/2013  23:45           286ÿ579 univers-et-ses-mysteres-s01e09vf.jpg
06/06/2013  23:45           373ÿ685 univers-et-ses-mysteres-s01e09vg.jpg
06/06/2013  23:45           370ÿ979 univers-et-ses-mysteres-s01e09vh.jpg
06/06/2013  23:45           320ÿ533 univers-et-ses-mysteres-s01e09vi.jpg
06/06/2013  23:46           436ÿ794 univers-et-ses-mysteres-s01e09vj.jpg
06/06/2013  23:46           365ÿ719 univers-et-ses-mysteres-s01e09vk.jpg
06/06/2013  23:46           358ÿ410 univers-et-ses-mysteres-s01e09vl.jpg
06/06/2013  23:38           269ÿ869 univers-et-ses-mysteres-s01e10va.jpg
06/06/2013  23:38           269ÿ458 univers-et-ses-mysteres-s01e10vb.jpg
06/06/2013  23:38           210ÿ956 univers-et-ses-mysteres-s01e10vc.jpg
06/06/2013  23:38           317ÿ463 univers-et-ses-mysteres-s01e10vd.jpg
06/06/2013  23:38           314ÿ554 univers-et-ses-mysteres-s01e10ve.jpg
06/06/2013  23:33           214ÿ481 univers-et-ses-mysteres-s01e11va.jpg
06/06/2013  23:33           113ÿ059 univers-et-ses-mysteres-s01e11vb.jpg
06/06/2013  23:34            64ÿ746 univers-et-ses-mysteres-s01e11vc.jpg
06/06/2013  23:34            95ÿ835 univers-et-ses-mysteres-s01e11vd.jpg
06/06/2013  23:34            80ÿ368 univers-et-ses-mysteres-s01e11ve.jpg
06/06/2013  23:34           164ÿ632 univers-et-ses-mysteres-s01e11vf.jpg
06/06/2013  23:34            86ÿ487 univers-et-ses-mysteres-s01e11vg.jpg
06/06/2013  23:34           117ÿ385 univers-et-ses-mysteres-s01e11vh.jpg
06/06/2013  23:35            98ÿ590 univers-et-ses-mysteres-s01e11vi.jpg
06/06/2013  23:35           119ÿ695 univers-et-ses-mysteres-s01e11vj.jpg
06/06/2013  23:14           169ÿ302 univers-et-ses-mysteres-s01e12va.jpg
06/06/2013  23:14           235ÿ869 univers-et-ses-mysteres-s01e12vb.jpg
06/06/2013  23:15           237ÿ950 univers-et-ses-mysteres-s01e12vc.jpg
06/06/2013  23:15            77ÿ178 univers-et-ses-mysteres-s01e12vd.jpg
06/06/2013  23:15           299ÿ616 univers-et-ses-mysteres-s01e12ve.jpg
06/06/2013  23:15           308ÿ126 univers-et-ses-mysteres-s01e12vf.jpg
06/06/2013  23:15           298ÿ208 univers-et-ses-mysteres-s01e12vg.jpg
06/06/2013  23:16           342ÿ837 univers-et-ses-mysteres-s01e12vh.jpg
06/06/2013  23:16           358ÿ557 univers-et-ses-mysteres-s01e12vi.jpg
06/06/2013  23:16           141ÿ131 univers-et-ses-mysteres-s01e12vj.jpg
06/06/2013  23:16           135ÿ784 univers-et-ses-mysteres-s01e12vk.jpg
06/06/2013  23:16           106ÿ314 univers-et-ses-mysteres-s01e12vl.jpg
06/06/2013  23:17           233ÿ564 univers-et-ses-mysteres-s01e12vm.jpg
06/06/2013  23:17           204ÿ134 univers-et-ses-mysteres-s01e12vn.jpg
06/06/2013  23:17           259ÿ833 univers-et-ses-mysteres-s01e12vo.jpg
06/06/2013  23:17           143ÿ655 univers-et-ses-mysteres-s01e12vp.jpg
06/06/2013  23:17           172ÿ530 univers-et-ses-mysteres-s01e12vq.jpg
06/06/2013  23:13           236ÿ568 univers-et-ses-mysteres-s01e13va.jpg
06/06/2013  23:13           220ÿ423 univers-et-ses-mysteres-s01e13vb.jpg
06/06/2013  23:13           191ÿ871 univers-et-ses-mysteres-s01e13vc.jpg
06/06/2013  23:13           179ÿ976 univers-et-ses-mysteres-s01e13vd.jpg
06/06/2013  23:13           106ÿ830 univers-et-ses-mysteres-s01e13ve.jpg
06/06/2013  23:06           214ÿ074 univers-et-ses-mysteres-s01e14va.jpg
06/06/2013  23:06           217ÿ401 univers-et-ses-mysteres-s01e14vb.jpg
06/06/2013  23:06           211ÿ985 univers-et-ses-mysteres-s01e14vc.jpg
06/06/2013  23:07           178ÿ659 univers-et-ses-mysteres-s01e14vd.jpg
06/06/2013  23:11           493ÿ867 univers-et-ses-mysteres-s01e14ve.jpg
06/06/2013  23:11           420ÿ264 univers-et-ses-mysteres-s01e14vf.jpg
06/06/2013  23:11           399ÿ893 univers-et-ses-mysteres-s01e14vg.jpg
06/06/2013  23:11           278ÿ746 univers-et-ses-mysteres-s01e14vh.jpg
06/06/2013  23:12           255ÿ414 univers-et-ses-mysteres-s01e14vi.jpg
06/06/2013  23:12           169ÿ457 univers-et-ses-mysteres-s01e14vj.jpg
06/06/2013  23:12           255ÿ038 univers-et-ses-mysteres-s01e14vk.jpg
08/06/2013  03:32           236ÿ830 univers-et-ses-mysteres-s02e01va.jpg
08/06/2013  03:33           198ÿ499 univers-et-ses-mysteres-s02e01vb.jpg
08/06/2013  03:33           117ÿ340 univers-et-ses-mysteres-s02e01vc.jpg
08/06/2013  03:34           268ÿ326 univers-et-ses-mysteres-s02e01vd.jpg
08/06/2013  03:34           266ÿ227 univers-et-ses-mysteres-s02e01ve.jpg
08/06/2013  03:34           186ÿ084 univers-et-ses-mysteres-s02e01vf.jpg
08/06/2013  03:35           270ÿ360 univers-et-ses-mysteres-s02e02va.jpg
08/06/2013  03:35           301ÿ422 univers-et-ses-mysteres-s02e02vb.jpg
08/06/2013  03:35           356ÿ368 univers-et-ses-mysteres-s02e02vc.jpg
08/06/2013  03:35           317ÿ069 univers-et-ses-mysteres-s02e02vd.jpg
08/06/2013  03:35           228ÿ536 univers-et-ses-mysteres-s02e03va.jpg
08/06/2013  03:36           280ÿ428 univers-et-ses-mysteres-s02e03vb.jpg
08/06/2013  03:36           188ÿ423 univers-et-ses-mysteres-s02e03vc.jpg
08/06/2013  03:36           161ÿ210 univers-et-ses-mysteres-s02e03vd.jpg
08/06/2013  03:37            79ÿ809 univers-et-ses-mysteres-s02e03ve.jpg
08/06/2013  03:37           135ÿ814 univers-et-ses-mysteres-s02e03vf.jpg
08/06/2013  03:37           232ÿ280 univers-et-ses-mysteres-s02e03vg.jpg
08/06/2013  03:37           216ÿ674 univers-et-ses-mysteres-s02e03vh.jpg
08/06/2013  03:38           466ÿ513 univers-et-ses-mysteres-s02e04va.jpg
08/06/2013  03:38           303ÿ330 univers-et-ses-mysteres-s02e05va.jpg
08/06/2013  03:38           215ÿ490 univers-et-ses-mysteres-s02e05vb.jpg
08/06/2013  03:39           284ÿ589 univers-et-ses-mysteres-s02e05vc.jpg
08/06/2013  03:39           449ÿ278 univers-et-ses-mysteres-s02e06va.jpg
08/06/2013  03:39           637ÿ509 univers-et-ses-mysteres-s02e06vb.jpg
08/06/2013  03:40           292ÿ709 univers-et-ses-mysteres-s02e07va.jpg
08/06/2013  03:40           204ÿ235 univers-et-ses-mysteres-s02e08va.jpg
08/06/2013  03:40           458ÿ545 univers-et-ses-mysteres-s02e09va.jpg
08/06/2013  03:40           259ÿ531 univers-et-ses-mysteres-s02e09vb.jpg
08/06/2013  03:41           189ÿ229 univers-et-ses-mysteres-s02e09vc.jpg
08/06/2013  03:41           525ÿ766 univers-et-ses-mysteres-s02e10va.jpg
08/06/2013  03:41           242ÿ242 univers-et-ses-mysteres-s02e11va.jpg
08/06/2013  03:42           293ÿ622 univers-et-ses-mysteres-s02e11vb.jpg
08/06/2013  03:43           168ÿ901 univers-et-ses-mysteres-s02e11vc.jpg
08/06/2013  03:43           325ÿ928 univers-et-ses-mysteres-s02e11vd.jpg
08/06/2013  03:43           306ÿ655 univers-et-ses-mysteres-s02e11ve.jpg
08/06/2013  03:43           298ÿ392 univers-et-ses-mysteres-s02e11vf.jpg
08/06/2013  03:44           288ÿ180 univers-et-ses-mysteres-s02e11vg.jpg
08/06/2013  03:44           279ÿ247 univers-et-ses-mysteres-s02e11vh.jpg
08/06/2013  03:44           100ÿ751 univers-et-ses-mysteres-s02e11vi.jpg
08/06/2013  03:44            63ÿ334 univers-et-ses-mysteres-s02e11vj.jpg
08/06/2013  03:45           316ÿ618 univers-et-ses-mysteres-s02e12va.jpg
08/06/2013  03:45           260ÿ733 univers-et-ses-mysteres-s02e12vb.jpg
08/06/2013  03:45           199ÿ223 univers-et-ses-mysteres-s02e12vc.jpg
08/06/2013  03:45           252ÿ813 univers-et-ses-mysteres-s02e12vd.jpg
08/06/2013  03:45           218ÿ812 univers-et-ses-mysteres-s02e12ve.jpg
08/06/2013  03:46           216ÿ863 univers-et-ses-mysteres-s02e12vf.jpg
08/06/2013  03:46           239ÿ327 univers-et-ses-mysteres-s02e13va.jpg
08/06/2013  03:46           252ÿ184 univers-et-ses-mysteres-s02e13vb.jpg
08/06/2013  03:47           187ÿ863 univers-et-ses-mysteres-s02e14va.jpg
08/06/2013  03:47           154ÿ423 univers-et-ses-mysteres-s02e14vb.jpg
08/06/2013  03:47           229ÿ611 univers-et-ses-mysteres-s02e14vc.jpg
08/06/2013  03:47           236ÿ915 univers-et-ses-mysteres-s02e14vd.jpg
08/06/2013  03:48           248ÿ967 univers-et-ses-mysteres-s02e15va.jpg
08/06/2013  03:58           683ÿ870 univers-et-ses-mysteres-s02e16va.jpg
08/06/2013  03:59           306ÿ346 univers-et-ses-mysteres-s02e16vb.jpg
08/06/2013  03:59           235ÿ021 univers-et-ses-mysteres-s02e16vc.jpg
08/06/2013  04:00           238ÿ736 univers-et-ses-mysteres-s02e17va.jpg
08/06/2013  04:00           174ÿ159 univers-et-ses-mysteres-s02e17vb.jpg
08/06/2013  04:00           129ÿ296 univers-et-ses-mysteres-s02e17vc.jpg
08/06/2013  04:00           131ÿ379 univers-et-ses-mysteres-s02e17vd.jpg
08/06/2013  04:00           276ÿ101 univers-et-ses-mysteres-s02e17ve.jpg
08/06/2013  04:01           318ÿ664 univers-et-ses-mysteres-s02e17vf.jpg
08/06/2013  04:02           282ÿ085 univers-et-ses-mysteres-s02e18va.jpg
08/06/2013  04:11           198ÿ810 univers-et-ses-mysteres-s02e18vb.jpg
08/06/2013  04:11           359ÿ221 univers-et-ses-mysteres-s02e18vc.jpg
08/06/2013  04:11           288ÿ895 univers-et-ses-mysteres-s02e18vd.jpg
08/06/2013  04:11           135ÿ437 univers-et-ses-mysteres-s02e18ve.jpg
08/06/2013  04:12           179ÿ889 univers-et-ses-mysteres-s02e18vf.jpg
09/06/2013  21:21           187ÿ149 univers-et-ses-mysteres-s03e01va.jpg
09/06/2013  21:20           269ÿ051 univers-et-ses-mysteres-s03e02va.jpg
09/06/2013  21:20           116ÿ160 univers-et-ses-mysteres-s03e02vb.jpg
09/06/2013  21:20           272ÿ621 univers-et-ses-mysteres-s03e02vc.jpg
09/06/2013  21:20           216ÿ411 univers-et-ses-mysteres-s03e02vd.jpg
09/06/2013  21:21           198ÿ318 univers-et-ses-mysteres-s03e02ve.jpg
09/06/2013  21:19           340ÿ493 univers-et-ses-mysteres-s03e03va.jpg
09/06/2013  21:19           387ÿ145 univers-et-ses-mysteres-s03e03vb.jpg
09/06/2013  21:19           194ÿ978 univers-et-ses-mysteres-s03e03vc.jpg
09/06/2013  21:19           358ÿ153 univers-et-ses-mysteres-s03e04va.jpg
09/06/2013  21:19           328ÿ676 univers-et-ses-mysteres-s03e04vb.jpg
09/06/2013  21:19           135ÿ516 univers-et-ses-mysteres-s03e05va.jpg
09/06/2013  21:18           215ÿ575 univers-et-ses-mysteres-s03e06va.jpg
09/06/2013  21:18           234ÿ092 univers-et-ses-mysteres-s03e06vb.jpg
09/06/2013  21:17           197ÿ923 univers-et-ses-mysteres-s03e07va.jpg
09/06/2013  21:18           240ÿ232 univers-et-ses-mysteres-s03e07vb.jpg
09/06/2013  21:18           217ÿ999 univers-et-ses-mysteres-s03e07vc.jpg
09/06/2013  21:17           369ÿ300 univers-et-ses-mysteres-s03e08va.jpg
09/06/2013  21:17           298ÿ920 univers-et-ses-mysteres-s03e08vb.jpg
09/06/2013  21:17           381ÿ676 univers-et-ses-mysteres-s03e08vc.jpg
09/06/2013  21:17           210ÿ734 univers-et-ses-mysteres-s03e08vd.jpg
09/06/2013  21:16           284ÿ500 univers-et-ses-mysteres-s03e09va.jpg
09/06/2013  21:16           235ÿ709 univers-et-ses-mysteres-s03e09vb.jpg
09/06/2013  21:16           231ÿ811 univers-et-ses-mysteres-s03e09vc.jpg
09/06/2013  21:16           200ÿ284 univers-et-ses-mysteres-s03e09vd.jpg
09/06/2013  21:15           154ÿ013 univers-et-ses-mysteres-s03e10va.jpg
09/06/2013  21:15           135ÿ163 univers-et-ses-mysteres-s03e11va.jpg
09/06/2013  21:11           263ÿ469 univers-et-ses-mysteres-s03e12va.jpg
09/06/2013  21:12           281ÿ197 univers-et-ses-mysteres-s03e12vb.jpg
09/06/2013  21:13           263ÿ659 univers-et-ses-mysteres-s03e12vc.jpg
09/06/2013  21:14           223ÿ070 univers-et-ses-mysteres-s03e12vd.jpg
09/06/2013  21:14           329ÿ070 univers-et-ses-mysteres-s03e12ve.jpg
09/06/2013  21:15           313ÿ499 univers-et-ses-mysteres-s03e12vf.jpg
             205 fichier(s)       51ÿ376ÿ752 octets

 R‚pertoire de C:\Users\Corto\Videos\-Actu

28/06/2013  03:58    <REP>          .
28/06/2013  03:58    <REP>          ..
28/06/2013  03:58     1ÿ616ÿ752ÿ200 HOME (FR).mp4
01/06/2013  22:00     1ÿ546ÿ110ÿ543 Le monde selon Monsanto [complet] [FR] [HD].mp4
27/06/2013  22:53       307ÿ710ÿ417 Le Sable - Enquˆte Sur Une Disparition.mp4
07/06/2013  20:30           292ÿ406 le-monde-selon-monsanto.jpg
28/06/2013  03:08       309ÿ046ÿ834 Population Zero ( film entier complet en francais vf fr ).mp4
               5 fichier(s)    3ÿ779ÿ912ÿ400 octets

 R‚pertoire de C:\Users\Corto\Videos\-Animaliers

01/07/2013  01:12    <REP>          .
01/07/2013  01:12    <REP>          ..
08/06/2013  23:02           394ÿ615 Animaux-a-sang-froid-x01.jpg
08/06/2013  23:00           396ÿ915 Animaux-a-sang-froid-x02.jpg
22/06/2013  02:00       259ÿ694ÿ799 Des fourmis tueuses documentaire complet en francais.mp4
08/06/2013  23:27           343ÿ774 Guerre-des-fourmis.jpg
28/06/2013  22:55       541ÿ197ÿ140 HIPPOCAMPE - Un poisson unique en son genre.mp4
01/06/2013  22:34       194ÿ365ÿ803 La force cacheïe des plantes - 01- Comme des be^tes.mp4
08/06/2013  20:08       176ÿ245ÿ570 La force cacheïe des plantes - 02- Championnes de la com.mp4
08/06/2013  21:23           183ÿ558 La force cacheïe des plantes x01.jpg
08/06/2013  21:22           273ÿ916 La force cacheïe des plantes x02.jpg
01/06/2013  22:33       244ÿ951ÿ606 La guerre des fourmis.mp4
01/07/2013  01:12       252ÿ548ÿ815 Le monde secret des termites - Arte Documentaire animal.mp4
08/06/2013  20:18       190ÿ353ÿ050 Les animaux a' sang froid -01- Les rois du d‚sert.mp4
08/06/2013  21:17       270ÿ412ÿ868 Les animaux a' sang froid -02- Les rois de la m‚tamorphose.mp4
              13 fichier(s)    2ÿ131ÿ362ÿ429 octets

 R‚pertoire de C:\Users\Corto\Videos\-Civilisation

10/07/2013  03:16    <REP>          .
10/07/2013  03:16    <REP>          ..
09/06/2013  01:39    <REP>          Egypte
09/06/2013  02:06    <REP>          Gobekli Tepe
12/06/2013  01:19    <REP>          Hittites
12/06/2013  02:00    <REP>          Indus
09/06/2013  01:39    <REP>          Khmer
10/07/2013  03:16       267ÿ567ÿ396 Le Cr‚puscule Des Dieux Nordiques.mp4
08/07/2013  02:36    <REP>          Maya
22/06/2013  01:36    <REP>          Meroe
12/06/2013  20:37    <REP>          Nabat‚ens
13/06/2013  04:00    <REP>          Nascas
13/06/2013  04:55    <REP>          Perses
13/06/2013  20:40    <REP>          Spartes
14/06/2013  02:53    <REP>          Sumer
               1 fichier(s)      267ÿ567ÿ396 octets

 R‚pertoire de C:\Users\Corto\Videos\-Civilisation\Egypte

09/06/2013  01:39    <REP>          .
09/06/2013  01:39    <REP>          ..
27/05/2013  23:11       177ÿ860ÿ007 Le cr‚puscule des civilisations 1_2.mp4
09/06/2013  01:38           350ÿ290 Le-crepuscule-des-civilisations-x01.jpg
               2 fichier(s)      178ÿ210ÿ297 octets

 R‚pertoire de C:\Users\Corto\Videos\-Civilisation\Gobekli Tepe

09/06/2013  02:06    <REP>          .
09/06/2013  02:06    <REP>          ..
09/06/2013  02:06           317ÿ730 Gobekli-Tepe.jpg
25/05/2013  22:07       142ÿ622ÿ685 Une civilisation disparue il y a 12 000 ans.mp4
               2 fichier(s)      142ÿ940ÿ415 octets

 R‚pertoire de C:\Users\Corto\Videos\-Civilisation\Hittites

12/06/2013  01:19    <REP>          .
12/06/2013  01:19    <REP>          ..
10/06/2013  22:54       182ÿ948ÿ236 Les Grandes Cit‚s Disparues- Les Seigneurs Hittites.mp4
12/06/2013  01:19           314ÿ553 Seigneurs-Hittites.jpg
               2 fichier(s)      183ÿ262ÿ789 octets

 R‚pertoire de C:\Users\Corto\Videos\-Civilisation\Indus

12/06/2013  02:00    <REP>          .
12/06/2013  02:00    <REP>          ..
12/06/2013  02:00           359ÿ039 Civilisation-de-l'Indus.jpg
27/05/2013  23:24       154ÿ138ÿ467 La civilisation de l'Indus.mp4
               2 fichier(s)      154ÿ497ÿ506 octets

 R‚pertoire de C:\Users\Corto\Videos\-Civilisation\Khmer

09/06/2013  01:39    <REP>          .
09/06/2013  01:39    <REP>          ..
27/05/2013  23:11       211ÿ698ÿ933 Le cr‚puscule des civilisations 2_2.mp4
09/06/2013  01:38           358ÿ863 Le-crepuscule-des-civilisations-x02.jpg
               2 fichier(s)      212ÿ057ÿ796 octets

 R‚pertoire de C:\Users\Corto\Videos\-Civilisation\Maya

08/07/2013  02:36    <REP>          .
08/07/2013  02:36    <REP>          ..
30/06/2013  22:18     1ÿ803ÿ299ÿ782 Le Code Maya Enfin Dechiffre (arte hd).mp4
12/06/2013  05:23           410ÿ916 Le-code-Maya-enfin-dechiffre-1.jpg
12/06/2013  05:23           411ÿ066 Le-code-Maya-enfin-dechiffre-2.jpg
12/06/2013  05:24           411ÿ038 Le-code-Maya-enfin-dechiffre-3.jpg
12/06/2013  05:24           411ÿ024 Le-code-Maya-enfin-dechiffre-4.jpg
12/06/2013  05:24           410ÿ974 Le-code-Maya-enfin-dechiffre-5.jpg
               6 fichier(s)    1ÿ805ÿ354ÿ800 octets

 R‚pertoire de C:\Users\Corto\Videos\-Civilisation\Meroe

22/06/2013  01:36    <REP>          .
22/06/2013  01:36    <REP>          ..
22/06/2013  01:36       227ÿ269ÿ992 Les Reines Noires   Meroe, L'empire Africain Au Bord Du Nil (2008).mp4
               1 fichier(s)      227ÿ269ÿ992 octets

 R‚pertoire de C:\Users\Corto\Videos\-Civilisation\Nabat‚ens

12/06/2013  20:37    <REP>          .
12/06/2013  20:37    <REP>          ..
25/05/2013  22:13       201ÿ855ÿ829 Civilisation Le Royaume des Nabat‚ens de P‚tra … H‚gra.mp4
12/06/2013  20:14           212ÿ615 Le-Royaume-des-Nabateens-de-Petra-a-Hegra.jpg
12/06/2013  20:37           387ÿ202 Petra-les-secrets-de-la-cite-de-roc.jpg
27/05/2013  23:21       103ÿ674ÿ775 P‚tra - Les secrets de la cit‚ de roc.mp4
               4 fichier(s)      306ÿ130ÿ421 octets

 R‚pertoire de C:\Users\Corto\Videos\-Civilisation\Nascas

13/06/2013  04:00    <REP>          .
13/06/2013  04:00    <REP>          ..
25/05/2013  21:47       157ÿ033ÿ807 Le mystere des Nascas.mp4
13/06/2013  04:00           293ÿ474 Le-mystere-des-Nascas.jpg
               2 fichier(s)      157ÿ327ÿ281 octets

 R‚pertoire de C:\Users\Corto\Videos\-Civilisation\Perses

13/06/2013  04:55    <REP>          .
13/06/2013  04:55    <REP>          ..
13/06/2013  04:55           260ÿ598 Empire-Perse-Persepolis.jpg
27/05/2013  23:09       192ÿ312ÿ491 L'empire Perse, Persepolis doc complet.mp4
               2 fichier(s)      192ÿ573ÿ089 octets

 R‚pertoire de C:\Users\Corto\Videos\-Civilisation\Spartes

13/06/2013  20:40    <REP>          .
13/06/2013  20:40    <REP>          ..
27/05/2013  23:46       149ÿ324ÿ429 Sparte, une cite d'exception - 1l4 - Les institutions..mp4
27/05/2013  23:48       169ÿ121ÿ885 Sparte, une cite d'exception - 2l4 - 300, quand la realite depasse le mythe.mp4
27/05/2013  23:47       151ÿ869ÿ447 Sparte, une cite d'exception - 3l4 - La Guerre du Peloponese..mp4
27/05/2013  23:48       159ÿ600ÿ676 Sparte, une cite d'exception - 4l4 - Le declin d'une culture.mp4
13/06/2013  20:35           209ÿ177 Sparte-une-cite-d-exception-1.jpg
13/06/2013  20:38           213ÿ432 Sparte-une-cite-d-exception-2.jpg
13/06/2013  20:39           215ÿ382 Sparte-une-cite-d-exception-3.jpg
13/06/2013  20:40           213ÿ394 Sparte-une-cite-d-exception-4.jpg
               8 fichier(s)      630ÿ767ÿ822 octets

 R‚pertoire de C:\Users\Corto\Videos\-Civilisation\Sumer

14/06/2013  02:53    <REP>          .
14/06/2013  02:53    <REP>          ..
27/05/2013  22:31       146ÿ260ÿ871 Aratta, · L'aube Des Civilisations doc complet.mp4
14/06/2013  01:24           272ÿ176 aratta-aube-des-civilisations.jpg
14/06/2013  02:36           261ÿ399 epopee-de-Gilgamesh.jpg
14/06/2013  02:29           514ÿ848 histoire-des-Sumeriens.jpg
25/05/2013  23:10       151ÿ226ÿ558 L histoire des Sum‚riens.mp4
25/05/2013  23:09       151ÿ657ÿ734 L'‚pop‚e de Gilgamesh.mp4
14/06/2013  02:53           264ÿ994 Mesopotamie-origines-de-notre-civilisation.jpg
27/05/2013  22:38       156ÿ502ÿ530 M‚sopotamie Les Origines De Notre Civilisation.mp4
               8 fichier(s)      606ÿ961ÿ110 octets

 R‚pertoire de C:\Users\Corto\Videos\-Evolution

14/07/2013  03:19    <REP>          .
14/07/2013  03:19    <REP>          ..
08/07/2013  00:12       533ÿ596ÿ063 043843-000-A_EQ_2_VF_00581862_MP4-1500_AMM-HBBTV.mp4
30/06/2013  23:44    <REP>          Animal Armageddon
15/06/2013  04:37           205ÿ470 Aventure-de-Charles-Darwin.jpg
10/06/2013  23:48       633ÿ718ÿ319 Ce que Darwin ne savait pas encore.mp4
15/06/2013  02:23           201ÿ155 Ce-que-Darwin-ne-savait-pas-encore.jpg
12/06/2013  03:19       634ÿ628ÿ453 Des cannibales en Europe.mp4
16/06/2013  02:32           141ÿ825 Des-cannibales-en-Europe.jpg
25/05/2013  22:09       142ÿ904ÿ390 Dinosaures vivants  [Documentaires Scientifiques].mp4
15/06/2013  03:18           288ÿ426 Dinosaures-vivants.jpg
25/05/2013  22:45       143ÿ329ÿ405 Documentaire Ida (Darwinius masillae).mp4
16/06/2013  05:22           211ÿ638 evolution-des-especes---exemples-multiples-et-explications.jpg
15/06/2013  04:12           468ÿ278 ida-darwinius-masillae.jpg
14/07/2013  03:17       168ÿ776ÿ703 La naissance de la vie - Int‚gral.mp4
28/05/2013  00:31       160ÿ235ÿ748 Le jour o— la terre faillit disparaitre.mp4
15/06/2013  16:56           270ÿ135 Le-jour-ou-la-terre-faillit-disparaitre.jpg
09/06/2013  01:39       176ÿ723ÿ800 Naissance de la Terre - Apparition de la vie.mp4
22/06/2013  01:55       181ÿ593ÿ884 Neanderthal 1_2.mp4
22/06/2013  01:54       172ÿ697ÿ563 Neanderthal 2_2.mp4
13/07/2013  19:21    <REP>          Origine de la vie
27/05/2013  22:52       669ÿ020ÿ678 Origines et ‚volution de l'homme - La bip‚die.mp4
16/06/2013  01:10           294ÿ489 Origines-et-evolution-de-l-homme---La-bipedie.jpg
25/05/2013  23:50       367ÿ437ÿ488 volution - L'aventure de Charles Darwin.mp4
25/05/2013  23:24       832ÿ471ÿ770 volution des espŠces - Exemples multiples et explications.mp4
              21 fichier(s)    4ÿ819ÿ215ÿ680 octets

 R‚pertoire de C:\Users\Corto\Videos\-Evolution\Animal Armageddon

30/06/2013  23:44    <REP>          .
30/06/2013  23:44    <REP>          ..
13/05/2013  05:35       685ÿ848ÿ935 Animal Armageddon x04-fr - Triasique parc [Strangled][200] - Trias-Jurassique.mp4
25/05/2013  23:21       630ÿ940ÿ633 Animal Armageddon x05-en [Doomsday][65] - Cr‚tac‚-Tertiaire.mp4
21/05/2013  22:13       162ÿ597ÿ357 Animal Armageddon x05-fr - La Terreur des dinosaures [Doomsday][65] - Cr‚tac‚-Tertiaire.mp4
25/05/2013  23:22       605ÿ041ÿ600 Animal Armageddon x06-en - [Panic in the Sky][65] - Cr‚tac‚-Tertiaire.mp4
21/05/2013  22:14       162ÿ082ÿ050 Animal Armageddon x06-fr - Apocalypse des dinosaures [Panic in the Sky][65] - Cr‚tac‚-Tertiaire.mp4
25/05/2013  23:20       690ÿ775ÿ724 Animal Armageddon x07-en - [Fire and Ice] - Toba.mp4
21/05/2013  22:15       164ÿ145ÿ169 Animal Armageddon x07-fr - Le Feu et la Glace [Fire and Ice] - Toba.mp4
16/06/2013  20:35           311ÿ291 Animal-Armageddon-04.jpg
16/06/2013  20:48           146ÿ363 Animal-Armageddon-05.jpg
16/06/2013  21:04           547ÿ152 Animal-Armageddon-06.jpg
16/06/2013  21:24           331ÿ771 Animal-Armageddon-07.jpg
              11 fichier(s)    3ÿ102ÿ768ÿ045 octets

 R‚pertoire de C:\Users\Corto\Videos\-Evolution\Origine de la vie

13/07/2013  19:21    <REP>          .
13/07/2013  19:21    <REP>          ..
13/05/2013  03:30       204ÿ055ÿ837 BBC - A l'origine de la vie- Episode 1 (les premiers organismes).mp4
13/05/2013  03:52       219ÿ561ÿ825 BBC - A l'origine de la vie- Episode 2 (de l'eau … la terre).mp4
13/07/2013  19:21       822ÿ465ÿ468 David Attenborough's First Life Episode 12 Arrival (BBC) (pt_br).mp4
13/07/2013  19:20       797ÿ029ÿ945 David Attenborough's First Life Episode 22 Conquest (BBC) (pt_br).mp4
16/06/2013  22:02           418ÿ941 Origine-de-la-vie-de-l-eau-a-la-terre.jpg
16/06/2013  21:53           386ÿ090 Origine-de-la-vie-Premiers-organismes.jpg
               6 fichier(s)    2ÿ043ÿ918ÿ106 octets

 R‚pertoire de C:\Users\Corto\Videos\-Fictions

12/07/2013  20:14    <REP>          .
12/07/2013  20:14    <REP>          ..
26/06/2013  01:03       312ÿ991ÿ081 1520 Par le sang du glaive film complet en francais.mp4
02/07/2013  01:30       907ÿ421ÿ188 2001.1- A Space Odyssey- The Re-Edit.mp4
19/06/2013  00:37       772ÿ574ÿ095 2012 La Fin Du Monde.mp4
29/06/2013  22:17       483ÿ391ÿ117 Aftershock Film Complet FRENCH.mp4
18/06/2013  01:40       263ÿ546ÿ290 Android Insurrection 2012. Film complet en vf..mp4
28/06/2013  23:27       336ÿ424ÿ148 Antarctica - 1983 - film complet en francais.mp4
18/06/2013  23:31       354ÿ966ÿ518 Arachnophobie - film Complet en fran‡ais entier.mp4
28/06/2013  03:21       586ÿ475ÿ500 Attila Le Hun.mp4
28/06/2013  03:03       275ÿ676ÿ237 CRAWLSPACE- FILM COMPLET FR.mp4
18/06/2013  23:18       320ÿ774ÿ986 Diary of the Dead - Chronique des morts vivants FILM COMPLET FR.mp4
18/06/2013  01:40       296ÿ750ÿ698 Double Fight City Film Complet en fran‡ais.mp4
01/07/2013  01:11       271ÿ173ÿ356 D‚tour mortel - film complet VF.mp4
18/06/2013  23:27       342ÿ563ÿ733 evil-twins film  vf.mp4
17/06/2013  23:27       308ÿ747ÿ910 Exam.mp4
18/06/2013  22:17       404ÿ481ÿ217 film entier affam‚s (2011 fr horreur dvdrip).mp4
28/06/2013  23:25       326ÿ730ÿ389 Film fran‡ais entier Antartica [FR].mp4
26/06/2013  01:16       621ÿ093ÿ712 Justinien Trouv‚ ou le Bƒtard de Dieu (film entier) - con‡u hors mariage - patriarcat catholique.mp4
28/06/2013  03:13       303ÿ294ÿ402 Kill Dead Zombie FR film complet.mp4
01/07/2013  01:28       802ÿ297ÿ208 L'Ile au tresor (2013) complet.mp4
18/06/2013  22:41       459ÿ675ÿ529 La 14e Lame (Film Complet En Fran‡ais).mp4
18/06/2013  23:04       301ÿ054ÿ910 La Horde [Horreur_Zombie] Film Entier Fran‡ais.mp4
01/07/2013  01:03       346ÿ198ÿ225 le .2008.FRENCH.DVDRip.XviD-SINUSITE up by Sahbouche.avi.mp4
15/06/2013  23:56       386ÿ261ÿ293 Le monstre de Nix.mp4
01/07/2013  00:48       313ÿ720ÿ270 Le RŠgne du feu.mp4
01/07/2013  00:25       279ÿ927ÿ906 Le Sujet Deux 2013 - FILM COMPLET EN FRAN€AIS.mp4
01/07/2013  01:11       305ÿ609ÿ764 le-guerrier-wushu - FILM COMPLET VF.mp4
18/06/2013  01:39       271ÿ443ÿ333 Mal‚fique Film Complet 2012 - Full Movie En Francais.mp4
14/06/2013  04:09       833ÿ126ÿ364 Odysseus (01-12) - De l'autre c“t‚ de la mer.mp4
14/06/2013  04:57       726ÿ455ÿ691 Odysseus (02-12) - Le duel.mp4
14/06/2013  05:00       798ÿ692ÿ074 Odysseus (03-12) - Ulysse est vivant.mp4
21/06/2013  03:29       705ÿ670ÿ248 Odysseus (04-12) - Faut-il tuer T‚l‚maque.mp4
21/06/2013  03:32       728ÿ477ÿ509 Odysseus (05-12) - La d‚mocratie contre les barbares.mp4
21/06/2013  03:38       866ÿ104ÿ765 Odysseus (06-12) - Le retour d'Ulysse.mp4
29/06/2013  01:54       813ÿ256ÿ749 Odysseus (07-12) - .mp4
28/06/2013  23:13       741ÿ218ÿ628 Odysseus (08-12) - .mp4
08/07/2013  00:23       744ÿ679ÿ319 Odysseus (09-12) - .mp4
08/07/2013  00:26       780ÿ893ÿ326 Odysseus (10-12) - .mp4
12/07/2013  20:12       779ÿ574ÿ323 Odysseus (11-12) - .mp4
12/07/2013  20:14       779ÿ558ÿ273 Odysseus (12-12) - .mp4
18/06/2013  22:39       308ÿ129ÿ581 Shuttle (2008).mp4
18/06/2013  01:07       487ÿ059ÿ774 The Inhabited Island (Film Entier).mp4
19/06/2013  00:22       285ÿ948ÿ839 The Traveler ( Film Entier FR -HD )  HORREUR.mp4
18/06/2013  22:42       346ÿ380ÿ817 Vampire U film complet francais.mp4
18/06/2013  01:02       491ÿ077ÿ289 Virus ( FILM COMPLET - Sous-Titres Fran‡ais) Science-Fiction _ Apocalypse.mp4
              44 fichier(s)   22ÿ171ÿ568ÿ584 octets

 R‚pertoire de C:\Users\Corto\Videos\-Histoire

22/06/2013  01:20    <REP>          .
22/06/2013  01:20    <REP>          ..
25/05/2013  21:50       124ÿ178ÿ714 La Mort Noire - documentaires scientifiques.mp4
27/05/2013  23:57        54ÿ701ÿ064 La Mort Noire - La Peste Noire partie (1-3).mp4
27/05/2013  23:57        45ÿ171ÿ475 La Mort Noire - La Peste Noire partie (2-3).mp4
27/05/2013  23:57        44ÿ551ÿ392 La Mort Noire - La Peste Noire partie (3-3).mp4
22/06/2013  01:29    <REP>          La saga des Vikings
10/06/2013  23:17       620ÿ049ÿ948 Les Gaulois au-del… du mythe.mp4
28/05/2013  00:26    <REP>          Normands
11/06/2013  01:58       531ÿ235ÿ138 Sur nos traces 02x15 - Homo sapiens l'homme moderne.mp4
11/06/2013  01:55       507ÿ780ÿ765 Sur nos traces 03x15 - Le tailleur de silex.mp4
11/06/2013  01:27       170ÿ142ÿ587 Sur nos traces 04x15 - Homo sapiens l'homme artiste.mp4
11/06/2013  01:16       170ÿ099ÿ850 Sur nos traces 05x15 - Les derniers chasseurs-cueilleurs.mp4
11/06/2013  00:13       331ÿ309ÿ439 Sur nos traces 06x15 - Le guerrier gaulois.mp4
12/06/2013  02:41       345ÿ267ÿ179 Sur nos traces 07x15 - La famille gauloise.mp4
14/06/2013  03:32       356ÿ499ÿ654 Sur nos traces 08x15 - Le druide gaulois.mp4
14/06/2013  03:35       332ÿ629ÿ046 Sur nos traces 09x15 - le forgeron gaulois.mp4
14/06/2013  19:57       359ÿ302ÿ309 Sur nos traces 10x15 - Le banquet gaulois.mp4
17/06/2013  21:09       338ÿ745ÿ589 Sur nos traces 11x15 - Le guerrier franc.mp4
11/06/2013  02:14       531ÿ065ÿ066 Sur nos traces 12x15 - La famille franque.mp4
11/06/2013  00:45       471ÿ337ÿ089 Sur nos traces 13x15 - Le commercant franc.mp4
20/06/2013  19:43       331ÿ794ÿ468 Sur nos traces 14x15 - Le paysan franc.mp4
21/06/2013  21:46       345ÿ500ÿ866 Sur nos traces 15x15 - L'homme d'Eglise franc.mp4
              19 fichier(s)    6ÿ011ÿ361ÿ638 octets

 R‚pertoire de C:\Users\Corto\Videos\-Histoire\La saga des Vikings

22/06/2013  01:29    <REP>          .
22/06/2013  01:29    <REP>          ..
22/06/2013  01:21        41ÿ540ÿ641 Documentaire - Histoire antique - La saga des Vikings (1_5).mp4
22/06/2013  01:26        41ÿ079ÿ707 Documentaire - Histoire antique - La saga des Vikings (2_5).mp4
22/06/2013  01:28        41ÿ126ÿ483 Documentaire - Histoire antique - La saga des Vikings (3_5).mp4
22/06/2013  01:27        36ÿ516ÿ910 Documentaire - Histoire antique - La saga des Vikings (4_5).mp4
22/06/2013  01:29        48ÿ924ÿ388 Documentaire - Histoire antique - La saga des Vikings (5_5).mp4
               5 fichier(s)      209ÿ188ÿ129 octets

 R‚pertoire de C:\Users\Corto\Videos\-Histoire\Normands

28/05/2013  00:26    <REP>          .
28/05/2013  00:26    <REP>          ..
28/05/2013  00:25       193ÿ901ÿ609 1 - Les Normands, une dynastie de conquerants 1ere Invasions.avi.mp4
28/05/2013  00:24       173ÿ744ÿ499 2 - Les Normands, une dynastie de conquerants Royaumes de Mediterranee.avi.mp4
28/05/2013  00:22       170ÿ758ÿ194 3 - Les Normands, une dynastie de conquerants Un nouvel age.avi.mp4
               3 fichier(s)      538ÿ404ÿ302 octets

 R‚pertoire de C:\Users\Corto\Videos\-TED

21/06/2013  23:38    <REP>          .
21/06/2013  23:38    <REP>          ..
20/06/2013  21:05         2ÿ825ÿ703 2560x1440-wallpaper.jpg
21/06/2013  02:10           588ÿ981 abstract-red_00423631.jpg
20/06/2013  21:06         6ÿ899ÿ851 abstract-red_00423631.png
19/06/2013  22:45        65ÿ133ÿ133 Arbre g‚n‚alogique de l'humanit‚ - Spencer Wells - (sous-titr‚).mp4
21/06/2013  03:43        50ÿ585ÿ798 CarterEmmart_2010-480p-fr.mp4
21/06/2013  02:07           135ÿ699 e0632.jpg
20/06/2013  21:06           742ÿ381 nebulae_sky-2560x1440.jpg
21/06/2013  01:44       110ÿ892ÿ033 SeanCarroll_2010X-480p-fr.mp4
20/06/2013  20:59        66ÿ335ÿ566 TomWujec_2009G-480p-fr.mp4
20/06/2013  21:14           120ÿ658 water-tablet-bubbles-120658.jpg
21/06/2013  01:11           764ÿ045 ws_Eclipse_2560x1440.jpg
              11 fichier(s)      305ÿ023ÿ848 octets

 R‚pertoire de C:\Users\Corto\Videos\-Univers

14/07/2013  20:36    <REP>          .
14/07/2013  20:36    <REP>          ..
14/07/2013  20:36     1ÿ363ÿ242ÿ121 (HD) National Geographic- Down to the Earth's Core - Documentary.mp4
26/05/2013  22:05       809ÿ114ÿ042 Au bord de l'espace HD.mp4
10/07/2013  02:05       276ÿ072ÿ955 Au Coeur De La Voie Lact‚e.mp4
28/05/2013  22:09    <REP>          Ce qu'Einstein ne savait pas encore
14/07/2013  03:21       189ÿ469ÿ445 Documentaire ( La choquante r‚alit‚ ( Origines De L'Eau ).mp4
25/05/2013  02:50       178ÿ759ÿ988 Documentaire La matiŠre noire et l'energie sombre.mp4
27/05/2013  23:34       309ÿ274ÿ459 Du Big Bang au vivant Documentaire.mp4
25/05/2013  03:03       592ÿ429ÿ350 Grande Histoire Des Oceans documentaire complet en fran‡ais 2012.mp4
25/05/2013  22:54       334ÿ584ÿ042 Histoire du tout.mp4
15/07/2013  01:36    <REP>          How The Earth Was Made
11/07/2013  22:05    <REP>          How the Universe Works
10/07/2013  03:12       152ÿ932ÿ480 L'INCROYABLE CATASTROPHE - Comment Le Monde A Chang‚.mp4
16/06/2013  17:15    <REP>          La fabuleuse histoire de la science
16/06/2013  17:15    <REP>          La magie du Cosmos
09/06/2013  02:14       905ÿ414ÿ886 La Naissance de la Terre HD.mp4
14/07/2013  03:34       277ÿ791ÿ149 La Naissance de la Terre.mp4
25/05/2013  21:52       173ÿ112ÿ068 La Vitesse De La LumiŠre.mp4
25/05/2013  02:49       190ÿ541ÿ367 Le MystŠre de la MatiŠre Noire - Documentaire Scientifique Arte.mp4
28/05/2013  21:44       277ÿ882ÿ565 Le MystŠre Des Nombres Premiers.mp4
10/07/2013  02:54       158ÿ993ÿ605 Le SuperVolcan du Lac Toba.mp4
23/05/2013  01:09       173ÿ055ÿ441 Le temps qu'est ce que c'est.mp4
12/07/2013  20:20       904ÿ564ÿ269 Les secrets de la matiŠre (1-3) - La naissance de la chimie.mp4
28/05/2013  21:23    <REP>          Selon Albert Einstein
14/07/2013  01:42       156ÿ794ÿ963 Snowball Earth (BBC Horizon Documentary).mp4
10/07/2013  02:56       712ÿ395ÿ993 Super volcans.mp4
14/07/2013  02:29       164ÿ493ÿ354 Voyage aux origines de la Terre (1_2) - Plane'te en fusion.FRANCE 5 (2012).mp4
14/07/2013  02:28       151ÿ553ÿ319 Voyage aux origines de la Terre (2_2) - Plane'te vivante FRANCE 5 (2012).mp4
14/07/2013  20:25     1ÿ222ÿ202ÿ050 Voyage aux origines de la Terre (HD en).mp4
23/05/2013  01:12       210ÿ142ÿ283 Voyage dans le temps.mp4
              23 fichier(s)    9ÿ884ÿ816ÿ194 octets

 R‚pertoire de C:\Users\Corto\Videos\-Univers\Ce qu'Einstein ne savait pas encore

28/05/2013  22:09    <REP>          .
28/05/2013  22:09    <REP>          ..
28/05/2013  21:36       136ÿ639ÿ427 Ce qu'Einstein ne savait pas encore   1  Le rˆve d'Einstein.mp4
28/05/2013  21:35       142ÿ294ÿ149 Ce qu'Einstein ne savait pas encore   2  La th‚orie des cordes.mp4
28/05/2013  21:37       137ÿ368ÿ483 Ce qu'Einstein ne savait pas encore   3  Bienvenue dans la 11e dimension.mp4
25/05/2013  02:51       178ÿ620ÿ990 Ce qu'Einstein ne savait pas encore - La th‚orie des cordes [Arte].mp4
               4 fichier(s)      594ÿ923ÿ049 octets

 R‚pertoire de C:\Users\Corto\Videos\-Univers\How The Earth Was Made

15/07/2013  01:36    <REP>          .
15/07/2013  01:36    <REP>          ..
13/07/2013  22:31       909ÿ112ÿ664 (HD) How The Earth Was Made Season 2 (S02E01) The Grand Canyon.mp4
13/07/2013  23:31       835ÿ736ÿ515 (HD) How The Earth Was Made Season 2 (S02E02) Vesuvius.mp4
14/07/2013  21:48       835ÿ643ÿ233 (HD) How The Earth Was Made Season 2 (S02E03) Birth of the Earth.mp4
14/07/2013  21:51       700ÿ137ÿ405 (HD) How The Earth Was Made Season 2 (S02E04) Sahara.mp4
14/07/2013  21:25       865ÿ407ÿ522 (HD) How The Earth Was Made Season 2 (S02E05) Yosemite.mp4
15/07/2013  00:29       876ÿ727ÿ752 (HD) How The Earth Was Made Season 2 (S02E06) The Rockies.mp4
14/07/2013  23:54       788ÿ440ÿ644 (HD) How The Earth Was Made Season 2 (S02E07) The Ring of Fire.mp4
15/07/2013  00:26       813ÿ038ÿ077 (HD) How The Earth Was Made Season 2 (S02E08) Everest.mp4
15/07/2013  01:32       840ÿ812ÿ956 (HD) How The Earth Was Made Season 2 (S02E09) Death Valley.mp4
15/07/2013  01:28       826ÿ951ÿ395 (HD) How The Earth Was Made Season 2 (S02E10) Mount St. Helens.mp4
15/07/2013  01:33        57ÿ859ÿ801 (HD) How The Earth Was Made Season 2 (S02E11) Earth's Deadliest Eruption.mp4.crdownload
15/07/2013  01:35         9ÿ854ÿ925 (HD) How The Earth Was Made Season 2 (S02E12) America's Ice Age.mp4.crdownload
15/07/2013  01:36         1ÿ268ÿ297 (HD) How The Earth Was Made Season 2 (S02E13) America's Gold.mp4.crdownload
14/07/2013  00:47       815ÿ354ÿ761 01x01-HD-How the Earth Was Made - San Andreas Fault.mp4
14/07/2013  01:21       773ÿ360ÿ643 01x02-HD-How the Earth Was Made - The Deepest Place on Earth.mp4
14/07/2013  01:55       793ÿ234ÿ465 01x03-HD-How the Earth Was Made - Krakatoa.mp4
14/07/2013  02:33       820ÿ542ÿ581 01x04-HD- How the Earth Was Made - Loch Ness.mp4
13/07/2013  23:45       833ÿ475ÿ776 01x05-HD-How the Earth Was Made - New York.mp4
14/07/2013  00:14       814ÿ123ÿ760 01x06-HD-How the Earth Was Made - Driest Place on Earth.mp4
14/07/2013  03:19       924ÿ266ÿ657 01x07-HD-How the Earth Was Made - Great Lakes.mp4
14/07/2013  03:36       218ÿ825ÿ438 01x08-How the Earth Was Made - Yellowstone.mp4
14/07/2013  17:53       916ÿ321ÿ270 01x09-HD-How the Earth Was Made - Tsunami.mp4
14/07/2013  18:15       724ÿ314ÿ192 01x10-HD-How the Earth Was Made - Asteroids.mp4
14/07/2013  18:25       838ÿ634ÿ372 01x11-HD-How the Earth Was Made - Iceland Volcano.mp4
14/07/2013  18:53       837ÿ319ÿ818 01x12-HD-How the Earth Was Made - Hawaii.mp4
14/07/2013  19:21       817ÿ916ÿ647 01x13-HD-How the Earth Was Made - The Alps.mp4
              26 fichier(s)   18ÿ488ÿ681ÿ566 octets

 R‚pertoire de C:\Users\Corto\Videos\-Univers\How the Universe Works

11/07/2013  22:05    <REP>          .
11/07/2013  22:05    <REP>          ..
11/07/2013  04:07       720ÿ058ÿ307 (HD) How the Universe Works (S01E01) The Big Bang.mp4
11/07/2013  04:17       750ÿ076ÿ230 (HD) How the Universe Works (S01E02) Black Holes.mp4
11/07/2013  04:17       731ÿ585ÿ034 (HD) How the Universe Works (S01E03) Alien Galaxies.mp4
11/07/2013  03:24       768ÿ741ÿ216 (HD) How the Universe Works (S01E04) Extreme Stars.mp4
11/07/2013  04:07       633ÿ064ÿ213 (HD) How the Universe Works (S01E05) Extreme Planets.mp4
11/07/2013  04:09       707ÿ656ÿ787 (HD) How the Universe Works (S01E06) Supernovas.mp4
11/07/2013  19:43       755ÿ918ÿ643 (HD) How the Universe Works (S02E01) The Furnaces of Life.mp4
11/07/2013  19:53       661ÿ731ÿ820 (HD) How the Universe Works (S02E02) The Winds of Creation.mp4
11/07/2013  20:29       707ÿ453ÿ986 (HD) How the Universe Works (S02E03) Planets From Hell.mp4
11/07/2013  20:34       729ÿ562ÿ044 (HD) How the Universe Works (S02E04) Cosmic Firestorms.mp4
11/07/2013  22:01       781ÿ708ÿ689 (HD) How the Universe Works (S02E05) Clockwork and Creation.mp4
11/07/2013  22:05       791ÿ155ÿ524 (HD) How the Universe Works (S02E07) Worlds that Never Were.mp4
11/07/2013  22:02       801ÿ014ÿ817 (HD) How the Universe Works (S02E08) Birth of the Earth.mp4
              13 fichier(s)    9ÿ539ÿ727ÿ310 octets

 R‚pertoire de C:\Users\Corto\Videos\-Univers\La fabuleuse histoire de la science

16/06/2013  17:15    <REP>          .
16/06/2013  17:15    <REP>          ..
23/05/2013  01:56       188ÿ860ÿ064 La fabuleuse histoire de la science ‚pisode 1.mp4
23/05/2013  01:59       198ÿ786ÿ418 La fabuleuse histoire de la science ‚pisode 2.mp4
23/05/2013  01:59       198ÿ228ÿ279 La fabuleuse histoire de la science ‚pisode 3.mp4
23/05/2013  01:59       204ÿ985ÿ173 La fabuleuse histoire de la science ‚pisode 4.mp4
23/05/2013  01:58       184ÿ702ÿ076 La fabuleuse histoire de la science ‚pisode 5..mp4
23/05/2013  01:57       176ÿ517ÿ033 La fabuleuse histoire de la science ‚pisode 6.mp4
               6 fichier(s)    1ÿ152ÿ079ÿ043 octets

 R‚pertoire de C:\Users\Corto\Videos\-Univers\La magie du Cosmos

16/06/2013  17:15    <REP>          .
16/06/2013  17:15    <REP>          ..
10/06/2013  00:45       753ÿ915ÿ845 La Magie Du Cosmos - 1-4 L'illusion du temps.mp4
10/06/2013  00:49       713ÿ614ÿ962 La Magie Du Cosmos - 2-4 Qu'est-ce que l'espace.mp4
10/06/2013  00:56       772ÿ506ÿ826 La Magie Du Cosmos - 3-4 Le saut quantique.mp4
10/06/2013  00:44       743ÿ013ÿ697 La Magie Du Cosmos - 4-4 Univers ou multivers.mp4
               4 fichier(s)    2ÿ983ÿ051ÿ330 octets

 R‚pertoire de C:\Users\Corto\Videos\-Univers\Selon Albert Einstein

28/05/2013  21:23    <REP>          .
28/05/2013  21:23    <REP>          ..
25/05/2013  23:05       152ÿ521ÿ393 La lumiŠre selon Albert Einstein.mp4
25/05/2013  23:05        82ÿ272ÿ593 Le temps selon Albert Einstein.mp4
               2 fichier(s)      234ÿ793ÿ986 octets

 R‚pertoire de C:\Users\Corto\Videos\Games for Windows - LIVE Videos

16/09/2010  15:51    <REP>          .
16/09/2010  15:51    <REP>          ..
               0 fichier(s)                0 octets

 R‚pertoire de C:\Users\Corto\Videos\Media Go

12/02/2013  00:43    <REP>          .
12/02/2013  00:43    <REP>          ..
               0 fichier(s)                0 octets

 R‚pertoire de C:\Users\Corto\Videos\tests

15/06/2013  04:56    <REP>          .
15/06/2013  04:56    <REP>          ..
20/05/2013  21:49    <REP>          Animal
20/05/2013  18:36               432 animalArmageddon.css
21/05/2013  02:00           136ÿ642 Enfoui au plus profond de la terre.docx
20/05/2013  19:01             6ÿ580 LaTerreEnEnfer.html
21/05/2013  02:01    <REP>          Menace Invisible
               3 fichier(s)          143ÿ654 octets

 R‚pertoire de C:\Users\Corto\Videos\tests\Animal

20/05/2013  21:49    <REP>          .
20/05/2013  21:49    <REP>          ..
20/05/2013  17:41       163ÿ044ÿ472 Animal Armageddon x02-fr - La Terre en enfer [Hell on Earth][380] - D‚vonien.mp4
21/05/2013  02:00    <REP>          Session sans titre 1
               1 fichier(s)      163ÿ044ÿ472 octets

 R‚pertoire de C:\Users\Corto\Videos\tests\Animal\Session sans titre 1

21/05/2013  02:00    <REP>          .
21/05/2013  02:00    <REP>          ..
21/05/2013  02:00    <REP>          Conformed Files
21/05/2013  02:00           100ÿ659 Session sans titre 1.sesx
               1 fichier(s)          100ÿ659 octets

 R‚pertoire de C:\Users\Corto\Videos\tests\Animal\Session sans titre 1\Conformed Files

21/05/2013  02:00    <REP>          .
21/05/2013  02:00    <REP>          ..
20/05/2013  21:51           551ÿ260 Animal Armageddon x02-fr - La Terre en enfer [Hell on Earth][380] - D‚vonien_audio 48000 1.pkf
20/05/2013  21:51     1ÿ092ÿ186ÿ336 Animal Armageddon x02-fr - La Terre en enfer [Hell on Earth][380] - D‚vonien_audio 48000 1.wav
               2 fichier(s)    1ÿ092ÿ737ÿ596 octets

 R‚pertoire de C:\Users\Corto\Videos\tests\Menace Invisible

21/05/2013  02:01    <REP>          .
21/05/2013  02:01    <REP>          ..
16/05/2013  01:09           278ÿ716 1 sans titre.pkf
16/05/2013  01:09        71ÿ345ÿ280 1 sans titre.wav
13/05/2013  22:43       654ÿ883ÿ181 Animal Armageddon x01 - La Menace invisible [Death Rays][440] - Ordovicien-Silurien.mp4
16/05/2013  01:15           461ÿ564 Animal Armageddon x01 - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio.pkf
16/05/2013  01:15       945ÿ227ÿ456 Animal Armageddon x01 - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio.wav
15/05/2013  23:00        55ÿ518ÿ669 Animal Armageddon x01a - La Menace invisible [Death Rays][440] - Ordovicien-Silurien.mp4
16/05/2013  01:14           332ÿ604 Animal Armageddon x01a - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio.pkf
16/05/2013  01:14       340ÿ542ÿ370 Animal Armageddon x01a - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio.wav
15/05/2013  23:15        59ÿ950ÿ397 Animal Armageddon x01b - La Menace invisible [Death Rays][440] - Ordovicien-Silurien.mp4
16/05/2013  01:14           359ÿ164 Animal Armageddon x01b - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio.pkf
16/05/2013  01:14       367ÿ750ÿ300 Animal Armageddon x01b - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio.wav
15/05/2013  23:33        47ÿ002ÿ127 Animal Armageddon x01c - La Menace invisible [Death Rays][440] - Ordovicien-Silurien.mp4
16/05/2013  01:15           281ÿ212 Animal Armageddon x01c - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio.pkf
16/05/2013  01:15       287ÿ932ÿ834 Animal Armageddon x01c - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio.wav
21/05/2013  02:01           490ÿ012 Animal Armageddon x02-fr - La Terre en enfer [Hell on Earth][380] - D‚vonien_audio.pkf
21/05/2013  02:01     1ÿ003ÿ446ÿ238 Animal Armageddon x02-fr - La Terre en enfer [Hell on Earth][380] - D‚vonien_audio.wav
20/05/2013  02:45    <REP>          Bounced Files
20/05/2013  02:45    <REP>          Conformed Files
20/05/2013  02:45           118ÿ340 Session sans titre 1.sesx
              17 fichier(s)    3ÿ835ÿ920ÿ464 octets

 R‚pertoire de C:\Users\Corto\Videos\tests\Menace Invisible\Bounced Files

20/05/2013  02:45    <REP>          .
20/05/2013  02:45    <REP>          ..
16/05/2013  00:41           362ÿ012 Rebond_1.pkf
16/05/2013  00:41       370ÿ657ÿ758 Rebond_1.wav
               2 fichier(s)      371ÿ019ÿ770 octets

 R‚pertoire de C:\Users\Corto\Videos\tests\Menace Invisible\Conformed Files

20/05/2013  02:45    <REP>          .
20/05/2013  02:45    <REP>          ..
20/05/2013  02:15           404ÿ060 Animal Armageddon x01b - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio 48000 1.pkf
20/05/2013  02:15       400ÿ273ÿ238 Animal Armageddon x01b - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio 48000 1.wav
               2 fichier(s)      400ÿ677ÿ298 octets

     Total des fichiers list‚sÿ:
             588 fichier(s)   99ÿ450ÿ030ÿ920 octets
             164 R‚p(s)  35ÿ450ÿ232ÿ832 octets libres

*/

?>
