window.onmousemove = function(event) {	
	myFunction(event);

};

function myFunction(e) {
    var x = zeros(e.clientX);    
    var y = zeros(e.clientX-15);    

    document.getElementById('full-image').style = "background: #"+x+""+y+"";
}

function zeros(a){	
	
	if (a > 999) {
		a = '999';
	} else if(a > 9 && a < 100) {
		a = "0"+a;
	} else if (a < 10) {
		a = "00"+a;
	}

	return a;
}


