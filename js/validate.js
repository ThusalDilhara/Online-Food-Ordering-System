function validateForm() {
  // Regular expressions for validation
  var nameValidate = /^[A-Za-z\s]+$/; // Allows only letters and spaces for the name
  var mailValidate = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/; // Validates standard email format
  var passwordValidate = /^[A-Za-z0-9]+$/; // Allows only letters and numbers for the password

  // Validate Email Field
  const email = document.getElementById("email").value;
  if (email == "") {
    alert("Please Enter the Email!");
    return false;
  } else if (!email.match(mailValidate)) {
    alert("You Have entered an invalid Email!");
    return false;
  }

  // Validate Password Field
  const password = document.getElementById("password").value;
  if (password == "") {
    alert("Please Enter the Password!");
    return false;
  } else if (password.length <= 8) {
    alert(
      "You Have entered an invalid format! It should be at least 8 characters long, containing at least one uppercase letter, one lowercase letter, and one number"
    );
    return false;
  } else if (!password.match(passwordValidate)) {
    alert(
      "You Have entered an invalid format! It should be at least 8 characters long, containing at least one uppercase letter, one lowercase letter, and one number"
    );
    return false;
  }

  // Validate Confirm Password Field
  const confirmPassword = document.getElementById("confirmPassword").value;
  if (confirmPassword == "") {
    alert("Please Enter the Confirm Password!");
    return false;
  } else if (confirmPassword != password) {
    alert("Passwords do not match");
    return false;
  }
  const phoneNo = document.getElementById('phoneNo').value;
	const phonePattern = /^[0-9]{10}$/;
  if (!phonePattern.test(phoneNo)) {
    alert("Please enter a valid 10-digit phone number.");
    return false;
    }
	

	// Ensure feedback is not empty
	const feedback = document.getElementById('feedback').value.trim();
	if (feedback === "") {
		alert("Please enter your feedback.");
		return false;
	}

 //write a addition code
  


 

  // If all validations pass, return true to allow form submission
  return true;
}