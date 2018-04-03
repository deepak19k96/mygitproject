<?php
$jsonData = json_decode(file_get_contents('https://serviceherd.com/users/servicesproviderformap'));
$jsonData=json_decode(json_encode($jsonData), True);
foreach($jsonData as $cate){
	if($cate['services']){
	foreach($cate['services'] as $services){
		if(($services['parent'] == 313) && (!empty($services['providers']))){
		$ser['id']=$services['id'];
		$ser['service']=$services['service'];
        $proser[]=$ser;		
		}
	  }
	}
}
echo "<pre>";
print_R($proser);
echo "</pre>";
?>