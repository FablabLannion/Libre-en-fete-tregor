<?php

/* data */
$data_event_year = '2020';
$data_event_date = 'Dimanche 29 mars ' . $data_event_year;
$data_event_schedules = '10h à 18h';
$data_event_location = 'Salle des Ursulines de Lannion';
Flight::set('data_event_year', $data_event_year);
Flight::set('data_event_date', $data_event_date);
Flight::set('data_event_schedules', $data_event_schedules);
Flight::set('data_event_location', $data_event_location);

$data_programme = array (
  array("Conférences",
     "img/espace-conf.jpg",
     "",
     "Des mini-conférences seront proposées tout au long de la journée. <br/>
     <table class='table1'>
      <tr>
        <th>Horaire</th>
        <th>Sujet</th>
        <th>Présentateur</th>
      </tr>
      <tr>
        <td>10h30</td>
        <td>Histoire & perspective du logiciel libre</td>
        <td></td>
      </tr>
      <tr>
        <td>11h00</td>
        <td>...</td>
        <td></td>
      </tr>
        <tr>
        <td>11h30</td>
        <td>...</td>
        <td></td>
      </tr>
      <tr>
        <td>12h15</td>
        <td>...</td>
        <td></td>
      </tr>
      <tr>
        <td>13h00</td>
        <td>...</td>
        <td></td>
      </tr>
      <tr>
        <td>13h30</td>
        <td>...</td>
        <td></td>
      </tr>
      <tr>
        <td>14h00</td>
        <td>...</td>
        <td></td>
      </tr>
      <tr>
        <td>14h30</td>
        <td>...</td>
        <td></td>
      </tr>
        <tr>
        <td>15h00</td>
        <td>...</td>
        <td></td>
      </tr>
      <tr>
        <td>15h30</td>
        <td>...</td>
        <td></td>
      </tr>
      <tr>
        <td>16h00</td>
        <td>...</td>
        <td></td>
      </tr>
      <tr>
        <td>16h30</td>
        <td>...</td>
        <td></td>
      </tr>
        <tr>
        <td>17h00</td>
        <td>...</td>
        <td></td>
      </tr>
    </table>
    <div class='center-margin-top italic'>
      <i class='fa fa-envelope' aria-hidden='true'></i>
      <a href='mailto:pierre@libre-en-fete-tregor.fr?subject=[Libre en Fête Trégor $data_event_year] Proposition de conférence'>Proposer une conférence</a>
    </div>"
  ),
  array("Explorer : numérique & territoire",
     "img/C6y83-TWgAARMU7.jpg",
     "",
     "<ul>
        <li>...</li>
        <li>...</li>
        <li>...</li>
      </ul>
      <br><a href='mailto:'>Contact : ?</a>"
  ),
  array(
     "Comprendre: numérique et enjeux citoyens",
     "img/espace-citoyen.jpg",
     "",
     "<ul>
        <li>...</li>
        <li>...</li>
        <li>...</li>
      </ul>
      <br><a href='mailto:'>Contact : ?</a>"
  ),
  array("Jouer",
     "img/jeux.jpg",
     "",
     "<ul>
        <li>Jeux sous licences libres</li>
        <li>Ordivintage et vieux jeux</li>
        <li>LinuxConsole</li>
        <li>Rétro-gaming sur RaspberryPi/Mini Consoles d'Arcades</li>
      </ul>
      <br><a href='mailto:patrice@libre-en-fete-tregor.fr?subject=[Libre en Fête Trégor $data_event_year] Espace Jouer'>Contact : Patrice</a>"
  ),
  array("Apprendre",
     "img/33940617933_259c4a281a_z.jpg",
     "",
     "<ul>
        <li>...</li>
        <li>...</li>
        <li>...</li>
      </ul>
      <br><a href='mailto:benedicte@libre-en-fete-tregor.fr?subject=[Libre en Fête Trégor $data_event_year] Espace Apprendre'>Contact : Bénédicte</a>"
  ),
  array("Entreprendre",
     "img/20170510_214516.jpg",
     "",
     "<ul>
        <li>...</li>
        <li>...</li>
        <li>...</li>
      </ul>
      <br><a href='mailto:agnes@libre-en-fete-tregor.fr?subject=[Libre en Fête Trégor $data_event_year] Espace Entreprendre'>Contact : Agnès</a>"
  ),
  array("Découvrir",
     "img/4979030420_77b090328d_z.jpg",
     "",
     "<ul>
        <li>...</li>
        <li>...</li>
        <li>...</li>
      </ul>
      <br><a href='mailto:eric@libre-en-fete-tregor.fr?subject=[Libre en Fête Trégor $data_event_year] Espace Découvrir'>Contact : Éric</a>"
  ),
);
Flight::set('data_programme', $data_programme);

