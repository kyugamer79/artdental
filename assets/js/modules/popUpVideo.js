function videoPopUp() {
  const videoPopUpCloser = document.querySelector("#videoPopUpCloser");
  const videoPopUp = document.querySelector("#videoPopUp");
  const videoPopUpOpenerGroup = document.querySelectorAll(".videoPopUpOpener");

  if (!videoPopUpOpenerGroup || !videoPopUp || !videoPopUpCloser) return;

  document.getElementById("icon-test")?.addEventListener("click", (event) => {
    event.preventDefault();

    var video = document.getElementById("video");

    video.play();
  });

  reservePopUpOpenerGroup.forEach((openerEl) => {
    openerEl.addEventListener("click", () => activateVideoPopUp(reservePopUp));
  });

  reservePopUpCloser.addEventListener("click", () =>
    deActivateVideoPopUp(reservePopUp)
  );

  reservePopUp.addEventListener("click", (e) => {
    if (e.target !== reservePopUp) return;
    deActivateVideoPopUp(reservePopUp);
  });
}

reservePopUp();
