


<head>

    <base href="">
    <meta charset="utf-8" />
    <title>Simplon-village</title>
    <meta name="description" content="Fabrique de codeurs entrepreneurs à La loupe #FrenchTech" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>

    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="assets/jquery.js"></script>
    <script type="text/javascript" src="assets/bootstrap.js"></script>
    <script src="assets/bootstrap-hover-dropdown.js"></script>
    <script>
        // very simple to use!
        $(document).ready(function() {
            $('.js-activated').dropdownHover().dropdown();
        });
    </script>

    <style>
        #header #logo.logo-image {
            position: relative;
        }
        #header #logo.logo-image img {
            height: 150px;
            float: left;
            position: absolute;
            top: 10px;
            left: 20px;
        }
        #site-tagline h2 {
            border: 1px solid red;
            text-align: left;
            float: left;
            top: 114px;
            left: 120px;
            text-shadow: 0 1px 1px rgba(0,0,0,.8) !important;
        }
        #header {
            position: relative !important;
        }
        .sqs-block.calendar-block .sqs-block-content, .sqs-block.calendar-block .sqs-block-content {
            max-width: 100%;
        }
    </style>

    <link rel="stylesheet" href="assets/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/bootstrap.css" type="text/css" media="all">

</head>

<body>
<div class="construction">Ce site est en construction - Merci de votre compréhension</div>

<header id="header">
    <div class="wrapper clear" data-content-field="page-settings">

        <div class="primary-image default"></div>

        <div class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li id="menu-accueil"><a href="index.php">Accueil</a></li>
                        <li id="menu-pedagogie"><a href="pedagogie.php">Pédagogie</a></li>
                        <li class="dropdown" id="menu-ecosysteme">
                            <a href="ecosysteme.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Ecosystème</a>
                            <ul class="dropdown-menu">
                                <li><a href="ecosysteme.php#comite">Comité de pilotage</a></li>
                                <li><a href="ecosysteme.php#partenaires">Partenaires</a></li>
                                <li><a href="ecosysteme.php#mentors">Mentors</a></li>
                            </ul>
                        </li>
                        <li class="dropdown" id="menu-actualites">
                            <a href="actualites.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Actualités</a>
                            <ul class="dropdown-menu">
                                <li><a href="actualites.php">Blog</a></li>
                            </ul>
                        </li>
                        <li id="menu-candidatez"><a href="candidatez.php">Candidatez</a></li>
                        <li id="menu-partenaires"><a href="partenaires.php">Devenez partenaire</a></li>
                        <li id="menu-media"><a href="media.php">Média</a></li>
                        <li id="menu-contact"><a href="contact.php">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>


        <div id="logo" class="logo-image">

            <h1 class="site-title" data-content-field="site-title">
                <a href="index.php">
                    <img src="images/logo.png" style="width: 250px; height: inherit;" alt="Simplon.co" />
                </a>
            </h1>



            <div class="site-tagline">
                <div class="spacer"></div>
                <h2 style="padding-left: 150px;margin-top: 0;">Fabrique de codeurs entrepreneurs dans le Perche #frenchtech</h2>
            </div>


        </div>


        <div class="folder-nav">

        </div>

    </div>
</header>