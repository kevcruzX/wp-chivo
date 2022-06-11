// EXAMPLE CODE FOR GENERATION QR INPUT TEXT. 

var qrcode = new QRCode("qrcode");

function makeCode () {		
	var Text = document.getElementById("text");
	var Valor = document.getElementById("valor")

	if (!Text.value) {
		alert("Input a text");
		Text.focus();
		return;
	}

	if (!Valor.value) {
		alert("Input a text");
		Valor.focus();
		return;
	}
	
	qrcode.makeCode("usd:" + Text.value + "?amount=" + Valor.value);
}

makeCode();

$("#text").
	on("blur", function () {
		makeCode();
	}).
	on("keydown", function (e) {
		if (e.keyCode == 13) {
			makeCode();
		}
	});

$("#valor").
on("blur", function () {
	makeCode();
}).
on("keydown", function (e) {
	if (e.keyCode == 13) {
	makeCode();
}
});

// PENDING CLEANING AND ADDING THE TOOLS TO BE USED.

