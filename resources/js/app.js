import './bootstrap';

// Submenu toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const submenuParents = document.querySelectorAll('.has-submenu');
    
    submenuParents.forEach(parent => {
        parent.addEventListener('click', function(e) {
            this.classList.toggle('open');
        });
    });
});
