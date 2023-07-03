addEventListener('DOMContentLoaded', function(){
    document.getElementById('user-mainpage-name').addEventListener('click', function(){
        let authWindow = document.getElementsByClassName('auth-window');
        authWindow[0].toggleAttribute('hidden');
    }); 
    isEditOn = false;
    document.getElementsByClassName('edit-button-img')[0].addEventListener('click', function(){
        document.getElementsByClassName('edit-button-img')[0].classList.toggle('edit-button-img-ON');
        document.getElementsByClassName('about')[0].toggleAttribute('contenteditable');
        document.getElementsByClassName('about')[0].classList.toggle('about-ON');
        document.getElementsByClassName('help')[0].toggleAttribute('contenteditable');
        document.getElementsByClassName('help')[0].classList.toggle('help-ON');
        console.log(document.getElementsByClassName('about')[0].hasAttribute('contenteditable'));
    });
})