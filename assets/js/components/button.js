/**
 * Usage:
 * <cyn-button
 *  type @for color @vars 'primary' | 'secondary' | 'accent' | 'accent-2'
 * 	href @for link
 *  id @for ID
 *  icon-position @vars 'left' | 'right'
 *  size @vars 'sm' | 'md' | 'lg'
 *  >
 * </cyn-button>
 */
class Button extends HTMLElement {
  constructor() {
    super();

    this.title = "";
    this.href = "#";
    this.id = "";
    this.iconPosition = "";
    this.type = "primary";
    this.size = "md";
    this.classes =
      "rounded-full flex gap-1 transition-all duration-300 cursor-pointer";
  }

  addClass(classes) {
    this.classes = this.classes + " " + classes;
  }

  setType(type) {
    switch (type) {
      default:
      case "primary":
        this.addClass(
          "bg-gradient-to-t from-primary-50 to-primary-70 text-primary-100 shadow-md shadow-slate-400/50 hover:from-primary-20 hover:to-primary-20 "
        );
        break;

      case "secondary":
        this.addClass(
          "bg-background-card_1/20 border border-primary-100 color-primary-100 hover:bg-primary-50 hover:color-primary-20 hover:border-primary-20"
        );
        break;

      case "secondary-dark":
        this.addClass(
          "border border-primary-20 bg-transparent text-primary-20 hover:bg-primary-20 hover:text-primary-100"
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
    this.href = this.getAttribute("href") ?? "#";
    this.id = this.getAttribute("id");
    this.type = this.getAttribute("type");
    this.icon = this.getAttribute("icon");
    this.size = this.getAttribute("size");
    this.iconPosition = this.getAttribute("icon-position");

    this.setType(this.type);
    this.setSize(this.size);

    this.addClass(this.classList);

    this.render();
  }

  render() {
    if (this.icon) {
      this.iconString = `<svg class="icon ${this.iconSize}">
                    <use href=${this.icon} />
                </svg>`;
    } else {
      this.iconString = "";
    }

    if (this.iconPosition === "right") {
      this.addClass("flex-row-reverse");
    } else if (this.iconPosition === "left") {
      this.addClass("flex-row");
    }

    this.innerHTML = `
          <a href="${this.href}">
                <div id="${this.id}" class="${this.classes}">
                    ${this.innerText}
                    ${this.iconString}
                </div>
          </a>
          `;
  }
}

customElements.define("cyn-button", Button);

class IconButton extends HTMLElement {
  constructor() {
    super();

    this.href = "#";
    this.id = "";
    this.icon = "";
    this.type = "primary";
    this.size = "md";
    this.classes = "rounded-full transition-all duration-300 cursor-pointer";
  }

  addClass(classes) {
    this.classes = this.classes + " " + classes;
  }

  setType(type) {
    switch (type) {
      default:
      case "primary":
        this.addClass(
          "bg-primary-100 color-primary-20 border border-primary-100 hover:border-primary-20 hover:bg-primary-100/0 max-sm:hover:bg-primary-100 max-sm:hover:border-primary-100"
        );
        break;

      case "secondary":
        this.addClass(
          "bg-primary-100/0 color-primary-20 border border-primary-70 hover:bg-primary-100 hover:color-primary-100"
        );
        break;
    }
  }

  setSize(size) {
    switch (size) {
      case "sm":
        this.addClass("p-2");
        this.iconSize = "size-4";
        break;

      default:
      case "md":
        this.addClass("p-2");
        this.iconSize = "size-6 max-md:size-4";

        break;

      case "lg":
        this.addClass("p-3 max-md:p-2");
        this.iconSize = "size-6 max-md:size-4";
        break;
    }
  }

  connectedCallback() {
    this.href = this.getAttribute("href");
    this.id = this.getAttribute("id");
    this.type = this.getAttribute("type");
    this.icon = this.getAttribute("icon");
    this.size = this.getAttribute("size");

    this.setType(this.type);
    this.setSize(this.size);

    this.render();
  }

  render() {
    this.innerHTML = `
          <a ${this.href && `href="${this.href}"`} id="${this.id}" >
		  <div class="${this.classes}">
                <svg class="icon ${this.iconSize}">
                    <use href=${this.icon} />
                </svg>
		</div>
          </a>
          `;
  }
}

customElements.define("cyn-icon-button", IconButton);
