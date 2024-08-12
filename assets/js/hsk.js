// hsk.js

document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling to anchor links
    const smoothScroll = (e) => {
        e.preventDefault();
        const targetId = e.currentTarget.getAttribute('href');
        document.querySelector(targetId).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', smoothScroll);
    });

    // Example animation effect on form inputs
    document.querySelectorAll('form input').forEach(input => {
        input.addEventListener('focus', function() {
            this.style.boxShadow = '0 0 8px rgba(0, 123, 255, 0.5)';
        });
        input.addEventListener('blur', function() {
            this.style.boxShadow = 'none';
        });
    });
});
