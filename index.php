<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-select-1.12.2/dist/css/bootstrap-select.min.css" rel="stylesheet">
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
          <div class="col-md-7 col-xs-0"></div>
      </div>
  </div>
  <div style="height: 3px; background-color: #4f4f4f;"></div>
  <div style="height: 3px; background-color: #858585;"></div>
  <div style="height: 3px; background-color: #b4b4b4;"></div>

  <!-- Projects Table -->
    <div class="col-md-12">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Time estimated</th>
            <th>Time spent</th>
            <th>Date added</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>0</th>
            <th>test</th>
            <th>00:00:00</th>
            <th>00:00:00</th>
            <th>00-00-00</th>
            <th><input class="btn btn-info" type="button" value="View" /> <input class="btn btn-warning" type="button" value="Remove" /></th>
          </tr>
        </tbody>
      </table>
    <div>
    <br /><br /><br />

      <div class="container-fluid">
        <div class="row">
        <div class="table-responsive">
        <table class="table table-striped">
            <thead>
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
                <tr>
                    <td class="VerticalALign Number">1</td>
                    <td class="VerticalALign Task"><input class="form-control" type="text" /></td>
                    <td class="VerticalALign Predecessor"><input class="form-control" type="text" /></td>
                    <td class="VerticalALign Who"><input class="form-control" type="text" /></td>
                    <td class="VerticalALign MoSCoW">
                        <select class="selectpicker" data-width="100px">
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
                <tr>
                    <td class="VerticalALign Number">2</td>
                    <td class="VerticalALign Task"><input class="form-control" type="text" /></td>
                    <td class="VerticalALign Predecessor"><input class="form-control" type="text" /></td>
                    <td class="VerticalALign Who"><input class="form-control" type="text" /></td>
                    <td class="VerticalALign MoSCoW">
                        <select class="selectpicker" data-width="100px">
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
                <tr>
                    <td class="VerticalALign Number">3</td>
                    <td class="VerticalALign Task"><input class="form-control" type="text" /></td>
                    <td class="VerticalALign Predecessor"><input class="form-control" type="text" /></td>
                    <td class="VerticalALign Who"><input class="form-control" type="text" /></td>
                    <td class="VerticalALign MoSCoW">
                        <select class="selectpicker" data-width="100px">
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
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="css/bootstrap-select-1.12.2/dist/js/bootstrap-select.min.js"></script>
  <script src="js/default.js"></script>
</body>
</html>
