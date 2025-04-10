// import 'slick-animation';
// import 'slick-carousel';
import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

// Регистрация плагина
gsap.registerPlugin(ScrollTrigger);


const cards = document.querySelectorAll(".aftercare-card");
const section = document.getElementById("aftercare-scroll");

function initScrollTrigger() {
    const totalHeight = cards.length * window.innerHeight;
    section.style.height = `${totalHeight}px`;

    cards.forEach((card, index) => {
        ScrollTrigger.create({
            trigger: section,
            start: () => `top+=${index * window.innerHeight} top`,
            end: () => `top+=${(index + 1) * window.innerHeight} top`,
            scrub: true,
            onEnter: () => showCard(index),
            onEnterBack: () => showCard(index)
        });
    });
}

function showCard(index) {
    cards.forEach((card, i) => {
        card.classList.toggle("opacity-100", i === index);
        card.classList.toggle("opacity-0", i !== index);
        card.classList.toggle("relative", i === index);
        card.classList.toggle("absolute", i !== index);
    });
}

function showAllCardsMobile() {
    section.style.height = "auto";
    cards.forEach(card => {
        card.classList.add("opacity-100", "relative");
        card.classList.remove("opacity-0", "absolute");
    });
}

// Запуск
if (window.innerWidth >= 768) {
    initScrollTrigger();
} else {
    showAllCardsMobile();
}


gsap.to(".parallax-img", {
    y: -100, // сдвиг вверх
    ease: "none",
    scrollTrigger: {
        trigger: ".parallax-img",
        start: "top bottom",   // когда картинка входит снизу
        end: "bottom top",     // когда выходит сверху
        scrub: true            // плавная синхронизация со скроллом
    }
});


// Выбираем все элементы с атрибутом data-parallax
document.querySelectorAll('[data-parallax]').forEach(el => {
    const y = el.dataset.parallax;

    gsap.to(el, {
        y: y,
        ease: 'none',
        scrollTrigger: {
            trigger: el,
            start: 'top bottom',   // когда элемент входит снизу
            end: 'bottom top',     // когда выходит сверху
            scrub: true
        }
    });
});