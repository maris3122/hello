
<?php
error_reporting(E_ALL);
header('Content-Type:text/html; charset=utf-8');
$array1=[];
$name="";
if(isset($_POST['form'])){
$name = $_POST['form'];
 if($name == "all")
 {

    
    $array1 = array(
        0 => array(
            'number' => '1',
            'name' => 'pencil',
            'category' => 'pencils',
            'cost' => '38'
        ),
        1 => array(
            'number' => '2',
            'name' => 'pencil',
            'category' => 'pencils',
            'cost' => '69'
        ),
        2 => array(
            'number' => '3',
            'name' => 'pen',
            'category' => 'pens',
            'cost' => '382'
        ),
        3 => array(
            'number' => '4',
            'name' => 'pen',
            'category' => 'pens',
            'cost' => '169'
        ),
        4 => array(
            'number' => '5',
            'name' => 'pen',
            'category' => 'pens',
            'cost' => '318'
        ),
        5 => array(
            'number' => '6',
            'name' => 'pen',
            'category' => 'pens',
            'cost' => '691'
        ),
        6 => array(
            'number' => '7',
            'name' => 'rull',
            'category' => 'rulls',
            'cost' => '28'
        ),
        7 => array(
            'number' => '8',
            'name' => 'rull',
            'category' => 'rulls',
            'cost' => '62'
        ),
        8 => array(
            'number' => '9',
            'name' => 'rull',
            'category' => 'rulls',
            'cost' => '12'
        ),
      
    );
    
 }
 if($name == "rull")
 {
   $_POST['all'] = '';
    $array1 = array(
       
      
        0 => array(
            'number' => '1',
            'name' => 'rull',
            'category' => 'rulls',
            'cost' => '28'
        ),
        1 => array(
            'number' => '2',
            'name' => 'rull',
            'category' => 'rulls',
            'cost' => '62'
        ),
        2 => array(
            'number' => '3',
            'name' => 'rull',
            'category' => 'rulls',
            'cost' => '12'
        ),
      
    );
 }
 if($name == "pencil")
 {
    
    $array1 = array(
        0 => array(
            'number' => '1',
            'name' => 'pencil',
            'category' => 'pencils',
            'cost' => '38'
        ),
        1 => array(
            'number' => '2',
            'name' => 'pencil',
            'category' => 'pencils',
            'cost' => '69'
        ),

    );
 }
if($name == "pen")
 {
    
    $array1 = array(
    
      
        0 => array(
            'number' => '1',
            'name' => 'pen',
            'category' => 'pens',
            'cost' => '382'
        ),
        1 => array(
            'number' => '2',
            'name' => 'pen',
            'category' => 'pens',
            'cost' => '169'
        ),
        2 => array(
            'number' => '3',
            'name' => 'pen',
            'category' => 'pens',
            'cost' => '318'
        ),
        3 => array(
            'number' => '4',
            'name' => 'pen',
            'category' => 'pens',
            'cost' => '691'
        ),
       
      
    );
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
    <form action="lab2.php" method="POST" > 
    <select name="form">
        <option value="all">Все</option>
        <option value="pencil">Карандаши(2)</option>
        <option value="pen">Ручки(4)</option>
        <option value="rull">Ластики(3)</option>
    </select>
    <button value="bat">Показать</button>
    </form>
    <table class="tab">
        <tr>
        <td>№</td>
        <td>Наименование</td>
        <td>Категория </td>
        <td>Цена</td>
        </tr>
        <?php
        
        foreach($array1 as $ar)
      
            {
                echo "<tr>";
            echo "<td>" . $ar['number'] . "</td>";
            echo "<td>" . $ar['name'] . "</td>";
            echo "<td>" . $ar['category'] . "</td>";
            echo "<td>" . $ar['cost'] . "</td>";
            echo "</tr>";
            }
            
        ?>
    </table>
</body>
</html>