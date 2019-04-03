
    const userFeedback = document.getElementsByClassName('user-feedback');
    console.log(userFeedback);
    

    userFeedback[0].addEventListener('click', deleteUSerFeedback);
    setTimeout (deleteUSerFeedback,3000);


    function deleteUSerFeedback() {
        //console.log('im clicked');
        userFeedback[0].style.display = "none";
    }

