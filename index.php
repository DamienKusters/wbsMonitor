<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/default.css" rel="stylesheet">
        <link rel="icon"href="img/logo.png" type="image/png" />
    </head>
    <body>
        <div class="container-fluid">
            <div class="row HeaderRow">
                <div class="col-md-5 col-xs-12">
                    <img class="img-responsive logo" src="img/logo.png"></a>
                </div>
                <div class="col-md-7 col-xs-0"></div>
            </div>
        </div>
        <div style="height: 3px; background-color: #4f4f4f;"></div>
        <div style="height: 3px; background-color: #858585;"></div>
        <div style="height: 3px; background-color: #b4b4b4;"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>nr.</th>
                                <th>Task</th>
                                <th>Predecessor</th>
                                <th>Who?</th>
                                <th>MoSCoW</th>
                                <th>Plan (Min.)</th>
                                <th>Do (Min.)</th>
                                <th>Check</th>
                                <th>Act</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="VerticalALign Number">1</td>
                                <td class="VerticalALign Task"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Predecessor"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Who"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign MoSCoW">
                                    <div class="dropdown">
                                        <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">MoSCoW
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Must</a></li>
                                            <li><a href="#">Could</a></li>
                                            <li><a href="#">Should</a></li>
                                            <li><a href="#">Won't</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td class="VerticalALign Plan"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Do"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Check"><textarea class="form-control"></textarea></td>
                                <td class="VerticalALign Act"><textarea class="form-control"></textarea></td>
                                <td class="VerticalALign Start"><input class="btn btn-success" type="button" value="Start" /></td>
                                <td class="VerticalALign Remove"><input class="btn btn-warning" type="button" value="Taak verwijderen"/></td>
                            </tr>
                            <tr>
                                <td class="VerticalALign Number">2</td>
                                <td class="VerticalALign Task"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Predecessor"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Who"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign MoSCoW">
                                    <div class="dropdown">
                                        <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">MoSCoW
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Must</a></li>
                                            <li><a href="#">Could</a></li>
                                            <li><a href="#">Should</a></li>
                                            <li><a href="#">Won't</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td class="VerticalALign Plan"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Do"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Check"><textarea class="form-control"></textarea></td>
                                <td class="VerticalALign Act"><textarea class="form-control"></textarea></td>
                                <td class="VerticalALign Start"><input class="btn btn-success" type="button" value="Start" /></td>
                                <td class="VerticalALign Remove"><input class="btn btn-warning" type="button" value="Taak verwijderen"/></td>
                            </tr>
                            <tr>
                                <td class="VerticalALign Number">3</td>
                                <td class="VerticalALign Task"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Predecessor"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Who"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign MoSCoW">
                                    <div class="dropdown">
                                        <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">MoSCoW
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Must</a></li>
                                            <li><a href="#">Could</a></li>
                                            <li><a href="#">Should</a></li>
                                            <li><a href="#">Won't</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td class="VerticalALign Plan"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Do"><input class="form-control" type="text" /></td>
                                <td class="VerticalALign Check"><textarea class="form-control"></textarea></td>
                                <td class="VerticalALign Act"><textarea class="form-control"></textarea></td>
                                <td class="VerticalALign Start"><input class="btn btn-success" type="button" value="Start" /></td>
                                <td class="VerticalALign Remove"><input class="btn btn-warning" type="button" value="Taak verwijderen"/></td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
