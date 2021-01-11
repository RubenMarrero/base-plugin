document.addEventListener('DOMContentLoaded', function (e) {
    const showAuthBtn = document.getElementById('base-show-auth-form'),
        authContainer = document.getElementById('base-auth-container'),
        close = document.getElementById('base-auth-close');
    
    showAuthBtn.addEventListener('click', () => {
        authContainer.classList.add('show');        
        showAuthBtn.parentElement.classList.add('hide');
    });

    close.addEventListener('click', () => {
        authContainer.classList.remove('show');
        showAuthBtn.parentElement.classList.remove('hide');
    });
});