export function lightbox() {

  const triggers = document.querySelectorAll('a[href="#clickme"]');

  triggers.forEach(function (trigger) {
    trigger.addEventListener("click", function (e) {
      e.preventDefault(); 
      document.getElementById("lightbox").className = "open";
    });
  });

  document.getElementById("close").addEventListener("click", function () {
    document.getElementById("lightbox").className = "";
  });

  document.getElementById("lightbox").addEventListener("click", function (e) {
    if (e.target.id == "lightbox") {
      document.getElementById("lightbox").className = "";
    }
  });
}