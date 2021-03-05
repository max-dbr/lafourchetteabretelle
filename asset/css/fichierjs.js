const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});


let humbergerImage = document.getElementById("humbergerImage");
function afficher(){
	menuHumberger.style.display = "block";
  }

  function masquer(){
	menuHumberger.style.display = "none";
  }