// Add animations on scroll
document.addEventListener('DOMContentLoaded', function () {
    const animatedElements = document.querySelectorAll('.animate__animated');
  
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate__fadeInUp');
          observer.unobserve(entry.target);
        }
      });
    });
  
    animatedElements.forEach((element) => {
      observer.observe(element);
    });
  });