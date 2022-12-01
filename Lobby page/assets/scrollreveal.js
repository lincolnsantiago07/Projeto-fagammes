//Opções basicas para criar as animações
ScrollReveal({
    reset: true,
    distance:'60px',
    duration: 2500,
    delay:600
});

//dentro da função, é onde coloca o nome da div 
//Pode mexr com todos os cantos da animação (Left, Right...). Center: sem 'origin: 'position''

ScrollReveal().reveal('.fagames', {delay: 100, origin:'right' });

ScrollReveal().reveal('.main-text', {delay: 10, origin: 'left'});

ScrollReveal().reveal('.register-button', {delay: 100, origin: 'top', interval: 200  });

ScrollReveal().reveal('.bottom', {delay: 100, origin: 'bottom', interval: 200  });




