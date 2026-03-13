const items    = document.querySelectorAll('.carousel .item');
const prevBtn  = document.getElementById('prev');
const nextBtn  = document.getElementById('next');
const rippleBg = document.getElementById('ripple-bg');

let current   = 0;
let timer;
let animating = false;

function goTo(n) {
    if (animating) return;
    const next = (n + items.length) % items.length;
    if (next === current) return;
    animating = true;

    const newBg = items[next].dataset.bg;

    const circle = document.createElement('div');
    circle.className = 'ripple-circle';
    circle.style.background = newBg;
    rippleBg.appendChild(circle);

    setTimeout(() => {
        items[current].classList.remove('active');
        items[next].classList.add('active');
        current = next;
        document.body.style.background = newBg;

        setTimeout(() => {
            circle.remove();
            animating = false;
        }, 200);
    }, 1800);

    resetTimer();
}

function resetTimer() {
    clearInterval(timer);
    timer = setInterval(() => goTo(current + 1), 5500);
}

prevBtn.addEventListener('click', () => goTo(current - 1));
nextBtn.addEventListener('click', () => goTo(current + 1));

// inicializa o primeiro slide e cor de fundo
items[0].classList.add('active');
document.body.style.background = items[0].dataset.bg;

// começa o timer (sem chamar goTo(0) pra não travar o animating)
resetTimer();