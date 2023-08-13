<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Capa & Söhne Transport | Dienstleistungen</title>

    <link rel="stylesheet" type="text/css" href="./css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="./css/skeleton.css" />
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <link rel="stylesheet" type="text/css" href="./css/navigation.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">

<body>
    <?php require(__DIR__ . "/inc/header.php"); ?>
  

    <!-- Dienstleistungen -->
    <div class="container main">
		<center><h4>Referenzen</h4></center>
	<br />
        <div class="row">
            <div class="icon">
                <div class="one-third column">
                <a href="#"><img src="./images/ref1.jpg" class="links" /></a>
                </div>

                <div class="one-third column">
                <a href="#"><img src="./images/ref2.jpg" class="links" /></a>
                </div>

                <div class="one-third column">
                <a href="#"><img src="./images/ref3.jpg" class="links" /></a>
                </div>

                <br />
                <br />
                <br />
                <div class="one-third column">
                <a href="#"><img src="./images/ref4.jpg" class="links" /></a>
                </div>

                <div class="one-third column">
                <a href="#"><img src="./images/ref5.jpg" class="links" /></a>
                </div>

                    </div> <!-- icon -->
                </div> <!-- row -->
            </div> <!-- container -->


            <script type="text/javascript" src="./js/jquery-3.3.1.js"></script>
            <script type="text/javascript" src="./js/jquery.jpanelmenu.js"></script>

            <script type="text/javascript">
                jQuery(document).ready(function ($) {
                    var jPM = $.jPanelMenu({
                        menu: '.side-menu',
                        trigger: '#side-menu-trigger',
                        direction: 'right'
                    });
                    jPM.on();
                });
            </script>

</body>

</html>