function openbox(id) {
	let boxid = id;
	for (var i = 1; i <= 7; i++) {
		if (i == boxid) {
			let style = document.getElementById("services"+boxid).style.display;
			if (style == "none") {
				document.getElementById("btn"+boxid).style.cssText=`
				background: #38BCEA!important;
				color: white!important;
				border-color: #38BCEA!important;
				box-shadow: 0 0 20px rgba(11, 136, 181, 0.7)!important;`;
				document.getElementById("services"+boxid).style.display = "table";
			}
			else{
				break;
			}	
		}
		else{
			document.getElementById("services"+i).style.display = "none";
			document.getElementById("btn"+i).style.cssText=`
				background: white!important;
				color: #12354B!important;
				border-color: #c9c9c9!important;
				box-shadow: none!important;`;	
		}	
	}
}
function openmenu() {
	let style = document.getElementById('mobile-modal-menu').style.display;
	if (style == "none") {
		document.getElementById('mobile-modal-menu').style.display = "block";
		document.body.style.cssText=`
				overflow: hidden`;
	}
	else{
		document.getElementById('mobile-modal-menu').style.display = "none";
		document.body.style.cssText=`
				overflow: auto`;
	}
}
function sign_up(id) {
	let checkform = id;
	let style = document.getElementById('make_an_appointment').style.display;
	if (style == "none") {
		if (checkform == 1) {
			document.getElementById('date-wrapper').style.display = "none";
		}
		document.getElementById('make_an_appointment').style.display = "block";
		document.body.style.cssText=`
				overflow: hidden`;
	}
	else{
		document.getElementById('make_an_appointment').style.display = "none";
		document.body.style.cssText=`
				overflow: auto`;
	}
}
let click = 0;
const availableScreenWidth = window.screen.availWidth

let i = 1;
function quantitycheck(id){
	check = id;
	let product = document.getElementById('product-price').value;	
	if (check == 0 && i > 1){
		i--;
		document.getElementById('quantitytotal').innerHTML = i;	
		document.getElementById('quantitytotalorder').innerHTML = i;
		document.getElementById('quantityforform').value = i;
	}
	if (check == 1){
		i++;
		document.getElementById('quantitytotal').innerHTML = i;	
		document.getElementById('quantitytotalorder').innerHTML = i;
		document.getElementById('quantityforform').value = i;
		
	}
	document.getElementById('quantityorder').innerHTML = i * product;
}