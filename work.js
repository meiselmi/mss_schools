// This script is optional, it just adds a "active" class to the currently active link
var links = document.querySelectorAll('nav ul li a');

for (var i = 0; i < links.length; i++) {
  if (links[i].href === window.location.href) {
    links[i].classList.add('active');
    break;
  }
}
