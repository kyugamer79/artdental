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

  videoPopUpOpenerGroup.forEach((openerEl) => {
    openerEl.addEventListener("click", () => activateVideoPopUp(videoPopUp));
  });

  videoPopUpCloser.addEventListener("click", () =>
    deActivateVideoPopUp(videoPopUp)
  );

  videoPopUp.addEventListener("click", (e) => {
    if (e.target !== videoPopUp) return;
    deActivateVideoPopUp(videoPopUp);
  });
}

videoPopUp();
