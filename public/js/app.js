const nextButton = document.getElementById('next');
const prevButton = document.getElementById('prev');
const carousel = document.querySelector('.carousel');
const listHTML = document.querySelector('.carousel .list');
const seeMore = document.querySelector('.seeMore');

function gotoLink(button) {
    let url = button.value;
    if (url !== '') {
        window.location.href = url;   
    } else {
        alert('Cette page n\'est pas accéssible');
        window.location.href = index.php;
    }
}

nextButton.onclick = function () {
  showSlider("next");
};
prevButton.onclick = function () {
  showSlider("prev");
};
let unAcceptClick;
const showSlider = (type) => {
  nextButton.style.pointerEvents = "none";
  prevButton.style.pointerEvents = "none";
  carousel.classList.remove("prev", "next");
  const items = document.querySelectorAll(".carousel .list .item");
  if (type === "next") {
    listHTML.appendChild(items[0]); // envoie le premier element à la fin de la liste
    carousel.classList.add("next");
  } else {
    const positionLast = items.length - 1;
    listHTML.prepend(items[positionLast]);
    carousel.classList.add("prev");
  }
  clearTimeout(unAcceptClick);
  unAcceptClick = setTimeout(() => {
    nextButton.style.pointerEvents = "auto";
    prevButton.style.pointerEvents = "auto";
  }, 200);
};