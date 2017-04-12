<!DOCTYPE html>
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
                    <img class="img-responsive logo" src="img/logo.png">
                </div>
                <div class="col-md-7 col-xs-0">
                    <nav>
                        <ul class="navul">
                            <li id="login">
                                <a id="login-trigger"><label style="font-weight:normal;">Inloggen ▼</label></a>
                                <div id="login-content">
                                    <form class="form-inline" action="index.php" method="POST">
                                        <fieldset>
                                            <div class="form-group" style="margin-top: 5px;"> E-mail: <input style="margin-top: 10px; margin-bottom: 10px;" class="form-control" type="text" id="emailLogin" name="email"></div><br>
                                            <div class="form-group"> Wachtwoord: <input style="margin-top: 10px;" class="form-control" type="password" id="passwordLogin" name="password"></div>
                                        </fieldset>
                                        <fieldset>
                                            <input type="submit" class="btn btn-danger" style="margin-top: 10px;" name="login" id="Login" value="Inloggen">
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div style="height: 3px; background-color: #4f4f4f;"></div>
        <div style="height: 3px; background-color: #858585;"></div>
        <div style="height: 3px; background-color: #b4b4b4;"></div>

        <!-- Projects Table -->
        <div class="container-fluid">
            <div class="row">
              <div id="controlPanel">
                <form>
                  <input id="btnNewProject" class="btn btn-success" type="button" value="New Project" />
                </form>
              </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead style="background-color: #ddd">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Date added</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0</td>
                                <td>test</td>
                                <td>00-00-00</td>
                                <td><input class="btn btn-info" type="button" value="View" /></td>
                                <td><input class="btn btn-danger" type="button" value="Remove" /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="row">
                <div class="table-responsive">
                    <table class="table table-striped">
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
                                <th>start</th>
                                <th>remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="VerticalALign Number">1</td>
                                <td class="VerticalALign Task"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Predecessor"><input class="form-control" type="number" /></td>
                                <td class="VerticalALign Who">
                                     <select class="fsSelect" data-width="100px">
                                     </select>
                                </td>
                                <td class="VerticalALign MoSCoW">
                                    <select class="fsSelect" data-width="100px">
                                        <option value="Must">Must</option>
                                        <option value="Could">Could</option>
                                        <option value="Should">Should</option>
                                        <option value="Won't">Won't</option>
                                    </select>
                                </td>
                                <td class="VerticalALign Plan"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Do"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Check"><textarea class="form-control"></textarea></td>
                                <td class="VerticalALign Act"><textarea class="form-control"></textarea></td>
                                <td class="VerticalALign Start"><input class="btn btn-success" type="button" value="Start" /></td>
                                <td class="VerticalALign Remove"><input class="btn btn-warning" type="button" value="Remove"/></td>
                            </tr>

                            <tr style="background-color: black; color: white;">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align: center;">00:00:00</td>
                                <td style="text-align: center;">00:00:00</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="css/jquery-select/js/jquery.select.js"></script>
        <script src="js/default.js"></script>
    </body>
</html>
