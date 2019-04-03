document.getElementById( 'send-message-btn' ).scrollIntoView();
const chatContainer = document.getElementsByClassName('messages-container');

chatContainer[0].scrollTop = chatContainer[0].scrollHeight;
