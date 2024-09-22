// Function to show the modal
function showLeadMagnetModal() {
    var modal = document.getElementById('leadMagnetModal');
    if (modal) {
      modal.style.display = 'flex';
    }
  }
  
  // Check if the modal should be shown
  function checkModalDisplay() {
    const lastShown = localStorage.getItem('leadMagnetModalLastShown');
    const now = new Date().getTime();
    
    // If lastShown is not set or it's been more than 60 days (60 * 24 * 60 * 60 * 1000 milliseconds)
    if (!lastShown || (now - lastShown) > 60 * 24 * 60 * 60 * 1000) {
      // Show the modal after 15 seconds
      setTimeout(showLeadMagnetModal, 15000);
    }
  }
  
  // Event listener for closing the modal
  function closeModal() {
    const modal = document.getElementById('leadMagnetModal');
    if (modal) {
      modal.style.display = 'none';
      // Store the current time as lastShown
      localStorage.setItem('leadMagnetModalLastShown', new Date().getTime());
    }
  }
  
  // Close buttons event listener
  var closeBtnsCustom = document.getElementsByClassName("close-custom");
  Array.from(closeBtnsCustom).forEach(button => {
    button.onclick = closeModal;
  });
  
  // Check modal display on page load
  window.onload = checkModalDisplay;
  