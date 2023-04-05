<?php
    include('menu.php');
    if (isset($_GET['p']) && $_GET['p'] == 'view'){
        echo '<div id="submenu">
              <a ';
              if (isset($_GET['sort']) && $_GET['sort'] == 'byid') echo 'class="select"';
              echo 'href="index.php?p=view&sort=byid">По-умолчанию</a>
              <a ';
              if (isset($_GET['sort']) && $_GET['sort'] == 'firstname') echo 'class="select"';
              echo 'href="index.php?p=view&sort=firstname">По-фамилии</a>
              </div>';
    }

    require('db.php');
    $mysqli = connect();

    if (isset($_POST['firstname'])){
        $sql_insert = "INSERT INTO `notebook`(`firstname`, `name`, `lastname`, `gender`,`adres`, `phone`, `email`, `date`, `comment`)
                       VALUES ('".htmlspecialchars($_POST['firstname'])."',
                       '".htmlspecialchars($_POST['name'])."',
                       '".htmlspecialchars($_POST['lastname'])."',
                       '".$_POST['gender']."',
                       '".htmlspecialchars($_POST['location'])."',
                       '".htmlspecialchars($_POST['phone'])."',
                       '".htmlspecialchars($_POST['email'])."',
                       '".$_POST['date']."',
                       '".htmlspecialchars($_POST['comment'])."')";
        mysqli_query($mysqli, $sql_insert);
        if (mysqli_errno($mysqli)) echo "Ошибка запроса".mysqli_error($mysqli);
    }

    $sql_count = "SELECT COUNT(*) FROM `notebook`";
    $res_count = mysqli_query($mysqli, $sql_count);
    $count_row = mysqli_fetch_row($res_count);
    $count_write = 2;
    $pages = $count_row[0]/$count_write;

    if (!isset($_GET['page'])) $_GET['page'] = 0;
    $page = $_GET['page']*$count_write;

    if (isset($_GET['sort'])){
        if ($_GET['sort'] == 'byid') $sql = "SELECT * FROM `notebook` ORDER BY `id` LIMIT ".$page.",".$count_write."";
        else $sql = "SELECT * FROM `notebook` ORDER BY `firstname`LIMIT ".$page.",".$count_write."";
    }else $sql = "SELECT * FROM `notebook`LIMIT ".$page.",".$count_write."";

    $res = mysqli_query($mysqli, $sql);
    if (mysqli_errno($mysqli)) echo "Ошибка запроса".mysqli_error($mysqli);
    $table = '<table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Firstname</th>
                <th scope="col">Name</th>
                <th scope="col">Lastname</th>
                <th scope="col">Gender</th>
                <th scope="col">Adres</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Date</th>
                <th scope="col">Comment</th>
                </tr>
            </thead>
            <tbody>';
    while($arr = mysqli_fetch_assoc($res)){
        $table .= '<tr>
      <th scope="row">'.$arr['id'].'</th>
      <td>'.$arr['firstname'].'</td>
      <td>'.$arr['name'].'</td>
      <td>'.$arr['lastname'].'</td>
      <td>'.$arr['gender'].'</td>
      <td>'.$arr['adres'].'</td>
      <td>'.$arr['phone'].'</td>
      <td>'.$arr['email'].'</td>
      <td>'.$arr['date'].'</td>
      <td>'.$arr['comment'].'</td>
    </tr>';
    }
    $table .= '</tbody></table>';
    echo $table;
    for ($i = 0; $i < $pages; $i++){
        echo '<a href="index.php?page='.$i.'">'.($i+1).'</a>';
    }
    include('footer.php');
?>