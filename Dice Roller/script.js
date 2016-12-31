//Functions to set select result

var n = 0;

function selectD4() {
	
	n = document.getElementById('d4n').value;
	return n;
}

function selectD6() {
	
	n = document.getElementById('d6n').value;
	return n;
}

function selectD8() {
	
	n = document.getElementById('d8n').value;
	return n;
}

function selectD10() {
	
	n = document.getElementById('d10n').value;
	return n;
}

function selectD12() {
	
	n = document.getElementById('d12n').value;
	return n;
}

function selectD20() {
	
	n = document.getElementById('d20n').value;
	return n;
}

function selectD100() {
	
	n = document.getElementById('d100n').value;
	return n;
}

//Functions to get total


function dice(num, type) {
	
	if(isNaN(num)) {
		alert("Please enter a valid number of dice.");
	}
	
	var die = parseInt(type);
	
	var answerD4 = document.getElementById('answerD4');
	var answerD6 = document.getElementById('answerD6');
	var answerD8 = document.getElementById('answerD8');
	var answerD10 = document.getElementById('answerD10');
	var answerD12 = document.getElementById('answerD12');
	var answerD20 = document.getElementById('answerD20');
	var answerD100 = document.getElementById('answerD100');
	
	var total = 0;
	
	for(var i = 1; i <= num; i++) {
		
		total += Math.floor(Math.random()* (type) + 1);
	}
	
	console.log(die);
	console.log(num);
	
	if(die == 4) {
		answerD4.innerHTML = total;
	}
	else if(die == 6) {
		answerD6.innerHTML = total;
	}
	else if(die == 8) {
		answerD8.innerHTML = total;
	}
	else if(die == 10) {
		answerD10.innerHTML = total;
	}
	else if(die == 12) {
		answerD12.innerHTML = total;
	}
	else if(die == 20) {
		answerD20.innerHTML = total;
	}
	else if(die == 100) {
		answerD100.innerHTML = total;
	}
}






