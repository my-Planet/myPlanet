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
 Le numéro de série du volume est C035-0B42

 Répertoire de C:\Users\Corto\Videos

15/07/2013  02:25    <REP>          .
15/07/2013  02:25    <REP>          ..
08/07/2013  20:53    <REP>          --Covers
28/06/2013  03:58    <REP>          -Actu
01/07/2013  01:12    <REP>          -Animaliers
10/07/2013  03:16    <REP>          -Civilisation
14/07/2013  03:19    <REP>          -Evolution
12/07/2013  20:14    <REP>          -Fictions
22/06/2013  01:20    <REP>          -Histoire
21/06/2013  23:38    <REP>          -TED
14/07/2013  20:36    <REP>          -Univers
15/06/2013  04:38            28 714 Classeur2.xlsx
15/07/2013  02:10                62 dir.bat
15/07/2013  02:25                91 dir.txt
16/09/2010  15:51    <REP>          Games for Windows - LIVE Videos
12/02/2013  00:43    <REP>          Media Go
16/06/2013  23:52         1 179 648 nu_video.accdb
15/06/2013  04:56    <REP>          tests
               4 fichier(s)        1 208 515 octets

 Répertoire de C:\Users\Corto\Videos\--Covers

08/07/2013  20:53    <REP>          .
08/07/2013  20:53    <REP>          ..
14/06/2013  03:42            28 739 044572-001-A_11500.jpg
14/06/2013  03:43            45 651 044572-001_odysseus1_05.jpg
14/06/2013  03:43            74 725 044572-001_odysseus1_06.jpg
14/06/2013  03:43            52 612 044572-001_odysseus1_09.jpg
14/06/2013  04:12            54 019 044572-002-A_10566.jpg
14/06/2013  04:12            64 325 044572-002_odysseus2_01.jpg
14/06/2013  04:12            49 360 044572-002_odysseus2_02.jpg
14/06/2013  04:12           101 493 044572-002_odysseus2_03.jpg
14/06/2013  04:12            64 880 044572-002_odysseus2_05.jpg
14/06/2013  04:14            41 279 044572-003-A_10520.jpg
14/06/2013  04:14            44 848 044572-003_odysseus3_01.jpg
14/06/2013  04:14            76 490 044572-003_odysseus3_02.jpg
14/06/2013  04:14            62 356 044572-003_odysseus3_03.jpg
14/06/2013  04:14            87 747 044572-003_odysseus3_04.jpg
15/06/2013  23:44            80 662 048904-000_ksmonsterofnix_01.jpg
15/06/2013  23:44            73 293 048904-000_ksmonsterofnix_02.jpg
15/06/2013  23:44           116 078 048904-000_ksmonsterofnix_03.jpg
08/07/2013  20:53    <REP>          Archives
              17 fichier(s)        1 118 557 octets

 Répertoire de C:\Users\Corto\Videos\--Covers\Archives

08/07/2013  20:53    <REP>          .
08/07/2013  20:53    <REP>          ..
16/06/2013  19:06         2 943 922 Animal Armageddon 01.psd
16/06/2013  21:28         8 426 712 Animal Armageddon 02.psd
16/06/2013  19:47         4 927 827 Animal Armageddon 03.psd
16/06/2013  20:35        11 394 131 Animal Armageddon 04.psd
16/06/2013  20:47         4 456 936 Animal Armageddon 05.psd
16/06/2013  21:01         2 777 234 Animal Armageddon 06.psd
16/06/2013  21:24         3 460 069 Animal Armageddon 07.psd
16/06/2013  19:05         3 684 160 Animal Armageddon.psd
09/06/2013  22:54         5 895 512 Animaux à sang froid.psd
14/06/2013  02:55        11 577 520 Aratta, À L'aube Des Civilisations.psd
15/06/2013  04:37        10 413 310 Aventure de Charles Darwin.psd
15/06/2013  02:23         2 943 653 Ce que Darwin ne savait pas encore.psd
12/06/2013  02:00         4 128 450 Civilisation de l'Indus.psd
16/06/2013  02:32         1 618 840 Des cannibales en Europe.psd
15/06/2013  03:18         3 252 240 Dinosaures vivants.psd
08/07/2013  21:01    <REP>          Fonts
09/06/2013  22:52         6 762 843 Force cachée des plantes.psd
09/06/2013  22:52         4 533 256 Gobekli Tepe.psd
09/06/2013  22:52         7 798 314 Guerre des fourmis.psd
14/06/2013  02:55        12 673 886 Histoire des Sumériens.psd
15/06/2013  04:11        10 739 450 Ida (Darwinius masillae).psd
13/06/2013  04:55         6 957 085 L'empire Perse, Persepolis.psd
14/06/2013  02:55        14 849 656 L'épopée de Gilgamesh.psd
12/06/2013  05:25         3 435 700 Le code Maya enfin déchiffré.psd
09/06/2013  22:53         6 704 750 Le crépuscule des civilisations.psd
15/06/2013  16:55        22 354 682 Le jour où la terre faillit disparaitre.psd
13/06/2013  03:59         5 601 490 Le mystere des Nascas.psd
12/06/2013  20:14         7 241 603 Le Royaume des Nabatéens de Pétra à Hégra.psd
09/06/2013  22:53         3 650 637 Monsanto.psd
14/06/2013  02:52        18 068 632 Mésopotamie Les Origines De Notre Civilisation.psd
16/06/2013  22:02         2 761 015 Origine de la vie-de l'eau à la terre.psd
16/06/2013  21:52         3 087 356 Origine de la vie-Premiers organismes.psd
16/06/2013  01:09         4 053 750 Origines et évolution de l'homme - La bipédie.psd
12/06/2013  20:37         4 519 084 Pétra les secrets de la cite de roc.psd
15/06/2013  02:02    <REP>          RnD
12/06/2013  01:18         9 859 838 Seigneurs Hittites.psd
13/06/2013  20:39        33 743 623 Sparte, une cite d'exception.psd
09/06/2013  22:53        95 304 246 Univers et ses mysteres s01.psd
09/06/2013  22:53        67 985 451 Univers et ses mysteres s02.psd
09/06/2013  22:52        34 506 069 Univers et ses mysteres s03.psd
16/06/2013  05:22         4 095 627 Évolution des espèces - Exemples multiples et explications.psd
              39 fichier(s)      473 188 559 octets

 Répertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts

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

 Répertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\action_of_the_time_new

08/07/2013  21:01    <REP>          .
08/07/2013  21:01    <REP>          ..
31/01/2013  09:53            34 816 Action of the Time New.doc
22/03/2011  07:04           754 804 Action of the Time New.ttf
               2 fichier(s)          789 620 octets

 Répertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\clemente_pd

08/07/2013  21:03    <REP>          .
08/07/2013  21:03    <REP>          ..
21/11/2011  08:13           118 464 ClementePDaa-Hairline.ttf
21/11/2011  08:13           102 112 ClementePDab-HairlineItalic.ttf
21/11/2011  08:15           119 340 ClementePDac-ExtraLight.ttf
21/11/2011  08:14            99 760 ClementePDad-ExtraLightItal.ttf
21/11/2011  08:14           102 644 ClementePDae-Light.ttf
21/11/2011  08:14            90 680 ClementePDaf-LightItalic.ttf
21/11/2011  08:13            90 128 ClementePDag-Book.ttf
21/11/2011  08:14            84 088 ClementePDah-BookItalic.ttf
21/11/2011  08:14            87 116 ClementePDai-Regular.ttf
21/11/2011  08:14            80 088 ClementePDaj-RegularItalic.ttf
21/11/2011  08:14            83 668 ClementePDak-SemiBold.ttf
21/11/2011  08:14            78 152 ClementePDal-SemiBoldItalic.ttf
21/11/2011  08:14            80 204 ClementePDam-Bold.ttf
21/11/2011  08:14            76 592 ClementePDan-BoldItalic.ttf
21/11/2011  08:13            78 964 ClementePDao-Heavy.ttf
21/11/2011  08:13            75 392 ClementePDap-HeavyItalic.ttf
21/11/2011  08:13            71 984 ClementePDaq-UltraBold.ttf
21/11/2011  08:13            70 156 ClementePDar-UltraBoldItali.ttf
              18 fichier(s)        1 589 532 octets

 Répertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\fail

08/07/2013  21:01    <REP>          .
08/07/2013  21:01    <REP>          ..
10/05/2005  23:44           162 324 FAIL____.TTF
               1 fichier(s)          162 324 octets

 Répertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\false_advertising

08/07/2013  21:01    <REP>          .
08/07/2013  21:01    <REP>          ..
05/09/2009  15:54            61 516 False_Advertising.ttf
               1 fichier(s)           61 516 octets

 Répertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\gara

08/07/2013  21:01    <REP>          .
08/07/2013  21:01    <REP>          ..
18/02/1998  11:48            59 020 GARABL__.TTF
18/02/1998  11:20            61 092 GARARG__.TTF
               2 fichier(s)          120 112 octets

 Répertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\gar_a_mondtall

