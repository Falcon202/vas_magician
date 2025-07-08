
var myModal = document.getElementById("myModal");
var modalImg = document.getElementById("img01");
var closeBigImage = document.getElementById("closeBigImage");

closeBigImage.addEventListener('click', closeModal)


function showModalImg(source){
    myModal.style.display = "block";
    modalImg.src = source;
}

document.addEventListener('keydown', function(event) {
    if (event.key === "Escape") {
        closeModal();
    }
});

window.onclick = function(event) {
    if (event.target === myModal) {
        closeModal();
    }
}

function closeModal(){
    myModal.style.display = "none";
}
