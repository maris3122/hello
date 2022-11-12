<?php
error_reporting(E_ALL);
header('Content-Type:text/html; charset=utf-8');
$array1=[];
$dbhandle = mysqli_connect( 
    'localhost',  			/* Хост, к которому подключаемся */ 
    'root',       			/* Имя пользователя */ 
    'mysql',   	 		/* Используемый пароль */ 
    'web'); 
    if (!$dbhandle) { 
        printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error()); 
        exit; 
     } 	

$query = '';
$name="";
if(isset($_POST['form'])){
$name = $_POST['form'];
 if($name == "all")
 {
    $query = "SELECT * FROM mashins";
	
 }
 if($name == "red")
 {
    $query = "SELECT * FROM mashins WHERE Color = 'red'";
 }
 if($name == "white")
 {
    $query = "SELECT * FROM mashins WHERE Color = 'white'";
 }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Категории:
    <form action="lab3.php" method="POST" > 
    <select name="form">
        Цвет
        <option value="all">Все</option>
        <option value="white">Белые</option>
        <option value="red">Красные</option>
        
    </select>
    <button value="bat">Показать</button>
    </form>
    <table class="tab">
        <tr>
        <td>ID</td>
        <td>модель</td>
        <td>Цвет</td>
        <td>Цена</td>
        </tr>
        <?php
        
        if ($result = mysqli_query($dbhandle, $query)) { 

            while( $row = mysqli_fetch_assoc($result) ){ 
                $id = $row['ID'];
                $Model = $row['Model'];
                $color = $row['Color'];
                $cent = $row['Cent'];
              
                echo "<tr>";
                echo "<td>" . $id . "</td>";
                echo "<td>" . $Model . "</td>";
                echo "<td>" .$color  . "</td>";
                echo "<td>" . $cent . "</td>";
                echo "</tr>";
           
            } 
            
        }
            
        ?>
     </table>
</body>
</html>