document.addEventListener('click', function (e) {
    let targetEl = e.target;
    if (targetEl.classList.contains('header__burger')) {
        targetEl.classList.toggle('_active');
        document.querySelector('.header__menu').classList.toggle('_active');
        document.querySelector('.page').classList.toggle('_moved');
    }

    let arr = { block: "start", behavior: "smooth" };

    if (targetEl.classList.contains('scroll-to-advantages')) {
        prevDef(e);
        document.querySelector('.advantages').scrollIntoView(arr);
    }
    if (targetEl.classList.contains('scroll-to-about')) {
        prevDef(e);
        document.querySelector('.about').scrollIntoView(arr);
    }
    if (targetEl.classList.contains('scroll-to-feedback')) {
        prevDef(e);
        document.querySelector('.feedback').scrollIntoView(arr);
    }
    function prevDef(e) {
        e.preventDefault();
    }

});

if (document.querySelector('.feedback__slider')) {
    new Swiper('.feedback__slider', {
        slidesPerView: 'auto',
        loop: true,
        spaceBetween: 19,
        grabCursor: true,
        pagination: {
            el: '.feedback__slider-pagination',
            clickable: true,
        },

    })
}


