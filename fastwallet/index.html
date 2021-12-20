<!DOCTYPE html>
<html>
    
<head>
<title>FastWallet - Serverless No Sign-up bitcoin web wallet</title>
<meta name="description" content="An instant HD bitcoin web wallet that runs in your browser. Instantaneous use! No sign up, no wallet setup process or upfront back up.">
    <meta name="keywords" content="Bitcoin, throwaway wallet, free wallet, segwit, pay to witness, hierarchical deterministic wallet, HD wallet, instant, no sign up, no wallet setup.">

<style>
body, html {
	padding-left: 12px;
	font-family: "Verdana", "sans-serif";
}
#recQR{
	width: 350px;
	margin: auto;
	left: 40px;
	position: relative;
}
#backupblock{
	display: none;
}
#sendblock{
	display: none;
}
.subnum{
	font-size: 2rem;
	color: #aaa;
}
.eachword{
	display: inline-block;
	margin: 10px;
	padding: 4px;
	border: 1px solid #e1e1e1;
}
.input {color:#3cf281;border-color:#3cf281;background-color: transparent; border-radius: 100%;}
.input:hover{color:#fff;background-color:#3cf281;border-color:#3cf281}
.green { background-color: #00cc00; }
#amtsats{
	background-color: #ccc;
}
.wideinput{
	width: 500px;
}
.addrEach{
	display: inline-block;
	position: relative;
	margin: 2px;
	border: 1px solid #ffc107;
	border-radius: 5px;
	padding: 7px;
	cursor: pointer;
}
.addrEach:hover{
	border: 1px solid #ffea07;
	cursor: pointer;
}
#tx{
    display: none;
}
</style>
<link rel="stylesheet" href="bootstrap.min.css">
<script src="buidl.js"></script>
<script type="text/javascript" src="bitcoin.js"></script>
<script src="jquery-3.2.1.min.js"></script>
<script src="qrcode.js"></script>
</head>
    
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FastWallet</a>
    

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#" id="receivelink" onclick="return showReceive();">Receive
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="sendlink" onclick="return showSend();">Send</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="backuplink" onclick="return showBackUp();">Back-Up</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" value="" id="walletbal" readonly>
        <button class="btn btn-secondary my-2 my-sm-0" id="fiatout">$420.69</button>
      </form>
    </div>
  </div>
</nav>	
<br>
<!-- Receive block visible by default -->
<div class="card border-primary mb-3" style="max-width: 100rem;" id="receiveblock">
  
  <div class="card-body" style="text-align: center;">
    <div id="recQR"></div>
    <h4 class="card-title" id="recAddr"></h4>
    <p class="card-text">Receive bitcoin by sharing this address.</p>
	<button type="button" class="btn btn-outline-primary" onclick="return newAddr();">Get New Address</button>
	<br>
	Address <span id="countOut">0</span> / 20
  </div>
</div>
<!-- Back Up block invisible by default -->
<div class="card border-primary mb-3" style="max-width: 100rem;" id="backupblock">
  
  <div class="card-body" style="text-align: center;">
    <h4 class="card-title">Mnemonic Back Up</h4>
    <p class="card-text">Write down these words to back up your wallet. We use the BIP84 derivation path.</p>
	<button type="button" class="btn btn-outline-primary" onclick="return showWords();">Reveal Words</button>
	<button type="button" class="btn btn-outline-danger" onclick='return confirm("Are you sure this will erase your existing wallet. BE SURE TO SAVE YOUR MNEMONIC WORDS BEFORE ATTEMPTING TO IMPORT/RECOVER!")?importWallet():null;'>Import/Recover</button>
	<div id="mnemonicOut" class="form-group"></div>
  </div>
</div>
<!-- Send block invisible by default -->
<div class="card border-primary mb-3" style="max-width: 100rem;" id="sendblock">
  
  <div class="card-body" style="text-align: center;">
    <h4 class="card-title">Send</h4>
    <p class="card-text">Choose which coins to spend.</p>
	<div id="addr_container"></div>
	<br>
	<div id="utxobuttons"></div>
	<div id="tx">
	<div class="form-group" style="width: 100%;">
	<table align="center"><tr><td width="75%"><input type="text" class="form-control" id="outputaddr" placeholder="SEND TO ADDRESS" required></td><td width="25%"><input type="text" id="outamtinput" class="form-control" onchange="return minerCalc();" placeholder="AMOUNT"></td></tr></table></div>
	<div class="form-group" style="width: 100%;">
	<table align="center"><tr><td width="75%"><input type="text" class="form-control" id="changeout" placeholder="CHANGE ADDRESS"></td><td width="25%"><input type="text" class="form-control" id="changeamt" onchange="return minerCalc();"  placeholder="AMOUNT"></td></tr></table></div>
	<table align="center"><tr><td width="75%">MINERS FEE</td><td width="25%"><input type="text" class="form-control" id="minerfee" value="1000" readonly></td></tr><tr><td></td><td><button type="button" class="btn btn-outline-secondary" onclick="return sendtx();">Send Transaction</button></td></tr></table><br>
	<div id="hexout"></div>
	</div>
	<input type="hidden" id="addrbal"><input type="hidden" id="addrsel">
	
	<textarea id="inputdata" cols="100" rows="1" style="opacity: 0;"></textarea>
	
	</div>
<br>
  </div>
  <br><br>
  <div id="info">
  <h4 class="card-title">Free. <em>Fast.</em> No Sign Up. Open Source.</h4>
  <div class="card border-primary mb-3" style="max-width: 100rem;"><div class="card-body">
  <p><b>Be aware this is a serverless web wallet with your private keys stored in the browser! YIKES! You probably shouldn't use this wallet for significant sums.<br>
  This wallet uses public APIs like Blockchain and Blockchair for UTXO data and they probably track your IP! Use VPN/TOR etc.<br>
  Your keys are ONLY stored on YOUR device's temporary internet files. If you don't save your back-up mnemonic and you clear your browser cache you will lose access to your funds permanently.</b></div></div> 
  FastWallet is a serverless bitcoin web wallet I built for casual/throwaway use cases. The wallet is limited to only 21 addresses, when you use up all 21 addresses just start a new wallet, although you are not prevented from re-using addresses if you wish(not recommended). The 21 address limit is to prevent a bloated wallet with too many addresses that will exceed free API usage limits, and to avoid any look-ahead gap issues if you attempt to recover on another device that support BIP84 deterministic wallets.<br><br>
 
<b>USE AT YOUR OWN RISK.</b>  </p>
  </div>
<script>

function createNewWallet(){ 
 let newWords = buidl.newMnemonic();
 let justWords = newWords.words;
 // saving mnemonic unencrypted to localStorage, fastwallet isn't a security wallet it's an ultrahot wallet
 window.localStorage.setItem("fastWallet", justWords); 
 fw = justWords;
}

//retreive localstorage item labeled fastWallet
var fw = localStorage.getItem("fastWallet");

//check if retreival is null, if it is run createNewWallet function
fw === null ? createNewWallet() : fw; 

//console.log(fw);
//convert mnemonic to HD Seed
const fs = buidl.mnemonic2SeedHex(fw);
//seed to bip84 addresses 
let farr = [];
let fkarr = [];

for(var i = 0; i < 21; i++){
	let loopPair = buidl.fromHDSeed(fs.seedHex, 84, 0, 0, i);
	farr.push(loopPair.addr);
	fkarr.push(loopPair.pk);
}

var addrCounter = 0;
var addr = farr[0];
$("#recAddr").html(addr);
new QRCode(document.getElementById("recQR"), addr);

$(document).ready(function(){
		
addrstring = "";
		
addrstring = farr.join("|");

recdarr = [];
			
$.ajax({
	async: true,
	type: "GET",
	url: "https://blockchain.info/multiaddr?active="+addrstring,
	success: function(result) {
     console.log(result);
	 console.log(addrstring);
	 dataout = result.wallet.final_balance;
	 var fullbtcs = dataout/100000000;
	 fullbtcs.toFixed(8);
	 
	 $("#walletbal").val(fullbtcs+" BTC");	 
	 
	 for(var i=0;i<21;i++){
		var addrbalance = result.addresses[i].final_balance;
		var convaddrbalance = addrbalance/100000000;
		convaddrbalance.toFixed(8);
		var addrballessfee = addrbalance - 1000;
		
		if(addrbalance > 0){
			recdarr.push(result.addresses[i].address);
			 $("#addr_container").append('<div class="addrEach" id="'+result.addresses[i].address+'"><span class="addr">'+result.addresses[i].address+'</span><br>'+addrbalance+' SATS</div>');
		}
	 }
	 
	var addrObjs = document.getElementsByClassName("addrEach"); 

	for(i=0;i<addrObjs.length;i++){
		var addrBlock = addrObjs[i];
		addrBlock.onclick = function(){
			console.log(this.id)
			var loopaddress = this.id;
			this.style.backgroundColor = "#ffc107";
			
			  var data
			  $.ajax({
				async: true,
				type: "GET",
				url: "https://api.blockchair.com/bitcoin/dashboards/address/"+loopaddress,
				success: function(res) {
				 //console.log(res.data);
				 console.log(res.data[loopaddress].utxo.length + " utxos found");
				 var addrbal = res.data[loopaddress].address.balance;
				 $("#addrbal").val(addrbal);
				 $("#addrsel").val(loopaddress);
				 $("#outamtinput").val(addrbal-1000);
				 data = res.data[loopaddress].utxo.map(function(item){
					return {
					  "txid": item.transaction_hash,
					  "vout": item.index,
					  "satoshis": item.value
					}
				  })
				  //output response into the inputdata element
				  $("#inputdata").val(JSON.stringify(data, null, 2));
				  $("#tx").fadeIn(100);
				}
			  });
		}
				  
	}
	
  }
  });
 });
 
 function advanced(){
		  var inputData = $("#inputdata").val();
		  dataloop = JSON.parse(inputData);
		  for(var i=0;i<dataloop.length;i++){
			$("#utxobuttons").append('<button class="input" value="'+i+'">'+dataloop[i].satoshis+'</button>');
		  }
		  
		  $("#utxobuttons").append('<br><br><b>Total Satoshis Selected</b> <input type="text" id="amtsats" value="0" readonly><span id="btcval"></span><br>');
		  
		      $(".input").click(function() {
				console.log(this);
				$(this).toggleClass("green");
				if($(this).hasClass("green")){
					var startval = parseFloat($("#amtsats").val());
					console.log(startval);
					var addval = parseFloat($(this).html());
					console.log(addval);
					$("#amtsats").val(startval+addval);
					var calcbtc = (startval+addval)/100000000;
					$("#btcval").html(calcbtc.toFixed(8)+" BTC");
					//return recalcfees();
				} else {
					var startval = parseFloat($("#amtsats").val());
					var addval = parseFloat($(this).html());
					$("#amtsats").val(startval-addval);
					var calcbtc = (startval-addval)/100000000;
					$("#btcval").html(calcbtc.toFixed(8)+" BTC");
					//return recalcfees();
				}
					
			  });
			  
			$(".amountinputs").change(function(){
				//return recalcfees();
			});  
 }

function minerCalc(){
	const wb = $("#addrbal").val();
	const oa = $("#outamtinput").val();
	const ca = $("#changeamt").val();
	let mf = wb - oa - ca;
	$("#minerfee").val(mf);
	if(mf > 9999){
		alert("Your miner fee is very high. Be sure to use a change address if you aren't spending the full amount.");
	}
}

function sendtx(){
	const fromaddr = $("#addrsel").val();
	const wb = $("#addrbal").val();
	const oa = $("#outamtinput").val();
	const ca = $("#changeamt").val();
	const oad = $("#outputaddr").val();
	if(oad.length < 20){
		alert("You must input a bitcoin address");
	} else {
	
	    const cho = $("#changeout").val();
		var mf = wb - oa - ca;
		var fw = localStorage.getItem("fastWallet");

		//console.log(fw);
		//convert mnemonic to HD Seed
		const fs = buidl.mnemonic2SeedHex(fw);
		//seed to bip84 addresses 
		var farr = [];
		var fkarr = [];

		for(var i = 0; i < 21; i++){
			var loopPair = buidl.fromHDSeed(fs.seedHex, 84, 0, 0, i);
			farr.push(loopPair.addr);
			fkarr.push(loopPair.pk);
		}
		for(i=0;i<21;i++){
			if(fromaddr==farr[i]){
				var fpkey = fkarr[i];
				//build tx and sign
				var inputdatain = document.getElementById("inputdata").value;
				var inputjson = JSON.parse(inputdatain);
				var inputlen = inputjson.length;
				var totalSatoshis = 0;
				
				var NETWORK = b.bitcoin.networks.bitcoin;
				var txb = new b.bitcoin.TransactionBuilder(NETWORK)
				
				//need scriptPubKey for adding input
				var WIF = fpkey; 
				var keypair = b.bitcoin.ECPair.fromWIF(WIF, NETWORK);			
				var scriptPubkey = b.bitcoin.script.witnessPubKeyHash.output.encode(
									b.bitcoin.crypto.hash160(	
									keypair.getPublicKeyBuffer()
									)
					   );

				
				for(var ii=0;ii<inputlen;ii++){
					txb.addInput(inputjson[ii].txid,
								inputjson[ii].vout,
								0xffffffff,
								scriptPubkey)
					totalSatoshis = parseFloat(totalSatoshis) + parseFloat(inputjson[ii].satoshis);	
				}
				
				//add output
				var toaddress = oad;
				var toaddressamt = oa;
				toaddressamt = parseFloat(toaddressamt);
				var changeaddress = cho;
				var changeaddressamt = ca;
				changeaddressamt = parseFloat(changeaddressamt);
				txb.addOutput(toaddress,toaddressamt);
				if(changeaddressamt.length<1){
				} else {
					if(changeaddress.length<1){
					} else {
						txb.addOutput(changeaddress,changeaddressamt);
					}	
				}
				//sign each input
				for(var iii=0;iii<inputlen;iii++){
					var inputvalue = inputjson[iii].satoshis;
					txb.sign(iii, keypair, null, null, inputvalue);
				}
				
				var tx = txb.build();
				var txid = tx.getId();
				var txhex = tx.toHex();
				console.log(txhex);
				$.ajax({
					async: true,
					type: "POST",
					url: "https://api.blockchair.com/bitcoin/push/transaction",
					contentType: 'application/json',
					dataType: "json",
					data: JSON.stringify({data: txhex}),
					success: function(result) {
					  $("#hexout").html('Transaction ID: <a href="https://coinables.github.io/explorer/tx/?q='+txid+'">'+txid+'</a>');
					}
				  });
				
				
			} 
			
		}
	
	}
	
	
}

function newAddr(){
	if(addrCounter > 19){
		addrCounter = 0;
	} else {
	    addrCounter++;
	}
	$("#recQR").fadeOut(200);
	$("#recAddr").fadeOut(200,function(){
		var newaddress = farr[addrCounter];
		$("#recQR").html("");
		new QRCode(document.getElementById("recQR"), newaddress);
		$("#recAddr").html(newaddress);
		$("#recAddr").fadeIn(100);
		$("#recQR").fadeIn(100);
		$("#countOut").html(addrCounter);
		
		//console.log(addrCounter);
	});
}


function showReceive(){
	$("#backupblock").fadeOut(200, function(){
		$("#sendblock").fadeOut(1);
		$("#receiveblock").fadeIn(100);
		$("#receivelink").addClass("active");
		$("#backuplink").removeClass("active");
		$("#sendlink").removeClass("active");
	});
}

function showSend(){
	$("#receiveblock").fadeOut(200, function(){
		$("#backupblock").fadeOut(1);
		$("#sendblock").fadeIn(100);
		$("#sendlink").addClass("active");
		$("#receivelink").removeClass("active");
		$("#backuplink").removeClass("active");
	});
}

function showBackUp(){
	$("#receiveblock").fadeOut(200, function(){
	    $("#sendblock").fadeOut(1);
		$("#backupblock").fadeIn(100);
		$("#backuplink").addClass("active");
		$("#receivelink").removeClass("active");
		$("#sendlink").removeClass("active");
	});
}

function showWords(){
    $("#mnemonicOut").html("");
	let splitwords = fw.split(" ");
	let wordcounter = 1;
	for(var i = 0; i<splitwords.length; i++){
		$("#mnemonicOut").append('<span class="eachword"><span class="subnum">'+wordcounter+'</span> '+splitwords[i]+'</span>');
		wordcounter++;
	}
	
}

function importWallet(){
	console.log("import wallet");
	$("#mnemonicOut").html('<input type="text" class="form-control" id="mnemonicInput" placeholder="ENTER YOUR 12 WORD MNEMONIC BACK UP SEPARATED BY A SPACE"><button class="btn btn-outline-secondary" onclick="return doImport();">Import</button>');
}

function doImport(){
    var recoveryIn = $("#mnemonicInput").val();
	
	window.localStorage.setItem("fastWallet", recoveryIn); 
    fw = recoveryIn;
	$("#mnemonicOut").html("Mnemonic phrase imported. Refreshing...");
	$("#mnemonicOut").fadeOut(2000,function(){
		location.reload();
	});
}
</script>
<script>
var ws = new WebSocket("wss://api-pub.bitfinex.com/ws/2");
ws.onopen = function(){
  ws.send(JSON.stringify({"event":"subscribe", "channel":"ticker", "pair":"BTCUSD"}))
};
ws.onmessage = function(msg){
  var response = JSON.parse(msg.data);
  var hb = response[1];
  if(hb !== "hb"){
	var pricenow = response[1][0];
	var balnow = document.getElementById("walletbal").value;
	balnow = balnow.slice(0,-4);
	var usdbal = balnow * pricenow;
	usdbal = usdbal.toFixed(2);
	$("#fiatout").html("$" + usdbal);
  }
};
</script>
</body>
</html>
