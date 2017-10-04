<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/jquery-select/css/jquery.select.css">
        <link href="css/default.css" rel="stylesheet">
        <link rel="icon" href="img/logo.png" type="image/png" />
    </head>
    <body>
    <!-- Header  -->
        <div class="container-fluid">
            <div class="row HeaderRow">
                <div class="col-md-5 col-xs-12">
                    <img class="img-responsive logo" src="img/logo2.png">
                </div>
                <div class="col-md-7 col-xs-0">
                    <nav>
                        <ul class="navul">
                            <li id="login">
                                <a id="login-trigger"><label style="font-weight:normal;">Inloggen ▼</label></a>
                                <div id="login-content">
                                    <form class="form-inline" action="index.php" method="POST">
                                        <fieldset>
                                            <div class="form-group" style="margin-top: 5px;">
                                                <label for="emailLogin">E-mail:</label>
                                                <input style="margin-top: 10px; margin-bottom: 10px;" class="form-control" type="text" id="emailLogin" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="passwordLogin">Wachtwoord:</label>
                                                <input style="margin-top: 10px;" class="form-control" type="password" id="passwordLogin" name="password">
                                            </div>
                                            <input type="submit" class="btn btn-danger" style="margin-top: 15px;" name="login" id="Login" value="Inloggen">
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        <div class="row">
        <div style="height: 3px; background-color: #4f4f4f;"></div>
        <div style="height: 3px; background-color: #858585;"></div>
        <div style="height: 3px; background-color: #b4b4b4;"></div>
        </div>
        <!-- Projects Table -->

            <div class="row">
              <div id="controlPanel">
                <form>
                    <h2 id="lblProjectTitle">Project name here...</h2>
                    <input id="btnNewProject" class="btn btn-success" type="button" value="New Project" style="margin: 5px;" />
                    <input id="btnShowProjects" class="btn btn-general" type="button" value="Show Projects" style="margin: 5px;" />
                </form>
              </div>
            </div>
            <div class="row">
            <div style="height: 3px; background-color: #b4b4b4;"></div>
            <div style="height: 3px; background-color: #858585;"></div>
            <div style="height: 3px; background-color: #4f4f4f;"></div>
            <div style="height: 15px; background-color: #000000;"></div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table id="projects" class="table table-striped">
                        <thead style="background-color: #ddd">
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
            <div class="row">
                <div class="table-responsive">
                    <table id="tasks"  class="table table-striped">
                        <thead style="background-color: #ddd">
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
                        <tfoot>
                            <tr style="background-color: black; color: white;">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td id="timePlanned" style="text-align: center;"></td>
                                <td id="timeDone" style="text-align: center;"></td>
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
        <script src="js/bootstrap.min.js"></script>
        <script src="css/jquery-select/js/jquery.select.js"></script>
        <script src="js/default.js"></script>
        <!-- Timer plugin -->
    <script src="js/timer.jquery.min.js"></script>
    </body>
</html>
