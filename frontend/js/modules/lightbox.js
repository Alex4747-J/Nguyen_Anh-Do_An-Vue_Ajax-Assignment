export function lightbox() {

  const triggers = document.querySelectorAll('a[href="#clickme"]');

  triggers.forEach(function (trigger) {
    trigger.addEventListener("click", function (e) {
      e.preventDefault(); 
      document.querySelector(".lightbox").className = "open";
    });
  });

  document.querySelector("#close").addEventListener("click", function () {
    document.querySelector("#lightbox").className = "";
  });

  document.querySelector("#lightbox").addEventListener("click", function (e) {
    if (e.target.id == "lightbox") {
      document.querySelector(".lightbox").className = "";
    }
  });
}