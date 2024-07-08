document.addEventListener("DOMContentLoaded", function () {
    const toc = document.getElementById("toc");
    const prose = document.querySelector(".prose");
    const headings = prose?.querySelectorAll("h2");

    const icon = document.querySelector(".separator svg");

    if (!toc || !prose || !headings || !icon) return;

    headings.forEach(function (heading, index) {
        // Create a unique ID for each heading
        const id = "section-" + index;
        heading.setAttribute("id", id);

        // Create a list item for the TOC
        const li = document.createElement("li");
        li.classList.add("flex", "flex-row-reverse", "justify-between", "p-1");
        const a = document.createElement("a");
        const svg = icon.cloneNode(true);

        a.textContent = heading.textContent;
        a.setAttribute("href", "#" + id);
        li.appendChild(svg);
        li.appendChild(a);
        toc.appendChild(li);
    });
});
