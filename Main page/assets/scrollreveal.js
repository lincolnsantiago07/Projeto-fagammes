//Opções basicas para criar as animações
ScrollReveal({
    reset: true,
    distance:'60px',
    duration: 2900,
    delay:15
});

//dentro da função, é onde coloca o nome da div 
//Pode mexr com todos os cantos da animação (Left, Right...). Center: sem 'origin: 'position''

ScrollReveal().reveal('.Container-counter', {delay: 10 });

ScrollReveal().reveal('.video-content', {delay: 100, origin: 'top' });

ScrollReveal().reveal('.map-container', {delay: 100, origin: 'bottom'});

ScrollReveal().reveal('.banner-text', {delay: 100, origin: 'left' });

ScrollReveal().reveal('.container-cards', {delay: 100, origin: 'bottom'});

ScrollReveal().reveal('.inner', {delay: 100, origin: 'bottom', interval: 300  });

ScrollReveal().reveal('.time-1, .nome-time-1', {delay: 100, origin: 'left'});

ScrollReveal().reveal('.time-2, .nome-time-2', {delay: 100, origin: 'right'});





