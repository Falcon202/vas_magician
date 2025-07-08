

const modal = document.getElementById("modal");
const closeBtn = document.getElementsByClassName("close-btn")[0];
const cancelDelete = document.getElementById("cancelDelete");
const inputId = document.getElementById("id");


closeBtn.onclick = function() {
    modal.style.display = "none";
}

cancelDelete.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
}

function showModalWindow(id){
    modal.style.display = "flex";
    inputId.value = id;
}
