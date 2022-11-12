
<?php
error_reporting(E_ALL);
header('Content-Type:text/html; charset=utf-8');
$array1=[];
 if(!isset($_POST["all"]))
 {

    $_POST['rull'] = '';
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
 if(!isset($_POST["rull"]))
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
 if(!isset($_POST["pencil"]))
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
if(!isset($_POST["pen"]))
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
?>