function changeIcon() {
    var icon = document.getElementById("hjertet");
    if (icon.classList.contains("fa-heart")) {
      icon.classList.remove("fa-heart");
      icon.classList.add("fa-solid fa-heart");
    } else {
      icon.classList.remove("fa-solid fa-heart");
      icon.classList.add("fa-heart");
    }
  }