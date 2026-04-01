export function lightbox() {

  const triggers = document.querySelectorAll('a[href="#clickme"]');

  triggers.forEach(function (trigger) {
    trigger.addEventListener("click", function (e) {
      e.preventDefault(); 
      document.getElementById("lightbox").className = "open";
    });
  });

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
  });
>>>>>>> Stashed changes

  document.getElementById("lightbox").addEventListener("click", function (e) {
    if (e.target.id == "lightbox") {
      document.getElementById("lightbox").className = "";
    }
  });
}