/**
 *	www.templatemo.com
 */

/* HTML document is loaded. DOM is ready.
-----------------------------------------*/
$(document).ready(function(){

	// Mobile menu
	$('.mobile-menu-icon').click(function(){
		$('.tm-nav').slideToggle();
	});

	$( window ).resize(function() {
		if($( window ).width() > 767) {
			$('.tm-nav').show();
		} else {
			$('.tm-nav').hide();
		}
	});

  // http://stackoverflow.com/questions/2851663/how-do-i-simulate-a-hover-with-a-touch-in-touch-enabled-browsers
  $('body').bind('touchstart', function() {});

  // Smooth scroll
  // https://css-tricks.com/snippets/jquery/smooth-scrolling/
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

	var holder = document.getElementById('floater');

	holder.ondragover = function() {
	  return false;
	};

	holder.ondragend = function() {
	  return false;
	};

	holder.ondrop = function(event) {
	  event.preventDefault();

	  var file = event.dataTransfer.files[0];
	  var reader = new FileReader();

	  reader.onload = function(event) {	
		var binary = event.target.result;
		var shaHash = buidl.sha256(binary,1);
		//console.log(shaHash);
		var mnemonic = buidl.entropy2Mnemonic(shaHash);
		//console.log(mnemonic);
		var hexseed = buidl.mnemonic2SeedHex(mnemonic.words); 
	   var userAcct = 0;
	   var changeAcct = 0;
	   var makeXpub = buidl.seedToXpub(hexseed.seedHex, userAcct);
	   
	   holder.style.backgroundColor = "white";
	   holder.innerHTML = 'Xpub: <input type="text" id="xpubOut" size="150" value="'+makeXpub.xpub+'"><br><br>';
	   
	   holder.innerHTML += '<input type="text" value="Path"><input type="text" value="Address" size="50"><input type="text" value="Private Key WIF" size="70"><br>';
	   for(var i=0;i<25;i++){
			var keypair = buidl.fromHDSeed(hexseed.seedHex,userAcct,changeAcct,i);
			holder.innerHTML += '<input type="text" value="m/44&#39;/0&#39;/'+userAcct+'&#39;/'+changeAcct+'&#39;/'+i+'"><input type="text" class="addr" value="'+keypair.addr+'" size="50"><input type="password" class="key" value="'+keypair.pk+'" size="70"><br>';
	   }
	   holder.innerHTML += 'Mnemonic <input type="password" value="'+mnemonic.words+'" class="key" size="150">';
	   holder.innerHTML += '<button onClick="return toggleKeys();">Show/Hide Private Keys</button><br><button onClick="return cls();">Hide Wallet</button>';
	   holder.style.overflow = "scroll";
	   
	   addrstring = "";
	   var addrClass = document.getElementsByClassName("addr");
	   
	   for(i=0;i<addrClass.length;i++){
		   addrstring += addrClass[i].value+",";
	   }
	   
	   addrstring2 = addrstring.substring(0, addrstring.length - 1);
	   console.log(addrstring2);
		
		$.ajax({
			async: true,
			type: "GET",
			url: "https://api.blockchair.com/bitcoin/dashboards/addresses/"+addrstring2,
			success: function(result) {
			 			 
			 dataout = result.data.set.balance;
			 var fullbtcs = dataout/100000000;
			 fullbtcs.toFixed(8);
			 
			 holder.innerHTML += '<br><br>Balance: <input type="text" value="'+fullbtcs+'">';
			 
			 var historyreturn = result.data.addresses;
			 var balanceslength = Object.keys(historyreturn).length;
			 
			 console.log(historyreturn);
			 
			 var outhtml = '<table><tr><td class="outputheader wideinput">Address</td><td class="outputheader">Satoshis</td><td class="outputheader">Received</td><td class="outputheader">First Seen</td><td class="outputheader">Last Spent</td></tr>';
			 
			 for(var i=0;i<balanceslength;i++){		
				outhtml += '<tr><td><input type="text" class="wideinput" value="'+Object.keys(historyreturn)[i]+'" id="'+i+'"></td><td><input type="number" value="'+historyreturn[Object.keys(historyreturn)[i]].balance+'" readonly></td><td><input type="number" value="'+historyreturn[Object.keys(historyreturn)[i]].received+'" readonly></td><td><input type="text" value="'+historyreturn[Object.keys(historyreturn)[i]].first_seen_receiving+'" readonly></td><td><input type="text" value="'+historyreturn[Object.keys(historyreturn)[i]].last_seen_spending+'" readonly></td></tr>';
			 }
			 
			 outhtml += '</table>';
			 
			holder.innerHTML += '<br><br>'+outhtml;
			  
			},
			statusCode: {
				404: function() {
				  holder.innerHTML += '<br><br>Balance: <input type="text" value="0">';
				}
			  }
		  });
		
	  };

	  reader.readAsBinaryString(file);
	};
	
	


});

$(window).load(function() {
	// Remove preloader
	// https://ihatetomatoes.net/create-custom-preloading-screen/
	$('body').addClass('loaded');
});