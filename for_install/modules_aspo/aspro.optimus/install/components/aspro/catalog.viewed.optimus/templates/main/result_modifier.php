<?
$count=count($arResult["ITEMS"]);
$diff=8-$count;
if($count<8){
	for($i=1;$i<=$diff;$i++){
		$arResult["ITEMS"][]='';
	}
}
?>