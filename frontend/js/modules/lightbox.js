export function lightbox() {

  const triggers = document.querySelectorAll('a[href="#clickme"]');

  triggers.forEach(function (trigger) {
    trigger.addEventListener("click", function (e) {
      e.preventDefault(); 
      document.querySelector(".lightbox").className = "open";
    });
  });

<<<<<<< Updated upstream
<<<<<<< Updated upstream
  function fillContent(event) {
    // event.preventDefault();
    let agentIndex = this.dataset.agentIndex;
    let agentIndex = event.currentTarget.dataset.agentIndex;
    let agent = agents[agentIndex];
    //console.log(this.dataset.heroIndex);
    content.innerHTML = "";
=======
  document.getElementById("close").addEventListener("click", function () {
    document.getElementById("lightbox").className = "";
=======
  document.querySelector("#close").addEventListener("click", function () {
    document.querySelector("#lightbox").className = "";
>>>>>>> Stashed changes
  });
>>>>>>> Stashed changes

  document.querySelector("#lightbox").addEventListener("click", function (e) {
    if (e.target.id == "lightbox") {
      document.querySelector(".lightbox").className = "";
    }
  });
}