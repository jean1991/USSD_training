<?php
// kplc staff definition
//$leo_name="Leo";
//$leo_taff_id=1234;
//echo $leo_name." ".$leo_taff_id;
$leo=["name"=>"LEO","Staff_id"=>12345];
$Masharia=["name"=>"Macharia","Staff_id"=>12346];
//print_r($leo);
//print_r($Masharia);
$k=$leo;
$b=$Masharia;
$staff= array($k,$b);
print_r($staff);
echo "</br>";
echo "function to echo sstaff"."</br>";

// function to echo sstaff
/**
 *
 */
showStaff();
function showStaff(){
    $leo=["name"=>"LEO","Staff_id"=>12345];
    $Masharia=["name"=>"Macharia","Staff_id"=>12346];
    $Masharia=["name"=>"Machariad","Staff_id"=>12342];
//print_r($leo);
//print_r($Masharia);
    $k=$leo;
    $b=$Masharia;
    $staff= array($k,$b);
    $No=count($staff);
    print_r($staff);
    echo $No;
    if ($No<2){

        echo "No vacancy";
    }else{

        echo "Vacancy";
    }
}
$sms=" Ramogi Hi, please send me my favorite song and play for me, zahara";
$arr= explode(' ',trim($sms));
//print_r($arr);
//$prefix=substr(trim($sms),0,4);

switch($arr){
    case "Ramogi":
        echo "Message for RAMAGI";
    case "Citezen":
        echo "Message for CITEZEN";
    default:
        echo "confuse person";
        break;

}

?>