addEventListener('DOMContentLoaded', function(){
    document.getElementById('user-mainpage-name').addEventListener('click', function(){
        let authWindow = document.getElementsByClassName('auth-window');
        authWindow[0].toggleAttribute('hidden');
    }); 

    let editButton = document.getElementsByClassName('edit-button-img')[0];
    let resetButton = document.getElementsByClassName('reset-editting-img')[0];

    let aboutH = document.getElementsByClassName('about-h2');
    let aboutP = document.getElementsByClassName('about-p');
    let helpH = document.getElementsByClassName('help-h2');
    let helpP = document.getElementsByClassName('help-p');

    editButton.addEventListener('click', function(){
        editButton.classList.toggle('buttons-change');

        aboutH[0].toggleAttribute('contenteditable');
        aboutH[0].classList.toggle('changing');
        aboutP[0].toggleAttribute('contenteditable');
        aboutP[0].classList.toggle('changing');

        helpH[0].toggleAttribute('contenteditable');
        helpH[0].classList.toggle('changing');
        helpP[0].toggleAttribute('contenteditable');
        helpP[0].classList.toggle('changing');
    });

    resetButton.addEventListener('click', function(){
        localStorage.setItem('currentAbout-H', 'О Space Station 14');
        localStorage.setItem('currentAbout-P', 'Space Station 14 вдохновлена культовой классикой <a href="https://spacestation13.com/">Space Station 13</a> и рассказывает историю о том, как обычная смена на космической станции пошла наперекосяк. Погрузитесь в свою роль, возитесь с проработанными системами и выживайте в хаосе в этой многопользовательской ролевой игре.');
        localStorage.setItem('currentHelp-H', 'Помогите! Я не могу найти руководство по X!');
        localStorage.setItem('currentHelp-P', 'Скорее всего, его еще не существует! Вики SS14, как и большинство вики, открыта для редактирования любым желающим. Для помощи и лучшей координации обратитесь в наш <a href="https://discord.gg/corvax">Discord</a>, там имеется отдельный канал для редакторов Вики.');
        aboutH[0].innerHTML = localStorage.getItem('currentAbout-H');
        aboutP[0].innerHTML = localStorage.getItem('currentAbout-P');
        helpH[0].innerHTML = localStorage.getItem('currentHelp-H');
        helpP[0].innerHTML = localStorage.getItem('currentHelp-P');
    });

    aboutH[0].oninput = function() {
        localStorage.setItem('currentAbout-H', aboutH[0].innerHTML);
        console.log('saved');
    }
    aboutH[0].innerHTML = localStorage.getItem('currentAbout-H');
    aboutP[0].oninput = function() {
        localStorage.setItem('currentAbout-P', aboutP[0].innerHTML);
        console.log('saved');
    }
    aboutP[0].innerHTML = localStorage.getItem('currentAbout-P');
    
    helpH[0].oninput = function() {
        localStorage.setItem('currentHelp-H', helpH[0].innerHTML);
        console.log('saved');
    }
    helpH[0].innerHTML = localStorage.getItem('currentHelp-H');
    helpP[0].oninput = function() {
        localStorage.setItem('currentHelp-P', helpP[0].innerHTML);
        console.log('saved');
    }
    helpP[0].innerHTML = localStorage.getItem('currentHelp-P');
})