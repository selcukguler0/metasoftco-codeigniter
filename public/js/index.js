$("#about-us-dropdown").click(function (e) {
  e.preventDefault();
  if ($("#about-us-dropdown").hasClass("w--open") == false) {
    $("#about-us-dropdown").addClass("w--open");
    $("#about-us-dropdown-list").addClass("w--open");
    $(".nav_dropdown-svg").css("transform", "rotateZ(180deg)");
  } else {
    $("#about-us-dropdown").removeClass("w--open");
    $("#about-us-dropdown-list").removeClass("w--open");
    $(".nav_dropdown-svg").css("transform", "rotateZ(0deg)");
  }
});
$("#about-us-dropdown-list").click(function (e) {
  e.preventDefault();
});

var modal_one = document.querySelector(".remodal_col.mod--1");
var modal_two = document.querySelector(".remodal_col.mod--2");
var contactBtn = document.getElementById("modal-contact-button");
var contactBtnText = document.getElementById("contact-button-text");
var contactForm = document.getElementById("contact-form");
var sectionContact = document.getElementsByClassName("section-contact");

contactForm.addEventListener("submit", function (e) {
  e.preventDefault();
  console.log("submit");

  contactBtn.disabled = true;
  contactBtnText.innerHTML = "Gönderiliyor...";

  const reqContact = fetch("https://api.metasoftco.com/api/contact", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      name: document.getElementById("name").value,
      email: document.getElementById("email").value,
      company_name: document.getElementById("company-name").value,
      message: document.getElementById("message").value,
    }),
  });
  reqContact.then((res) => {
    if (res.status == 200) {
      $(".remodal_col.mod--1").css("max-height", "0rem");
      $(".remodal_col.mod--1").css("opacity", "0");
      $(".remodal_col.mod--2").css("max-height", "30rem");
      $(".remodal_col.mod--2").css("opacity", "1");

      // reset modal after 5 seconds
      setTimeout(() => {
        contactBtn.disabled = false;
        contactBtnText.innerHTML = "Gönder";
        $(".remodal_col.mod--1").css("max-height", "45rem");
        $(".remodal_col.mod--1").css("opacity", "1");
        $(".remodal_col.mod--2").css("opacity", "0");
        $(".remodal_col.mod--2").css("max-height", "0rem");

        document.getElementById("name").value = "";
        document.getElementById("email").value = "";
        document.getElementById("company-name").value = "";
        document.getElementById("message").value = "";
      }, 10000);
    }
  });
});

const sectionContactHandler = (e,type) => {
  e.preventDefault();
  var name;
  var email;
  var company_name;
  var message;
  if(type == 1){
    name = document.getElementById("section-contact-name-1").value;
    email = document.getElementById("section-contact-email-1").value;
    company_name = document.getElementById("section-contact-company-1").value;
    message = document.getElementById("section-contact-message-1").value;
  }
  else if(type == 2){
    name = document.getElementById("section-contact-name-2").value;
    email = document.getElementById("section-contact-email-2").value;
    company_name = document.getElementById("section-contact-company-2").value;
    message = document.getElementById("section-contact-message-2").value;
  }else {
    name = document.getElementById("section-contact-name-3").value;
    email = document.getElementById("section-contact-email-3").value;
    company_name = document.getElementById("section-contact-company-3").value;
    message = document.getElementById("section-contact-message-3").value;
  }

  contactBtn.disabled = true;
  contactBtnText.innerHTML = "Gönderiliyor...";

  const reqContact = fetch("https://api.metasoftco.com/api/contact", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      name: name,
      email: email,
      company_name: company_name,
      message: message,
    }),
  });
  reqContact.then((res) => {
    if (res.status == 200) {
      $(".remodal_col.mod--1").css("max-height", "0rem");
      $(".remodal_col.mod--1").css("opacity", 0);
      $(".remodal_col.mod--2").css("max-height", "30rem");

      // reset modal after 5 seconds
      setTimeout(() => {
        contactBtn.disabled = false;
        contactBtnText.innerHTML = "Gönder";
        $(".remodal_col.mod--1").css("max-height", "30rem");
        $(".remodal_col.mod--1").css("opacity", 1);
        $(".remodal_col.mod--2").css("max-height", "0rem");

        document.getElementById("name").value = "";
        document.getElementById("email").value = "";
        document.getElementById("company-name").value = "";
        document.getElementById("message").value = "";
      }, 10000);
    }
  });
};

//footer rights text - date
var rightsText = document.querySelectorAll(".rights-text");
rightsText.forEach(function (element) {
  element.innerHTML = "© " + new Date().getFullYear() + " " + element.innerHTML;
});
//scroll to top
const scroll_up_btn = document.getElementsByClassName("btn_scroll-up")[0];
scroll_up_btn.addEventListener("click", function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

//subscribe form
const mail_input = document.getElementById("Email-footer-2");
const subscribe_form = document.getElementById("wf-form-Subscribe-form");
subscribe_form.addEventListener("submit", function (e) {
  e.preventDefault();
  console.log("submit");

  //set pointer events none for form
  subscribe_form.style.pointerEvents = "none";
  mail_input.style.backgroundColor = "#d7d7d7";

  const reqSubscribe = fetch("https://api.metasoftco.com/api/subscribe", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      email: mail_input.value,
    }),
  });
  reqSubscribe.then((res) => {
    if (res.status == 200) {
      //reset input
      mail_input.value = "";
      mail_input.style.backgroundColor = "#fff";
      subscribe_form.style.pointerEvents = "auto";

      //show success message
      $(".footer-subscription.w-form-done").attr(
        "style",
        "display:block !important"
      );
      $(".footer-subscription.w-form-fail").attr(
        "style",
        "display:none !important"
      );
    } else {
      mail_input.style.backgroundColor = "#fff";
      subscribe_form.style.pointerEvents = "auto";
      //show error message
      $(".footer-subscription.w-form-fail").attr(
        "style",
        "display:block !important"
      );
      $(".footer-subscription.w-form-done").attr(
        "style",
        "display:none !important"
      );
    }
  });
});

// document
//   .getElementById("wf-form-Working-together")
//   .addEventListener("submit", function (event) {
//     event.preventDefault(); // Prevent the default form submit action

//     const formData = new FormData(event.target); // Create a new FormData object with the form data
//     const data = Object.fromEntries(formData.entries()); // Convert the FormData object to a plain object

//     const reqContact = fetch("https://api.metasoftco.com/api/contact", {
//       method: "POST",
//       headers: {
//         "Content-Type": "application/json",
//       },
//       body: JSON.stringify({
//         name: data.Name,
//         email: data.Email,
//         company_name: data["Compane-Name"],
//         message: data["About-Project"],
//       }),
//     });
//     console.log(data); // Log the form data to the console
//   });

// document
//   .getElementById("wf-form-Something-else")
//   .addEventListener("submit", function (event) {
//     event.preventDefault(); // Prevent the default form submit action

//     $(".content_col.mod--form_success").css("opacity", "1");

//     const formData = new FormData(event.target); // Create a new FormData object with the form data
//     const data = Object.fromEntries(formData.entries()); // Convert the FormData object to a plain object

//     const reqContact = fetch("https://api.metasoftco.com/api/contact", {
//       method: "POST",
//       headers: {
//         "Content-Type": "application/json",
//       },
//       body: JSON.stringify({
//         name: data.Name,
//         email: data.Email,
//         company_name: data["Compane-Name"],
//         message: data["Talk-About"],
//       }),
//     });
//     console.log(data); // Log the form data to the console
//   });
