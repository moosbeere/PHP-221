<?php
    require('menu.php');
    if (isset($_GET['p']) && $_GET['p'] == 'view'){
        echo '<div id=submenu>
        <a href="index.php?p=view&sort=byid" ';
        if (isset($_GET['sort']) && $_GET['sort'] == 'byid') echo 'class ="select"';
        echo '>По-умолчанию</a>
        <a href="index.php?p=view&sort=firstname" ';
        if (isset($_GET['sort']) && $_GET['sort'] == 'firstname') echo 'class ="select"';
        echo '>По фамилии</a>
        </div>';
    }
    require ('db.php');
    $mysqli = connect();

    if (isset($_POST['firstname'])){
        $sql_insert = "INSERT INTO `notebook`(`firstname`,`name`, `lastname`, `gender`, `phone`, `email`, `date`, `comment`) 
        VALUES ('".htmlspecialchars($_POST['firstname'])."',
                '".htmlspecialchars($_POST['name'])."',
                '".htmlspecialchars($_POST['lastname'])."',
                '".htmlspecialchars($_POST['gender'])."',
                '".htmlspecialchars($_POST['phone'])."',
                '".htmlspecialchars($_POST['email'])."',
                '".$_POST['date']."',
                '".htmlspecialchars($_POST['comment'])."')";
    }

    if (isset($_GET['sort'])){
        if ($_GET['sort'] == 'byid'){
            $sql = "SELECT * FROM `notebook` ORDER BY `id`";
        }else $sql = "SELECT * FROM `notebook` ORDER BY `firstname`";
        }
    else $sql = "SELECT * FROM `notebook`";
    $res = mysqli_query($mysqli, $sql);
    // var_dump(mysqli_fetch_assoc($res));
    $table = '<table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Name</th>
      <th scope="col">Lastname</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
      <th scope="col">Comment</th>
    </tr>
  </thead>
  <tbody>';
  while($array = mysqli_fetch_assoc($res)){
    $table.= '<tr>
    <th scope="row">'.$array['id'].'</th>
    <td>'.$array['firstname'].'</td>
    <td>'.$array['name'].'</td>
    <td>'.$array['lastname'].'</td>
    <td>'.$array['gender'].'</td>
    <td>'.$array['phone'].'</td>
    <td>'.$array['email'].'</td>
    <td>'.$array['date'].'</td>
    <td>'.$array['comment'].'</td>
  </tr>';
  }
    $table.='</tbody></table>';
    echo $table;
    mysqli_close($mysqli);
    require('footer.php');


?>