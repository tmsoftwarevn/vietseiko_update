document.addEventListener("click", function () {
    var modal = document.getElementById("myModal");
    var openModalBtn = document.getElementById("openModalBtn");
    var openModalBtn_2 = document.getElementById("openModalBtn-2");
    var closeModalBtn = document.getElementById("closeModalBtn");

    openModalBtn.onclick = function () {
        modal.style.display = "block";
    };
    openModalBtn_2.onclick = function () {
        modal.style.display = "block";
    };
    closeModalBtn.onclick = function () {
        modal.style.display = "none";
    };

   
});