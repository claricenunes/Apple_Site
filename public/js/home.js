document.addEventListener('DOMContentLoaded', function() {

const items    = document.querySelectorAll('.carousel .item');
const prevBtn  = document.getElementById('prev');
const nextBtn  = document.getElementById('next');
const rippleBg = document.getElementById('ripple-bg');
const list     = document.querySelector('.carousel .list');

let current   = 0;
let timer;
let animating = false;

const colorData = [
    { bg: '#d2cfd3', img: 'img/iphone17/iphone17_white.png',  glow: '#c0bdc0' },
    { bg: '#d0b7df', img: 'img/iphone17/iphone17_purple.png', glow: '#9b6fc4' },
    { bg: '#9aa986', img: 'img/iphone17/iphone17_green.png',  glow: '#6a8a5a' },
    { bg: '#afbfd7', img: 'img/iphone17/iphone17_blue.png',   glow: '#6a8ab0' },
    { bg: '#6c6c6c', img: 'img/iphone17/iphone17_black.png',  glow: '#3a3a3a' },
];

// Aplica cor de fundo e glow em um slide
function applyColors(itemEl, bgColor, glowColor) {
    itemEl.querySelector('.main-content').style.backgroundColor = bgColor;
    list.style.setProperty('--glow-color', glowColor);
}

function goTo(n) {
    if (animating) return;
    const next = (n + items.length) % items.length;
    if (next === current) return;
    animating = true;

    const newBg   = items[next].dataset.bg;
    const newGlow = items[next].dataset.glow;

    const circle = document.createElement('div');
    circle.className = 'ripple-circle';
    circle.style.background = newBg;
    rippleBg.appendChild(circle);

    setTimeout(() => {
        items[current].classList.remove('active');
        items[next].classList.add('active');
        current = next;

        // aplica cor do slide (não da bolinha — cor padrão do slide)
        applyColors(items[next], newBg, newGlow);

        // reseta bolinhas para a primeira
        const dots = items[next].querySelectorAll('.dot');
        dots.forEach(d => d.classList.remove('active'));
        if (dots[0]) dots[0].classList.add('active');

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

// Inicializa primeiro slide
items[0].classList.add('active');
applyColors(items[0], items[0].dataset.bg, items[0].dataset.glow);
resetTimer();

// Bolinhas de cor
document.querySelectorAll('.carousel .item').forEach(item => {
    const dots        = item.querySelectorAll('.dot');
    const mainContent = item.querySelector('.main-content');
    const img         = item.querySelector('figure img');

    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            const idx = parseInt(dot.dataset.index);

            dots.forEach(d => d.classList.remove('active'));
            dot.classList.add('active');

            img.src = colorData[idx].img;
            applyColors(item, colorData[idx].bg, colorData[idx].glow);
        });
    });
});

});