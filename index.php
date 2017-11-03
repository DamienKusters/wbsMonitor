<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/jquery-select/css/jquery.select.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="css/default.css" rel="stylesheet">
        <link rel="icon" href="img/logo.png" type="image/png" />
    </head>
    <body>
    <!-- Header  -->
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper black">
                        <a href="#" class="left brand-logo white-text">WBS</a>
                        <ul class="right buttoncenter">
                            <form method="post" action="index.php">
                                <?php 
                                if(isset($_SESSION["loggedIn"])) {
                                ?>
                                <li>
                                    <a id="btnLogoutModal" class="waves-effect waves-light btn modal-trigger" href="#LogoutModal">logout</a>
                                </li>
                                <?php
                                }else {
                                ?>
                                <li>
                                    <a id="btnLoginModal" class="waves-effect waves-light btn modal-trigger" href="#LoginModal">Login</a>
                                </li>
                                <?php 
                                }
                                ?>
                            </form>
                        </ul>
                    </div>
                </nav>
            </div>
            <!--Login Modal-->
            <div id="LoginModal" class="modal">
                <div class="modal-content">
                    <form method="post" action="functions/login.php">
                        <p class="text">Username</p><input id="username" name="username" class="text" type="text" />
                        <p class="text">Password</p><input id="password" name="password" class="text" type="password" />
                        <input type="submit" id="btnLogin" class="waves-effect waves-light btn" value="log in">
                    </form>
                </div>
            </div>
            <!--Logout Modal-->
            <div id="LogoutModal" class="modal">
                <div class="modal-content">
                    <form method="post" action="functions/login.php">
                        <h4>Are you sure that you want to logout.</h4>
                        <input type="submit" id="btnLogin" class="waves-effect waves-light btn" value="log out">
                    </form>
                </div>
            </div>
            <!-- Projects Table -->
            <div class="container-fluid">
            <div class="row buttonrow">
              <div id="controlPanel">
                <form>
                    <h4 id="lblProjectTitle">Project name here...</h4>
                    <h4 id="lblProjects">Projects</h4>
                    <hr>
                    <input id="btnNewProject" class="btn btn-success" type="button" value="New Project"/>
                    <input id="btnShowProjects" class="btn btn-success" type="button" value="Show Projects"/>
                </form>
              </div>
            </div>
            <div class="row rowmargin">
                <div class="table-responsive">
                    <table id="projects" class="table table-striped">
                        <thead class="tablehead">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Date added</th>
                                <th>View</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody >
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row rowmargin">
                <div class="table-responsive">
                    <table id="tasks"  class="table table-striped">
                        <thead class="tablehead">
                            <tr>
                                <th>ID</th>
                                <th>Task</th>
                                <th>Predecessor</th>
                                <th>Who</th>
                                <th>MoSCoW</th>
                                <th>Plan</th>
                                <th>Do</th>
                                <th>Check</th>
                                <th>Act</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot class="black">
                            <tr class="bottomrow">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td id="timePlanned"></td>
                                <td id="timeDone"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="css/jquery-select/js/jquery.select.js"></script>
        <script src="js/default.js"></script>
        <!-- Timer plugin -->
    <script src="js/timer.jquery.min.js"></script>
    </body>
</html>
