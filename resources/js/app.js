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

            // Populate the modal inputs with the data
            typeNameInput.value = name;
            typeStatusSelect.value = status;
            typeIdInput.value = id;

            // Show the modal
            typeModal.classList.add('active');
        });
    });

    // Close modal functionality
    document.querySelector('.close-modal').addEventListener('click', function() {
        typeModal.classList.remove('active');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirmPassword');
    
    passwordInput.addEventListener('input', function() {
        const value = this.value;
        let errorMessage = '';
        
        if (value.length < 8) {
            errorMessage = 'Password must be at least 8 characters long';
        }
        
        // Show error message if exists
        let errorDiv = this.parentElement.querySelector('.error-message');
        if (!errorDiv) {
            errorDiv = document.createElement('div');
            errorDiv.className = 'error-message';
            this.parentElement.appendChild(errorDiv);
        }
        errorDiv.textContent = errorMessage;
        
        // Add/remove error class
        this.parentElement.classList.toggle('has-error', errorMessage !== '');
    });
    
    // Check password confirmation
    confirmPasswordInput.addEventListener('input', function() {
        const errorDiv = this.parentElement.querySelector('.error-message') || 
                        document.createElement('div');
        errorDiv.className = 'error-message';
        
        if (this.value !== passwordInput.value) {
            errorDiv.textContent = 'Passwords do not match';
            this.parentElement.classList.add('has-error');
        } else {
            errorDiv.textContent = '';
            this.parentElement.classList.remove('has-error');
        }
        
        if (!this.parentElement.querySelector('.error-message')) {
            this.parentElement.appendChild(errorDiv);
        }
    });
});