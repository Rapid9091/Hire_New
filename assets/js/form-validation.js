// -----------------------
// Validate home page form footer
// -----------------------

// let sendUserData = document.getElementById("sendUserData");
// sendUserData.addEventListener("click", function (e) {
//   e.preventDefault();

//   // -----------------------
//   //   Getting the values
//   // -----------------------
//   let userName = document.getElementById("userName").value;
//   let userMail = document.getElementById("userMail").value;
//   let userMobile = document.getElementById("userMobile").value;
//   let userMessage = document.getElementById("userMessage").value;

//   // -----------------------
//   //   Getting the Error Divs
//   // -----------------------
//   let userNameError = document.getElementById("userNameError");
//   let userMailError = document.getElementById("userMailError");
//   let userMobileError = document.getElementById("userMobileError");
//   let userMessageError = document.getElementById("userMessageError");

//   // -----------------------
//   // Defining the functions
//   // -----------------------
//   function validateMail(userMail) {
//     // var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//     // return re.test(userMail);
//     return true;
//   }

//   function validateMobile(userMobile) {
//     // var phoneno = /^\d{10}$/;
//     // if (userMobile.match(phoneno)) {
//     //   return true;
//     // } else {
//     //   alert("message");
//     //   return false;
//     // }
//     return true;
//   }

//   // -----------------------
//   //   Testing conditions
//   // -----------------------
//   if (userMessage != "") {
//     if (userName != "") {
//       if (userMail != "" && validateMail(userMail) && userMail.includes("@")) {
//         if (userMobile != "" && validateMobile() && userMobile.length >= 10) {
//           return true;
//         } else {
//           userMobileError.innerText = "please enter valid mobile no.";
//           return false;
//         }
//       } else {
//         userMailError.innerText = "please enter valid mail";
//         return false;
//       }
//     } else {
//       userNameError.innerText = "Please enter username";
//       return false;
//     }
//   } else {
//     userMessageError.innerText = "Please enter All details";
//     return false;
//   }
// });

function formValidate() {
  // -----------------------
  //   Getting the values
  // -----------------------
  let userName = document.getElementById("userName").value;
  let userMail = document.getElementById("userMail").value;
  let userMobile = document.getElementById("userMobile").value;
  let userMessage = document.getElementById("userMessage").value;

  // -----------------------
  //   Getting the Error Divs
  // -----------------------
  let userNameError = document.getElementById("userNameError");
  let userMailError = document.getElementById("userMailError");
  let userMobileError = document.getElementById("userMobileError");
  let userMessageError = document.getElementById("userMessageError");

  // -----------------------
  // Defining the functions
  // -----------------------
  function validateMail(userMail) {
    // var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    // return re.test(userMail);
    return true;
  }

  function validateMobile(userMobile) {
    // var phoneno = /^\d{10}$/;
    // if (userMobile.match(phoneno)) {
    //   return true;
    // } else {
    //   alert("message");
    //   return false;
    // }
    return true;
  }

  // -----------------------
  //   Testing conditions
  // -----------------------
  if (userMessage != "") {
    if (userName != "") {
      if (userMail != "" && validateMail(userMail) && userMail.includes("@")) {
        if (userMobile != "" && validateMobile() && userMobile.length >= 10) {
          return true;
        } else {
          userMobileError.innerText = "please enter valid mobile no.";
          return false;
        }
      } else {
        userMailError.innerText = "please enter valid mail";
        return false;
      }
    } else {
      userNameError.innerText = "Please enter username";
      return false;
    }
  } else {
    userMessageError.innerText = "Please enter All details";
    return false;
  }
}
