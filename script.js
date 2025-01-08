// Functia pentru a verifica vizibilitatea secțiunilor
function checkVisibility() {
    const sections = document.querySelectorAll('section');
    
    sections.forEach(section => {
        const rect = section.getBoundingClientRect();
        if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
            section.classList.add('visible');
        } else {
            section.classList.remove('visible');
        }
    });
}

// Verifică vizibilitatea secțiunilor când pagina este încărcată și la fiecare scroll
window.addEventListener('scroll', checkVisibility);
window.addEventListener('load', checkVisibility);
