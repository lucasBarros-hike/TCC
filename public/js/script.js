let body = document.body;
let logo = document.getElementById('logo');

let searchForm = document.querySelector('.header .flex .busca-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    profile.classList.remove('active');
}


window.onscroll = () =>{
    profile.classList.remove('active');
    searchForm.classList.remove('active');
}

window.onload = function() {
    var links = document.querySelectorAll(".navbar .flex a");
  
    for (var i = 0; i < links.length; i++) {
      if (links[i].href == window.location.href) {
        links[i].classList.add("active");
      } else {
        links[i].classList.remove("active");
      }
    }
  };

let toggleBtn = document.querySelector('#toggle-btn');
let darkMode = localStorage.getItem('dark-mode');

const enableDarkMode = () =>{
  toggleBtn.classList.replace('fa-sun', 'fa-moon');
  body.classList.add('dark');
  logo.setAttribute('src', 'http://127.0.0.1:8000/images/dark_volpe.png')
  localStorage.setItem('dark-mode', 'enabled');
}

const disableDarkMode = () =>{
  toggleBtn.classList.replace('fa-moon', 'fa-sun');
  body.classList.remove('dark');
  logo.setAttribute('src', 'http://127.0.0.1:8000/images/light_volpe.png')
  localStorage.setItem('dark-mode', 'disabled');
}

if(darkMode === 'enabled'){
  enableDarkMode();
}
toggleBtn.onclick = (e) =>{
  let darkMode = localStorage.getItem('dark-mode');
  if(darkMode === 'disabled'){
    enableDarkMode();
  }else{
    disableDarkMode();
  }
}

