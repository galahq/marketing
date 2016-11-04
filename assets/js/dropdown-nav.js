function dropdown() {
    document.getElementById("dropdownNav").classList.toggle("o-dropdown--show");
}

window.onclick = function(event) {
  if (!event.target.matches('.u-dropdown')) {

    var dropdowns = document.getElementsByClassName("o-dropdown__nav");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('o-dropdown--show')) {
        openDropdown.classList.remove('o-dropdown--show');
      }
    }
  }
}