08/07/2013  21:03    <REP>          .
08/07/2013  21:03    <REP>          ..
08/10/2012  23:58           148 604 Gar-A-MondTall-Antique.ttf
09/10/2012  00:02            94 800 Gar-A-MondTall.ttf
               2 fichier(s)          243 404 octets

 Répertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\georg

08/07/2013  21:01    <REP>          .
08/07/2013  21:01    <REP>          ..
23/08/2005  11:30            34 564 GeorgItalic.ttf
23/08/2005  11:30            35 680 GeorgLight.ttf
23/08/2005  11:30            36 524 GeorgRegular.ttf
               3 fichier(s)          106 768 octets

 Répertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\geo_sans_light

08/07/2013  21:03    <REP>          .
08/07/2013  21:03    <REP>          ..
21/11/2004  09:26            62 196 GeosansLight-Oblique.ttf
20/10/2004  16:20            60 072 GeosansLight.ttf
               2 fichier(s)          122 268 octets

 Répertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\handwriting_draft

08/07/2013  21:01    <REP>          .
08/07/2013  21:01    <REP>          ..
08/09/2011  19:00            29 999 Fonts-lab_free-font_licence.pdf
08/09/2011  19:37           441 360 handwriting-draft_free-version.ttf
               2 fichier(s)          471 359 octets

 Répertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\lakestreet

08/07/2013  21:01    <REP>          .
08/07/2013  21:01    <REP>          ..
16/11/1999  15:48            85 072 LAKERG__.TTF
27/10/1998  07:53             3 011 TestPilotCollectiveLicense.txt
               2 fichier(s)           88 083 octets

 Répertoire de C:\Users\Corto\Videos\--Covers\Archives\Fonts\stymiestylus

13/06/2013  19:59    <REP>          .
13/06/2013  19:59    <REP>          ..
29/06/2012  19:21            11 936 StymieStylus.otf
29/06/2012  19:22            11 440 StymieStylus1.otf
               2 fichier(s)           23 376 octets

 Répertoire de C:\Users\Corto\Videos\--Covers\Archives\RnD

