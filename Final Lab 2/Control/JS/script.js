function validateFirstName() {
  if (document.querySelector('input[name="fname"]').value == ""){
    document.getElementById('firstnameerror').innerHTML='Input Field cannot be empty';
    return false;
  }
  else if (/^[a-zA-Z]+$/.test(document.querySelector('input[name="fname"]').value) == false){
    document.getElementById('firstnameerror').innerHTML="Name cannot contain any number or symbol";
    return false;
  }
  else {
    document.getElementById("firstnameerror").innerHTML="";
    return true;
  }
}

function validateLastName() {
  if (document.querySelector('input[name="lname"]').value == ""){
    document.getElementById('lastnameerror').innerHTML='Input Field cannot be empty';
    return false;
  }
  else if (/^[a-zA-Z]+$/.test(document.querySelector('input[name="lname"]').value) == false){
    document.getElementById('lastnameerror').innerHTML="Name cannot contain any number or symbol";
    return false;
  }
  else {
    document.getElementById("lastnameerror").innerHTML="";
    return true;
  }
}

function validateAge() {
  if (document.querySelector('input[name="age"]').value == ""){
    document.getElementById('ageerror').innerHTML='Input Field cannot be empty';
    return false;
  }
  else if (/^[0-9]+$/.test(document.querySelector('input[name="age"]').value) == false){
    document.getElementById('ageerror').innerHTML="Age must be in number format";
    return false;
  }
  else if (document.querySelector('input[name="age"]').value < 15 || document.querySelector('input[name="age"]').value > 70 ){
    document.getElementById('ageerror').innerHTML="Invalid Age";
    return false;
  }
  else {
    document.getElementById("ageerror").innerHTML="";
    return true;
  }
}

function validateDesignation() {
  if (document.querySelectorAll('input[type="radio"]:checked').length == 0){
    document.getElementById('designationerror').innerHTML='Please Select a designation';
    return false;
  }
  else {
    document.getElementById("designationerror").innerHTML="";
    return true;
  }
}

function validatePreferredLanguage() {
  if (document.querySelectorAll('input[type="checkbox"]:checked').length == 0){
    document.getElementById('designationerror').innerHTML='Please Select Preferred Language';
    return false;
  }
  else {
    document.getElementById("preferredlanguageerror").innerHTML="";
    return true;
  }
}

function validateEmail() {
  if (document.querySelector('input[name="email"]').value == "")
    document.getElementById('emailerror').innerHTML="Input Field cannot be empty";
  else if (/^[a-zA-Z][a-zA-Z0-9_]+[@]+[a-zA-Z]+[.]+[a-zA-Z.]+[a-zA-Z]$/.test(document.querySelector('input[name="email"]').value) == false)
    document.getElementById('emailerror').innerHTML="Invalid Email Address";
  else {
    document.getElementById('emailerror').innerHTML="";
    return true;
  }
  return false;
}

function validatePassword() {
  console.log(document.querySelector('input[name="password"]').value);
  if (document.querySelector('input[name="password"]').value == "")
    document.getElementById('passworderror').innerHTML="Input Field cannot be empty";
  else if (document.querySelector('input[name="password"]').value.length < 8)
    document.getElementById('passworderror').innerHTML="Password length must be atleast 8";
  else if (/[a-zA-z]/.test(document.querySelector('input[name="password"]').value) == false)
    document.getElementById('passworderror').innerHTML="Password must contain atleast one alphabet";
  else if (/[0-9]/.test(document.querySelector('input[name="password"]').value) == false)
    document.getElementById('passworderror').innerHTML="Password must contain atleast one number";
  else if (/[!@#$%^&*]/.test(document.querySelector('input[name="password"]').value) == false)
    document.getElementById('passworderror').innerHTML="Password must contain atleast one character";
  else {
    document.getElementById('passworderror').innerHTML="";
    return true;
  }
  return false;
}


function validateJS() {
  if (
    validateFirstName() &
    validateLastName() &
    validateEmail() &
    validatePassword() &
    validateAge() &
    validateDesignation() &
    validatePreferredLanguage()
  )
    return true;
  else 
    return false;
}
