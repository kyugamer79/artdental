class Header extends HTMLElement {
    constructor() {
        super();
        this.item = '';
        const NavBar = document.createElement('div');
        this.classList.add()
        NavBar.innerHTML = `
        <ul>
        <slot></slot>
        </ul>
        `
        // ${this.getAttribute('nav-items').split(',').map(item => `<li>${item}</li>`).join('')
        //      }

    }
}
customElements.define('cyn-header', Header);