var parent = document.querySelector(".modal-parent"),
    btn = document.querySelector("button"),
    exit = document.querySelector(".exit");

    section = document.querySelector("section");
    
   
    btn.addEventListener("click", appear);

    function appear() {
        parent.style.display = "block";
        section.style.filter = "blur(10px)"; // làm mờ
    }

    exit.addEventListener("click",out);

    function out() {
        parent.style.display = "none";
        section.style.filter = "blur(0px)";
    }