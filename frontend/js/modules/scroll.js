export function scrollBehavior() {
  document.querySelector("html").style.scrollBehavior = "smooth";
  document.querySelector("#duelist").scrollIntoView();
}
