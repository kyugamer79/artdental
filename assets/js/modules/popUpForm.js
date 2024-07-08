import { errorToast, successFormToast } from "./toastify";

function PopUpForm() {
  const PopUpForm = document.querySelector("#reservePopUpForm");

  if (!PopUpForm) return;

  PopUpForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const formData = new FormData(PopUpForm);
    jQuery(($) => {
      $.ajax({
        type: "POST",
        url: restDetails.url + "cyn-api/v1/reserve_pop_up",
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
PopUpForm();

function reservePopUp() {
  const reservePopUpOpenerGroup = document.querySelectorAll(
    ".reservePopUpOpener");
  const reservePopUp = document.querySelector("#reservePopUp");
  const reservePopUpCloser = document.querySelector("#reservePopUpCloser");

  if (!reservePopUpOpenerGroup || !reservePopUp || !reservePopUpCloser) return;

  function activatePopUp(element) {
    element.classList.replace("opacity-0", "opacity-100");
    element.classList.replace("pointer-events-none", "pointer-events-auto");
  }

  function deActivatePopUp(element) {
    element.classList.replace("opacity-100", "opacity-0");
    element.classList.replace("pointer-events-auto", "pointer-events-none");
  }

  reservePopUpOpenerGroup.forEach((openerEl) => {
    openerEl.addEventListener("click", () => activatePopUp(reservePopUp));
  });

  reservePopUpCloser.addEventListener("click", () =>
    deActivatePopUp(reservePopUp)
  );

  reservePopUp.addEventListener("click", (e) => {
    if (e.target !== reservePopUp) return;
    deActivatePopUp(reservePopUp);
  });
}

reservePopUp();