$data_partenaires = array (
  array(
    "<i class='fa fa-envelope' aria-hidden='true'></i>
    <a href='mailto:contact@libre-en-fete-tregor.fr?subject=[Libre en Fête Trégor $data_event_year] Devenir partenaire'>Devenir partenaire</a>",
    "",
    "",
    ""
  ),
  array("Fablab Lannion",
    "img/fablab.jpg",
    "http://fablab-lannion.org",
    "Atelier participatif ouvert, le fablab de Lannion accueille petits et grands. Un objet à réparer, une idée à transformer, un besoin de support dans un domaine technique, le fablab de Lannion vous ouvre ses portes. Venez découvrir les imprimantes 3D, les Logiciels Libres, les mini ordinateurs et autres robots."
  ),
  array("Infothema",
    "img/infothema.png",
    "http://www.infothema.fr/",
    "L'association Infothema a pour vocation la promotion des Logiciels Libres sur le département des Côtes d'Armor (Bretagne)."
  ),
  array("Lycée Le Dantec",
    "img/LeDANTEC.png",
    "http://www.lycee-ledantec.ac-rennes.fr/",
    "Lycée public de Lannion, Félix Le Dantec s'implique depuis plusieurs années dans le Logiciel Libre et depuis 3 ans organise chaque année une 'InstallParty & Initiation à GNU/Linux'. Nombre d'élèves (de STI et SSI) et étudiants (BTS/Licences Pro) ont été formés à l'usage et au développement sur le Logiciel Libre et l'Open Hardware."
  ),
  array("Anticipa",
    "img/logo-anticipa.jpg",
    "http://technopole-anticipa.com/",
    "<h3>UN TRIO GAGNANT AU SERVICE DE VOS PROJETS D’ENTREPRISE</h3><p>
    Depuis 25 ans, Anticipa <b></b>développe l’économie, encourage l’innovation </b> et <b>stimule l’esprit d’entreprendre </b> sur le territoire du Trégor-Goëlo. Anticipa, c’est UNE technopole, UNE agence de développement et UNE plate-forme d’initiative locale (Trégor Initiative) au cœur d’un réseau  composé d’industriels, de porteurs de projets, de chercheurs, d’enseignants, d’étudiants et d’institutionnels.<br>
    Anticipa concentre ses actions autour de <b>6 filières d’excellence </b>: numérique, photonique, cosmétique - biotech, alimentation-nutrition, naval-nautisme  et industrie. Elle <b>accompagne et soutient les projets </b> (individuels ou collaboratifs) issus de ces filières quelle que soit leur nature (création, implantation, développement, internationalisation…) et <b> anime </b> les filières par l’organisation de divers événements dédiés (colloques, rencontres, focus, formations…).<br>
    La technopole Anticipa est à l’écoute de tous et propose un accompagnement sur mesure à tous les projets d’entreprise.</p>"
  ),
  array("Lannion Trégor Communauté",
    "img/LOGO_LTC_GeneriqueFR.jpg",
    "http://www.lannion-tregor.com/",
    "La communauté d'agglomération est un établissement public de coopération intercommunale (EPCI).<br>Elle rassemble, depuis le 1er janvier 2017, 60 communes pour 118 000 habitants. Ces communes se sont unies sur le principe de solidarité, l'objectif étant de faire ensemble ce qu'une commune seule ne pourrait faire."
  ),
  array("Ville de Lannion",
    "img/Logo_mairie_Lannion.jpg",
    "https://www.lannion.bzh/",
    ""
  ),
  array("Code d'Armor",
    "img/codedarmor.png",
    "http://www.codedarmor.fr/",
    "Code d'Armor a pour but de construire une communauté de développeurs sur la région de Lannion. Nous organisons des évènements autour du monde du développement informatique (meetups, codelabs, concours, ...).<br> Passionnés, intéressés, motivés, interloqués, vous êtes tous les bienvenus !"
  ),
  array("Coopérative22",
    "img/coop22.png",
    "https://twitter.com/cpn22",
    "La coopérative, c’est :
    <ul><li>l’ensemble des établissements scolaires du département qui peuvent accueillir ou proposer des animations autour du numérique</li>
        <li>un point central : les sites pilotes qui fédèrent l’ensemble des initiatives du terrain et proposent de nombreuses animations et temps d’échanges entre pairs</li>
    </ul><br>
	  Pour les Côtes d’Armor :
	  <ul><li>Ecole Morand-Savidan à Lannion</li>
	  <li>Collège Yves Coppens à Lannion</li>
      <li>Lycée Félix Le Dantec à Lannion</li></ul><br>
      La coopérative, ça permet de :
      <ul><li>participer à des animations autour de la pédagogie et du numérique</li>
          <li>venir tester des outils ou des pratiques pédagogiques</li>
          <li>travailler entre pairs sur des pratiques pédagogiques</li>
          <li>s’informer sur des évènements liés au numérique éducatif autour de chez vous</li>
          <li>s’engager en partageant vos expériences et vos pratiques pédagogiques</li></ul>"
  ),
  array("LanPower",
    "img/logo-lanpower.jpg",
    "http://asso.lanpower.free.fr/",
    "L'association LanPower de Rennes spécialisée sur les jeux video sous licences libres depuis 10 ans, participera au stand jeux libres tous publics et représentera le site <a href='http://jeuxlibres.net'>jeuxlibres.net</a> ainsi que le site <a href='https://libregamesinitiatives.tuxfamily.org/index.php'>LibreGamesInitiatives</a>. Des jeux pour petits et grands ainsi que des jeux en réseau seront présentés, mais aussi de très vieux ordinateurs et des jeux retro."
  ),
  array("Collectif PrimTux",
        "img/logo-primtux.png",
        "http://collectif.primtux.fr/",
        "L’association Collectif Primtux a pour objet la promotion et le développement de la <a href='https://primtux.fr/'>distribution éducative PrimTux</a> notamment par des actions de formation et de sensibilisation, l’organisation de réunions pour le développement technique et pédagogique de la distribution, l’organisation de manifestations et activités annexes. Elle participe à la revalorisation de matériels informatiques obsolescents en les orientant vers le milieu scolaire ou éducatif."
  ),
  array("Nerzh Nevez",
    "img/logoNNppp.jpg",
    "http://nerzh-nevez.com/",
    "<a href=\"http://nerzh-nevez.com/\">Nerzh Nevez</a> et <a href=\"http://www.ecocentre-tregor.fr\">L'ECOCENTRE</a> organisent des stages Tripalium et d'autres en lien avec l'autonomie énergétique.<br>Les objets réalisés s'inspirent de plans libres de droit. Ils sont l'occasion de découvrir ou de perfectionner des techniques qui permettent de devenir plus autonome."
  ),
  array("Tripalium",
    "img/tripalium.jpeg",
    "http://www.tripalium.org/",
    "<b>Tripalium est un réseau d'acteurs</b> fondé en 2007. Il propose régulièrement <b>des stages d'auto-construction d'éoliennes</b> ouverts à tous. <b>Plus de 150 éoliennes Piggott</b> ont déjà été fabriquées en France."
  ),
/*
  array(
    "PATG",
    "img/patg.png",
    "https://sites.google.com/site/patglannion2010/",
    "Promouvoir et Agir en Trégor Goëlo (PATG) est une association axée sur l'aide aux particuliers et aux très petites entreprises du Trégor Goëlo. PATG tente de réduire la fracture sociale et la fracture technique en visant la reprise des relations humaines et la réinsertion sociale. L'informatique est utilisée comme support parce que c'est un élément qui permet facilement les rapprochements humains, et apporte un complément de connaissances utile pour l'emploi et la vie courante."
  ),
  array("IUT Lannion",
    "img/logo_iut.png",
    "http://www.iut-lannion.fr/",
    "L'IUT Lannion, près de 50 ans d'expérience, est un établissement majeur de l'enseignement supérieur et de la recherche des Côtes d'Armor.
    <br>Composante à part entière de l'Université de Rennes 1, l'IUT Lannion répond à trois missions fondamentales : la formation initiale des jeunes étudiants, la formation tout au long de la vie, la recherche et le transfert de technologies. Ainsi, les équipes pédagogiques se composent à la fois d'enseignants, d'enseignants-chercheurs et de professionnels.
    <br>Accueillant des publics multiples, bacheliers de tous types (bacs généraux, technologiques et professionnels), salariés et demandeurs d'emplois, l'IUT s'efforce de proposer des formules adaptées aux aspirations et au potentiel de chacun. Ses formations universitaires et professionnalisantes offrent les meilleurs atouts pour entrer dans la vie active, soit directement après le Diplôme Universitaire de Technologie, soit après une Licence Professionnelle, soit après des études longues (licences, masters, écoles d'ingénieurs, etc...)."
  ),
  array("Aleccor",
    "img/logo_aleccor.jpg",
    "http://www.aleccor.infini.fr",
    "Les exOOOs d'Aleccor sont des exercices éducatifs libres et gratuits, programmés sous OpenOffice et sous VoxOoFox (synthèse vocale). Ces exercices sont auto-correctifs.<br>Le but est de proposer des ressources éducatives pour les écoles, pour les enfants (en soutien) en leur permettant de travailler en autonomie (pas de note mais une valorisation du travail), mais aussi pour les personnes en difficulté (illettrisme) ou pour qui le français est une langue étrangère.<br>Plus de 1 000 exercices sont actuellement disponibles dans de nombreuses matières (Français, Calcul, Histoire, Géographie, Sciences, Anglais, Éducation civique, ...)"
  ),
  array("An Drouizig",
    "img/mw_drouizig.png",
    "http://www.drouizig.org/",
    "An Drouizig est une association de promotion de la langue bretonne sur les nouvelles technologies, notamment par la traduction de logiciels et par la réalisation de correcteurs orthographiques.<br>Ur gevredigezh a gas war-raok ar brezhoneg war ar c'halverezhioù nevez eo An Drouizig. He obererezhioù pennañ a zo troidigezh meziantoù ha diorroadur un difazier reizhskrivadur."
  ),
  array("April",
    "img/logo-april.png",
    "http://www.april.org",
    "Pionnière du logiciel libre en France, l'April est depuis 1996 un acteur majeur de la démocratisation et de la diffusion du Logiciel Libre et des standards ouverts auprès du grand public, des professionnels et des institutions dans l'espace francophone. Elle veille aussi à sensibiliser l'opinion sur les dangers d'une appropriation exclusive de l'information et du savoir par des intérêts privés."
  ),
  array("BrestTech+",
    "img/BrestTechLannion.png",
    "http://frenchtech-brestplus.bzh/",
    "Depuis juin 2015 et l’obtention du label French Tech, la French Tech Brest+ a rejoint le cercle des 13 métropoles françaises labellisées, preuve de la vitalité de son écosystème numérique.<br>L’initiative nationale French Tech vise à proposer des moyens et des perspectives aux startups, pour faire naître en local des champions et booster l’attractivité territoriale.
    <br><br>Sur les 4 villes de son territoire (Brest, Lannion, Morlaix, Quimper) et portée par les technopoles de l’ouest breton, la French Tech Brest+ déroule ses actions spécifiques aux startups, autour des 5 axes identifiés : fédération de l’écosystème numérique, sensibilisation à l’entreprenariat, accélération des startups, internationalisation et digitalisation de l’économie.
    En savoir plus : <a href='http://frenchtech-brestplus.bzh/'>http://frenchtech-brestplus.bzh/</a> <a href='https://twitter.com/FTBrestPlus'>@FTBrestPlus</a>"
  ),
  array("Conseil Départemental",
    "img/Bloc_cg22_2013_quadri.jpg",
    "http://cotesdarmor.fr/",
    "Le Conseil Départemental et ses partenaires libèrent leurs données ! Accompagnant le grand mouvement Open Data en France et dans le monde entier, le portail DAT'ARMOR est né.<br>
    <b>L'open data, c'est quoi ?</b>
    L’open data (\"Données ouvertes\") désigne un mouvement visant à rendre accessibles via Internet les données numériques que les collectivités et les administrations produisent ou reçoivent dans leurs activités quotidiennes. Les données libérées sur le portail DAT'ARMOR touchent des domaines aussi variés que le transport, le social, le tourisme, l'éducation, la culture, le sport ou l'urbanisme. Ces données dites ouvertes sont accessibles librement et gratuitement et peuvent être réutilisées par tout un chacun. Plus précisément, l’open data a pour principe de fournir des données brutes pour en faciliter la réutilisation.<br>
    <b>L'Open Data, pour qui ?</b>
    Pour tout le monde ! A titre d'exemple, les entreprises peuvent y trouver matière à proposer de nouvelles applications et des services innovants dédiés aux smartphones et aux tablettes ; le grand public peut y trouver des informations propres à enrichir sa culture générale ; les journalistes peuvent y dénicher des informations destinées à leurs articles ; les chercheurs des éléments susceptibles d'alimenter leurs études ou leurs travaux."
  ),
  array("Ecocentre",
    "img/ecocentre.png",
    "http://www.ecocentre-tregor.fr/",
    "L'ECOCENTRE est un lieu de rencontres, de fêtes, de partage et d'échange autour notamment de l'écologie (mais pas que !).<br>L'association propose tout au long de l'année des stages très divers à des prix accessibles dans le but de transmettre et partager des connaissances au plus grand nombre."
  ),
  array("ENSSAT",
    "img/ENSSAT.png",
    "http://www.enssat.fr/",
    "L’Enssat (École Nationale Supérieure des Sciences Appliquées et de Technologie) est une école publique d’ingénieurs et un pôle de recherche dans le domaine des télécoms et des technologies émergentes.<br>Grâce à ses équipes d’enseignement et de recherche en synergie avec le monde industriel, l’École dote ses élèves ingénieurs de compétences et de savoir-faire à la pointe des technologies pour un avenir assuré dans le développement de projets innovants."
  ),
  array("Hackable magazine",
    "img/logo-HK-baselineMag.jpg",
    "https://www.hackable.fr",
    "<h2>DÉMONTEZ / COMPRENEZ / ADAPTEZ / PARTAGEZ</h2>
    <br>
    Hackable met l’électronique plus que jamais à la portée de tous ! Ce bimestriel n’a qu’un but : faire de la technologie un vrai plaisir ! Le plaisir de démonter, d’apprendre, de comprendre, de faire, de maîtriser et d’adapter à ses besoins. En d’autres termes, c’est un magazine pour utiliser la technologie, pas la consommer. Au programme : montages à base Arduino, programmation, bidouillages autour de la Raspberry Pi, découverte de nouvelles cartes et de nouveaux modules, démontage et exploration de matériels, conseils, recommandations et astuces pour s’équiper, mais aussi de quoi apprendre les bases pour s’en sortir seul et pour aller toujours plus loin !"
  ),
  array("Kristal",
    "img/kristal.png",
    "http://kristal.io/fr/",
    "Lancée en février 2015, Kristal propose, avec son framework Open Source <a href=\"http://cobaltians.org/\">Cobalt</a>, un nouvel outil pour développer des applications mobiles, utilisant le Web afin de réduire les coûts tout en gardant des performances élevées. Cobalt, c'est aussi une association, les \"Cobaltians\", qui a pour objet de faire connaître, promouvoir et améliorer le framework."
  ),
  array("Les petits débrouillards",
    "img/Logo-petitsdebrouillards.jpg",
    "http://www.lespetitsdebrouillardsbretagne.org/",
    "L’association « Les Petits Débrouillards » met en place des activités scientifiques et techniques pour les jeunes, afin de promouvoir la démarche expérimentale et l'esprit critique auprès du plus grand nombre."
  ),
  array("Linux Pratique",
    "img/logo-LP-baselineMag.jpg",
    "https://www.linux-pratique.com/",
    "<h2>LE MAGAZINE POUR COMPRENDRE, UTILISER ET ADMINISTRER LINUX ET LES LOGICIELS LIBRES AU QUOTIDIEN SUR PC, MAC & RASPBERRY PI</h2>
    <br>Avec sa ligne rédactionnelle résolument pratique, Linux Pratique a été conçu pour répondre aux besoins des particuliers et des entreprises à la recherche de solutions open source. Ce bimestriel a pour but de démocratiser l'alternative open source via des présentations de logiciels libres, divers didacticiels, mais aussi par des articles de vulgarisation technique. À travers ses rubriques variées (programmation, cahier Raspberry Pi, solutions professionnelles, web, système, etc.), le magazine vous permettra de faire le plein d’informations sur le monde de l’open source et des logiciels libres. Bref, Linux Pratique c’est comprendre, utiliser & administrer Linux au quotidien sur PC, Mac et Raspberry Pi !"
  ),
  array("Nos oignons",
    "img/nos-oignons-blanc.png",
    "https://nos-oignons.net/",
    "<a href=\"https://nos-oignons.net/\">Nos Oignons</a> est une association à but non-lucratif créée pour collecter des dons afin de faire tourner des nœuds de sortie Tor."
  ),
  array("Orange Solidarité",
    "img/logo-fondation-orange-2015-fr.png",
    "https://www.fondationorange.com/Orange-Solidarite",
    "Orange Solidarité est l’association du numérique solidaire de la Fondation Orange dont l’engagement prioritaire est l’éducation numérique pour faciliter l’insertion sociale et professionnelle."
  ),
  array("OSM France",
    "img/OSM-FR-logo-web-avec-texte.png",
    "http://openstreetmap.fr/asso",
    "OpenStreetMap France est une association à but non lucratif régie par la loi de 1901 dont l'objectif est de promouvoir le projet OpenStreetMap et notamment la collecte, la diffusion et l'utilisation de données cartographiques sous licences libres."
  ),
  array("Telimed",
    "img/logo_telimed_rond_cmjn.png",
    "http://telimed.fr/",
    " Créée en 2017, TELiMED propose un service basé sur des outils numériques adaptés et simples à utiliser, de manière à favoriser le maintien à domicile des personnes isolées, en s'appuyant sur les acteurs de proximité et en animant une communauté solidaire.
    <br>TELiMED est soutenue par la Technopole Anticipa de Lannion et labellisé French Tech Brest+. Pour mettre en oeuvre notre projet, nous favorisons les partenariats locaux et travaillons avec les entreprises lannionnaises comme Kristal, 3D Ouest et Feichter Electronics. Des projets de recherche sont également en cours avec l'ENSSAT et l'IUT."
  ),
  array("Titux.org",
    "img/logo-700x700-Titux.org.png",
    "https://www.titux.org/asso/doku.php",
    "L'association a pour but de favoriser et développer l'intérêt, la pratique et la connaissance des usages du numérique, la promotion des logiciels et systèmes d'exploitation libres, ainsi que la mutualisation de moyens informatiques. Nos actions sont sur la région lannionnaise."
  ),
  array("VivreDansMaVille",
    "img/Logo-Vivre-sans-baseline.PNG",
    "https://vivredansmaville.com",
    "VivreDansMaVille est une plateforme pour échanger vos services, compétences et talents.
    <br>Notre plateforme fonctionne comme une banque du temps, c’est à dire un réseau de personnes qui utilisent le temps comme monnaie pour échanger des services.
    <br>Notre monnaie s’appelle le CELT et la plateforme compte déjà 500 membres et de nombreux services proposés et échangés.
    <br>Une heure de service vaut 1 CELT, peu importe le service ou la personne; la banque du temps est basée sur une valeur d’égalité.
    <br><br>
    VivreDansMaVille est mis en oeuvre par notre start-up sociale Local4People et le projet est suivi par la Technopole Anticipa.
    <br><br>
    Venez découvrir la première banque du temps bretonne : <a href=\"https://vivredansmaville.com\">https://vivredansmaville.com</a>"
  ),
*/
);
Flight::set('data_partenaires', $data_partenaires);

