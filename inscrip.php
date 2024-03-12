

<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//la chose posté
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//enregistrer dans la base de données
			$user_id = random_num(20);
			$query = "insert into login (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Veuillez entrer les informations valides!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inscription</title>
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

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(images/est_oujda_abdel.png);">
                    <span class="login100-form-title-1">
						Inscription
					</span>
                </div>
                <form method="post">
                <form class="login100-form validate-form" method="post">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Nom</span>
                        <input class="input100" type="text"  placeholder="Entrez votre nom.. ">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="user_name" placeholder="Entrez votre Email..">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Mot de passe</span>
                        <input class="input100" type="password" name="password" placeholder="Entrez votre mot de passe..">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Confirmez mot de passe</span>
                        <input class="input100" type="password"  placeholder="Confirmez mot de passe..">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">


                        <div>
                            <a href="login.php" class="txt1">
                            S'identifier
							</a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
							Connexion
						</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="js/main.js"></script>

</body>

</html>