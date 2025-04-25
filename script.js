function toggleMenu() {
  const menu = document.querySelector(".menu-links");
  const icon = document.querySelector(".hamburger-icon");
  menu.classList.toggle("open");
  icon.classList.toggle("open");
}

// Get the "Login" nav link and the modal elements
const loginNavLink = document.querySelector('.nav-links li a[href="#login"]');
const loginModal = document.getElementById('login-modal');
const closeBtn = document.querySelector('.close-btn');

// Show the modal when the "Login" nav link is clicked
loginNavLink.addEventListener('click', (event) => {
  event.preventDefault(); // Prevent default anchor behavior
  loginModal.style.display = 'flex'; // Show the modal
});

// Hide the modal when the close button is clicked
closeBtn.addEventListener('click', () => {
  loginModal.style.display = 'none'; // Hide the modal
});

// Hide the modal when clicking outside the modal content
window.addEventListener('click', (event) => {
  if (event.target === loginModal) {
    loginModal.style.display = 'none'; // Hide the modal
  }
});