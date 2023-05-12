function showSection(section) {
    // hide all sections
    var sections = document.querySelectorAll('section');
    for (var i = 0; i < sections.length; i++) {
      sections[i].style.display = 'none';
    }
  
    // show selected section
    document.getElementById(section + '-section').style.display = 'block';
  
    // update active class on navbar links
    var navLinks = document.querySelectorAll('nav a');
    for (var i = 0; i < navLinks.length; i++) {
      if (navLinks[i].getAttribute('onclick') == 'showSection("' + section + '")') {
        navLinks[i].classList.add('active');
      } else {
        navLinks[i].classList.remove('active');
      }
    }
}

