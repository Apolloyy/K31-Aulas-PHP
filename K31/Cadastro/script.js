var password = document.getElementById("password");
var img = document.getElementById("eye");

eye.addEventListener("click", function () {
  if (password.value != "") {
    verifyPassword();
  } else {
    imageSet();
  }
});

const verifyPassword = () => {
  if (password.type == "password") {
    password.type = "text";
    eye.src = "images/eye-slash-solid.svg";
  } else {
    password.type = "password";
    eye.src = "images/eye-solid.svg";
  }
};

const imageSet = () => {
  eye.src = "images/eye-solid.svg";
};


