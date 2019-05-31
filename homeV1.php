<?php
// http://localhost/EPITEST/homeV1.php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 09/02/2019
 * Time: 18:36
 */

include "include/header.html";

?>
    <nav class="nav-extended blue" style="padding: 0px 10px;">
        <div class="nav-wrapper">
            <a href="homeV1.php" class="brand-logo"><i class="fas fa-home"></i> Home</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons"><i class="fas fa-ellipsis-v	"></i></i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="profil.php"><i class="fas fa-user-circle"></i> Profile</a></li>
                <li><a href="accueilV1.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent">
                <li class="tab"><a href="#year_2017">2017</a></li>
                <li class="tab"><a class="active" href="#year_2018">2018</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="profil.php"><i class="fas fa-user-circle"></i>Profile</a></li>
        <li><a href="accueilV1.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
    </ul>
    <div class="container">

        <div id="year_2017" class="col s12" style="padding: 0px 10px;">
            <table id="tab_2017" class="cell-border hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Passed</th>
                    <th>Failed</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>1</td>
                    <td>printf</td>
                    <td>0</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>my_rpg</td>
                    <td>21</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>need_for_steak</td>
                    <td>20</td>
                    <td>1</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div id="year_2018" class="col s12" style="padding: 0px 10px;">
            <table id="tab_2018" class="cell-border hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Passed</th>
                    <th>Failed</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>1</td>
                    <td>malloc</td>
                    <td>8</td>
                    <td>13</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>nm_obj_dump</td>
                    <td>0</td>
                    <td>42</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>nano_tech_spice</td>
                    <td>24</td>
                    <td>4</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.tabs').tabs();
            $('#tab_2017').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true
            });
            $('#tab_2018').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true
            });
        });
    </script>

<?php

include "include/footer.html";

?>