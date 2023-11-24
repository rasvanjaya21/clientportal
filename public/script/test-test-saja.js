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
  
  function togglePasswordIcon(passwordInputId, showPasswordId, hidePasswordId) {
    const passwordInput = document.getElementById(passwordInputId);
    const showPassword = document.getElementById(showPasswordId);
    const hidePassword = document.getElementById(hidePasswordId);
  
    if (passwordInput.value !== '') {
      passwordInput.type = 'password';
      showPassword.style.display = 'inline';
      hidePassword.style.display = 'none';
    } else {
      passwordInput.type = 'text';
      showPassword.style.display = 'none';
      hidePassword.style.display = 'inline';
    }
  }
  
  // Attach event listeners and call the function once on page load for each password input
  const passwordInputRegCre = document.getElementById('passwordInputRegCre');
  const showPasswordRegCre = document.getElementById('showPasswordRegCre');
  const hidePasswordRegCre = document.getElementById('hidePasswordRegCre');
  
  passwordInputRegCre.addEventListener('input', () => togglePasswordIcon('passwordInputRegCre', 'showPasswordRegCre', 'hidePasswordRegCre'));
  togglePasswordIcon('passwordInputRegCre', 'showPasswordRegCre', 'hidePasswordRegCre');
  
  const passwordInputReg = document.getElementById('passwordInputReg');
  const showPasswordReg = document.getElementById('showPasswordReg');
  const hidePasswordReg = document.getElementById('hidePasswordReg');
  
  passwordInputReg.addEventListener('input', () => togglePasswordIcon('passwordInputReg', 'showPasswordReg', 'hidePasswordReg'));
  togglePasswordIcon('passwordInputReg', 'showPasswordReg', 'hidePasswordReg');
  