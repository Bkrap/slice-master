<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">
    </head>
        <body style="background-color: #DCDCDC;">
        <div class="container w-50">
        <form action="" method="post" class="text-center border border-light p-5" style="font-size: 30px;">
            <label for="town" >City:</label>
                <input type="text" name="town" placeholder="e.g. Martinska Ves" class="form-control mb-4"><br>
            <label for="street_full">Address:</label>
                <input type="text" name="street_full" placeholder="e.g. Tišina erdedska 10" class="form-control mb-4"><br>
            <label for="state">Country:</label>
                <input type="text" name="state" placeholder="e.g. Croatia" class="form-control mb-4"><br>
                    <button type="submit" name="btn" class="btn btn-info btn-block my-4" >Submit</button>
        </form>

<?php

if(isset($_POST['btn'])){


   function get_name(){
        $town = $_POST['town'];
        $street_full = $_POST['street_full'];
        $state = $_POST['state'];


        if(strpos($town, ' ')){
            $town = str_replace(" ", "+", $town);
        }
        if(strpos($state, ' ')){
            $state = str_replace(" ", "+", $state);
        }
        
            $url_street = str_replace(" ", "+", $street_full);

            return $town . '+' . $url_street . ',+' . $state;
    }
    
}



function get_lat(){

    $street = get_name();

    $json_string = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $street . '&key=AIzaSyCikysarNLm6L-wRtg0CakgJAnxizWAnho';

    $json = file_get_contents($json_string);
    
    $array = json_decode($json, true);

if (is_array($array) || is_object($array) && count($array) > 0)

    {

            foreach($array as $k => $v){
                foreach($v as $k_ad => $v_ad){
                    return $v_ad['geometry']['location']['lat'];

                }
            }

    }

}



function get_lng(){

    $street = get_name();
 
    $json_string = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $street . '&key=AIzaSyCikysarNLm6L-wRtg0CakgJAnxizWAnho';

    $json = file_get_contents($json_string);
    
    $array = json_decode($json, true);

if (is_array($array) || is_object($array) && count($array) > 0)

{

foreach($array as $k => $v){
    foreach($v as $k_ad => $v_ad){
       return $v_ad['geometry']['location']['lng'];

    }
}

}

}

error_reporting(0);
$lat = get_lat();
$lng = get_lng(); ?>

<div class="column" id="coo">
    <div class="text-center border border-light p-5 article__title"><?php
        if(get_lat() > 0 && get_lng() > 0){
            echo '<h3>Coordinates:</h3><br>';
            }
                //echo get_name() . '<br>'; //name for geocode
                ?><h1><?php echo $lat . '<br>' ; ?> </h1> 
                <h1><?php echo $lng . '<br>' ; ?> </h1> 
                </div></div>



<?php
function myErr($s){
    echo '<pre>';
    print_r($s);
    echo '</pre>';
}
?>
</body>
</html>