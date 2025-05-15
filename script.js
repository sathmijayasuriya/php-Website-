document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.getElementById("hamburger");
  const sidebar = document.getElementById("sidebar");
  const mainContent = document.getElementById("main-content");

  hamburger.addEventListener("click", function () {
    sidebar.classList.toggle("hidden");
    mainContent.classList.toggle("full-width");
  });
});
