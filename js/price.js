function fetchPrice(cb){
	$.ajax({
		async: true,
		type: "GET",
		url: "https://www.bitstamp.net/api/ticker/",
		success: function(result) {
		  data = result.last;
		  cb(data);
		  }
	});
}

fetchPrice(function(lastprice){
    document.getElementById("usdc").value = lastprice; 
});

function btcConvert(){
 var amount = document.getElementById("btcc").value;
 fetchPrice(function(lastprice){
    var btcCalc = amount * lastprice;
    var btcCalc = btcCalc.toFixed(2);
    document.getElementById("usdc").value = btcCalc; 
 });
};

function usdConvert(){
 var usd = document.getElementById("usdc").value;
 fetchPrice(function(lastprice){
    var usdCalc =  usd / lastprice;
    var usdCalc = usdCalc.toFixed(8);
    document.getElementById("btcc").value = usdCalc;
 });
}