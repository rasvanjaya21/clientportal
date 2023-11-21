const toggleForm = (page) => {
  const container = document.querySelector('.container-signinup');
  container.classList.toggle('active');

  // Use window.location.href to navigate to the specified page
  window.location.href = page;
};
