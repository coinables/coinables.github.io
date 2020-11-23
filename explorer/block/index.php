<?php

$getThis = $_GET["q"];

$urlInfo = "https://sochain.com/api/v2/get_block/BTC/".$getThis;
$fgc = json_decode(file_get_contents($urlInfo), true);
if($fgc){
	//var_dump($fgc);
	$api = $fgc["data"];
	$blockhash = $api["blockhash"];
	$time = $api["time"];
	$confirmations = $api["confirmations"];
	$is_orphan = $api["is_orphan"];
	$merkle = $api["merkleroot"];
	$next_blockhash = $api["next_blockhash"];
	$previous_blockhash = $api["previous_blockhash"];
	$size = $api["size"];
} else {
	die("error");
}

/*
array(2) { 
["status"]=> string(7) "success" 
["data"]=> array(12) { 
	["network"]=> string(3) "BTC" 
	["blockhash"]=> string(64) "000000000000000000075659ac9b1a6c34214c62ebf6e57aec640181977774dd" 
	["block_no"]=> int(658272) 
	["mining_difficulty"]=> string(17) "17596801059571.43" 
	["time"]=> int(1606107825) 
	["confirmations"]=> int(2) 
	["is_orphan"]=> bool(false) 
	["txs"]=> array(2354) { 
		[0]=> string(64) "68a760635f74001c77668ff2280a140931a6813a6391af46dedc0f5ab90f4b7d" 
		[1]=> string(64) "b986a46f55c1d0f8abb2224f20d9eb63b594715e905d097f7894757bbfa3d60e" 
		[2]=> string(64) "786e0af0ef711025662d57f7c8cd6cb8a2b48e316ed190b5c3c5ebc1268c96c5" 
		} 
	["merkleroot"]=> string(64) "3e2dfe9d52124e97782d60bf1ade21b32449c6ad886b9991a615d919a25f65c4" 
	["previous_blockhash"]=> string(64) "0000000000000000000ecaf99b4aef6f1394a080de410d3250fd18814cf77e87" 
	["next_blockhash"]=> string(64) "0000000000000000000401c643886b4c675b70c9d1557d7116a0612e14070edd" 
	["size"]=> int(1382793) 
	} 
}
Tiny Explorer
Search
Block 658272
*/
 
function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'K', 'M', 'G', 'T');   

    return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
}


?>
<!DOCTYPE html>
<html>
<head>
<style>
html, body{
	font-family: "Courier New", "Times New Roman", serif;
}
</style>
</head>
<body>
<h1>Tiny Explorer</h1>
<input type="text"><button>Search</button>
<h2>Block  <?php echo $getThis; ?></h2>
<a href="">Previous Block</a> | <a href="">Next Block</a> 
<div>
<b>Blockhash:</b> <?php echo $blockhash; ?><br>
<b>Is Orphan:</b> <?php echo $is_orphan ? "True" : "False"; ?><br>
<b>Time:</b> <?php echo date('Y-m-d h:i:s',$time); ?><br>
<b>Size:</b> <?php echo formatBytes($size); ?>
<h2>Transactions: </h2>
<?php
$txslen = count($api["txs"]);
for($i=0;$i<$txslen;$i++){
	echo '<a href="../tx/?q='.$api["txs"][$i].'">'.$api["txs"][$i].'</a><br>';
}

?>
</div>

</div>
</body>
</html>