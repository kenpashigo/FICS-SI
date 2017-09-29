var store = 0;

function hidden_menu(a){
	store = store + a;

	if(store == 1) {

			//EDGE
			document.getElementById("title-holder").style.transform = "translateX(-61.4%)";
			document.getElementById("body-holder").style.transform = "translateX(-60%)";
			document.getElementById("hidden-menu").style.transform = "translateX(0%)";
			document.getElementById("hidden-menu").style.display = "block";
			document.getElementById("darken").style.display = "block";

			//CHROME
			document.getElementById("title-holder").style = "transform: translateX(-61.4%)";
			document.getElementById("body-holder").style = "transform: translateX(-60%)";
			document.getElementById("darken").style = "display: block";
			document.getElementById("hidden-menu").style = "display: block; transform: translateX(0%)";
		}
	}

function fecha(){
	store = 0;
	//EDGE
	document.getElementById("title-holder").style.transform = "translateX(0%)";
	document.getElementById("body-holder").style.transform = "translateX(0%)";
	document.getElementById("hidden-menu").style.transform = "translateX(130%)";
	document.getElementById("hidden-menu").style.display = "none";
	document.getElementById("darken").style.display = "none";
	//CHROME
	document.getElementById("title-holder").style = "transform: translateX(0%)";
	document.getElementById("body-holder").style = "transform: translateX(0%)";
	document.getElementById("darken").style = "display: none";
	document.getElementById("hidden-menu").style = "display: none; transform: translateX(130%)";
}

function getDaysInMonth(month, year) {
         // Since no month has fewer than 28 days
         var date = new Date(year, month, 1);
         var days = [];         
         while (date.getMonth() === month) {
            days.push(new Date(date));
            date.setDate(date.getDate() + 1);
         }
         return days;
    }

var now = new Date();
var year = now.getFullYear();
var month = now.getMonth();
var day = now.getDate();
var mes = getDaysInMonth(month, year);
var week = mes[day-1].getDay();

var materia = [];
materia[0] = 'Domingo';
materia[1] = 'Organização e Arquitetura de Computadores';
materia[2] = 'Linguagem de Programação I';
materia[3] = 'Metodologia da Pesquisa - Sistemas de Informação Gerenciais I';
materia[4] = 'Estrutura de Dados I';
materia[5] = 'Probabilidade e Estatística';
materia[6] = 'Sábado';

window.onload = function() {
	document.getElementById('addia').innerText = materia[week];	
}


function atribuir_opcoes(a){	
	if(a == "") {
		var option = document.getElementById('response-option');
		option.innerHTML = '<option>Escolha um semestre</option>'
	} else {
		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            	var option = document.getElementById('response-option');
            	console.log(this);
            	option.innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","./paginas/materlista.php?sem="+a,true);
        xmlhttp.send();
	}
}

function atribuir_opcoes_busca_materia(a){	
	if(a == "") {
		var option = document.getElementById('response-option');
		option.innerHTML = '<option>Escolha um semestre</option>'
	} else {
		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            	var option = document.getElementById('response-option');
            	console.log(this);
            	option.innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","./paginas/buscamateria.php?sem="+a,true);
        xmlhttp.send();
	}
}