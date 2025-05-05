document.addEventListener("DOMContentLoaded", function () {
    const popup = document.getElementById('popup-success');
    if (popup) {
        let timeLeft = 5;
        const countdownText = document.createElement('span');
        countdownText.innerText = ` (si chiude tra ${timeLeft}s)`;
        popup.appendChild(countdownText);

        const interval = setInterval(() => {
            timeLeft--;
            countdownText.innerText = ` (si chiude tra ${timeLeft}s)`;

            if (timeLeft <= 0) {
                clearInterval(interval);
                popup.style.display = 'none';
            }
        }, 1000);
    }
});



    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');
    const hideElements = document.querySelectorAll('.hide-on-scroll');

    window.addEventListener('scroll', function () {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        // Sfondo visibile dopo un po' di scroll
        if (scrollTop > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

        // Se si scrolla verso il basso, nascondi la navbar e gli elementi
        if (scrollTop > lastScrollTop) {
            navbar.classList.add('hide');
            hideElements.forEach(el => el.classList.add('hidden'));
        } else {
            navbar.classList.remove('hide');
            hideElements.forEach(el => el.classList.remove('hidden'));
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // Evita valori negativi
    });



