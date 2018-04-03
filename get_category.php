<?php
$jsonData = json_decode(file_get_contents('https://serviceherd.com/users/servicesproviderformap'));
$jsonData=json_decode(json_encode($jsonData), True);
foreach($jsonData as $cate){
	if($cate['services']){
	foreach($cate['services'] as $services){
		if(!empty($services['providers'])){
		 $cat['name']=$cate['category'];	
		 $cat['id']=$services['parent'];
         $procat[]=	$cat;	 
		}
	  }
	}
}

echo "<pre>";
print_R(array_unique($procat));
echo "</pre>";
?>