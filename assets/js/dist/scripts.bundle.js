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

  // assets/js/modules/mobile-menu.js
  var mobileMenu = document.querySelector("#mobileMenu");
  function mobileMenuToggle() {
    const mobileMenuOpener = document.querySelector("#mobileMenuOpener");
    const mobileMenuCloser = document.querySelector("#mobileMenuCloser");
    if (!mobileMenuCloser || !mobileMenuOpener || !mobileMenu)
      return;
    mobileMenuOpener.addEventListener("click", () => {
      mobileMenu.classList.replace(
        "[clip-path:polygon(100%_0%_,100%_0_,100%_100%,_100%_100%)]",
        "[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]"
      );
    });
    mobileMenuCloser.addEventListener("click", () => {
      mobileMenu.classList.replace(
        "[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]",
        "[clip-path:polygon(100%_0%_,100%_0_,100%_100%,_100%_100%)]"
      );
    });
  }
  mobileMenuToggle();
  function mobileMenuAccordion() {
    if (!mobileMenu)
      return;
    const menuItemsHasChild = mobileMenu.querySelectorAll(".has-child");
    menuItemsHasChild.forEach((menuItem) => {
      menuItem.addEventListener("click", () => {
        const accordion = menuItem.querySelector(".accordion");
        const svg = menuItem.querySelector("svg");
        if (!accordion || !svg)
          return;
        const isOpen = accordion.classList.contains("grid-rows-[0fr]");
        if (isOpen) {
          accordion.classList.replace("grid-rows-[0fr]", "grid-rows-[1fr]");
          svg.classList.add("rotate-180");
        } else {
          accordion.classList.replace("grid-rows-[1fr]", "grid-rows-[0fr]");
          svg.classList.remove("rotate-180");
        }
      });
    });
  }
  mobileMenuAccordion();

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

  // assets/js/components/button.js
  var Button = class extends HTMLElement {
    constructor() {
      super();
      this.title = "";
      this.href = "#";
      this.id = "";
      this.iconPosition = "";
      this.type = "primary";
      this.size = "md";
      this.classes = "rounded-full flex gap-1 transition-all";
    }
    addClass(classes) {
      this.classes = this.classes + " " + classes;
    }
    setType(type) {
      switch (type) {
        default:
        case "primary":
          this.addClass(
            "bg-gradient-to-t from-primary-50 to-primary-70 text-primary-100 shadow-md shadow-slate-400/50 hover:from-primary-20 hover:to-primary-20"
          );
          break;
        case "secondary":
          this.addClass(
            "bg-background-card_1/20 border border-primary-100 color-primary-100 hover:bg-primary-100 hover:color-primary-20 hover:border-primary-20"
          );
          break;
        case "accent":
          this.addClass(
            "bg-primary-100 text-primary-20 hover:bg-primary-20 hover:text-primary-100"
          );
          break;
      }
    }
    setSize(size) {
      switch (size) {
        case "sm":
          this.addClass("px-4 py-2 text-caption");
          this.iconSize = "size-4";
          break;
        default:
        case "md":
          this.addClass("px-4 py-2 text-body_s");
          this.iconSize = "size-6";
          break;
        case "lg":
          this.addClass("px-5 py-2 text-body");
          this.iconSize = "size-8";
          break;
      }
    }
    connectedCallback() {
      this.title = this.getAttribute("title");
      this.href = this.getAttribute("href");
      this.id = this.getAttribute("id");
      this.type = this.getAttribute("type");
      this.icon = this.getAttribute("icon");
      this.size = this.getAttribute("size");
      this.iconPosition = this.getAttribute("icon-position");
      this.setType(this.type);
      this.setSize(this.size);
      this.render();
    }
    render() {
      if (this.icon) {
        this.iconString = '<svg class="icon '.concat(this.iconSize, '">\n                    <use href=').concat(this.icon, " />\n                </svg>");
      } else {
        this.iconString = "";
      }
      if (this.iconPosition === "right") {
        this.addClass("flex-row-reverse");
      } else if (this.iconPosition === "left") {
        this.addClass("flex-row");
      }
      this.innerHTML = '\n          <a href="'.concat(this.href, '">\n                <div id="').concat(this.id, '" class="').concat(this.classes, '">\n                    ').concat(this.innerText, "\n                    ").concat(this.iconString, "\n                </div>\n          </a>\n          ");
    }
  };
  customElements.define("cyn-button", Button);
})();
