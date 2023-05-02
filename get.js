const donateButton = document.getElementById('donate-button');
const donationForm = document.getElementById('donation-form');

donateButton.addEventListener('click', () => {
  donationForm.style.display = 'block';
});
