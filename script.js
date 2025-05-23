function toggleMenu() {
  const menu = document.querySelector(".menu-links");
  const icon = document.querySelector(".hamburger-icon");
  menu.classList.toggle("open");
  icon.classList.toggle("open");
}



// // Get the "Login" nav link and the modal elements
// const loginNavLink = document.querySelector('.nav-links li a[href="#login"]');
// const loginModal = document.getElementById('login-modal');
// const closeBtn = document.querySelector('.close-btn');

// // Show the modal when the "Login" nav link is clicked
// loginNavLink.addEventListener('click', (event) => {
//   event.preventDefault(); // Prevent default anchor behavior
//   loginModal.style.display = 'flex'; // Show the modal
// });

// // Hide the modal when the close button is clicked
// closeBtn.addEventListener('click', () => {
//   loginModal.style.display = 'none'; // Hide the modal
// });

// // Hide the modal when clicking outside the modal content
// window.addEventListener('click', (event) => {
//   if (event.target === loginModal) {
//     loginModal.style.display = 'none'; // Hide the modal
//   }
// });

// function openLoginModal() {
//   const modal = document.getElementById('login-modal');
//   modal.style.display = 'block';
// }

// function closeLoginModal() {
//   const modal = document.getElementById('login-modal');
//   modal.style.display = 'none';
// }

// document.addEventListener("DOMContentLoaded", () => {
//   const loginBtn = document.getElementById("login-btn");
//   const registerBtn = document.getElementById("register-btn");
//   const loginModal = document.getElementById("login-modal");
//   const registerModal = document.getElementById("register-modal");
//   const closeBtns = document.querySelectorAll(".close-btn");

//   // Open the login modal
//   loginBtn.addEventListener("click", (e) => {
//       e.preventDefault();
//       loginModal.style.display = "flex";
//   });

//   // Open the register modal
//   registerBtn.addEventListener("click", (e) => {
//       e.preventDefault();
//       registerModal.style.display = "flex";
//   });

//   // Close modals
//   closeBtns.forEach((btn) => {
//       btn.addEventListener("click", () => {
//           loginModal.style.display = "none";
//           registerModal.style.display = "none";
//       });
//   });

//   // Close modals when clicking outside the modal content
//   window.addEventListener("click", (e) => {
//       if (e.target === loginModal) {
//           loginModal.style.display = "none";
//       }
//       if (e.target === registerModal) {
//           registerModal.style.display = "none";
//       }
//   });
// });


// // Close modal when clicking outside of it
// window.onclick = function(event) {
//   const modal = document.getElementById('login-modal');
//   if (event.target === modal) {
//     modal.style.display = 'none';
//   }
// };

// document.addEventListener("DOMContentLoaded", () => {
//   if (window.location.hash === "#login") {
//       openLoginModal(); // Ensure this function is defined to open the login modal
//   }
// });

