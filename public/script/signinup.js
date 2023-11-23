const toggleForm = (page) => {
  const container = document.querySelector('.container-signinup');
  container.classList.toggle('active');

  // Use window.location.href to navigate to the specified page
  window.location.href = page;
};

function togglePasswordVisibility(passwordInputId, showPasswordId, hidePasswordId) {
  const passwordInput = document.getElementById(passwordInputId);
  const showPassword = document.getElementById(showPasswordId);
  const hidePassword = document.getElementById(hidePasswordId);

  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    showPassword.style.display = 'none';
    hidePassword.style.display = 'inline';
  } else {
    passwordInput.type = 'password';
    showPassword.style.display = 'inline';
    hidePassword.style.display = 'none';
  }
}