15/06/2013  02:02    <REP>          .
15/06/2013  02:02    <REP>          ..
07/06/2013  00:13           316 993 univers-et-ses-mysteres-s01e01va.jpg
07/06/2013  00:13           408 481 univers-et-ses-mysteres-s01e01vb.jpg
07/06/2013  00:13           279 186 univers-et-ses-mysteres-s01e01vc.jpg
07/06/2013  00:13           353 110 univers-et-ses-mysteres-s01e01vd.jpg
07/06/2013  00:14           352 865 univers-et-ses-mysteres-s01e01ve.jpg
07/06/2013  00:14           347 017 univers-et-ses-mysteres-s01e01vf.jpg
07/06/2013  00:12           253 120 univers-et-ses-mysteres-s01e02va.jpg
07/06/2013  00:12           333 295 univers-et-ses-mysteres-s01e02vb.jpg
07/06/2013  00:10           365 864 univers-et-ses-mysteres-s01e03va.jpg
07/06/2013  00:08           213 888 univers-et-ses-mysteres-s01e04va.jpg
07/06/2013  00:09           167 834 univers-et-ses-mysteres-s01e04vb.jpg
07/06/2013  00:09           133 209 univers-et-ses-mysteres-s01e04vc.jpg
07/06/2013  00:09           100 448 univers-et-ses-mysteres-s01e04vd.jpg
07/06/2013  00:07           251 829 univers-et-ses-mysteres-s01e05va.jpg
07/06/2013  00:07           160 931 univers-et-ses-mysteres-s01e05vb.jpg
07/06/2013  00:07           255 212 univers-et-ses-mysteres-s01e05vc.jpg
07/06/2013  00:07           214 915 univers-et-ses-mysteres-s01e05vd.jpg
07/06/2013  00:07           246 510 univers-et-ses-mysteres-s01e05ve.jpg
07/06/2013  00:07           313 909 univers-et-ses-mysteres-s01e05vf.jpg
07/06/2013  00:08           232 826 univers-et-ses-mysteres-s01e05vg.jpg
07/06/2013  00:08           258 003 univers-et-ses-mysteres-s01e05vh.jpg
07/06/2013  00:08           101 749 univers-et-ses-mysteres-s01e05vi.jpg
07/06/2013  00:08           183 344 univers-et-ses-mysteres-s01e05vj.jpg
07/06/2013  00:06           327 199 univers-et-ses-mysteres-s01e06va.jpg
07/06/2013  00:06           309 049 univers-et-ses-mysteres-s01e06vb.jpg
07/06/2013  00:06           323 427 univers-et-ses-mysteres-s01e06vc.jpg
07/06/2013  00:06           152 917 univers-et-ses-mysteres-s01e06vd.jpg
07/06/2013  00:04           438 513 univers-et-ses-mysteres-s01e07va.jpg
07/06/2013  00:04           325 034 univers-et-ses-mysteres-s01e07vb.jpg
07/06/2013  00:04           650 975 univers-et-ses-mysteres-s01e07vc.jpg
07/06/2013  00:04           168 153 univers-et-ses-mysteres-s01e07vd.jpg
07/06/2013  00:05           218 585 univers-et-ses-mysteres-s01e07ve.jpg
07/06/2013  00:05           193 242 univers-et-ses-mysteres-s01e07vf.jpg
07/06/2013  00:05           335 465 univers-et-ses-mysteres-s01e07vg.jpg
07/06/2013  00:05           287 389 univers-et-ses-mysteres-s01e07vh.jpg
06/06/2013  23:52           185 853 univers-et-ses-mysteres-s01e08va.jpg
06/06/2013  23:55           171 415 univers-et-ses-mysteres-s01e08vb.jpg
06/06/2013  23:55           179 142 univers-et-ses-mysteres-s01e08vc.jpg
06/06/2013  23:55           207 253 univers-et-ses-mysteres-s01e08vd.jpg
06/06/2013  23:55           273 184 univers-et-ses-mysteres-s01e08ve.jpg
06/06/2013  23:55           106 899 univers-et-ses-mysteres-s01e08vf.jpg
06/06/2013  23:55           228 199 univers-et-ses-mysteres-s01e08vg.jpg
06/06/2013  23:56           141 750 univers-et-ses-mysteres-s01e08vh.jpg
06/06/2013  23:56           122 493 univers-et-ses-mysteres-s01e08vi.jpg
06/06/2013  23:43           317 571 univers-et-ses-mysteres-s01e09va.jpg
06/06/2013  23:43           291 122 univers-et-ses-mysteres-s01e09vb.jpg
06/06/2013  23:43           327 808 univers-et-ses-mysteres-s01e09vc.jpg
06/06/2013  23:44           340 545 univers-et-ses-mysteres-s01e09vd.jpg
06/06/2013  23:45           169 199 univers-et-ses-mysteres-s01e09ve.jpg
06/06/2013  23:45           286 579 univers-et-ses-mysteres-s01e09vf.jpg
06/06/2013  23:45           373 685 univers-et-ses-mysteres-s01e09vg.jpg
06/06/2013  23:45           370 979 univers-et-ses-mysteres-s01e09vh.jpg
06/06/2013  23:45           320 533 univers-et-ses-mysteres-s01e09vi.jpg
06/06/2013  23:46           436 794 univers-et-ses-mysteres-s01e09vj.jpg
06/06/2013  23:46           365 719 univers-et-ses-mysteres-s01e09vk.jpg
06/06/2013  23:46           358 410 univers-et-ses-mysteres-s01e09vl.jpg
06/06/2013  23:38           269 869 univers-et-ses-mysteres-s01e10va.jpg
06/06/2013  23:38           269 458 univers-et-ses-mysteres-s01e10vb.jpg
06/06/2013  23:38           210 956 univers-et-ses-mysteres-s01e10vc.jpg
06/06/2013  23:38           317 463 univers-et-ses-mysteres-s01e10vd.jpg
06/06/2013  23:38           314 554 univers-et-ses-mysteres-s01e10ve.jpg
06/06/2013  23:33           214 481 univers-et-ses-mysteres-s01e11va.jpg
06/06/2013  23:33           113 059 univers-et-ses-mysteres-s01e11vb.jpg
06/06/2013  23:34            64 746 univers-et-ses-mysteres-s01e11vc.jpg
06/06/2013  23:34            95 835 univers-et-ses-mysteres-s01e11vd.jpg
06/06/2013  23:34            80 368 univers-et-ses-mysteres-s01e11ve.jpg
06/06/2013  23:34           164 632 univers-et-ses-mysteres-s01e11vf.jpg
06/06/2013  23:34            86 487 univers-et-ses-mysteres-s01e11vg.jpg
06/06/2013  23:34           117 385 univers-et-ses-mysteres-s01e11vh.jpg
06/06/2013  23:35            98 590 univers-et-ses-mysteres-s01e11vi.jpg
06/06/2013  23:35           119 695 univers-et-ses-mysteres-s01e11vj.jpg
06/06/2013  23:14           169 302 univers-et-ses-mysteres-s01e12va.jpg
06/06/2013  23:14           235 869 univers-et-ses-mysteres-s01e12vb.jpg
06/06/2013  23:15           237 950 univers-et-ses-mysteres-s01e12vc.jpg
06/06/2013  23:15            77 178 univers-et-ses-mysteres-s01e12vd.jpg
06/06/2013  23:15           299 616 univers-et-ses-mysteres-s01e12ve.jpg
06/06/2013  23:15           308 126 univers-et-ses-mysteres-s01e12vf.jpg
06/06/2013  23:15           298 208 univers-et-ses-mysteres-s01e12vg.jpg
06/06/2013  23:16           342 837 univers-et-ses-mysteres-s01e12vh.jpg
06/06/2013  23:16           358 557 univers-et-ses-mysteres-s01e12vi.jpg
06/06/2013  23:16           141 131 univers-et-ses-mysteres-s01e12vj.jpg
06/06/2013  23:16           135 784 univers-et-ses-mysteres-s01e12vk.jpg
06/06/2013  23:16           106 314 univers-et-ses-mysteres-s01e12vl.jpg
06/06/2013  23:17           233 564 univers-et-ses-mysteres-s01e12vm.jpg
06/06/2013  23:17           204 134 univers-et-ses-mysteres-s01e12vn.jpg
06/06/2013  23:17           259 833 univers-et-ses-mysteres-s01e12vo.jpg
06/06/2013  23:17           143 655 univers-et-ses-mysteres-s01e12vp.jpg
06/06/2013  23:17           172 530 univers-et-ses-mysteres-s01e12vq.jpg
06/06/2013  23:13           236 568 univers-et-ses-mysteres-s01e13va.jpg
06/06/2013  23:13           220 423 univers-et-ses-mysteres-s01e13vb.jpg
06/06/2013  23:13           191 871 univers-et-ses-mysteres-s01e13vc.jpg
06/06/2013  23:13           179 976 univers-et-ses-mysteres-s01e13vd.jpg
06/06/2013  23:13           106 830 univers-et-ses-mysteres-s01e13ve.jpg
06/06/2013  23:06           214 074 univers-et-ses-mysteres-s01e14va.jpg
06/06/2013  23:06           217 401 univers-et-ses-mysteres-s01e14vb.jpg
06/06/2013  23:06           211 985 univers-et-ses-mysteres-s01e14vc.jpg
06/06/2013  23:07           178 659 univers-et-ses-mysteres-s01e14vd.jpg
06/06/2013  23:11           493 867 univers-et-ses-mysteres-s01e14ve.jpg
06/06/2013  23:11           420 264 univers-et-ses-mysteres-s01e14vf.jpg
06/06/2013  23:11           399 893 univers-et-ses-mysteres-s01e14vg.jpg
06/06/2013  23:11           278 746 univers-et-ses-mysteres-s01e14vh.jpg
06/06/2013  23:12           255 414 univers-et-ses-mysteres-s01e14vi.jpg
06/06/2013  23:12           169 457 univers-et-ses-mysteres-s01e14vj.jpg
06/06/2013  23:12           255 038 univers-et-ses-mysteres-s01e14vk.jpg
08/06/2013  03:32           236 830 univers-et-ses-mysteres-s02e01va.jpg
08/06/2013  03:33           198 499 univers-et-ses-mysteres-s02e01vb.jpg
08/06/2013  03:33           117 340 univers-et-ses-mysteres-s02e01vc.jpg
08/06/2013  03:34           268 326 univers-et-ses-mysteres-s02e01vd.jpg
08/06/2013  03:34           266 227 univers-et-ses-mysteres-s02e01ve.jpg
08/06/2013  03:34           186 084 univers-et-ses-mysteres-s02e01vf.jpg
08/06/2013  03:35           270 360 univers-et-ses-mysteres-s02e02va.jpg
08/06/2013  03:35           301 422 univers-et-ses-mysteres-s02e02vb.jpg
08/06/2013  03:35           356 368 univers-et-ses-mysteres-s02e02vc.jpg
08/06/2013  03:35           317 069 univers-et-ses-mysteres-s02e02vd.jpg
08/06/2013  03:35           228 536 univers-et-ses-mysteres-s02e03va.jpg
08/06/2013  03:36           280 428 univers-et-ses-mysteres-s02e03vb.jpg
08/06/2013  03:36           188 423 univers-et-ses-mysteres-s02e03vc.jpg
08/06/2013  03:36           161 210 univers-et-ses-mysteres-s02e03vd.jpg
08/06/2013  03:37            79 809 univers-et-ses-mysteres-s02e03ve.jpg
08/06/2013  03:37           135 814 univers-et-ses-mysteres-s02e03vf.jpg
08/06/2013  03:37           232 280 univers-et-ses-mysteres-s02e03vg.jpg
08/06/2013  03:37           216 674 univers-et-ses-mysteres-s02e03vh.jpg
08/06/2013  03:38           466 513 univers-et-ses-mysteres-s02e04va.jpg
08/06/2013  03:38           303 330 univers-et-ses-mysteres-s02e05va.jpg
08/06/2013  03:38           215 490 univers-et-ses-mysteres-s02e05vb.jpg
08/06/2013  03:39           284 589 univers-et-ses-mysteres-s02e05vc.jpg
08/06/2013  03:39           449 278 univers-et-ses-mysteres-s02e06va.jpg
08/06/2013  03:39           637 509 univers-et-ses-mysteres-s02e06vb.jpg
08/06/2013  03:40           292 709 univers-et-ses-mysteres-s02e07va.jpg
08/06/2013  03:40           204 235 univers-et-ses-mysteres-s02e08va.jpg
08/06/2013  03:40           458 545 univers-et-ses-mysteres-s02e09va.jpg
08/06/2013  03:40           259 531 univers-et-ses-mysteres-s02e09vb.jpg
08/06/2013  03:41           189 229 univers-et-ses-mysteres-s02e09vc.jpg
08/06/2013  03:41           525 766 univers-et-ses-mysteres-s02e10va.jpg
08/06/2013  03:41           242 242 univers-et-ses-mysteres-s02e11va.jpg
08/06/2013  03:42           293 622 univers-et-ses-mysteres-s02e11vb.jpg
08/06/2013  03:43           168 901 univers-et-ses-mysteres-s02e11vc.jpg
08/06/2013  03:43           325 928 univers-et-ses-mysteres-s02e11vd.jpg
08/06/2013  03:43           306 655 univers-et-ses-mysteres-s02e11ve.jpg
08/06/2013  03:43           298 392 univers-et-ses-mysteres-s02e11vf.jpg
08/06/2013  03:44           288 180 univers-et-ses-mysteres-s02e11vg.jpg
08/06/2013  03:44           279 247 univers-et-ses-mysteres-s02e11vh.jpg
08/06/2013  03:44           100 751 univers-et-ses-mysteres-s02e11vi.jpg
08/06/2013  03:44            63 334 univers-et-ses-mysteres-s02e11vj.jpg
08/06/2013  03:45           316 618 univers-et-ses-mysteres-s02e12va.jpg
08/06/2013  03:45           260 733 univers-et-ses-mysteres-s02e12vb.jpg
08/06/2013  03:45           199 223 univers-et-ses-mysteres-s02e12vc.jpg
08/06/2013  03:45           252 813 univers-et-ses-mysteres-s02e12vd.jpg
08/06/2013  03:45           218 812 univers-et-ses-mysteres-s02e12ve.jpg
08/06/2013  03:46           216 863 univers-et-ses-mysteres-s02e12vf.jpg
08/06/2013  03:46           239 327 univers-et-ses-mysteres-s02e13va.jpg
08/06/2013  03:46           252 184 univers-et-ses-mysteres-s02e13vb.jpg
08/06/2013  03:47           187 863 univers-et-ses-mysteres-s02e14va.jpg
08/06/2013  03:47           154 423 univers-et-ses-mysteres-s02e14vb.jpg
08/06/2013  03:47           229 611 univers-et-ses-mysteres-s02e14vc.jpg
08/06/2013  03:47           236 915 univers-et-ses-mysteres-s02e14vd.jpg
08/06/2013  03:48           248 967 univers-et-ses-mysteres-s02e15va.jpg
08/06/2013  03:58           683 870 univers-et-ses-mysteres-s02e16va.jpg
08/06/2013  03:59           306 346 univers-et-ses-mysteres-s02e16vb.jpg
08/06/2013  03:59           235 021 univers-et-ses-mysteres-s02e16vc.jpg
08/06/2013  04:00           238 736 univers-et-ses-mysteres-s02e17va.jpg
08/06/2013  04:00           174 159 univers-et-ses-mysteres-s02e17vb.jpg
08/06/2013  04:00           129 296 univers-et-ses-mysteres-s02e17vc.jpg
08/06/2013  04:00           131 379 univers-et-ses-mysteres-s02e17vd.jpg
08/06/2013  04:00           276 101 univers-et-ses-mysteres-s02e17ve.jpg
08/06/2013  04:01           318 664 univers-et-ses-mysteres-s02e17vf.jpg
08/06/2013  04:02           282 085 univers-et-ses-mysteres-s02e18va.jpg
08/06/2013  04:11           198 810 univers-et-ses-mysteres-s02e18vb.jpg
08/06/2013  04:11           359 221 univers-et-ses-mysteres-s02e18vc.jpg
08/06/2013  04:11           288 895 univers-et-ses-mysteres-s02e18vd.jpg
08/06/2013  04:11           135 437 univers-et-ses-mysteres-s02e18ve.jpg
08/06/2013  04:12           179 889 univers-et-ses-mysteres-s02e18vf.jpg
09/06/2013  21:21           187 149 univers-et-ses-mysteres-s03e01va.jpg
09/06/2013  21:20           269 051 univers-et-ses-mysteres-s03e02va.jpg
09/06/2013  21:20           116 160 univers-et-ses-mysteres-s03e02vb.jpg
09/06/2013  21:20           272 621 univers-et-ses-mysteres-s03e02vc.jpg
09/06/2013  21:20           216 411 univers-et-ses-mysteres-s03e02vd.jpg
09/06/2013  21:21           198 318 univers-et-ses-mysteres-s03e02ve.jpg
09/06/2013  21:19           340 493 univers-et-ses-mysteres-s03e03va.jpg
09/06/2013  21:19           387 145 univers-et-ses-mysteres-s03e03vb.jpg
09/06/2013  21:19           194 978 univers-et-ses-mysteres-s03e03vc.jpg
09/06/2013  21:19           358 153 univers-et-ses-mysteres-s03e04va.jpg
09/06/2013  21:19           328 676 univers-et-ses-mysteres-s03e04vb.jpg
09/06/2013  21:19           135 516 univers-et-ses-mysteres-s03e05va.jpg
09/06/2013  21:18           215 575 univers-et-ses-mysteres-s03e06va.jpg
09/06/2013  21:18           234 092 univers-et-ses-mysteres-s03e06vb.jpg
09/06/2013  21:17           197 923 univers-et-ses-mysteres-s03e07va.jpg
09/06/2013  21:18           240 232 univers-et-ses-mysteres-s03e07vb.jpg
09/06/2013  21:18           217 999 univers-et-ses-mysteres-s03e07vc.jpg
09/06/2013  21:17           369 300 univers-et-ses-mysteres-s03e08va.jpg
09/06/2013  21:17           298 920 univers-et-ses-mysteres-s03e08vb.jpg
09/06/2013  21:17           381 676 univers-et-ses-mysteres-s03e08vc.jpg
09/06/2013  21:17           210 734 univers-et-ses-mysteres-s03e08vd.jpg
09/06/2013  21:16           284 500 univers-et-ses-mysteres-s03e09va.jpg
09/06/2013  21:16           235 709 univers-et-ses-mysteres-s03e09vb.jpg
09/06/2013  21:16           231 811 univers-et-ses-mysteres-s03e09vc.jpg
09/06/2013  21:16           200 284 univers-et-ses-mysteres-s03e09vd.jpg
09/06/2013  21:15           154 013 univers-et-ses-mysteres-s03e10va.jpg
09/06/2013  21:15           135 163 univers-et-ses-mysteres-s03e11va.jpg
09/06/2013  21:11           263 469 univers-et-ses-mysteres-s03e12va.jpg
09/06/2013  21:12           281 197 univers-et-ses-mysteres-s03e12vb.jpg
09/06/2013  21:13           263 659 univers-et-ses-mysteres-s03e12vc.jpg
09/06/2013  21:14           223 070 univers-et-ses-mysteres-s03e12vd.jpg
09/06/2013  21:14           329 070 univers-et-ses-mysteres-s03e12ve.jpg
09/06/2013  21:15           313 499 univers-et-ses-mysteres-s03e12vf.jpg
             205 fichier(s)       51 376 752 octets

 Répertoire de C:\Users\Corto\Videos\-Actu

