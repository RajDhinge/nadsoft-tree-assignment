<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nadsoft Tree</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <script src="./js/script.js"></script>
</head>
<body>
<h1>Nadsoft Tree</h1><hr>

<div class="container">
  <div id="start">
    <?php
      require_once './Model/Database.php';
      $db = new Database();
      $db->initialize();
      $db->categoryTree(1);
    ?>
  </div>

  <div id="wrapper">
    <div id="content"></div>
  </div>

  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Member</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Member</h4>
        </div>
        <div class="modal-body">
          <div>Parent</div>
          <div class="form-group">
            <select class="form-control" id="selname" name="selname">
              <option value="1">root</option>
              <?php
                $db->names();
                ?>
            </select>
          </div>
          <div>Name</div>
          <div class="mail">
            <input class="form-control" id="text1" type="text" name="text1"/>
            <p class="rq">*Enter alphabets only.</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-info" name="Save Changes" value="Submit" data-dismiss="modal" id="butsave"/>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
