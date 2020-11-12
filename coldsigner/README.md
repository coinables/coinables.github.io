# Offline Bitcoin Transaction Builder

This repository contains several single-page apps that can run in your browser online or offline. These tools were built using the bitcoinjs library, a widely-used bitcoin library that performs the necessary cryptographic functions to use bitcoin. 

# Usage    

## 0. Download as a zip or clone the repo

 *  `git clone https://github.com/coinables/coldsigner.git`
 
 
## 1. While connected to the internet run `online-get-utxos.html` or `online-get-utxos-altsource.html` in your browser. 


## 2. Choose either Testnet or Mainnet from the Network dropdown, enter the address you want to spend from, and click "Get UTXOs". 

If nothing happens, or there are no UTXOs make sure the address you are querying is for the right network (testnet vs mainnet). Another 
reason could be the API service is down, try using the alternate API source page `online-get-utxos-altsource.html`.

## 3. Copy the ENTIRE result (will look similar to the below) and save it to a .txt file that you can transfer via USB to an offline machine. You will also want to make sure you know where you want to send funds to for the next step.

		[   
			{     
			"txid": "9f2304980f2de9e0e324447f44197758d1c4a258798be0350be596ec2b486c93",     
			"vout": 1,     
			"satoshis": 10000   
			} 
		]
		

## 4. While NOT connected to the internet run the appropiate `offline-sign` html file. 

		|-------------|-------------------------------|
		| IF ADDRESS  |      HTML FILE TO RUN         |             
		| STARTS WITH |                               |
		|-------------|-------------------------------|
		|     1       |  offline-sign-legacy.html     |
		|-------------|-------------------------------|
		|     3       |  offline-sign-p2sh-segwit.html|
		|-------------|-------------------------------|
		|    bc1      |  offline-sign-bech32.html     |
		|-------------|-------------------------------|

		
## 5. Paste the text you copied from step #3 into the Paste UTXO JSON field, and click LOAD.

## 6. Click on which UTXO(s) you want to spend. To unselect, click same UTXO again so that it turns back from green to dark blue. 

## 7. Enter in the desitation address you want to send to in the Output Address field, and enter in the amount of satoshis to send in the field next to it. 

## 8. If your Miner Fee is too large after inputing the amount you want to send, add in a change address and amount. The mining fee marketplace changes all the time. Sometimes you can get transactions through with a very small fee, other times fees need to be larger if you have selected many UTXOs to be included in your transaction. The more UTXOs you have selected makes your transaction larger in size and will need a larger fee. Setting an appropiate fee is your responsibilty please reference (https://bitcoin.stackexchange.com/questions/1195/how-to-calculate-transaction-size-before-sending-legacy-non-segwit-p2pkh-p2sh)   

## 9. Lastly, enter the corresponding WIF private key from which address you are spending from into the WIF Private Key field. Click sign. The result is your raw bitcoin transaction. Copy the ENTIRE result and save it to a .txt file so you can transfer it to an online machine for broadcasting. You can broadcast transactions using your node, or a service. Don't worry a raw bitcoin transaction can not be altered after you sign it, and your private key will not be revealed.  


Please consider donating if you find this tool useful.		

BTC:  3LnBzPmb3BkDUZBHLHdEj5vgxS6D6HjKLW