28/06/2013  03:58    <REP>          .
28/06/2013  03:58    <REP>          ..
28/06/2013  03:58     1 616 752 200 HOME (FR).mp4
01/06/2013  22:00     1 546 110 543 Le monde selon Monsanto [complet] [FR] [HD].mp4
27/06/2013  22:53       307 710 417 Le Sable - Enquête Sur Une Disparition.mp4
07/06/2013  20:30           292 406 le-monde-selon-monsanto.jpg
28/06/2013  03:08       309 046 834 Population Zero ( film entier complet en francais vf fr ).mp4
               5 fichier(s)    3 779 912 400 octets

 Répertoire de C:\Users\Corto\Videos\-Animaliers

01/07/2013  01:12    <REP>          .
01/07/2013  01:12    <REP>          ..
08/06/2013  23:02           394 615 Animaux-a-sang-froid-x01.jpg
08/06/2013  23:00           396 915 Animaux-a-sang-froid-x02.jpg
22/06/2013  02:00       259 694 799 Des fourmis tueuses documentaire complet en francais.mp4
08/06/2013  23:27           343 774 Guerre-des-fourmis.jpg
28/06/2013  22:55       541 197 140 HIPPOCAMPE - Un poisson unique en son genre.mp4
01/06/2013  22:34       194 365 803 La force cache´e des plantes - 01- Comme des be^tes.mp4
08/06/2013  20:08       176 245 570 La force cache´e des plantes - 02- Championnes de la com.mp4
08/06/2013  21:23           183 558 La force cache´e des plantes x01.jpg
08/06/2013  21:22           273 916 La force cache´e des plantes x02.jpg
01/06/2013  22:33       244 951 606 La guerre des fourmis.mp4
01/07/2013  01:12       252 548 815 Le monde secret des termites - Arte Documentaire animal.mp4
08/06/2013  20:18       190 353 050 Les animaux a' sang froid -01- Les rois du désert.mp4
08/06/2013  21:17       270 412 868 Les animaux a' sang froid -02- Les rois de la métamorphose.mp4
              13 fichier(s)    2 131 362 429 octets

 Répertoire de C:\Users\Corto\Videos\-Civilisation

10/07/2013  03:16    <REP>          .
10/07/2013  03:16    <REP>          ..
09/06/2013  01:39    <REP>          Egypte
09/06/2013  02:06    <REP>          Gobekli Tepe
12/06/2013  01:19    <REP>          Hittites
12/06/2013  02:00    <REP>          Indus
09/06/2013  01:39    <REP>          Khmer
10/07/2013  03:16       267 567 396 Le Crépuscule Des Dieux Nordiques.mp4
08/07/2013  02:36    <REP>          Maya
22/06/2013  01:36    <REP>          Meroe
12/06/2013  20:37    <REP>          Nabatéens
13/06/2013  04:00    <REP>          Nascas
13/06/2013  04:55    <REP>          Perses
13/06/2013  20:40    <REP>          Spartes
14/06/2013  02:53    <REP>          Sumer
               1 fichier(s)      267 567 396 octets

 Répertoire de C:\Users\Corto\Videos\-Civilisation\Egypte

09/06/2013  01:39    <REP>          .
09/06/2013  01:39    <REP>          ..
27/05/2013  23:11       177 860 007 Le crépuscule des civilisations 1_2.mp4
09/06/2013  01:38           350 290 Le-crepuscule-des-civilisations-x01.jpg
               2 fichier(s)      178 210 297 octets

 Répertoire de C:\Users\Corto\Videos\-Civilisation\Gobekli Tepe

09/06/2013  02:06    <REP>          .
09/06/2013  02:06    <REP>          ..
09/06/2013  02:06           317 730 Gobekli-Tepe.jpg
25/05/2013  22:07       142 622 685 Une civilisation disparue il y a 12 000 ans.mp4
               2 fichier(s)      142 940 415 octets

 Répertoire de C:\Users\Corto\Videos\-Civilisation\Hittites

12/06/2013  01:19    <REP>          .
12/06/2013  01:19    <REP>          ..
10/06/2013  22:54       182 948 236 Les Grandes Cités Disparues- Les Seigneurs Hittites.mp4
12/06/2013  01:19           314 553 Seigneurs-Hittites.jpg
               2 fichier(s)      183 262 789 octets

 Répertoire de C:\Users\Corto\Videos\-Civilisation\Indus

12/06/2013  02:00    <REP>          .
12/06/2013  02:00    <REP>          ..
12/06/2013  02:00           359 039 Civilisation-de-l'Indus.jpg
27/05/2013  23:24       154 138 467 La civilisation de l'Indus.mp4
               2 fichier(s)      154 497 506 octets

 Répertoire de C:\Users\Corto\Videos\-Civilisation\Khmer

