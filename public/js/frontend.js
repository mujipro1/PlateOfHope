// document.addEventListener('DOMContentLoaded', function() {
//     var sections = document.querySelectorAll('section');
//     var options = {
//       rootMargin: '0px',
//       threshold: 0.2
//     };
  
//     var observer = new IntersectionObserver(function(entries) {
//       entries.forEach(function(entry) {
//         if (entry.isIntersecting) {
//           var targetSection = entry.target;
//           var sectionId = targetSection.getAttribute('id');
//           history.replaceState(null, null, '#' + sectionId);
//         }
//       });
//     }, options);
  
//     sections.forEach(function(section) {
//       observer.observe(section);
//     });
//   });
  

document.addEventListener('DOMContentLoaded', function() {
    var aboutUsCard = document.getElementById('aboutUsCard');
    var targetSection = document.getElementById('aboutUs');
  
    aboutUsCard.addEventListener('click', function() {
      targetSection.scrollIntoView({ behavior: 'smooth' });
    });
  });
  