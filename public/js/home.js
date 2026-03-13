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

// Dados de cada cor
const colorData = [
    { bg: '#d2cfd3', img: 'img/iphone17/iphone17_white.png'  },
    { bg: '#d0b7df', img: 'img/iphone17/iphone17_purple.png' },
    { bg: '#9aa986', img: 'img/iphone17/iphone17_green.png'  },
    { bg: '#afbfd7', img: 'img/iphone17/iphone17_blue.png'   },
    { bg: '#6c6c6c', img: 'img/iphone17/iphone17_black.png'  },
];

document.querySelectorAll('.carousel .item').forEach(item => {
    const dots      = item.querySelectorAll('.dot');
    const mainContent = item.querySelector('.main-content');
    const img       = item.querySelector('figure img');

    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            const idx = parseInt(dot.dataset.index);

            // Atualiza bolinha ativa
            dots.forEach(d => d.classList.remove('active'));
            dot.classList.add('active');

            // Troca cor de fundo
            mainContent.style.backgroundColor = colorData[idx].bg;

            // Troca imagem com fade
            img.style.opacity = '0';
            img.style.transition = 'opacity 0.3s ease';
            setTimeout(() => {
                img.src = colorData[idx].img;
                img.style.opacity = '1';
            }, 300);
        });
    });
});