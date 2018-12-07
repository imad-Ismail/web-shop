function winkelwagentoevogen(id) {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("phpOutput").innerHTML = this.responseText;
       
        }else if(this.status == 404){
            console.log("Deze pagina bestaat niet!");

        }
    };

    xmlhttp.open("GET", "winkelwagenToevoegen.php?p_id=" + id , true);
    xmlhttp.send();

};



function verwijderen(id) {
    

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            //document.getElementById("phpOutput").innerHTML = this.responseText;
            window.location.href = "winkelwagen.php";
       
        }else if(this.status == 404){
            console.log("Deze pagina bestaat niet!");

        }
    };

    xmlhttp.open("GET", "winkelwagenverWijderen.php?id=" + id , true);
    xmlhttp.send();

};