09/06/2013  01:39    <REP>          .
09/06/2013  01:39    <REP>          ..
27/05/2013  23:11       211 698 933 Le crépuscule des civilisations 2_2.mp4
09/06/2013  01:38           358 863 Le-crepuscule-des-civilisations-x02.jpg
               2 fichier(s)      212 057 796 octets

 Répertoire de C:\Users\Corto\Videos\-Civilisation\Maya

08/07/2013  02:36    <REP>          .
08/07/2013  02:36    <REP>          ..
30/06/2013  22:18     1 803 299 782 Le Code Maya Enfin Dechiffre (arte hd).mp4
12/06/2013  05:23           410 916 Le-code-Maya-enfin-dechiffre-1.jpg
12/06/2013  05:23           411 066 Le-code-Maya-enfin-dechiffre-2.jpg
12/06/2013  05:24           411 038 Le-code-Maya-enfin-dechiffre-3.jpg
12/06/2013  05:24           411 024 Le-code-Maya-enfin-dechiffre-4.jpg
12/06/2013  05:24           410 974 Le-code-Maya-enfin-dechiffre-5.jpg
               6 fichier(s)    1 805 354 800 octets

 Répertoire de C:\Users\Corto\Videos\-Civilisation\Meroe

22/06/2013  01:36    <REP>          .
22/06/2013  01:36    <REP>          ..
22/06/2013  01:36       227 269 992 Les Reines Noires   Meroe, L'empire Africain Au Bord Du Nil (2008).mp4
               1 fichier(s)      227 269 992 octets

 Répertoire de C:\Users\Corto\Videos\-Civilisation\Nabatéens

12/06/2013  20:37    <REP>          .
12/06/2013  20:37    <REP>          ..
25/05/2013  22:13       201 855 829 Civilisation Le Royaume des Nabatéens de Pétra à Hégra.mp4
12/06/2013  20:14           212 615 Le-Royaume-des-Nabateens-de-Petra-a-Hegra.jpg
12/06/2013  20:37           387 202 Petra-les-secrets-de-la-cite-de-roc.jpg
27/05/2013  23:21       103 674 775 Pétra - Les secrets de la cité de roc.mp4
               4 fichier(s)      306 130 421 octets

 Répertoire de C:\Users\Corto\Videos\-Civilisation\Nascas

13/06/2013  04:00    <REP>          .
13/06/2013  04:00    <REP>          ..
25/05/2013  21:47       157 033 807 Le mystere des Nascas.mp4
13/06/2013  04:00           293 474 Le-mystere-des-Nascas.jpg
               2 fichier(s)      157 327 281 octets

 Répertoire de C:\Users\Corto\Videos\-Civilisation\Perses

13/06/2013  04:55    <REP>          .
13/06/2013  04:55    <REP>          ..
13/06/2013  04:55           260 598 Empire-Perse-Persepolis.jpg
27/05/2013  23:09       192 312 491 L'empire Perse, Persepolis doc complet.mp4
               2 fichier(s)      192 573 089 octets

 Répertoire de C:\Users\Corto\Videos\-Civilisation\Spartes

13/06/2013  20:40    <REP>          .
13/06/2013  20:40    <REP>          ..
27/05/2013  23:46       149 324 429 Sparte, une cite d'exception - 1l4 - Les institutions..mp4
27/05/2013  23:48       169 121 885 Sparte, une cite d'exception - 2l4 - 300, quand la realite depasse le mythe.mp4
27/05/2013  23:47       151 869 447 Sparte, une cite d'exception - 3l4 - La Guerre du Peloponese..mp4
27/05/2013  23:48       159 600 676 Sparte, une cite d'exception - 4l4 - Le declin d'une culture.mp4
13/06/2013  20:35           209 177 Sparte-une-cite-d-exception-1.jpg
13/06/2013  20:38           213 432 Sparte-une-cite-d-exception-2.jpg
13/06/2013  20:39           215 382 Sparte-une-cite-d-exception-3.jpg
13/06/2013  20:40           213 394 Sparte-une-cite-d-exception-4.jpg
               8 fichier(s)      630 767 822 octets

 Répertoire de C:\Users\Corto\Videos\-Civilisation\Sumer

14/06/2013  02:53    <REP>          .
14/06/2013  02:53    <REP>          ..
27/05/2013  22:31       146 260 871 Aratta, À L'aube Des Civilisations doc complet.mp4
14/06/2013  01:24           272 176 aratta-aube-des-civilisations.jpg
14/06/2013  02:36           261 399 epopee-de-Gilgamesh.jpg
14/06/2013  02:29           514 848 histoire-des-Sumeriens.jpg
25/05/2013  23:10       151 226 558 L histoire des Sumériens.mp4
25/05/2013  23:09       151 657 734 L'épopée de Gilgamesh.mp4
14/06/2013  02:53           264 994 Mesopotamie-origines-de-notre-civilisation.jpg
27/05/2013  22:38       156 502 530 Mésopotamie Les Origines De Notre Civilisation.mp4
               8 fichier(s)      606 961 110 octets

 Répertoire de C:\Users\Corto\Videos\-Evolution

14/07/2013  03:19    <REP>          .
14/07/2013  03:19    <REP>          ..
08/07/2013  00:12       533 596 063 043843-000-A_EQ_2_VF_00581862_MP4-1500_AMM-HBBTV.mp4
30/06/2013  23:44    <REP>          Animal Armageddon
15/06/2013  04:37           205 470 Aventure-de-Charles-Darwin.jpg
10/06/2013  23:48       633 718 319 Ce que Darwin ne savait pas encore.mp4
15/06/2013  02:23           201 155 Ce-que-Darwin-ne-savait-pas-encore.jpg
12/06/2013  03:19       634 628 453 Des cannibales en Europe.mp4
16/06/2013  02:32           141 825 Des-cannibales-en-Europe.jpg
25/05/2013  22:09       142 904 390 Dinosaures vivants  [Documentaires Scientifiques].mp4
15/06/2013  03:18           288 426 Dinosaures-vivants.jpg
25/05/2013  22:45       143 329 405 Documentaire Ida (Darwinius masillae).mp4
16/06/2013  05:22           211 638 evolution-des-especes---exemples-multiples-et-explications.jpg
15/06/2013  04:12           468 278 ida-darwinius-masillae.jpg
14/07/2013  03:17       168 776 703 La naissance de la vie - Intégral.mp4
28/05/2013  00:31       160 235 748 Le jour où la terre faillit disparaitre.mp4
15/06/2013  16:56           270 135 Le-jour-ou-la-terre-faillit-disparaitre.jpg
09/06/2013  01:39       176 723 800 Naissance de la Terre - Apparition de la vie.mp4
22/06/2013  01:55       181 593 884 Neanderthal 1_2.mp4
22/06/2013  01:54       172 697 563 Neanderthal 2_2.mp4
13/07/2013  19:21    <REP>          Origine de la vie
27/05/2013  22:52       669 020 678 Origines et évolution de l'homme - La bipédie.mp4
16/06/2013  01:10           294 489 Origines-et-evolution-de-l-homme---La-bipedie.jpg
25/05/2013  23:50       367 437 488 Évolution - L'aventure de Charles Darwin.mp4
25/05/2013  23:24       832 471 770 Évolution des espèces - Exemples multiples et explications.mp4
              21 fichier(s)    4 819 215 680 octets

 Répertoire de C:\Users\Corto\Videos\-Evolution\Animal Armageddon

30/06/2013  23:44    <REP>          .
30/06/2013  23:44    <REP>          ..
13/05/2013  05:35       685 848 935 Animal Armageddon x04-fr - Triasique parc [Strangled][200] - Trias-Jurassique.mp4
25/05/2013  23:21       630 940 633 Animal Armageddon x05-en [Doomsday][65] - Crétacé-Tertiaire.mp4
21/05/2013  22:13       162 597 357 Animal Armageddon x05-fr - La Terreur des dinosaures [Doomsday][65] - Crétacé-Tertiaire.mp4
25/05/2013  23:22       605 041 600 Animal Armageddon x06-en - [Panic in the Sky][65] - Crétacé-Tertiaire.mp4
21/05/2013  22:14       162 082 050 Animal Armageddon x06-fr - Apocalypse des dinosaures [Panic in the Sky][65] - Crétacé-Tertiaire.mp4
25/05/2013  23:20       690 775 724 Animal Armageddon x07-en - [Fire and Ice] - Toba.mp4
21/05/2013  22:15       164 145 169 Animal Armageddon x07-fr - Le Feu et la Glace [Fire and Ice] - Toba.mp4
16/06/2013  20:35           311 291 Animal-Armageddon-04.jpg
16/06/2013  20:48           146 363 Animal-Armageddon-05.jpg
16/06/2013  21:04           547 152 Animal-Armageddon-06.jpg
16/06/2013  21:24           331 771 Animal-Armageddon-07.jpg
              11 fichier(s)    3 102 768 045 octets

 Répertoire de C:\Users\Corto\Videos\-Evolution\Origine de la vie

