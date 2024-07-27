function headerCta() {
  const ctaCloser = document.querySelector("#headerCtaCloser");
  const headerCta = document.querySelector("#headerCta");

  if (!ctaCloser || !headerCta) return;

  ctaCloser.addEventListener("click", () => {
    headerCta.classList.add("hidden");
  });
}

headerCta();
