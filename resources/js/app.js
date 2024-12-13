import './bootstrap';
import { initializeSearchPerson } from './person-search';

// Initialize search functionality when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initializeSearchPerson();
});

document.addEventListener('DOMContentLoaded', function() {
    const editLinks = document.querySelectorAll('.edit-link');
    const typeModal = document.getElementById('typeModal');
    const typeNameInput = document.getElementById('typeName');
    const typeStatusSelect = document.getElementById('typeStatus');
    const typeIdInput = document.createElement('input');
    typeIdInput.type = 'hidden';
    typeIdInput.name = 'typeId';
    typeModal.querySelector('form').appendChild(typeIdInput);

    editLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const name = this.getAttribute('data-name');
            const status = this.getAttribute('data-status');
            const id = this.getAttribute('data-id');

            typeNameInput.value = name;
            typeStatusSelect.value = status;
            typeIdInput.value = id;

            typeModal.classList.add('active'); // Show the modal
        });
    });

    // Close modal functionality
    document.querySelector('.close-modal').addEventListener('click', function() {
        typeModal.classList.remove('active');
    });
});