$data_sponsors = array (
  array(
    "<i class='fa fa-envelope' aria-hidden='true'></i>
    <a href='mailto:contact@libre-en-fete-tregor.fr?subject=[Libre en Fête Trégor $data_event_year] Devenir sponsor'>Devenir sponsor</a>",
    "",
    "",
    ""
  ),

/*
  array("Huawei",
    "img/logo-Huawei.jpeg",
    "http://www.huawei.com/fr/",
    ""
  ),
  array("Orange",
    "img/logo_orange.jpg",
    "https://www.orange.com/fr/accueil",
    ""
  ),
  array("Lannion Tregor Communauté",
    "img/LOGO_LTC_GeneriqueFR.jpg",
    "http://www.lannion-tregor.com/",
    ""
  ),
  array("Ville de Lannion",
    "img/Logo_mairie_Lannion.jpg",
    "https://www.lannion.bzh/",
    ""
  ),
  array("Sponsors \"Granit Rose\"",
    "img/granitrose.jpg",
    "",
    "<a href=\"https://www.ixiacom.com/fr\"><img src=\"img/logo_ixia.png\" height=\"150\" alt=\"Ixia\"></a></li>"
  ),
  array("Espace pro",
    "img/Professional-People-Silhouette-800px.png",
    "",
    "<a href=\"http://nokia.com/\"><img src=\"img/Nokia_wordmark.svg.png\" height=\"80\" alt=\"Nokia\"></a>
    <br>
    <br>
    <a href=\"http://telimed.fr/\"><img src=\"img/logo_telimed_rond_cmjn.png\" height=\"100\" alt=\"Telimed\"></a>
    <br>
    <br>
    <a href=\"https://vivredansmaville.com\"><img src=\"img/Logo-Vivre-sans-baseline.PNG\" height=\"100\" alt=\"VivreDansMaVille\"></a>
    <br>
    <br>
    <a href=\"https://www.linux-pratique.com/\"><img src=\"img/logo-LP-baselineMag.jpg\" height=\"100\" alt=\"Linux Pratique\"></a>
    <br>
    <br>
    <a href=\"https://www.hackable.fr/\"><img src=\"img/logo-HK-baselineMag.jpg\" height=\"100\" alt=\"Hackable Magazine\"></a>"
  ),
*/
);
Flight::set('data_sponsors', $data_sponsors);

