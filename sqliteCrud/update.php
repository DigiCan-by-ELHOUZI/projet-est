<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ajouter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>
<?php

    include('conndb.php');

    $id=$_GET['u_id'];

    $query="SELECT * FROM event WHERE event_id='$id'";

    $res= $db->query($query);
?>


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(images/est_oujda_abdel.png);">
                    <span class="login100-form-title-1">
						Ajoute Salles&Amphi
					</span>
                </div>

                <form action="edit.php" class="login100-form validate-form" method="post">
                <?php

                  while($row=$res->fetchArray()){


                ?>
                     <input type="hidden" name="id" value="<?php echo $row['event_id']; ?>">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Nom prof & Matiére</span>
                        <input class="input100"  type="text" name="name" value="<?php echo $row['event_name']; ?> ">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">début</span>
                        <input class="input100" type="text" name="start" value="<?php echo $row['event_start']; ?> ">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Fin</span>
                        <input class="input100" type="text" name="end" value="<?php echo $row['event_end']; ?> ">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Salles&Amphi</span>
                        <input class="input100" type="text" name="person" value="<?php echo $row['person_id']; ?> ">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Formations</span>
                        <input class="input100" type="text" name="project" value="<?php echo $row['project_id']; ?> ">
                        <span class="focus-input100"></span>
                        <?php
                        }
                       ?>
                    </div>

                    <div class="container-login100-form-btn">
                        <input type="submit" value="Ajouter" class="login100-form-btn">
                        <a type="submit" href=""class="login100-form-btn">Retour</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="js/main.js"></script>

</body>

</html>