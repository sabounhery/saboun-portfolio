$(document).ready(function () {
  $("#menu").click(function () {
    $(this).toggleClass("fa-times");
    $("header").toggleClass("toggle");
  });
  $("window").on("scroll load", function () {
    $(this).removeClass("fa-times");
    $("header").removeClass("toggle");
  });
});

document.querySelectorAll("section").forEach((sec) => {
  let top = window.scrollY;
  let offset = sec.offsetTop;
  let height = sec.offsetHeight;
  let id = sec.getAttribute("id");
  if ((top) => offset && top < offset + height) {
    document.querySelectorAll(".header .navbar a").forEach((links) => {
      links.classList.remove("active");
      document
        .querySelectorAll(".header .navbar a [href*='+id +']")
        .classList.add("active");
    });
  }
});
