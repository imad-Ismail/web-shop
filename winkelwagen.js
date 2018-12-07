function winkelwagentoevogen(product_id) {

   // var category = document.getElementById('category').value;
    // var value = document.getElementById('value').value;

    //console.log(category);
    // console.log(value);


    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            document.getElementById("phpOutput").innerHTML = this.responseText;
       
        }else if(this.status == 404){
            console.log("Deze pagina bestaat niet!");

        }
    };

    
    xmlhttp.open("GET", "winkelwagenToevoegen.php?p_id=" + product_id , true);
    xmlhttp.send();

}