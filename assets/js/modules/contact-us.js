import { errorToast, successFormToast } from "./toastify";

function contactForm() {
  const contactForm = document.querySelector("#ContactUsForm");
  document.contact;
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
          successFormToast.showToast();
          contactForm.reset();
        },

        error: (err) => {
          errorToast.showToast();
        },
      });
    });
  });
}
contactForm();
