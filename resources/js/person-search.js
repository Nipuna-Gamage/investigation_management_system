export function initializeSearchPerson() {
    const searchBtn = document.querySelector('.search-btn');
    const resultsList = document.getElementById('resultsList');
    const searchInput = document.getElementById('searchInput');

    if (searchBtn && resultsList && searchInput) {
        searchBtn.addEventListener('click', async function(e) {
            e.preventDefault();
            
            // Show loading state
            resultsList.innerHTML = '<div class="loading">Searching...</div>';
            
            try {
                const response = await fetch(`/api/person/search?query=${searchInput.value}`, {
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const data = await response.json();

                if (data.length === 0) {
                    resultsList.innerHTML = `
                        <div class="no-results">
                            <i class="fas fa-search"></i>
                            <p>No results found</p>
                        </div>
                    `;
                    return;
                }

                // Display results
                resultsList.innerHTML = data.map(result => `
                    <div class="result-item">
                        <div class="result-header">
                            <h3>${result.name}</h3>
                            <span class="status-badge ${result.status.toLowerCase()}">
                                ${result.status}
                            </span>
                        </div>
                        <div class="result-details">
                            <p><i class="fas fa-id-card"></i> <strong>NIC:</strong> ${result.nic}</p>
                            <p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> ${result.address}</p>
                        </div>
                        <div class="result-meta">
                            <span><i class="fas fa-calendar"></i> ${result.date}</span>
                            <div class="result-actions">
                                <button class="btn-view" onclick="viewPerson('${result.id}')">
                                    <i class="fas fa-eye"></i> View
                                </button>
                                <button class="btn-edit" onclick="editPerson('${result.id}')">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                            </div>
                        </div>
                    </div>
                `).join('');

            } catch (error) {
                resultsList.innerHTML = `
                    <div class="error-message">
                        <i class="fas fa-exclamation-circle"></i>
                        <p>An error occurred while searching. Please try again.</p>
                    </div>
                `;
                console.error('Search error:', error);
            }
        });

        // Add keypress event for search input
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                searchBtn.click();
            }
        });
    }
}

// Add to window object for onclick handlers
window.viewPerson = function(id) {
    window.location.href = `/person/${id}`;
}

window.editPerson = function(id) {
    window.location.href = `/person/${id}/edit`;
} 