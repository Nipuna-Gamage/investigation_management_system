console.log('Edit officers script loaded');

document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM Content Loaded');
    
    const form = document.querySelector('.edit-officer-form');
    console.log('Form found:', form);

    const selectButton = document.querySelector('.btn-select');
    console.log('Select button found:', selectButton);

    const officerSelect = document.getElementById('officerSelect');
    console.log('Officer select found:', officerSelect);

    // Handle officer selection
    selectButton.addEventListener('click', async function() {
        console.log('Select button clicked');
        const officerId = officerSelect.value;
        console.log('Selected officer ID:', officerId);

        if (!officerId) {
            alert('Please select an officer');
            return;
        }

        try {
            console.log('Fetching officer data for ID:', officerId); // Debug log
            const response = await fetch(`/settings/officers/${officerId}`, {
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });
            
            if (!response.ok) {
                throw new Error('Failed to fetch officer details');
            }

            const data = await response.json();
            console.log('Received officer data:', data); // Debug log
            
            // Populate form fields with officer data
            document.getElementById('userName').value = data.user_name || '';
            console.log('Set userName to:', data.user_name); // Debug log
            
            document.getElementById('officerName').value = data.name || '';
            console.log('Set officerName to:', data.name); // Debug log
            
            document.getElementById('subjectCode').value = data.subject_code || '';
            document.getElementById('post').value = data.post || '';
            document.getElementById('groupName').value = data.group_id || '';
            document.getElementById('staffLevel').value = data.staff_level || 'no';
            document.getElementById('phone').value = data.phone || '';

            // Enable form fields after data is populated
            enableFormFields();

        } catch (error) {
            console.error('Error:', error);
            alert('Error fetching officer details');
        }
    });

    // Helper function to enable form fields
    function enableFormFields() {
        const formInputs = form.querySelectorAll('input, select');
        formInputs.forEach(input => {
            input.removeAttribute('disabled');
        });
    }

    // Helper function to disable form fields
    function disableFormFields() {
        const formInputs = form.querySelectorAll('input, select');
        formInputs.forEach(input => {
            input.setAttribute('disabled', 'disabled');
        });
    }

    // Initially disable form fields until an officer is selected
    disableFormFields();

    // Handle form submission
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        const officerId = officerSelect.value;

        if (!officerId) {
            alert('Please select an officer first');
            return;
        }

        try {
            const formData = {
                userName: document.getElementById('userName').value,
                officerName: document.getElementById('officerName').value,
                subjectCode: document.getElementById('subjectCode').value,
                post: document.getElementById('post').value,
                groupName: document.getElementById('groupName').value,
                staffLevel: document.getElementById('staffLevel').value,
                phone: document.getElementById('phone').value,
            };

            const response = await fetch(`/settings/officers/${officerId}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(formData)
            });

            const result = await response.json();

            if (response.ok) {
                alert('Officer updated successfully');
                // Optionally refresh the page or clear the form
                window.location.reload();
            } else {
                throw new Error(result.error || 'Failed to update officer');
            }

        } catch (error) {
            console.error('Error:', error);
            alert(error.message || 'Error updating officer');
        }
    });

    // Handle reset button
    document.querySelector('.btn-reset').addEventListener('click', function(e) {
        if (confirm('Are you sure you want to reset all fields?')) {
            form.reset();
        } else {
            e.preventDefault();
        }
    });

    // Handle cancel button
    document.querySelector('.btn-cancel').addEventListener('click', function() {
        if (confirm('Are you sure you want to cancel? Any unsaved changes will be lost.')) {
            window.location.href = '/settings';
        }
    });
});
