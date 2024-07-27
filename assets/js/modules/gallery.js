function gallery() {
    const galleryPostTypes = document.querySelector('#galleryPostTypes');

    if (!galleryPostTypes) return;

    const inputs = galleryPostTypes.querySelectorAll('input');


    inputs.forEach((input) => {
        input.addEventListener('click', () => {
            window.location.href = input.dataset.link;
        })
    })
}


gallery()