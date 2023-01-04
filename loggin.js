function myFunction() {
    var x = document.getElementById("mittpassord");
    if (x.type === "passord") {
      x.type = "text";
    } else {
      x.type = "passord";
    }
  }