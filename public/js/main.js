
//document.getElementById("disp").addEventListener("click", Addnew);
//document.getElementById("Display").addEventListener("click", Display);
 function Addnew(){
      document.getElementById('form').style.display = 'block';
      document.getElementById('container').style.display = 'none';
  } 
function Display(){
     document.getElementById('container').style.display = 'none';
}
function fetch(){
     document.getElementById('login-box').style.display = 'block';
}



setTimeout(() => {
     const box = document.getElementById('time');
   
     // 👇️ removes element from DOM
     box.style.display = 'none';
   
     // 👇️ hides element (still takes up space on page)
     // box.style.visibility = 'hidden';
   }, 1500);

   //country
   var countryStateInfo = {
	"USA": {
		"California": {
			"Los Angeles": ["Avalon Boulevard",
               "Beverly Glen Boulevard",
               "Crenshaw Boulevard",
               "Glendale Boulevard",
               "La Cienega Boulevard",
               "Laurel Canyon Boulevard",
               "Lincoln Boulevard",
               "Main Street.",],
			"San Diego": ["5th Avenue",
               
              "El Prado",
               "University Avenue",
               "Mission Boulevard",
               "Kettner Boulevard",
               "San Diego Avenue",
               "Prospect Street",
               "Garnet Avenue"]
		},
		"Texas": {
			"Dallas": ["10 Mile Rd",
               "Ace Ln",
               "Airport Fwy",
               "Apollo Rd",
               "Ben Davis Rd",
               "Berkner Dr",
               "Boye St",
               "Boyington Dr", ],
			"Austin": ["Anderson Mill Road",
              "Barton Springs Road",
               "Ben White Boulevard",
               "E.M. Franklin Avenue",
               "Ed Bluestein Boulevard",
               "Enfield",
               "Exposition Boulevard",
               "Lamar Boulevard"]
		}
	},
	"India": {
		"TamilNadu": {
			"Dispur": ["781005"],
			"Guwahati" : ["781030", "781030"]
		},
		"Karnataka": {
			"Vadodara" : ["390011", "390020"],
			"Surat" : ["395006", "395002"]
		}
	}
}


window.onload = function () {
	
	//Get html elements
	var countySel = document.getElementById("country");
	var stateSel = document.getElementById("state");	
	var citySel = document.getElementById("city");
	var StreetSel = document.getElementById("street");
	
	//Load countries
	for (var country in countryStateInfo) {
		countySel.options[countySel.options.length] = new Option(country, country);
	}
	
	//County Changed
	countySel.onchange = function () {
		 
		 stateSel.length = 1; // remove all options bar first
		 citySel.length = 1; // remove all options bar first
		 StreetSel.length = 1; // remove all options bar first
		 
		 if (this.selectedIndex < 1)
			 return; // done
		 
		 for (var state in countryStateInfo[this.value]) {
			 stateSel.options[stateSel.options.length] = new Option(state, state);
		 }
	}
	
	//State Changed
	stateSel.onchange = function () {		 
		 
		 citySel.length = 1; // remove all options bar first
		 StreetSel.length = 1; // remove all options bar first
		 
		 if (this.selectedIndex < 1)
			 return; // done
		 
		 for (var city in countryStateInfo[countySel.value][this.value]) {
			 citySel.options[citySel.options.length] = new Option(city, city);
		 }
	}
	
	//City Changed
	citySel.onchange = function () {
		StreetSel.length = 1; // remove all options bar first
		
		if (this.selectedIndex < 1)
			return; // done
		
		var street = countryStateInfo[countySel.value][stateSel.value][this.value];
		for (var i = 0; i < street.length; i++) {
			StreetSel.options[StreetSel.options.length] = new Option(street[i], street[i]);
		}
	}	
}
	function exportReportToExcel() {
  let table = document.getElementsByTagName("table"); // you can use document.getElementById('tableId') as well by providing id to the table tag
  TableToExcel.convert(table[0], { // html code may contain multiple tables so here we are refering to 1st table tag
    name: `export.csv`, // fileName you could use any name
    sheet: {
      name: 'Sheet 1' // sheetName
    }
  });
}
function fun(){
	document.getElementById('form').style.display='block';
	document.getElementById('hide').style.display='none';
}

