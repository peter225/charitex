// Form validation
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('applicationForm');
  
    form.addEventListener('submit', function(event) {
      event.preventDefault();
  
      // Basic form validation
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const reason = document.getElementById('reason').value;
  
      if (!name || !email || !reason) {
        alert('Please fill in all fields.');
      } else {
        // Simulate form submission (can be replaced with actual submission logic)
        alert('Application submitted successfully!');
        form.reset();
      }
    });
  });
  