13/07/2013  19:21    <REP>          .
13/07/2013  19:21    <REP>          ..
13/05/2013  03:30       204 055 837 BBC - A l'origine de la vie- Episode 1 (les premiers organismes).mp4
13/05/2013  03:52       219 561 825 BBC - A l'origine de la vie- Episode 2 (de l'eau à la terre).mp4
13/07/2013  19:21       822 465 468 David Attenborough's First Life Episode 12 Arrival (BBC) (pt_br).mp4
13/07/2013  19:20       797 029 945 David Attenborough's First Life Episode 22 Conquest (BBC) (pt_br).mp4
16/06/2013  22:02           418 941 Origine-de-la-vie-de-l-eau-a-la-terre.jpg
16/06/2013  21:53           386 090 Origine-de-la-vie-Premiers-organismes.jpg
               6 fichier(s)    2 043 918 106 octets

 Répertoire de C:\Users\Corto\Videos\-Fictions

12/07/2013  20:14    <REP>          .
12/07/2013  20:14    <REP>          ..
26/06/2013  01:03       312 991 081 1520 Par le sang du glaive film complet en francais.mp4
02/07/2013  01:30       907 421 188 2001.1- A Space Odyssey- The Re-Edit.mp4
19/06/2013  00:37       772 574 095 2012 La Fin Du Monde.mp4
29/06/2013  22:17       483 391 117 Aftershock Film Complet FRENCH.mp4
18/06/2013  01:40       263 546 290 Android Insurrection 2012. Film complet en vf..mp4
28/06/2013  23:27       336 424 148 Antarctica - 1983 - film complet en francais.mp4
18/06/2013  23:31       354 966 518 Arachnophobie - film Complet en français entier.mp4
28/06/2013  03:21       586 475 500 Attila Le Hun.mp4
28/06/2013  03:03       275 676 237 CRAWLSPACE- FILM COMPLET FR.mp4
18/06/2013  23:18       320 774 986 Diary of the Dead - Chronique des morts vivants FILM COMPLET FR.mp4
18/06/2013  01:40       296 750 698 Double Fight City Film Complet en français.mp4
01/07/2013  01:11       271 173 356 Détour mortel - film complet VF.mp4
18/06/2013  23:27       342 563 733 evil-twins film  vf.mp4
17/06/2013  23:27       308 747 910 Exam.mp4
18/06/2013  22:17       404 481 217 film entier affamés (2011 fr horreur dvdrip).mp4
28/06/2013  23:25       326 730 389 Film français entier Antartica [FR].mp4
26/06/2013  01:16       621 093 712 Justinien Trouvé ou le Bâtard de Dieu (film entier) - conçu hors mariage - patriarcat catholique.mp4
28/06/2013  03:13       303 294 402 Kill Dead Zombie FR film complet.mp4
01/07/2013  01:28       802 297 208 L'Ile au tresor (2013) complet.mp4
18/06/2013  22:41       459 675 529 La 14e Lame (Film Complet En Français).mp4
18/06/2013  23:04       301 054 910 La Horde [Horreur_Zombie] Film Entier Français.mp4
01/07/2013  01:03       346 198 225 le .2008.FRENCH.DVDRip.XviD-SINUSITE up by Sahbouche.avi.mp4
15/06/2013  23:56       386 261 293 Le monstre de Nix.mp4
01/07/2013  00:48       313 720 270 Le Règne du feu.mp4
01/07/2013  00:25       279 927 906 Le Sujet Deux 2013 - FILM COMPLET EN FRANÇAIS.mp4
01/07/2013  01:11       305 609 764 le-guerrier-wushu - FILM COMPLET VF.mp4
18/06/2013  01:39       271 443 333 Maléfique Film Complet 2012 - Full Movie En Francais.mp4
14/06/2013  04:09       833 126 364 Odysseus (01-12) - De l'autre côté de la mer.mp4
14/06/2013  04:57       726 455 691 Odysseus (02-12) - Le duel.mp4
14/06/2013  05:00       798 692 074 Odysseus (03-12) - Ulysse est vivant.mp4
21/06/2013  03:29       705 670 248 Odysseus (04-12) - Faut-il tuer Télémaque.mp4
21/06/2013  03:32       728 477 509 Odysseus (05-12) - La démocratie contre les barbares.mp4
21/06/2013  03:38       866 104 765 Odysseus (06-12) - Le retour d'Ulysse.mp4
29/06/2013  01:54       813 256 749 Odysseus (07-12) - .mp4
28/06/2013  23:13       741 218 628 Odysseus (08-12) - .mp4
08/07/2013  00:23       744 679 319 Odysseus (09-12) - .mp4
08/07/2013  00:26       780 893 326 Odysseus (10-12) - .mp4
12/07/2013  20:12       779 574 323 Odysseus (11-12) - .mp4
12/07/2013  20:14       779 558 273 Odysseus (12-12) - .mp4
18/06/2013  22:39       308 129 581 Shuttle (2008).mp4
18/06/2013  01:07       487 059 774 The Inhabited Island (Film Entier).mp4
19/06/2013  00:22       285 948 839 The Traveler ( Film Entier FR -HD )  HORREUR.mp4
18/06/2013  22:42       346 380 817 Vampire U film complet francais.mp4
18/06/2013  01:02       491 077 289 Virus ( FILM COMPLET - Sous-Titres Français) Science-Fiction _ Apocalypse.mp4
              44 fichier(s)   22 171 568 584 octets

 Répertoire de C:\Users\Corto\Videos\-Histoire

22/06/2013  01:20    <REP>          .
22/06/2013  01:20    <REP>          ..
25/05/2013  21:50       124 178 714 La Mort Noire - documentaires scientifiques.mp4
27/05/2013  23:57        54 701 064 La Mort Noire - La Peste Noire partie (1-3).mp4
27/05/2013  23:57        45 171 475 La Mort Noire - La Peste Noire partie (2-3).mp4
27/05/2013  23:57        44 551 392 La Mort Noire - La Peste Noire partie (3-3).mp4
22/06/2013  01:29    <REP>          La saga des Vikings
10/06/2013  23:17       620 049 948 Les Gaulois au-delà du mythe.mp4
28/05/2013  00:26    <REP>          Normands
11/06/2013  01:58       531 235 138 Sur nos traces 02x15 - Homo sapiens l'homme moderne.mp4
11/06/2013  01:55       507 780 765 Sur nos traces 03x15 - Le tailleur de silex.mp4
11/06/2013  01:27       170 142 587 Sur nos traces 04x15 - Homo sapiens l'homme artiste.mp4
11/06/2013  01:16       170 099 850 Sur nos traces 05x15 - Les derniers chasseurs-cueilleurs.mp4
11/06/2013  00:13       331 309 439 Sur nos traces 06x15 - Le guerrier gaulois.mp4
12/06/2013  02:41       345 267 179 Sur nos traces 07x15 - La famille gauloise.mp4
14/06/2013  03:32       356 499 654 Sur nos traces 08x15 - Le druide gaulois.mp4
14/06/2013  03:35       332 629 046 Sur nos traces 09x15 - le forgeron gaulois.mp4
14/06/2013  19:57       359 302 309 Sur nos traces 10x15 - Le banquet gaulois.mp4
17/06/2013  21:09       338 745 589 Sur nos traces 11x15 - Le guerrier franc.mp4
11/06/2013  02:14       531 065 066 Sur nos traces 12x15 - La famille franque.mp4
11/06/2013  00:45       471 337 089 Sur nos traces 13x15 - Le commercant franc.mp4
20/06/2013  19:43       331 794 468 Sur nos traces 14x15 - Le paysan franc.mp4
21/06/2013  21:46       345 500 866 Sur nos traces 15x15 - L'homme d'Eglise franc.mp4
              19 fichier(s)    6 011 361 638 octets

 Répertoire de C:\Users\Corto\Videos\-Histoire\La saga des Vikings

22/06/2013  01:29    <REP>          .
22/06/2013  01:29    <REP>          ..
22/06/2013  01:21        41 540 641 Documentaire - Histoire antique - La saga des Vikings (1_5).mp4
22/06/2013  01:26        41 079 707 Documentaire - Histoire antique - La saga des Vikings (2_5).mp4
22/06/2013  01:28        41 126 483 Documentaire - Histoire antique - La saga des Vikings (3_5).mp4
22/06/2013  01:27        36 516 910 Documentaire - Histoire antique - La saga des Vikings (4_5).mp4
22/06/2013  01:29        48 924 388 Documentaire - Histoire antique - La saga des Vikings (5_5).mp4
               5 fichier(s)      209 188 129 octets

 Répertoire de C:\Users\Corto\Videos\-Histoire\Normands

