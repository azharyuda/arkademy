<!DOCTYPE html>
<?php
  $link=mysqli_connect("localhost","root","","dbarka") or die (mysqli_error());
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="dist/bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="dist/home.css" />
  </head>
  <body>
  <div class="container-fluid">
    <div class="row">
      <main role="main" class="col-md-9 ml-sm-auto col-lg-12 px-4">
      <br />
        <div class="card">
          <div class="card-body">
            <div class="form-group">
              <form action ="" method ="POST">
                <input type="text" class="form-control" placeholder="Masukkan nama Programmer" name="_prog_baru" /><br />
                <button type="submit" class="btn btn-success" name="insert_programmer">Submit!</button>
              </form>
            </div>
          </div>
        </div>
        <br />
        <?php
        $ambil = $link->query("SELECT users.id AS id_user, users.name, skills.id, skills.skill_name, skills.user_id
        FROM users LEFT JOIN skills ON users.id = skills.user_id") or die (mysqli_error($link));
        while($data = $ambil->fetch_array())
        {
         ?>
        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <th colspan="2">
                <CENTER>
                  Nama Programmer dan skill
                </CENTER>
              </th>
            </tr>
            <tr>
              <td hidden><?php echo $data['user_id']; ?></td>
              <td><?php echo $data['name']; ?></td>
              <td rowspan="2">
                <form action ="" method ="POST">
                  <input type="text" class="form-control" placeholder="Masukkan Skill Baru" name="_skill_baru" /><br />
                  <input type="text" class="form-control" placeholder="User ID" name="id" value="<?php echo $data['id_user']; ?>" style = "display: none;"/><br />
                  <button type="submit" class="btn btn-success" name="insert_skill">Submit!</button>
                </form>
              </td>
              </tr>
              <tr>
              <td>
                <?php echo $data['skill_name'];
                ?>
              </td>
            </tr>
          <?php } ?>
          </table>
          </div>
        </main>
      </div>
    </div>
  </body>

<script src="dist/bootstrap-4.3.1-dist/js/jquery-3.4.1.min.js"></script>
<script src="dist/bootstrap-4.3.1-dist/js/bootstrap.js"></script>

<?php
if(isset($_POST["insert_programmer"])){
  $prog = $_POST['_prog_baru'];
  $sql = $link->query("INSERT INTO users VALUES(
    '',
    '$prog'
  )") or die (mysqli_error($link));
}

elseif(isset($_POST['insert_skill'])){
  $skil = $_POST['_skill_baru'];
  $id = $_POST['id'];
  $sql = $link->query("INSERT INTO skills VALUES(
    '',
    '$skil',
    '$id'
  )");
  echo "<meta http-equiv='refresh' content='0' />";
}
?>
