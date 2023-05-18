document.addEventListener('DOMContentLoaded', function() {
    var aboutUsCard = document.getElementById('aboutUsCard');
    var targetSection = document.getElementById('aboutUs');
  
    aboutUsCard.addEventListener('click', function() {
      targetSection.scrollIntoView({ behavior: 'smooth' });
    });
  });
  