var data = {
  "english": {
    "name": "Jelani Alexander",
    "job": "Full Stack Developer",
    "about": "About me"
  },
  "japanese": {
    "name": "アレキサンダー ジェラーニ　",
    "job": "フルスタックエンジニア",
    "about": "私について"
  }




}


const langEL = document.querySelector('.langWrap');
const link = document.querySelectorAll('#button_lang');
const nameEL = document.querySelector('.name');
const titleEL = document.querySelector('.job');
const aboutEL = document.querySelector('.about');



link.forEach(el => {
  el.addEventListener('click', () => {
    langEL.querySelector('.active').classList.remove('active');

    el.classList.add('active');

    const attr = el.getAttribute('language');

    nameEL.textContent = data[attr].name;
    titleEL.textContent = data[attr].job;
    aboutEL.textContent = data[attr].about;
  });
});



const hamburgerButton = document.getElementById("hamburger");
const navList = document.getElementById("nav-list");

function toggleButton() {
  navList.classList.toggle('show')
}

hamburgerButton.addEventListener('click', toggleButton)
