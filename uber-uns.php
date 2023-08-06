<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Capa & Söhne Transport | Über uns</title>

    <link rel="stylesheet" type="text/css" href="./css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="./css/skeleton.css" />
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <link rel="stylesheet" type="text/css" href="./css/navigation.css" />
    <link rel="stylesheet" type="text/css" href="./css/lightbox.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">

<body>
    <?php require(__DIR__ . "/inc/header.php"); ?>

    <!-- Über uns -->
    <div class="container main">
    <h3>Über uns</h3>
            
    <div class="row">
            <div class="one-half column">
            
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, minima magnam eaque facilis modi
                    fuga nemo
                    dolorem omnis. Architecto, saepe quae. Nemo perspiciatis expedita quae asperiores cupiditate sed
                    cum
                    praesentium corrupti deleniti magnam, sapiente quia quo ipsum ducimus cumque repellendus obcaecati
                    totam
                    dolorum vero iure minus, libero, error officiis. Dolores?</p>
            </div>
            <div class="one-half column">
                <a href="./images/links.jpg" rel="lightbox[Foto]" title="Foto 1"><img src="./images/links.jpg" class="links" /></a>
                <a href="./images/rechts.jpg" rel="lightbox[Foto]" title="Foto 2"><img src="./images/rechts.jpg" class="rechts" /></a>
                <a href="./images/unten.jpg" rel="lightbox[Foto]" title="Foto 3"><img src="./images/unten.jpg" class="unten" /></a>
            </div>
        </div>
    </div>
    <script src="./js/lightbox-plus-jquery.js"></script>
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