document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contact-form");
  
    form.addEventListener("submit", function (e) {
      let valid = true;
  

      document.querySelectorAll(".error-message").forEach(el => el.textContent = "");
  
      const name = document.getElementById("name");
      const email = document.getElementById("email");
      const message = document.getElementById("message");
  
      if (name.value.trim() === "") {
        document.getElementById("name-error").textContent = "Please enter your name.";
        valid = false;
      }
  
      if (email.value.trim() === "") {
        document.getElementById("email-error").textContent = "Please enter your email.";
        valid = false;
      } else if (!email.value.includes("@")) {
        document.getElementById("email-error").textContent = "Please enter a valid email address.";
        valid = false;
      }
  
      if (message.value.trim() === "") {
        document.getElementById("message-error").textContent = "Please enter a message.";
        valid = false;
      }

      if (valid) {
        e.preventDefault();
      
        const successBox = document.getElementById("success-box");
        successBox.classList.remove("hidden");
      
        form.reset();
      }
    });
  }); 