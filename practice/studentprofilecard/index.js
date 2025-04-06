document.getElementById('registrationForm').addEventListener('submit', function (e) {
  let isValid = true;
  const fields = ['studentId', 'name', 'email', 'course', 'address', 'phone'];

  fields.forEach(field => {
    document.getElementById(field + 'Error').textContent = '';
    const value = document.getElementById(field).value.trim();
    if (!value) {
      document.getElementById(field + 'Error').textContent =
        `Please enter ${field.replace(/([A-Z])/g, ' $1').toLowerCase()}`;
      isValid = false;
    }
  });

  const email = document.getElementById('email').value.trim();
  if (email && !email.endsWith('@gmail.com')) {
    document.getElementById('emailError').textContent = 'Email must end with @gmail.com';
    isValid = false;
  }

  const phone = document.getElementById('phone').value.trim();
  if (phone && !/^\d{11}$/.test(phone)) {
    document.getElementById('phoneError').textContent = 'Phone must be exactly 11 digits';
    isValid = false;
  }

  // if (!isValid) {
  //   e.preventDefault(); // ❗ Only prevent if invalid
  // }
});