28/05/2013  00:26    <REP>          .
28/05/2013  00:26    <REP>          ..
28/05/2013  00:25       193 901 609 1 - Les Normands, une dynastie de conquerants 1ere Invasions.avi.mp4
28/05/2013  00:24       173 744 499 2 - Les Normands, une dynastie de conquerants Royaumes de Mediterranee.avi.mp4
28/05/2013  00:22       170 758 194 3 - Les Normands, une dynastie de conquerants Un nouvel age.avi.mp4
               3 fichier(s)      538 404 302 octets

 Répertoire de C:\Users\Corto\Videos\-TED

21/06/2013  23:38    <REP>          .
21/06/2013  23:38    <REP>          ..
20/06/2013  21:05         2 825 703 2560x1440-wallpaper.jpg
21/06/2013  02:10           588 981 abstract-red_00423631.jpg
20/06/2013  21:06         6 899 851 abstract-red_00423631.png
19/06/2013  22:45        65 133 133 Arbre généalogique de l'humanité - Spencer Wells - (sous-titré).mp4
21/06/2013  03:43        50 585 798 CarterEmmart_2010-480p-fr.mp4
21/06/2013  02:07           135 699 e0632.jpg
20/06/2013  21:06           742 381 nebulae_sky-2560x1440.jpg
21/06/2013  01:44       110 892 033 SeanCarroll_2010X-480p-fr.mp4
20/06/2013  20:59        66 335 566 TomWujec_2009G-480p-fr.mp4
20/06/2013  21:14           120 658 water-tablet-bubbles-120658.jpg
21/06/2013  01:11           764 045 ws_Eclipse_2560x1440.jpg
              11 fichier(s)      305 023 848 octets

 Répertoire de C:\Users\Corto\Videos\-Univers

