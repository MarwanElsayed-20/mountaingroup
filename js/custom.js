// validate form
const userName = document.querySelector('.user-name');
const email = document.querySelector('.email');
const textArea = document.querySelector('.textarea');
const submit = document.querySelector('.submit');
//to check if every input is valid
let userError = true;
let emailError = true;
let textAreaError = true;

// user input validation
function userValidate() {
  let val = this.value;
  if (val.length <= 3 && val !== "") {
    if (this.parentElement.lastElementChild.style.display = 'none') {
      this.parentElement.lastElementChild.style.display = 'block';
    }
    this.style.cssText = 'border: 4px solid red;';
    this.parentElement.firstElementChild.style.cssText = 'background: red; border: none; padding: 15px;';
    userError = true;
  } else if (val === "") {
    this.nextElementSibling.style.display = 'block';
  } else {
    if (this.parentElement.lastElementChild.style.display = 'block') {
      this.parentElement.lastElementChild.style.display = 'none';
    }
    this.nextElementSibling.style.display = 'none';
    this.style.cssText = 'border: none;';
    this.parentElement.firstElementChild.style.cssText = 'background: var(--main-color); border-bottom: 2px solid var(--alt-color); padding: 14px;';
    userError = false;
  }
}
userName.addEventListener('blur', userValidate);
// mail input validation
function mailValidate() {
  let val = this.value;
  if (val === "") {
    if (this.parentElement.lastElementChild.style.display = 'none') {
      this.parentElement.lastElementChild.style.display = 'block';
    }
    this.style.cssText = 'border: 4px solid red;';
    this.parentElement.firstElementChild.style.cssText = 'background: red; border: none; padding: 15px;';
    this.nextElementSibling.style.display = 'block';
    emailError = true;
  } else {
    if (this.parentElement.lastElementChild.style.display = 'block') {
      this.parentElement.lastElementChild.style.display = 'none';
    }
    this.style.cssText = 'border: none;';
    this.parentElement.firstElementChild.style.cssText = 'background: var(--main-color); border-bottom: 2px solid var(--alt-color); padding: 14px;';
    this.nextElementSibling.style.display = 'none';
    emailError = false;
  }
}
email.addEventListener('blur', mailValidate);
// textarea input validation
function messageValidate() {
  let val = this.value;
  if (val.length <= 10 && val !== "") {
    if (this.parentElement.lastElementChild.style.display = 'none') {
      this.parentElement.lastElementChild.style.display = 'block';
    }
    this.style.cssText = 'border: 4px solid red;';
    this.parentElement.firstElementChild.style.cssText = 'background: red; border: none; padding: 15px;';
    textAreaError = true;
  } else if (val === "") {
    this.nextElementSibling.style.display = 'block';
  } else {
    if (this.parentElement.lastElementChild.style.display = 'block') {
      this.parentElement.lastElementChild.style.display = 'none';
    }
    this.nextElementSibling.style.display = 'none';
    this.style.cssText = 'border: none;';
    this.parentElement.firstElementChild.style.cssText = 'background: var(--main-color); border-bottom: 2px solid var(--alt-color); padding: 14px;';
    textAreaError = false;
  }
}
textArea.addEventListener('blur', messageValidate);
// prevent the click event until every input is valid
function formSubmit(e) {
  if (userError === true || emailError === true || textAreaError === true) {
    e.preventDefault();
    userName.focus();
    email.focus();
    textArea.focus();
  }
}
submit.addEventListener('click', formSubmit)
