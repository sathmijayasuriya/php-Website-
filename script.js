document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.getElementById("hamburger");
  const sidebar = document.getElementById("sidebar");
  const mainContent = document.getElementById("main-content");

  hamburger.addEventListener("click", function () {
    sidebar.classList.toggle("hidden");
    mainContent.classList.toggle("full-width");
  });
});

document.querySelector('.back-to-top').addEventListener('click', function (e) {
  e.preventDefault(); 
  window.scrollTo({
    top: 0,
    behavior: 'smooth', // scrolling
  });
});