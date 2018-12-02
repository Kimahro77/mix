<?php 


// accès à la liste des utilisateurs : 
require('clients.php');

if (isset($_SESSION['username'])){

    // Mon utilisateur courant : 
    $currentUserName = $_SESSION['username'];

    echo '<div id="home">Bonjour ' .$currentUserName. '.</div>';
    ?>
    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus impedit sint soluta voluptas nulla veritatis unde, reprehenderit nesciunt expedita fuga eius harum modi repellat necessitatibus, aut laborum est dolorum nostrum?
    </p>
    <?php
} else {
    echo'<h2> Attention, vous n\'êtes pas connecté !</h2>';
}








/* session_start();

// Si les champs utlisateurs && mdp sont complétés :
if (isset($_POST['login']) && isset($_POST['pwd'])){
    $username = $_POST['login'];
    $password = $_POST['pwd'];
    $isValid = true;

    // Test du combo login/pwd :
    if (array_key_exists($username, $users)) {
        if ($password == $users['pass']) {
            $_SESSION['username'] = $username;
            header('location: Bienvenu.php');
        } else {
            $isValid = false;
        }
    

    } Else {
        $isValid = false;
    }

    if ($isValid === false) {
        $_SESSION['flash_message'] = 'La combinaison Identifiant/Mot de passe n\'est pas correcte';
        header('Location: index.php');
    }

} else {
    header('Location: index.php');
}
 */