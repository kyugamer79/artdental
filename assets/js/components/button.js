
class Button extends HTMLElement {
    constructor() {
        super();

        const btn = document.createElement("button");
        this.classList.add("bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded");

        btn.innerHTML = `
           <slot></slot>
        `;


        const shadowRoot = this.attachShadow({ mode: "closed" });
        shadowRoot.appendChild(btn.content.cloneNode(true));
    }
}

customElements.define("cyn-button", Button);

