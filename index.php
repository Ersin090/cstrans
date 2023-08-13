<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Capa & Söhne Transport | Startseite</title>

    <link rel="stylesheet" type="text/css" href="./css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="./css/skeleton.css" />
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <link rel="stylesheet" type="text/css" href="./css/navigation.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">

<body>
    <?php require(__DIR__ . "/inc/header.php"); ?>

    <!-- Index -->
    <div class="container main">

        <h4>Willkommen!</h4>

        <div class="row">
            <div class="seven columns">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt dolor consectetur quis doloremque
                    delectus? Adipisci saepe doloribus harum cum corporis dolorum quis qui sint, dolore commodi cumque
                    quidem alias vel natus dolores. Cupiditate dolor quo cumque id eum alias incidunt veniam. Totam
                    ullam, quod perferendis dignissimos libero exercitationem suscipit error!</p>
   
            </div>

            <div class="five columns">
                <div class="services">
                    <div class="one-half column">
                        <i class="fas fa-shuttle-van" , style="font-size: 200%"></i>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>

                    <div class="one-half column">
                        <i class="fas fa-clock" , style="font-size: 200%"></i>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>

                    <div class="one-half column" , style="margin-left: -0px">
                        <i class="fas fa-thumbs-up" , style="font-size: 200%"></i>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>

                    <div class="one-half column">
                        <i class="fas fa-headset" , style="font-size: 200%"></i>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
            $(".side-menu a").click(function () {
                jPM.close;
            });
        });
    </script>

</body>
</html>