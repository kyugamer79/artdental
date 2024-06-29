const separator = document.querySelectorAll('.separator')

separator.forEach((el) => {
    el.innerHTML = '<svg class="icon w-6 h-6 rotate-180"><use href="#icon-Right,-Arrow"/></svg>'
})