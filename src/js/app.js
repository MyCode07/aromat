
document.addEventListener('click', function (e) {
    let targetEl = e.target;

    if (targetEl.classList.contains('header__burger')) {
        targetEl.classList.toggle('_active');
        document.querySelector('.header__menu').classList.toggle('_active');
        document.querySelector('.page').classList.toggle('_moved');
    }
});