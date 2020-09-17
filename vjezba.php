<?php
/*
$hrvatska = array(
    'grad' => array('sisak' => array('zabno', 'vurot'), 'zagreb' => array('eg', 'egfg'), 'osijek' => array('ggse')),
    'sela' => array('odra', 'zabno', 'vurot'),
    'kvart' => array('galdovo', 'zelenjak', 'zeljezara')
);

function myErr($s){
    echo '<pre>';
    print_r($s);
     echo'<pre>';
}


myErr($hrvatska);






$ocjene = array('INDF' => 3, 'MAT' => 4, 'IWA' => 2,
 'MENA' => 3, 'ORG' => 4, 'POD' => 5, 'SIS' => 2);

 foreach($ocjene as $p => $o){
     echo $p . " = " . $o . '<br>'; 
 }

 function prosjek($ocjene)
 {
     $count = 0;
     $count_suma = 0;
     foreach($ocjene as $p => $o)
     {
         if(strlen($p) == 4){
         $count += $o;
         $count_suma++;

         echo $count / $count_suma;
     }
     else{
        echo "Not";
         }
     }

 prosjek($ocjene);

}

/***************************************** */
?>

<form method="post" action="">
    <input type="text" name="broj1" href="vjezba.php?broj1=1&broj2=">
    <input type="text" name="broj2">
    <button type="submit" name="enter">Count</button>
</form>

<?php

if(isset($_POST['enter']))
{

session_start();
$broj1 = $_POST['broj1'];
$broj2 = $_POST['broj2'];

$broj1 = $_SESSION['broj1'];
$broj2 = $_SESSION['broj2'];

if($broj1 == $broj2){
    echo "Brojevi su jednaki";
}
elseif($broj2 < $broj1){
    
    $count = 0;
    while($count < $broj2){
        echo $broj1;
        $count++;
    }
}
else{
    function zbrojiBrojeve(){
        
        for($zbroj = $broj1; $zbroj < $broj2; $zbroj++){

        return $zbroj;
        }
    }

    zbrojiBrojeve();
}

}

$korime = $_POST['korime'];
$lozinka = $_POST['lozinka'];

function login(){

    if(!isset($korime) || $korime == NULL){
        return FALSE;
    }
    elseif(!isset($lozinka) || $lozinka = NULL){
        return FALSE;
    }
    else{
        return TRUE;
    }
}

if(login() == TRUE){
    echo "Korisnik postoji";
    $_SESSION['nepamtim'] = 1;
}
else{
    echo "Korisnik NE postoji";
    $_SESSION['nepamtim'] += 1;
}

/* */
$veza = new mysqli("localhost", "korisnik123", "123456", "my_db");

$niz = array(1,2,3,4);

function produkt(){
    global $niz;

    $counter = 0;
    foreach($niz as $broj){
        $counter++;
        $counter *= $broj;
        echo $counter;
    }
}

produkt($niz); 

