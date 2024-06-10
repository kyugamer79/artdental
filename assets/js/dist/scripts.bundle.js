(() => {
  // assets/js/modules/dark-mode.js
  var themeSwitcher = document.querySelectorAll('input[name="themeSwitcher"]');
  var setTheme = (theme) => {
    document.documentElement.setAttribute("data-theme", theme);
    localStorage.setItem("theme_mode", theme);
  };
  themeSwitcher.forEach((el) => {
    el.addEventListener("change", () => setTheme(el.value));
  });
  window.addEventListener("load", () => {
    const themeMode = localStorage.getItem("theme_mode");
    if (!themeMode)
      return;
    setTheme(themeMode);
    themeSwitcher.forEach((el) => {
      if (el.value !== themeMode)
        return;
      el.setAttribute("checked", "");
    });
  });

  // assets/js/pages/home.js
  var containerComponent = class extends HTMLElement {
    constructor() {
      super();
      const containerTemplate = document.createElement("template");
      containerTemplate.innerHTML = "\n         <slot></slot>\n      ";
      const shadowRoot = this.attachShadow({ mode: "closed" });
      shadowRoot.appendChild(containerTemplate.content.cloneNode(true));
    }
  };
  customElements.define("layout-container", containerComponent);
  var Card = class extends HTMLElement {
    constructor() {
      super();
      this.setAttribute("role", "article");
      this.classList.add("card");
      const title = document.createElement("h2");
      title.classList.add("card__title");
      title.textContent = this.getAttribute("data-title");
      const description = document.createElement("div");
      description.classList.add("card__description");
      description.innerHTML = this.getAttribute("data-description");
      let imageWrapper;
      imageWrapper = document.createElement("div");
      imageWrapper.classList.add("grid grid-cols-4 gap-4");
      imageWrapper.innerHTML = "\n    <slot></slot>\n ";
      let ctaContainer;
      if (this.hasAttribute("data-cta-href")) {
        const cta = document.createElement("a");
        cta.classList.add("card__link");
        cta.href = this.getAttribute("data-cta-href");
        cta.textContent = this.getAttribute("data-cta-text");
        ctaContainer = document.createElement("div");
        ctaContainer.classList.add("card__cta");
        ctaContainer.appendChild(cta);
      }
      const contentContainer = document.createElement("div");
      contentContainer.classList.add("card__content");
      contentContainer.appendChild(title);
      contentContainer.appendChild(description);
      if (ctaContainer !== "undefined") {
        contentContainer.appendChild(ctaContainer);
      }
      const shadowRoot = this.attachShadow({ mode: "closed" });
      if (imageWrapper !== void 0) {
        shadowRoot.appendChild(imageWrapper);
      }
      shadowRoot.appendChild(contentContainer);
    }
  };
  customElements.define("component-card", Card);

  // assets/js/pages/button.js
  var Button = class extends HTMLElement {
    constructor() {
      super();
      const btn = document.createElement("button");
      this.classList.add("bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded");
      btn.innerHTML = "\n           <slot></slot>\n        ";
      const shadowRoot = this.attachShadow({ mode: "closed" });
      shadowRoot.appendChild(btn.content.cloneNode(true));
    }
  };
  customElements.define("cyn-button", Button);

  // assets/js/pages/header.js
  var Header = class extends HTMLElement {
    constructor() {
      super();
      this.item = "";
      const NavBar = document.createElement("div");
      this.classList.add();
      NavBar.innerHTML = "\n        <ul>\n        <slot></slot>\n        </ul>\n        ";
    }
  };
  customElements.define("cyn-header", Header);
})();
