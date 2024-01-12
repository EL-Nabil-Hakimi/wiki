var search = function () {
    var title = document.getElementById("title").value;
    var category = document.getElementById("category").value;
    var tags = document.getElementById("tags").value;
    var reponse = new XMLHttpRequest();
    reponse.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("MyDives").innerHTML = this.responseText;
      }
    };
      
    reponse.open("GET", "?route=search_page_user&title=" + title + "&category=" +category + "&tags=" + tags, true);
    reponse.send();
  };
  
var search_home = function () {
    var title = document.getElementById("title").value;
    var category = document.getElementById("category").value;
    var tags = document.getElementById("tags").value;
    var reponse = new XMLHttpRequest();
    reponse.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("MyDives").innerHTML = this.responseText;
      }
    };
      
    reponse.open("GET", "?route=search_page_home&title=" + title + "&category=" +category + "&tags=" + tags, true);
    reponse.send();
  };