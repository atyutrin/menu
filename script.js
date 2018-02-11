window.onload = function () {
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var symbol = this.getElementsByTagName('span');
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                symbol[0].innerHTML = "+";
                dropdownContent.style.display = "none";
            } else {
                symbol[0].innerHTML = "-";
                dropdownContent.style.display = "block";
            }
        });
    }
};

