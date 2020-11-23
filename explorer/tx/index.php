<?php

$getThis = $_GET["q"];

$urlInfo = "https://sochain.com/api/v2/get_tx/BTC/".$getThis;
$fgc = json_decode(file_get_contents($urlInfo), true);
if($fgc){
	//var_dump($fgc);
	$api = $fgc["data"];
	$txid = $api["txid"];
	$blockhash = $api["blockhash"];
	$time = $api["time"];
	$confirmations = $api["confirmations"];
	
	$urlInfo = "https://sochain.com/api/v2/get_info/BTC";
	$fgc2 = json_decode(file_get_contents($urlInfo), true);
	$price = $fgc2["data"]["price"];
	
} else {
	die("error");
}

/*
array(2) { 
["status"]=> string(7) "success" 
["data"]=> array(11) { 
	["network"]=> string(3) "BTC" 
	["txid"]=> string(64) "69146a5255dc31056b705d2e238522f00872ffedf35eae6a6a4da405ffd6dcc3" 
	["blockhash"]=> string(64) "000000000000000000059f8d05533459131bf9d1289855cc3d92ca7139c90ea1" 
	["confirmations"]=> int(9) 
	["time"]=> int(1606104987) 
	["inputs"]=> array(2) { 
		[0]=> array(7) { 
			["input_no"]=> int(0) 
			["value"]=> string(10) "0.02497158" 
			["address"]=> string(34) "37sD4TXVg8QUrtZNR1Ric2Z4y1EmZL1jWg" 
			["type"]=> string(10) "scripthash" 
			["script"]=> string(44) "00144202698f35a0a5f9934064ebd9929011927799ab" 
			["witness"]=> array(2) { 
				[0]=> string(142) "30440220028637f3144faac80a9eb407edcbcbeaeb945fd60165f162e646b55ecb307f6d02207ad5dd2831e9574fd3802bee524170edd5121c83e564a00b5510e920672184b301" 
				[1]=> string(66) "03709ad442cc44f527f78ae879063883eb7a89f83c79fb6a2f8578ed05335d335f" 
				} 
			["from_output"]=> array(2) { 
				["txid"]=> string(64) "55c0090ce6eb95bba7bb2c78f43ad54351ecfe7e45a62378f30ccf59b8fb46c7" 
				["output_no"]=> int(14) 
				} 
			} 
		[1]=> array(7) { 
			["input_no"]=> int(1) 
			["value"]=> string(10) "0.02497366" 
			["address"]=> string(34) "32R7ETj8bYkMGpL3PhBhnvJS7rvyGQqk7V" 
			["type"]=> string(10) "scripthash" 
			["script"]=> string(44) "0014e31f5b9089e4d6e3b152c1d174bbf25319f65e94" 
			["witness"]=> array(2) { 
				[0]=> string(142) "304402204955ec1851af7193774b9533c1278423a931521f8b0e88f8b78acc393bb5cecb022022ab446c0b71af02227bd0d05fff041e812adf76c300738f089a58f090a35f7f01" 
				[1]=> string(66) "039bbcb56e5f0fe9610de727650f4936d1a3864b52b8ab210414c97317d1fdedb2" 
				} 
			["from_output"]=> array(2) { 
				["txid"]=> string(64) "676ca7af1e8efe5ff29c32925b586728389aadb3440dd687ae093f1f5c43db3d" 
				["output_no"]=> int(1) 
				} 
			} 
		} 
	["outputs"]=> array(2) { 
		[0]=> array(5) { 
			["output_no"]=> int(0) 
			["value"]=> string(10) "0.00958081" 
			["address"]=> string(34) "165KBk1JC2dbZYvaFdNAuhjqaYKNvj3wLM" 
			["type"]=> string(10) "pubkeyhash" 
			["script"]=> string(85) "OP_DUP OP_HASH160 37a97916d4c4f394d6bb22da1a2cc62c7e9f2a4c OP_EQUALVERIFY OP_CHECKSIG" 
			} 
		[1]=> array(5) { 
			["output_no"]=> int(1) 
			["value"]=> string(10) "0.04005123" 
			["address"]=> string(34) "34Kce2LrbM1aWja4AWMCxjperXSLZgCyqC" 
			["type"]=> string(10) "scripthash" 
			["script"]=> string(60) "OP_HASH160 1cdc34785b8a55f846a34d553c1bb1e30724a0b1 OP_EQUAL" 
			} 
		} 
	["tx_hex"]=> string(840) "02000000000102c746fbb859cf0cf37823a6457efeec5143d53af4782cbba7bb95ebe60c09c0550e000000171600144202698f35a0a5f9934064ebd9929011927799abffffffff3ddb435c1f3f09ae87d60d44b3ad9a382867585b92329cf25ffe8e1eafa76c670100000017160014e31f5b9089e4d6e3b152c1d174bbf25319f65e94ffffffff02819e0e00000000001976a91437a97916d4c4f394d6bb22da1a2cc62c7e9f2a4c88ac031d3d000000000017a9141cdc34785b8a55f846a34d553c1bb1e30724a0b187024730440220028637f3144faac80a9eb407edcbcbeaeb945fd60165f162e646b55ecb307f6d02207ad5dd2831e9574fd3802bee524170edd5121c83e564a00b5510e920672184b3012103709ad442cc44f527f78ae879063883eb7a89f83c79fb6a2f8578ed05335d335f0247304402204955ec1851af7193774b9533c1278423a931521f8b0e88f8b78acc393bb5cecb022022ab446c0b71af02227bd0d05fff041e812adf76c300738f089a58f090a35f7f0121039bbcb56e5f0fe9610de727650f4936d1a3864b52b8ab210414c97317d1fdedb200000000" 
	["size"]=> int(420) 
	["version"]=> int(2) 
	["locktime"]=> int(0) 
	} 
}
*/

