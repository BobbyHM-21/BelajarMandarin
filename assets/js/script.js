document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-10px)';
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
        });
    });
});
// Tunggu sampai DOM siap
document.addEventListener('DOMContentLoaded', function () {

    // Efek fade-in untuk elemen yang menampilkan data
    const table = document.querySelector('.table');
    if (table) {
        table.classList.add('fade-in');
    }

    // Efek slide-up untuk form tambah data
    const addForm = document.querySelector('form');
    if (addForm) {
        addForm.classList.add('slide-up');
    }

});
