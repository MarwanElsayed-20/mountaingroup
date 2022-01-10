// loading
$('body').append('<div style="" id="loadingDiv"><div class="loader">Loading...</div></div>');
$(window).on('load', function(){
  setTimeout(removeLoader, 1000); //wait for page load PLUS one seconds.
});
function removeLoader(){
    $( "#loadingDiv" ).fadeOut(500, function() {
      // fadeOut complete. Remove the loading div
      $( "#loadingDiv" ).remove(); //makes page more lightweight
  });
}

const body = document.querySelector("body");

// header animation
if (body.classList.contains("home-page")) {
  const wave = document.querySelector(".header .wave");
  const groups = document.querySelector(".header .groups");

  function headerAnimate () {
    wave.style.bottom  = 0;
  }
  if (document.readyState === 'loading') {  // Loading hasn't finished yet
    document.addEventListener('DOMContentLoaded', function(){
      setTimeout(headerAnimate, 1000);
    });  ;
  } else {  // `DOMContentLoaded` has already fired
    headerAnimate();
  }

}

// sections animation
if (body.classList.contains("hr-consultancy")) {

  const aboutUs = document.querySelector(".about-us");
  const ourVision = document.querySelector(".our-vision");
  const ourMission = document.querySelector(".our-mission");
  const values = document.querySelector('.hr-values')
  const ourValues = document.querySelectorAll(".hr-values .value");
  const ourServicesImg = document.querySelector(".our-services .services-info");
  const ourServicesContent = document.querySelector(".our-services .services");

  if (window.innerWidth > 991.98) {
    // about us section
    function aboutUsAnimate () {
      if (window.pageYOffset >= (aboutUs.offsetTop - 400)) {
        aboutUs.style.left = 0;
      }
    }
    window.addEventListener('scroll', aboutUsAnimate);
    // our vision section
    function ourVisionAnimate () {
      if (window.pageYOffset >= (ourVision.offsetTop - 400)) {
        ourVision.style.right = 0;
      }
    }
    window.addEventListener('scroll', ourVisionAnimate);
    // our mission section
    function ourMissionAnimate () {
      if (window.pageYOffset >= (ourMission.offsetTop - 400)) {
        ourMission.style.left = 0;
      }
    }
    window.addEventListener('scroll', ourMissionAnimate);
    // our values section
    function ourValuesAnimate () {
      ourValues.forEach((value) => {
        if (window.pageYOffset >= (values.offsetTop - 400)) {
          value.style.cssText = 'animation-play-state: running;';
          values.style.right = 0;
        }
      });
    }
    window.addEventListener('scroll', ourValuesAnimate);
    //our services section
    function ourServicesAnimate () {
      if (window.pageYOffset >= (ourServicesImg.offsetTop - 400)) {
        ourServicesImg.style.left = 0;
        ourServicesContent.style.top = 0;
      }
    }
    window.addEventListener('scroll', ourServicesAnimate);
  }
}

// form validation

if (body.classList.contains("home-page")) {
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
}

// scroll to top
const icon = document.querySelector(".up")
window.addEventListener('scroll', function () {
  if (this.scrollY >= 600) {
    icon.classList.add("show");
  } else {
    icon.classList.remove("show");
  }
});
icon.addEventListener('click', function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
