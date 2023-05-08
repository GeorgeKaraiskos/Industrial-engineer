window.addEventListener('scroll', function () {
    var header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 0);
});
// JavaScript for Contact Me form submission

document.querySelector("form").addEventListener("submit", function (e) {
  e.preventDefault(); // Prevent form submission

  // Get form values
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;

  // Here, you can perform any validation or send the form data to a server

  // Clear form fields
    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
  document.getElementById("message").value = "";
  clearFormFields();
  // Show success message or perform any desired action
  alert("Thank you for your message! We will get back to you soon.");
});
