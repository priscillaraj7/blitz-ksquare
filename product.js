document.addEventListener("DOMContentLoaded", function () {
    let rows = document.querySelectorAll(".table tbody tr");
    
    rows.forEach((row, index) => {
        row.classList.add("animate__animated", "animate__fadeInUp");
        row.style.animationDelay = `${index * 0.2}s`; // Staggered animation effect
    });
});
