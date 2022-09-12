//TODO

//Change Jquery to here https://codepen.io/erikkjon88/pen/MGWzwV
//add active button to languagechange button https://stackoverflow.com/questions/41476916/jquery-make-pressed-button-active-and-all-other-buttons-inactive
//Add email to main by merge



var arrLang = {
  "en-gb": {
    ABOUT: "About me",
    PROJECT: "Projects",
    CONTACT: "Contact",
    NAME: "Jelani Alexander",
    JOB:"Full Stack Developer",
    ABOUTME:""
    
  },
  "zh-tw": {
    ABOUT: "私について",
    PROJECT: "プロジェクト",
    CONTACT: "連絡",
    NAME: "アレキサンダー　ジェラーニ",
    JOB:"フルスタックエンジニア",
    ABOUTME:""
  }
};

$(document).ready(function () {
  // The default language is English
  var lang = "en-gb";
  $(".lang").each(function (index, element) {
    $(this).text(arrLang[lang][$(this).attr("key")]);
  });
});

// get/set the selected language
$(".translate").click(function () {
  var lang = $(this).attr("id");
  $(".translate").removeClass("active").addClass("inactive");
  $(this).removeClass("inactive").addClass("active");

  $(".lang").each(function (index, element) {
    $(this).text(arrLang[lang][$(this).attr("key")]);
  });
});




const hamburgerButton = document.getElementById("hamburger");
const navList = document.getElementById("nav-list");

function toggleButton() {
  navList.classList.toggle('show')
}

hamburgerButton.addEventListener('click', toggleButton)
