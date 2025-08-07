<?php
class allClass{
/////////////////////////////////////////
function _get_sequence_count($conn, $counterId){
	$count=mysqli_fetch_array(mysqli_query($conn,"SELECT counterValue FROM SETUP_COUNTER_TAB WHERE counterId = '$counterId' FOR UPDATE"));
	 $num=$count[0]+1;
	 mysqli_query($conn,"UPDATE `SETUP_COUNTER_TAB` SET `counterValue` = '$num' WHERE counterId = '$counterId'")or die (mysqli_error($conn));
	 if ($num<10){$no='00'.$num;}elseif($num>=10 && $num<100){$no='0'.$num;}else{$no=$num;}
	 $response = ["no" => $no];
	 return json_encode([$response]);
}

}//end of class
$callclass=new allClass();

