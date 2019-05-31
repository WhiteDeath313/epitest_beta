<?php
// http://localhost/EPITEST/profil.php

/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 15/02/2019
 * Time: 20:53
 */

include "include/header.html";
?>

    <nav class="blue" style="padding: 0px 10px;">
        <div class="nav-wrapper">
            <a href="homeV1.php" class="brand-logo"><i class="fas fa-home"></i> Home</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons"><i class="fas fa-ellipsis-v	"></i></i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#"><i class="fas fa-user-circle"></i> Profile</a></li>
                <li><a href="accueilV1.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="profil.php"><i class="fas fa-user-circle"></i>Profile</a></li>
        <li><a href="accueilV1.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
    </ul>

    <div class="container">
        <div class="center-contenu">
            <h2>PROFILE</h2>
        </div>
        <div>
            <label>Pseudo : </label>
            <p id="name_user">WhiteDeath313</p>
        </div>
        <div>
            <label>Mail : </label>
            <p id="mail_user">arnaud.ridet@epitech.eu</p>
        </div>
        <div>
            <label>City : </label>
            <p id="city_user">Toulouse</p>
        </div>
        <div>
            <label>Number of tests create : </label>
            <p id="nb_tests_create">192</p>
        </div>
        <div>
            <label>Number of automatic tests launch : </label>
            <p id="nb_ta_use">3034</p>
        </div>
        <div>
            <a class="waves-effect waves-light btn modal-trigger" href="#profile_popup">Modal</a>
        </div>
    </div>

    <div id="profile_popup" class="modal">
        <div class="modal-content">
            <div>
                <label>Pseudo : </label>
                <input id="new_pseudo" name="new_pseudo" type="text" value="WhiteDeath313"/>
            </div>
            <div>
                <label>Mail : </label>
                <input id="new_pseudo" name="new_mail" type="text" value="arnaud.ridet@epitech.eu"/>
            </div>
            <div>
                <label>City : </label>
                <input id="new_city" name="new_city" type="text" value="Toulouse"/>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#" onclick="modify_input()" class="modal-close waves-effect waves-green btn-flat">Apply</a>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.modal').modal();
        });
        function modify_input() {
            $('#name_user').text = $('#new_pseudo').value;
            $('#city_user').text = $('#new_city').value;
        }
    </script>

<?php

include "include/footer.html";

?>
