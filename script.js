addEventListener('DOMContentLoaded', function(){
    document.getElementById('user-mainpage-name').addEventListener('click', function(){
        let authWindow = document.getElementsByClassName('auth-window');
        authWindow[0].toggleAttribute('hidden');
        console.log(123);
    }); 

    let editButton = document.getElementsByClassName('edit-button-img')[0];
    let resetButton = document.getElementsByClassName('reset-editing-img')[0];

    let aboutH = document.getElementsByClassName('about-h2')[0];
    let aboutP = document.getElementsByClassName('about-p')[0];
    let helpH = document.getElementsByClassName('help-h2')[0];
    let helpP = document.getElementsByClassName('help-p')[0];

    editButton.addEventListener('click', function(){
        editButton.classList.toggle('buttons-change');
        aboutH.toggleAttribute('contenteditable');
        aboutH.classList.toggle('changing');
        aboutP.toggleAttribute('contenteditable');
        aboutP.classList.toggle('changing');

        helpH.toggleAttribute('contenteditable');
        helpH.classList.toggle('changing');
        helpP.toggleAttribute('contenteditable');
        helpP.classList.toggle('changing');
    });

    //Кнопка, сбрасывающая значения редактируемых элементов. Инструмент.
    resetButton = document.getElementsByClassName('reset-editting-img')[0];
    resetButton.addEventListener('click', function(){
        localStorage.setItem('currentAbout-H', 'О Space Station 14');
        localStorage.setItem('currentAbout-P', 'Space Station 14 вдохновлена культовой классикой <a href="https://spacestation13.com/">Space Station 13</a> и рассказывает историю о том, как обычная смена на космической станции пошла наперекосяк. Погрузитесь в свою роль, возитесь с проработанными системами и выживайте в хаосе в этой многопользовательской ролевой игре.');
        localStorage.setItem('currentHelp-H', 'Помогите! Я не могу найти руководство по X!');
        localStorage.setItem('currentHelp-P', 'Скорее всего, его еще не существует! Вики SS14, как и большинство вики, открыта для редактирования любым желающим. Для помощи и лучшей координации обратитесь в наш <a href="https://discord.gg/corvax">Discord</a>, там имеется отдельный канал для редакторов Вики.');
        aboutH.innerHTML = localStorage.getItem('currentAbout-H');
        aboutP.innerHTML = localStorage.getItem('currentAbout-P');
        helpH.innerHTML = localStorage.getItem('currentHelp-H');
        helpP.innerHTML = localStorage.getItem('currentHelp-P');
    });
  
})