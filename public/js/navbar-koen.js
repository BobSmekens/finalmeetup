const toggleButton = document.getElementsByClassName('navbar-toggler-icon');
const toggleContent = document.getElementsByClassName('toggle-content');
const h2class = document.getElementsByTagName('h2');
const activitiesTitles = document.getElementsByClassName('activities-table-titles-container');


console.log(h2class);
console.log(activitiesTitles);
console.log(toggleContent);

toggleButton[0].addEventListener('click', contentTopChanger);

let navCount = 1;
function contentTopChanger(){
    if (navCount === 0) {

      for (i=0; i<toggleContent.length; i++){
        toggleContent[i].style.opacity = "1";
        console.log("opacitty 1");
        
      }

        //console.log('opacity 1');
        navCount = 1;
      } else {
        for (i=0; i<toggleContent.length; i++){
          toggleContent[i].style.opacity = "0";
          console.log("opacitty 0");
        }
        navCount = 0;
      }
    }



