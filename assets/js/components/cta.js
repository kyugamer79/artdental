class CTA extends HTMLElement {
  constructor() {
    super();

    this.title = "مشاوره رایگان";
    this.description = "جهت رزرو نوبت مشاوره رایگان در مرکز اینجا کلیک کن";
    this.button = `
                <cyn-button type="accent"
							href="#"
							class="reservePopUpOpener"
							size="md">
					رزرو نوبت
				</cyn-button>
        `;

    this.classes = "";
  }

  addClass(classes) {
    this.classes = this.classes + " " + classes;
  }

  connectedCallback() {
    this.title = this.getAttribute("title") ?? this.title;
    this.description = this.getAttribute("description") ?? this.description;
    // this.button = this.innerHTML ?? this.button;

    this.render();
  }

  render() {
    this.innerHTML = `
            <div class="rounded-2xl bg-accent-90 px-4 py-6">
                <div>
                    <div class="text-h4 text-primary-0">
                        ${this.title}
                    </div>
                    <div class="text-body text-primary-10">
                        ${this.description}
                    </div>
                </div>

                <div class="flex justify-end">
                    ${this.button}
                </div>
            </div>
        `;
  }
}

customElements.define("cyn-cta", CTA);
