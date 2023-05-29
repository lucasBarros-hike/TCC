let body = document.body;
let logo = document.getElementById('logo');

let searchForm = document.querySelector('.header .flex .busca-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    profile.classList.remove('active');
}

let sideBar = document.querySelector(' .sidebar');

document.querySelector('#menu-btn').onclick = () =>{
    sideBar.classList.toggle('active');
    body.classList.toggle('active');
    const menuIcon = document.querySelector('#menu-btn');

    if (sideBar.classList.contains('active')) {
        menuIcon.classList.replace('fa-times', 'fa-bars');
    } else {
        menuIcon.classList.replace('fa-bars', 'fa-times');
    }
}

document.querySelector('.sidebar .close-sidebar').onclick = () =>{
    sideBar.classList.remove('active');
    body.classList.remove('active');
}

window.onscroll = () =>{
    profile.classList.remove('active');
    searchForm.classList.remove('active');
    
    if(window.innerWidth < 1200){
      searchForm.classList.toggle('active');
      profile.classList.remove('active');
    }
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








