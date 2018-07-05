<?php

$baseurl = "https://azenox.fr/btproject";

?>

<!DOCTYPE html>
<html>

<head>

    <?php include('includes/head.php'); ?>

    
</head>    


<body>

    <nav>
        <div class="nav-wrapper deep-purple darken-3">
            <a href="#" class="brand-logo center">BTProject</a>
            <ul id="nav-mobile" class="left">
                <li><a href="">Créer une Partie</a></li>
            </ul>
            <ul id="nav-mobile" class="right">
                <li><a href="login">Connexion/Inscription</a></li>
            </ul>
        </div>
    </nav>
    
    
    
    
    <div id="form-wrapper">
        <form name="login" method="post" action="" class="col s12">
            
            <div class="row">
                <h1>Connexion</h1>
            </div>
            
            <hr>
            
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Username" id="login_username" type="text" class="validate">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Password" id="login_password" type="password" class="validate">
                </div>
            </div>
            
            <div class="row">
                <button class="btn waves-effect waves-light deep-purple darken-3" type="submit" name="submit">Envoyer
                    <i class="material-icons right">send</i>
                </button>
            </div>
            
        </form>
        
        <form name="register" method="post" action="" class="col s12">
            
            <div class="row">
                <h1>Inscription</h1>
            </div>
            
            <hr>
            
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Username" id="register_username" type="text" class="validate">
                </div>
                <div class="input-field col s6">
                    <input placeholder="Email" id="register_email" type="email" class="validate">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Password" id="register_password" type="password" class="validate">
                </div>
            </div>
            
            <div class="row">
                <button class="btn waves-effect waves-light deep-purple darken-3" type="submit" name="submit">Envoyer
                    <i class="material-icons right">send</i>
                </button>
            </div>
            
        </form>
    </div>
    
    
    
</body>


</html>