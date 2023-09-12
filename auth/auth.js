function setAction(actionType) {
    let form = document.getElementById('authForm');
    if(actionType === 'login') {
        form.action = 'do_login.php'; 
    }else if(actionType === 'registration') {
        form.action = 'do_registration.php'; 
    }
}