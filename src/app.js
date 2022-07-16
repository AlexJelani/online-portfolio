var data = {
  "english": {
    "name": "Jelani Alexander"
  },
  "japanese": {
    "name": "ジェラーニ　アレキサンダー"
  }




}


const langEL = document.querySelector('.langWrap');
const link = document.querySelectorAll('a');
const nameEL = document.querySelector('.name');

link.forEach(el => {
  el.addEventListener('click', () => {
    langEL.querySelector('.active').classList.remove('active');

    el.classList.add('active');

    const attr = el.getAttribute('language');

    nameEL.textContent = data[attr].name;
  });
});



const hamburgerButton = document.getElementById("hamburger");
const navList = document.getElementById("nav-list");

function toggleButton() {
  navList.classList.toggle('show')
}

hamburgerButton.addEventListener('click', toggleButton)
