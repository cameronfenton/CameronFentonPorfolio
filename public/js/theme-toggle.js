/******/ (() => { // webpackBootstrap
/*!**************************************!*\
  !*** ./resources/js/theme-toggle.js ***!
  \**************************************/
document.addEventListener('DOMContentLoaded', function () {
  var toggleButton = document.getElementById('theme-toggle');
  var currentTheme = localStorage.getItem('theme');
  console.log("Current theme: ", currentTheme);
  // Apply the stored theme on page load
  if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);
    if (currentTheme === 'light') {
      document.body.classList.add('light-mode');
    }
  }

  // Toggle theme and update localStorage
  toggleButton.addEventListener('click', function () {
    var isLight = document.body.classList.toggle('light-mode');
    var theme = isLight ? 'light' : 'dark';
    localStorage.setItem('theme', theme);

    // Apply the `data-theme` attribute for styling
    document.documentElement.setAttribute('data-theme', theme);
  });
});
/******/ })()
;