addEventListener('DOMContentLoaded', function(){
    document.getElementById('user-mainpage-name').addEventListener('click', function(){
        let authWindow = document.getElementsByClassName('auth-window');
        authWindow[0].toggleAttribute('hidden');
    }); 
    isEditOn = false;
    let about = document.getElementsByClassName('about')[0];
    let help = document.getElementsByClassName('help')[0];
    let editButton = document.getElementsByClassName('edit-button-img')[0];
    document.getElementsByClassName('edit-button-img')[0].addEventListener('click', function(){
        editButton.classList.toggle('edit-button-img-ON');
        about.toggleAttribute('contenteditable');
        about.classList.toggle('about-ON');
        help.toggleAttribute('contenteditable');
        help.classList.toggle('help-ON');
        console.log(about.hasAttribute('contenteditable'));
    });
    // localStorage.setItem('currentAbout', about.innerHTML);
    // localStorage.setItem('currentHelp', help.innerHTML);


    about.oninput = function() {
        localStorage.setItem('currentAbout', about.innerHTML);
        console.log('saved');
    }
    about.innerHTML = localStorage.getItem('currentAbout');
    

    help.oninput = function() {
        localStorage.setItem('currentHelp', help.innerHTML);
        console.log('saved');
    }
    help.innerHTML = localStorage.getItem('currentHelp');
})