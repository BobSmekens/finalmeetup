const toggleButton = document.getElementsByClassName('navbar-toggler-icon');
const ToggleContent = document.getElementsByClassName('content-top section-flex');

console.log(toggleButton);
console.log(ToggleContent);

toggleButton[0].addEventListener('click', contentTopChanger);

function contentTopChanger(){
    if (toggleButton.style.display === "none") {
        toggleButton.style.display = "block";
      } else {
        toggleButton.style.display = "none";
      }
    }