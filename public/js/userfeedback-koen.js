
    const userFeedback = document.getElementsByClassName('user-feedback');
    console.log(userFeedback);
    //timer

    userFeedback[0].addEventListener('click', deleteUSerFeedback);

    function deleteUSerFeedback() {
        console.log('im clicked');
        userFeedback[0].style.display = "none";
    }

