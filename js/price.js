var xbtc = new XMLHttpRequest();
xbtc.open('GET', 'https://api.bitcoinaverage.com/ticker/global/USD/', true);
xbtc.onreadystatechange = function(){
	if(xbtc.readyState == 4){
		var ticker = JSON.parse(xbtc.responseText);
		price = ticker.last;
		document.getElementById('btc').innerHTML = "$" + price;
	}
};
xbtc.send();

function btcConvert(){
 var amount = document.getElementById("btcc").value;
 var btcCalc = amount * price;
 var btcCalc = btcCalc.toFixed(2);
 document.getElementById("usdc").value = btcCalc;
};

function usdConvert(){
 var usd = document.getElementById("usdc").value;
 var usdCalc =  usd / price;
 var usdCalc = usdCalc.toFixed(8);
 document.getElementById("btcc").value = usdCalc;
}