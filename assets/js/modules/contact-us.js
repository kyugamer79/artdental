import { errorToast, successFormToast } from "./toastify";

function contactForm() {
  const contactForm = document.querySelector("#ContactUsForm");

  if (!contactForm) return;

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
