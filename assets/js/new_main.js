// heaader.js
// ---------------------
// Header Transformation
// ---------------------

const mobileNav = document.querySelector(".mobile-navbar-btn");

const header = document.querySelector(".header");

function toggleMobileNav() {
  header.classList.toggle("mobile-active");
}

mobileNav.addEventListener("click", () => toggleMobileNav());

// Assigning the variables from dom to js

const topHeader = document.querySelector(".header");
const header_btn = document.querySelector("#header_btn");
const header_Logo = document.querySelector("#header-logo");

// go to top btn function
let topBtn = document.getElementById("btop");
topBtn.addEventListener("click", function () {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});
function scrollFunction() {
  if (
    document.body.scrollTop > 400 ||
    document.documentElement.scrollTop > 400
  ) {
    topBtn.style.display = "block";
  } else {
    topBtn.style.display = "none";
  }
}

// On Scroll function here

window.onscroll = function () {
  // Getting the height of screen
  var top = window.scrollY;

  if (top >= 100) {
    //   Setting active class and img src
    topHeader.classList.add("active");
    header_btn.classList.add("links-list_button");
    header_Logo.src = "https://hirecoworker.com/assets/images/new-logo.png";
  } else {
    //   Removing active class and img src
    topHeader.classList.remove("active");
    header_btn.classList.remove("links-list_button");
    header_Logo.src =
      "https://hirecoworker.com/assets/images/new-logo-white.png";
  }

  // go to top
  scrollFunction();
};

// --------------------------------//

// owl-curosel----------//
//testimonial
$('.text-tesimonial').owlCarousel({
  loop: true,
  margin: 20,
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,
  responsive: {
      0: {
          items: 1
      },

      800: {
          items: 3
      }
  }
})

//google_review----
$('#google_reviews').owlCarousel({
  loop: true,
  margin:20,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  responsive: {
      0: {
          items: 1
      },

      800: {
          items: 2
      },
      1000:{
        item:3
      }
  }
})

$('button.owl-dot').attr('aria-label', 'owl-dot');

// ---------------Aos-----------------
AOS.init();

// --------------------country code----------
$(".country_input").intlTelInput({
 
});

//-------- view more btn-------

