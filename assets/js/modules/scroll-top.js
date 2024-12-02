window.onscroll = function () {
  var e = document.getElementById("scrolltop-pc");
  if (!e) {
    e = document.createElement("a");
    e.id = "scrolltop-pc";
    e.href = "#";
    document.body.appendChild(e);
  }
  e.style.display =
    document.documentElement.scrollTop > 300 ? "block" : "block";
  e.onclick = (ev) => {
    ev.preventDefault();
    document.documentElement.scrollTop = 0;
  };
};

Window.onscroll = function () {
  var e = document.querySelectorAll("scrollTop");
  if (!e) {
    e = document.createElement("a");
    e.class = "scrollTop";
    e.href = "#";
    document.body.appendChild(e);
  }
  e.style.display =
    document.documentElement.scrollTop > 300 ? "block" : "block";
  e.onclick = (ev) => {
    ev.preventDefault();
    document.documentElement.scrollTop = 0;
  };
};
