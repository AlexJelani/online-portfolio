var data = {
  "english": {
    "name": "Jelani Alexander",
    "job": "Full Stack Developer"
  },
  "japanese": {
    "name": "ジェラーニ　アレキサンダー",
    "job": "フルスタックエンジニア"
  }




}


const langEL = document.querySelector('.langWrap');
const link = document.querySelectorAll('a');
const nameEL = document.querySelector('.name');
const titleEL = document.querySelector('.job');


link.forEach(el => {
  el.addEventListener('click', () => {
    langEL.querySelector('.active').classList.remove('active');

    el.classList.add('active');

    const attr = el.getAttribute('language');

    nameEL.textContent = data[attr].name;
    titleEL.textContent = data[attr].job;
  });
});



const hamburgerButton = document.getElementById("hamburger");
const navList = document.getElementById("nav-list");

function toggleButton() {
  navList.classList.toggle('show')
}

hamburgerButton.addEventListener('click', toggleButton)