14/07/2013  20:36    <REP>          .
14/07/2013  20:36    <REP>          ..
14/07/2013  20:36     1 363 242 121 (HD) National Geographic- Down to the Earth's Core - Documentary.mp4
26/05/2013  22:05       809 114 042 Au bord de l'espace HD.mp4
10/07/2013  02:05       276 072 955 Au Coeur De La Voie Lactée.mp4
28/05/2013  22:09    <REP>          Ce qu'Einstein ne savait pas encore
14/07/2013  03:21       189 469 445 Documentaire ( La choquante réalité ( Origines De L'Eau ).mp4
25/05/2013  02:50       178 759 988 Documentaire La matière noire et l'energie sombre.mp4
27/05/2013  23:34       309 274 459 Du Big Bang au vivant Documentaire.mp4
25/05/2013  03:03       592 429 350 Grande Histoire Des Oceans documentaire complet en français 2012.mp4
25/05/2013  22:54       334 584 042 Histoire du tout.mp4
15/07/2013  01:36    <REP>          How The Earth Was Made
11/07/2013  22:05    <REP>          How the Universe Works
10/07/2013  03:12       152 932 480 L'INCROYABLE CATASTROPHE - Comment Le Monde A Changé.mp4
16/06/2013  17:15    <REP>          La fabuleuse histoire de la science
16/06/2013  17:15    <REP>          La magie du Cosmos
09/06/2013  02:14       905 414 886 La Naissance de la Terre HD.mp4
14/07/2013  03:34       277 791 149 La Naissance de la Terre.mp4
25/05/2013  21:52       173 112 068 La Vitesse De La Lumière.mp4
25/05/2013  02:49       190 541 367 Le Mystère de la Matière Noire - Documentaire Scientifique Arte.mp4
28/05/2013  21:44       277 882 565 Le Mystère Des Nombres Premiers.mp4
10/07/2013  02:54       158 993 605 Le SuperVolcan du Lac Toba.mp4
23/05/2013  01:09       173 055 441 Le temps qu'est ce que c'est.mp4
12/07/2013  20:20       904 564 269 Les secrets de la matière (1-3) - La naissance de la chimie.mp4
28/05/2013  21:23    <REP>          Selon Albert Einstein
14/07/2013  01:42       156 794 963 Snowball Earth (BBC Horizon Documentary).mp4
10/07/2013  02:56       712 395 993 Super volcans.mp4
14/07/2013  02:29       164 493 354 Voyage aux origines de la Terre (1_2) - Plane'te en fusion.FRANCE 5 (2012).mp4
14/07/2013  02:28       151 553 319 Voyage aux origines de la Terre (2_2) - Plane'te vivante FRANCE 5 (2012).mp4
14/07/2013  20:25     1 222 202 050 Voyage aux origines de la Terre (HD en).mp4
23/05/2013  01:12       210 142 283 Voyage dans le temps.mp4
              23 fichier(s)    9 884 816 194 octets

 Répertoire de C:\Users\Corto\Videos\-Univers\Ce qu'Einstein ne savait pas encore

28/05/2013  22:09    <REP>          .
28/05/2013  22:09    <REP>          ..
28/05/2013  21:36       136 639 427 Ce qu'Einstein ne savait pas encore   1  Le rêve d'Einstein.mp4
28/05/2013  21:35       142 294 149 Ce qu'Einstein ne savait pas encore   2  La théorie des cordes.mp4
28/05/2013  21:37       137 368 483 Ce qu'Einstein ne savait pas encore   3  Bienvenue dans la 11e dimension.mp4
25/05/2013  02:51       178 620 990 Ce qu'Einstein ne savait pas encore - La théorie des cordes [Arte].mp4
               4 fichier(s)      594 923 049 octets

 Répertoire de C:\Users\Corto\Videos\-Univers\How The Earth Was Made

15/07/2013  01:36    <REP>          .
15/07/2013  01:36    <REP>          ..
13/07/2013  22:31       909 112 664 (HD) How The Earth Was Made Season 2 (S02E01) The Grand Canyon.mp4
13/07/2013  23:31       835 736 515 (HD) How The Earth Was Made Season 2 (S02E02) Vesuvius.mp4
14/07/2013  21:48       835 643 233 (HD) How The Earth Was Made Season 2 (S02E03) Birth of the Earth.mp4
14/07/2013  21:51       700 137 405 (HD) How The Earth Was Made Season 2 (S02E04) Sahara.mp4
14/07/2013  21:25       865 407 522 (HD) How The Earth Was Made Season 2 (S02E05) Yosemite.mp4
15/07/2013  00:29       876 727 752 (HD) How The Earth Was Made Season 2 (S02E06) The Rockies.mp4
14/07/2013  23:54       788 440 644 (HD) How The Earth Was Made Season 2 (S02E07) The Ring of Fire.mp4
15/07/2013  00:26       813 038 077 (HD) How The Earth Was Made Season 2 (S02E08) Everest.mp4
15/07/2013  01:32       840 812 956 (HD) How The Earth Was Made Season 2 (S02E09) Death Valley.mp4
15/07/2013  01:28       826 951 395 (HD) How The Earth Was Made Season 2 (S02E10) Mount St. Helens.mp4
15/07/2013  01:33       361 754 649 (HD) How The Earth Was Made Season 2 (S02E11) Earth's Deadliest Eruption.mp4.crdownload
15/07/2013  01:35       279 420 361 (HD) How The Earth Was Made Season 2 (S02E12) America's Ice Age.mp4.crdownload
15/07/2013  01:36       365 008 329 (HD) How The Earth Was Made Season 2 (S02E13) America's Gold.mp4.crdownload
14/07/2013  00:47       815 354 761 01x01-HD-How the Earth Was Made - San Andreas Fault.mp4
14/07/2013  01:21       773 360 643 01x02-HD-How the Earth Was Made - The Deepest Place on Earth.mp4
14/07/2013  01:55       793 234 465 01x03-HD-How the Earth Was Made - Krakatoa.mp4
14/07/2013  02:33       820 542 581 01x04-HD- How the Earth Was Made - Loch Ness.mp4
13/07/2013  23:45       833 475 776 01x05-HD-How the Earth Was Made - New York.mp4
14/07/2013  00:14       814 123 760 01x06-HD-How the Earth Was Made - Driest Place on Earth.mp4
14/07/2013  03:19       924 266 657 01x07-HD-How the Earth Was Made - Great Lakes.mp4
14/07/2013  03:36       218 825 438 01x08-How the Earth Was Made - Yellowstone.mp4
14/07/2013  17:53       916 321 270 01x09-HD-How the Earth Was Made - Tsunami.mp4
14/07/2013  18:15       724 314 192 01x10-HD-How the Earth Was Made - Asteroids.mp4
14/07/2013  18:25       838 634 372 01x11-HD-How the Earth Was Made - Iceland Volcano.mp4
14/07/2013  18:53       837 319 818 01x12-HD-How the Earth Was Made - Hawaii.mp4
14/07/2013  19:21       817 916 647 01x13-HD-How the Earth Was Made - The Alps.mp4
              26 fichier(s)   19 425 881 882 octets

 Répertoire de C:\Users\Corto\Videos\-Univers\How the Universe Works

11/07/2013  22:05    <REP>          .
11/07/2013  22:05    <REP>          ..
11/07/2013  04:07       720 058 307 (HD) How the Universe Works (S01E01) The Big Bang.mp4
11/07/2013  04:17       750 076 230 (HD) How the Universe Works (S01E02) Black Holes.mp4
11/07/2013  04:17       731 585 034 (HD) How the Universe Works (S01E03) Alien Galaxies.mp4
11/07/2013  03:24       768 741 216 (HD) How the Universe Works (S01E04) Extreme Stars.mp4
11/07/2013  04:07       633 064 213 (HD) How the Universe Works (S01E05) Extreme Planets.mp4
11/07/2013  04:09       707 656 787 (HD) How the Universe Works (S01E06) Supernovas.mp4
11/07/2013  19:43       755 918 643 (HD) How the Universe Works (S02E01) The Furnaces of Life.mp4
11/07/2013  19:53       661 731 820 (HD) How the Universe Works (S02E02) The Winds of Creation.mp4
11/07/2013  20:29       707 453 986 (HD) How the Universe Works (S02E03) Planets From Hell.mp4
11/07/2013  20:34       729 562 044 (HD) How the Universe Works (S02E04) Cosmic Firestorms.mp4
11/07/2013  22:01       781 708 689 (HD) How the Universe Works (S02E05) Clockwork and Creation.mp4
11/07/2013  22:05       791 155 524 (HD) How the Universe Works (S02E07) Worlds that Never Were.mp4
11/07/2013  22:02       801 014 817 (HD) How the Universe Works (S02E08) Birth of the Earth.mp4
              13 fichier(s)    9 539 727 310 octets

 Répertoire de C:\Users\Corto\Videos\-Univers\La fabuleuse histoire de la science

16/06/2013  17:15    <REP>          .
16/06/2013  17:15    <REP>          ..
23/05/2013  01:56       188 860 064 La fabuleuse histoire de la science épisode 1.mp4
23/05/2013  01:59       198 786 418 La fabuleuse histoire de la science épisode 2.mp4
23/05/2013  01:59       198 228 279 La fabuleuse histoire de la science épisode 3.mp4
23/05/2013  01:59       204 985 173 La fabuleuse histoire de la science épisode 4.mp4
23/05/2013  01:58       184 702 076 La fabuleuse histoire de la science épisode 5..mp4
23/05/2013  01:57       176 517 033 La fabuleuse histoire de la science épisode 6.mp4
               6 fichier(s)    1 152 079 043 octets

 Répertoire de C:\Users\Corto\Videos\-Univers\La magie du Cosmos

16/06/2013  17:15    <REP>          .
16/06/2013  17:15    <REP>          ..
10/06/2013  00:45       753 915 845 La Magie Du Cosmos - 1-4 L'illusion du temps.mp4
10/06/2013  00:49       713 614 962 La Magie Du Cosmos - 2-4 Qu'est-ce que l'espace.mp4
10/06/2013  00:56       772 506 826 La Magie Du Cosmos - 3-4 Le saut quantique.mp4
10/06/2013  00:44       743 013 697 La Magie Du Cosmos - 4-4 Univers ou multivers.mp4
               4 fichier(s)    2 983 051 330 octets

 Répertoire de C:\Users\Corto\Videos\-Univers\Selon Albert Einstein

28/05/2013  21:23    <REP>          .
28/05/2013  21:23    <REP>          ..
25/05/2013  23:05       152 521 393 La lumière selon Albert Einstein.mp4
25/05/2013  23:05        82 272 593 Le temps selon Albert Einstein.mp4
               2 fichier(s)      234 793 986 octets

 Répertoire de C:\Users\Corto\Videos\Games for Windows - LIVE Videos

16/09/2010  15:51    <REP>          .
16/09/2010  15:51    <REP>          ..
               0 fichier(s)                0 octets

 Répertoire de C:\Users\Corto\Videos\Media Go

12/02/2013  00:43    <REP>          .
12/02/2013  00:43    <REP>          ..
               0 fichier(s)                0 octets

 Répertoire de C:\Users\Corto\Videos\tests

15/06/2013  04:56    <REP>          .
15/06/2013  04:56    <REP>          ..
20/05/2013  21:49    <REP>          Animal
20/05/2013  18:36               432 animalArmageddon.css
21/05/2013  02:00           136 642 Enfoui au plus profond de la terre.docx
20/05/2013  19:01             6 580 LaTerreEnEnfer.html
21/05/2013  02:01    <REP>          Menace Invisible
               3 fichier(s)          143 654 octets

 Répertoire de C:\Users\Corto\Videos\tests\Animal

20/05/2013  21:49    <REP>          .
20/05/2013  21:49    <REP>          ..
20/05/2013  17:41       163 044 472 Animal Armageddon x02-fr - La Terre en enfer [Hell on Earth][380] - Dévonien.mp4
21/05/2013  02:00    <REP>          Session sans titre 1
               1 fichier(s)      163 044 472 octets

 Répertoire de C:\Users\Corto\Videos\tests\Animal\Session sans titre 1

21/05/2013  02:00    <REP>          .
21/05/2013  02:00    <REP>          ..
21/05/2013  02:00    <REP>          Conformed Files
21/05/2013  02:00           100 659 Session sans titre 1.sesx
               1 fichier(s)          100 659 octets

 Répertoire de C:\Users\Corto\Videos\tests\Animal\Session sans titre 1\Conformed Files

21/05/2013  02:00    <REP>          .
21/05/2013  02:00    <REP>          ..
20/05/2013  21:51           551 260 Animal Armageddon x02-fr - La Terre en enfer [Hell on Earth][380] - Dévonien_audio 48000 1.pkf
20/05/2013  21:51     1 092 186 336 Animal Armageddon x02-fr - La Terre en enfer [Hell on Earth][380] - Dévonien_audio 48000 1.wav
               2 fichier(s)    1 092 737 596 octets

 Répertoire de C:\Users\Corto\Videos\tests\Menace Invisible

21/05/2013  02:01    <REP>          .
21/05/2013  02:01    <REP>          ..
16/05/2013  01:09           278 716 1 sans titre.pkf
16/05/2013  01:09        71 345 280 1 sans titre.wav
13/05/2013  22:43       654 883 181 Animal Armageddon x01 - La Menace invisible [Death Rays][440] - Ordovicien-Silurien.mp4
16/05/2013  01:15           461 564 Animal Armageddon x01 - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio.pkf
16/05/2013  01:15       945 227 456 Animal Armageddon x01 - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio.wav
15/05/2013  23:00        55 518 669 Animal Armageddon x01a - La Menace invisible [Death Rays][440] - Ordovicien-Silurien.mp4
16/05/2013  01:14           332 604 Animal Armageddon x01a - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio.pkf
16/05/2013  01:14       340 542 370 Animal Armageddon x01a - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio.wav
15/05/2013  23:15        59 950 397 Animal Armageddon x01b - La Menace invisible [Death Rays][440] - Ordovicien-Silurien.mp4
16/05/2013  01:14           359 164 Animal Armageddon x01b - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio.pkf
16/05/2013  01:14       367 750 300 Animal Armageddon x01b - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio.wav
15/05/2013  23:33        47 002 127 Animal Armageddon x01c - La Menace invisible [Death Rays][440] - Ordovicien-Silurien.mp4
16/05/2013  01:15           281 212 Animal Armageddon x01c - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio.pkf
16/05/2013  01:15       287 932 834 Animal Armageddon x01c - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio.wav
21/05/2013  02:01           490 012 Animal Armageddon x02-fr - La Terre en enfer [Hell on Earth][380] - Dévonien_audio.pkf
21/05/2013  02:01     1 003 446 238 Animal Armageddon x02-fr - La Terre en enfer [Hell on Earth][380] - Dévonien_audio.wav
20/05/2013  02:45    <REP>          Bounced Files
20/05/2013  02:45    <REP>          Conformed Files
20/05/2013  02:45           118 340 Session sans titre 1.sesx
              17 fichier(s)    3 835 920 464 octets

 Répertoire de C:\Users\Corto\Videos\tests\Menace Invisible\Bounced Files

20/05/2013  02:45    <REP>          .
20/05/2013  02:45    <REP>          ..
16/05/2013  00:41           362 012 Rebond_1.pkf
16/05/2013  00:41       370 657 758 Rebond_1.wav
               2 fichier(s)      371 019 770 octets

 Répertoire de C:\Users\Corto\Videos\tests\Menace Invisible\Conformed Files

20/05/2013  02:45    <REP>          .
20/05/2013  02:45    <REP>          ..
20/05/2013  02:15           404 060 Animal Armageddon x01b - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio 48000 1.pkf
20/05/2013  02:15       400 273 238 Animal Armageddon x01b - La Menace invisible [Death Rays][440] - Ordovicien-Silurien_audio 48000 1.wav
               2 fichier(s)      400 677 298 octets

     Total des fichiers listés :
             588 fichier(s)   100 387 231 327 octets
             164 Rép(s)  34 956 345 344 octets libres

*/

?>
