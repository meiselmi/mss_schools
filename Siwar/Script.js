
// Get form and input fields
const form = document.querySelector('form');
const firstNameInput = document.getElementById('fname');
const lastNameInput = document.getElementById('lname');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('number');
const jobInput = document.getElementById('fjob');
const questionInput = document.getElementById('question');
const questionOtherInput = document.getElementById('quest');

// Add event listener to form submit
form.addEventListener('submit', (e) => {
// Prevent form from submitting
e.preventDefault();

// Reset validation styles on all fields
firstNameInput.classList.remove('invalid');
lastNameInput.classList.remove('invalid');
emailInput.classList.remove('invalid');
phoneInput.classList.remove('invalid');
jobInput.classList.remove('invalid');
questionInput.classList.remove('invalid');
questionOtherInput.classList.remove('invalid');

// Validate first name input
if (firstNameInput.value.trim() === '') {
firstNameInput.classList.add('invalid');
}

// Validate last name input
if (lastNameInput.value.trim() === '') {
lastNameInput.classList.add('invalid');
}

// Validate email input
const emailRegex = /^\S+@\S+\.\S+$/;
if (!emailRegex.test(emailInput.value)) {
emailInput.classList.add('invalid');
}

// Validate phone number input
const phoneRegex = /^\d{10}$/;
if (!phoneRegex.test(phoneInput.value)) {
phoneInput.classList.add('invalid');
}

// Validate job input
if (jobInput.value.trim() === '') {
jobInput.classList.add('invalid');
}

// Validate question input
if (questionInput.value === 'Autre' && questionOtherInput.value.trim() === '') {
questionOtherInput.classList.add('invalid');
}

// Check if any fields are invalid
const invalidFields = document.querySelectorAll('.invalid');
if (invalidFields.length === 0) {
// Submit form
form.submit();
}
});

