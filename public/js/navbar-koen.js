const toggleButton = document.getElementsByClassName('navbar-toggler-icon');
const ToggleContent = document.getElementsById('toggle-content');
const h2class = document.getElementsByTagName('h2');
const activitiesTitles = document.getElementsByClassName('activities-table-titles-container');


console.log(h2class);
console.log(activitiesTitles);

toggleButton[0].addEventListener('click', contentTopChanger);
let navCount = 1;
function contentTopChanger(){
    if (navCount === 0) {

        ToggleContent.style.opacity = "1";

        //console.log('opacity 1');
        navCount = 1;
      } else {
        ToggleContent.style.opacity = "0";
        //console.log('opacity 0');
        navCount = 0;
      }
    }


    ////  user fedback

    const userFeedback = document.getElementsByClassName('user-feedback');
    const CloseButton = document.getElementsByClassName('close');

    userFeedback[0].addEventListener('click', closeUserFeedback);

    function closeUserFeedback (){
        activitiesTitles.innterHTML = "";

    }
