<?php
    require('menu.php');
    if (isset($_GET['p']) && $_GET['p'] == 'view'){
        echo '<div id=submenu>
        <a ';
        if (isset($_GET['sort']) && $_GET['sort'] == 'byid') echo 'class="select" ';
        echo 'href="index.php?p=view&sort=byid">По-умолчанию</a>
        <a ';
        if (isset($_GET['sort']) && $_GET['sort'] == 'firstname') echo 'class="select" ';
        echo 'href="index.php?p=view&sort=firstname">По фамилии</a>
        </div>';
    }
    require('db.php');
    $mysqli = connect();

    if(isset($_POST['firstname'])){
        $sql_insert = "INSERT INTO `notebook`(`firstname`, `name`, `lastname`, `gender`, `phone`, `email`, `date`, `comment`)
                       VALUES (
                       '".htmlspecialchars($_POST['firstname'])."',
                       '".htmlspecialchars($_POST['name'])."',
                       '".htmlspecialchars($_POST['lastname'])."',
                       '".htmlspecialchars($_POST['gender'])."',
                       '".htmlspecialchars($_POST['phone'])."',
                       '".htmlspecialchars($_POST['email'])."',
                       '".$_POST['date']."', 
                       '".htmlspecialchars($_POST['comment'])."')";
        mysqli_query($mysqli, $sql_insert);
        if (mysqli_errno($mysqli)) echo "Ошибка запроса".mysqli_error($mysqli);
    }

    $sql_count = "SELECT COUNT(*) FROM `notebook`";
    $res_count = mysqli_query($mysqli, $sql_count);
    $a = mysqli_fetch_row($res_count);
    $count = 4;
    $pages = ceil($a[0]/$count);
    if (!isset($_GET['page'])) $page = 0; else $page = $_GET['page']*$count; 
    
    if (isset($_GET['sort'])) {
        if ($_GET['sort'] == 'byid') $sql = "SELECT * FROM `notebook` ORDER BY `id`LIMIT ".$page.",".$count."";
        else $sql = "SELECT * FROM `notebook` ORDER BY `firstname`LIMIT ".$page.",".$count."";
    }else $sql = "SELECT * FROM `notebook` ORDER BY `id` DESC LIMIT ".$page.",".$count."";
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
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date</th>
                    <th scope="col">Comment</th>
                    </tr>
                </thead>
                <tbody>';
    while($array = mysqli_fetch_assoc($res)){
        $table.='<tr>
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
    if ($pages > 1){
        echo '<div class="container">';
        for ($i=0; $i<$pages; $i++){
            echo '<a href="index.php?p=view&sort=';
            if (isset($_GET['sort'])) echo $_GET['sort'];
            echo '&page='.$i.'">'.($i+1).'</a>';
        }
        echo '</div>';
    }
    mysqli_close($mysqli);
    require('footer.html');

?>