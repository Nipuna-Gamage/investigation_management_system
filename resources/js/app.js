import './bootstrap';
import { initializeSearchPerson } from './person-search';

// Initialize search functionality when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initializeSearchPerson();
});