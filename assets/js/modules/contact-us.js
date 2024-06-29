import { errorToast, successFormToast } from "./toastify";

function contactForm() {
  const contactForm = document.querySelector("#ContactUsForm");

  contactForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const formData = new FormData(contactForm);

    jQuery(($) => {
      $.ajax({
        type: "POST",
        url: restDetails.url + "cyn-api/v1/form",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,

        success: (res) => {
          console.log(res);
          successFormToast.showToast();
          priceForm.reset();
        },

        error: (err) => {
          console.log(err);
          errorToast.showToast();
        },
      });
    });

    console.log(e);
  });
}
contactForm();
// import { errorToast, successFormToast } from "/modules/toastify";

// function objectifyFormArray(formArray) {
//   var returnArray = {};
//   for (var i = 0; i < formArray.length; i++) {
//     returnArray[formArray[i]["name"]] = formArray[i]["value"];
//   }
//   return returnArray;
// }

// jQuery(document).ready(($) => {
// const contactUsForm = $("#contact-us-form");
// const contactUsInput = document.querySelectorAll(
//   "#contact-us-form div .data"
// );

//   const contactUsFormSubmit = $("#contact-us-form #contact-us-form-submit");

//   $(contactUsForm).on("submit", (e) => {
//     e.preventDefault();

//     const formDataArray = $(contactUsForm).serializeArray();
//     const formData = objectifyFormArray(formDataArray);
//     if (!formData.agreement) formData.agreement = "false";

//     $.ajax({
//       url: cyn_head_script.url,
//       type: "post",
//       data:
// {
//         action: "send_contact_form",
//         _nonce: cyn_head_script.nonce,
//         data: formData,
//       },
//       success: () => {
//         successFormToast.showToast();
//         priceForm.reset();
//       },
//       error: (err) => {
//         console.log(err);
//         errorToast.showToast();
//       },
//     });
//   });
// });