$('#view_more_btn').on('click', function () {
    if ($('.more').hasClass('less')) {
        $('.more').removeClass('less');
        $('.more').addClass('d-block');
        $(this).html('View Less');
    } else {
        $('.more').removeClass('d-block');
        $('.more').addClass('less');
        $(this).html('View More');
        $('html, body').animate({
            scrollTop: $($(this).val()).offset().top
        }, 100, 'linear');
    }
  })
  
  
  // -------------- contact-form js----------------//
  //-----------------------------------------------//
  
  function clearErrors(){
    errors = document.getElementsByClassName('input_error');
    for(let item of errors){
        item.innerHTML = ""
    }
  
  }
  
  function set_error(id, message){
    element = document.getElementById(id);
    element.innerHTML = message
  }
  //form-validation
  function validate_form(name, email, mobile, query){
    let ret = true;
    clearErrors();
  
  if(name.length == 0){
    set_error('input_name_error', "Please type your name");
    ret = false;
  }
  
  if(email.length == 0){
    set_error('input_email_error', "Please type your email");
    ret = false;
  }
  if(/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/.test(email) != true){
    set_error('input_email_error', "Please type valid email");
    ret = false;
  }
  
  if(mobile.length == 0){
    set_error('input_mobile_error', "Please type your mobile number");
    ret = false;
  }
  if(mobile.length > 0 && mobile.length < 10){
    set_error('input_mobile_error', "Number must be at least 10 digits")
    ret = false;
  }
  if(isNaN(mobile)){
    set_error('input_mobile_error', "Number must be in digits")
    ret = false;
  }
  
  
  if(query.length == 0){
    set_error('input_query_error', "Please type your query")
    ret = false;
  }
  
  
  return ret;
  }
  
  $('.contact_form').on('submit', function(e){
    e.preventDefault();
    let input_name = $('#input_name').val().trim();
    let input_email = $('#input_email').val().trim();
    let input_mobile_number = $('#input_mobile').val().trim();
    let input_query = $('#input_query').val().trim();
  
  
    let country = $('.iti__selected-flag').attr('title');
    let country_array = country.split('+');
    let country_code = "+"+country_array[1];
    let input_mobile = country_code+ " " + input_mobile_number;
  
    let page_url = window.location.href;
  
    
   
  
    if(validate_form(input_name, input_email, input_mobile_number, input_query) == true){
        $('#contact_form_button').html('Please wait..');
        let form_data = {
            input_name : input_name,
            input_email : input_email,
            input_mobile :input_mobile,
            input_query: input_query,
            input_page : page_url
        };
        
        $.ajax({
          url: "./email.php",
          // url : "<?= home_path() ?>email.php",
          method: "post",
          data : form_data,
          success : function(res){
              $('#input_name').val("");
              $('#input_email').val("");
              $('#input_mobile').val("");
              $('#input_query').val("");
              $('#contact_form_button').html(res);
              $('#contact_form_button').attr('disabled', 'disabled');
            
          }
         })
    }       
    
  })
  
  
  
  // ---------------modal-form----------------/
  $(".hire-btn").on("click", function () {
    pop();
  });
  
  const pop_background = document.getElementById("pop-up-login");
  const form = document.getElementById("form");
  const pop_form = document.getElementById("form");
  
  function pop() {
    pop_background.style.top = "0%";
    form.style.top = "50%";
    form.style.transition = "all .5s";
  }
  
  const cross = document.getElementById("cross");
  
  cross.addEventListener("click", function () {
    popdown();
  });
  
  function popdown() {
    pop_background.style.top = "-100%";
    form.style.top = "-50%";
    form.style.transition = "all 0.8s";
  }
  
  window.onclick = function (event) {
    if (event.target == pop_background) {
      popdown();
    }
  };
  ////////////////////////////////////////////
  function clearmodalErrors(){
    modal_errors = document.getElementsByClassName('modal_input_error');
    for(let item of modal_errors){
        item.innerHTML = ""
    }
  
  }
  
  //form-validation
  function modal_validate_form(name, email, mobile, query){
    let ret = true;
    clearmodalErrors();
  
  if(name.length == 0){
    set_error('modal_input_name_error', "Please type your name");
    ret = false;
  }
  
  if(email.length == 0){
    set_error('modal_input_email_error', "Please type your email");
    ret = false;
  }
  if(/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/.test(email) != true){
    set_error('modal_input_email_error', "Please type valid email");
    ret = false;
  }
  
  if(mobile.length == 0){
    set_error('modal_input_mobile_error', "Please type your mobile number");
    ret = false;
  }
  if(mobile.length > 0 && mobile.length < 10){
    set_error('modal_input_mobile_error', "Number must be at least 10 digits")
    ret = false;
  }
  if(isNaN(mobile)){
    set_error('modal_input_mobile_error', "Number must be in digits")
    ret = false;
  }
  
  
  if(query.length == 0){
    set_error('modal_input_query_error', "Please type your query")
    ret = false;
  }
  
  
  return ret;
  }
  
  $('.modal_contact_form').on('submit', function(e){
    e.preventDefault();
    let modal_input_name = $('#modal_input_name').val().trim();
    let modal_input_email = $('#modal_input_email').val().trim();
    let modal_input_mobile_number = $('#modal_input_mobile').val().trim();
    let modal_input_query = $('#modal_input_query').val().trim();
  
  
    let country = $('.modal_contact_form .iti__selected-flag').attr('title');
    let country_array = country.split('+');
    let country_code = "+"+country_array[1];
    let modal_input_mobile = country_code + " " + modal_input_mobile_number;
    let page_url = window.location.href;
  
    if(modal_validate_form(modal_input_name, modal_input_email, modal_input_mobile_number, modal_input_query) == true){
        $('#modal_form_button').html('Please wait..');
        let form_data = {
            input_name : modal_input_name,
            input_email : modal_input_email,
            input_mobile : modal_input_mobile,
            input_query: modal_input_query,
            input_page : page_url
        };
        
        $.ajax({
          url: "../email.php",
          method: "post",
          data : form_data,
          success : function(res){
              $('.modal_contact_form').get(0).reset();
              $('#modal_form_button').html(res);
              $('#modal_form_button').attr('disabled', 'disabled');
            
          }
         })
    }       
    
  })