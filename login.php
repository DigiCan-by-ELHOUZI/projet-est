<?php 

session_start();

	include("connection.php");
	include("functions.php");

 
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//les chose posté
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//lire depuis la base de données
			$query = "select * from login where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location:sqliteCrud/index.php");
						die;
					}
				}
			}
			
			echo "Erreur!";
		}else
		{
			echo "Erreur!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Connexion</title>
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
						Connexion
					</span>
                </div>

                <form class="login100-form validate-form" method="post">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="user_name" placeholder="Entrez votre Email.....">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Mot de passe</span>
                        <input class="input100" type="password" name="password" placeholder="Entrez votre mot de passe.....">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">


                        <div>
                            <a href="inscrip.php" class="txt1">
                            S'inscrire
							</a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <input type="submit" value="Connexion" class="login100-form-btn">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="js/main.js"></script>

</body>

</html>