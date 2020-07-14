<?php
    if(isset($_SESSION['admin'])){
        header("Location:index.php?page=accueil");
    }

?>
</div>
<img class="wave" src="assets/imgs/slider/wave.png">
<div class="container">
<div class="main-header">
   
    <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
            <div class="card-content">
                <div class="row">
                    <div class="col-xs-6">
                        <img src="assets/imgs/users/1203.png" alt="Administrateur" width="100%">
                    </div>
                </div>
                <h4 class="center-align">Se connecter</h4>

                <?php
                if(isset($_POST['submit'])){
                    $email = htmlspecialchars(trim($_POST['email']));
                    $password = htmlspecialchars(trim($_POST['password']));
                    $errors = [];
                    if(empty($email) || empty($password)){
                        $errors['empty']="Tous les champs n'ont pas été remplis!";
                    }else if(is_admin($email, $password) == 0){
                        $errors['existe'] = "Cette administrateur n'existe pas";
                    }
                    if(!empty($errors)){
                    ?>
                        <div class="alert alert-danger">
                            
                                <?php
                                    foreach($errors as $erreur){
                                        echo $erreur."<br>";
                                    }
                                ?>
                            
                        </div>
                    <?php
                    }else{
                        $_SESSION['admin'] = $email;
                        header("Location:index.php?page=accueil");
                    }
                }
                ?>
                <form method="POST">
                    <div class="row">
                        <div class="form-group">
                            <label for="email">Adresse email</label>
                            <input type="email" id="email" name="email" class="form-control">
                            
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" id="password" name="password" class="form-control">
                            
                        </div>
                    </div>
                    <center><button type="submit" name="submit" class="btn btn-primary">
                        <i class="fa fa-lock left"></i>
                        Se connecter
                    </button></center>
                    <?php var_dump($_SESSION); ?>
                </form>
            </div>
        </div>
        
        
    </div>
</div>
</div>  