$data_concours = array (
  array("TODO",
    "",
    "",
    ""
  ),
/*
  array("Concours OSM",
    "img/affiche-osm-5.png",
    "https://www.lannion.bzh/une-ville-pour-tous/408-3eme-concours-de-contributions-open-street-map",
    "La Ville de Lannion et Lannion-Trégor Communauté organisent du 1er au 23 mars 2018 le 3ème Concours de contributions à OpenStreetMap.
    Ouvert à tous, ce concours permet à chacun de participer de façon ludique à la cartographie de notre territoire de vie : le Trégor.
    <br>
    La thématique proposée cette année est « Randonnée et déplacements doux».
    <br>
    Vous êtes randonneurs, à pied, à vélo, cyclotouristes, utilisateurs de Vélek'tro, vous réalisez tout ou partie de vos déplacements en mode doux, vous aimez le Trégor tout simplement, alors partagez vos expériences sur le territoire de Lannion-Trégor Communauté grâce à la cartographie OpenStreetMap.
    <br>
    Les contributeurs inscrits au concours sont invités à compléter les données OpenStreetMap - routes, chemins, pistes cyclables, cheminements, itinéraires équestres, voies navigables, etc... ainsi que tous les points d’intérêt qui jalonnent vos itinéraires - parking, rack et arceaux à vélos, abris, bancs, bornes, signalétiques, ... .
    <br>
    Au-delà de ces quelques exemples non exhaustifs, toutes vos contributions seront prises en compte dans le cadre de ce concours. Les prix des meilleurs contributeurs seront remis lors de la journée Libre en Fête le dimanche 25 mars à la Salle des Ursulines à Lannion :
    <ul>
    <li>Prix du contributeur (indépendant)</li>
    <li>Prix du collectif contributeur</li>
    <li>Prix Coup de Coeur</li>
    </ul><br>Remise des prix à 11h45"
  ),
  array("Challenge Ada Lovelace",
    "img/affiche_v2.png",
    "https://adalovelace.ledantec-numerique.fr/",
    "Le challenge Ada Lovelace s’étend sur 3 mois : inscription à partir du 14 décembre 2017 et concours ouvert à partir du 08 janvier 2018, sessions de formation de janvier à début mars (HTML/CSS, JavaScript, langage & algorithmie, PHP & bases de données, utilisation de la plateforme).
    <br>
    Fin du concours prévue le vendredi 23 mars (minuit), puis les équipes présenteront leur projet au public ainsi qu’au jury pendant Libre en Fête (remise des prix à 17h00)."
  )
*/
);
Flight::set('data_concours', $data_concours);
?>