?>
<!DOCTYPE html>
<html>
<head>
<style>
html, body{
	font-family: "Courier New", "Times New Roman", serif;
}
td{
	border: 2px solid #000;
	margin: 0px;
	padding: 4px;
}
</style>
</head>
<body>
<h1>Tiny Explorer</h1>
<input type="text"><button>Search</button><br><br>
Transaction:  <?php echo $txid; ?><br>
Time: <?php echo date('Y-m-d h:i:s',$time); ?><br>
Block: <?php echo $blockhash; ?><br>
Confirmations: <?php echo $confirmations; ?><br><br>
<span style="font-size: 20px;">Senders (inputs):</span><br>
<table>
<tr><td><b>#</b></td><td><b>Sender</b></td><td><b>Value (BTC)</b></td><td><b>Value (USD)</b></td></tr>
<?php
$numInputs = count($api["inputs"]);
$sumInputs = 0;
$sumInputsUSD = 0;
for($i=0;$i<$numInputs;$i++){
	$usdVal = $api["inputs"][$i]["value"] * $price;
	echo '<tr><td>'.$i.'</td><td>'.$api["inputs"][$i]["address"].'</td><td>'.$api["inputs"][$i]["value"].'</td><td>$'.number_format($usdVal,2).'</td></tr>';
	$sumInputs += $api["inputs"][$i]["value"];
	$sumInputsUSD += $usdVal;
}
?>
</table>
<br><br>
<span style="font-size: 20px;">Recipients (outputs):</span><br>
<table>
<tr><td><b>#</b></td><td><b>Recipient</b></td><td><b>Value (BTC)</b></td><td><b>Value (USD)</b></td></tr>
<?php
$numOutputs = count($api["outputs"]);
$sumOutputs = 0;
$sumOutputsUSD = 0;
for($i=0;$i<$numOutputs;$i++){
	$usdValOut = $api["outputs"][$i]["value"] * $price;
	echo '<tr><td>'.$i.'</td><td>'.$api["outputs"][$i]["address"].'</td><td>'.$api["outputs"][$i]["value"].'</td><td>$'.number_format($usdValOut,2).'</td></tr>';
	$sumOutputs += $api["outputs"][$i]["value"];
	$sumOutputsUSD += $usdValOut;
}
$minersFee = $sumInputs - $sumOutputs;
$minersFeeUSD = $sumInputsUSD - $sumOutputsUSD;
echo '<tr><td colspan="2"><b>Miner Fee</b></td><td>'.number_format($minersFee,8).'</td><td>$'.number_format($minersFeeUSD,2).'</td></tr>';
?>
</table>


</div>
</body>
</html>