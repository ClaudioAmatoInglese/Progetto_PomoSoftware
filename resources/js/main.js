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