<?php

$urlInfo = "https://sochain.com/api/v2/get_info/BTC";
$fgc = json_decode(file_get_contents($urlInfo), true);

$difficulty = $fgc["data"]["mining_difficulty"];
$hashrate = $fgc["data"]["hashrate"];
$unconfirmed = $fgc["data"]["unconfirmed_txs"];
$blockheight = $fgc["data"]["blocks"];
$price = $fgc["data"]["price"];

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
<h2>Blocks:</h2>
<div>
<table border="1">
<tr><td><b>Height</b></td><td><b>Blockhash</b></td></tr>
<?php
$bh = $blockheight;
for($i=0;$i<10;$i++){
	$blockURL = "https://sochain.com/api/v2/get_blockhash/BTC/".$bh;
	$fgcB = json_decode(file_get_contents($blockURL), true);
	echo '<tr><td><a href="block/?q='.$fgcB["data"]["block_no"].'">'.$fgcB["data"]["block_no"].'</td><td>'.$fgcB["data"]["blockhash"].'</td></tr>';
	$bh--;
}

?>
</table>
</div>
<h2>Data:</h2>
<div>
<b>Difficulty: </b><?php echo $difficulty; ?><br>
<b>Hashrate: </b><?php echo $hashrate; ?><br>
<b>Unconfirmed Txs: </b><?php echo $unconfirmed; ?><br>
<b>Blockheight: </b><?php echo $blockheight; ?><br>
<b>Price USD: </b><?php echo $price; ?><br>
</div>
</body>
</html>