//Opções basicas para criar as animações
ScrollReveal({
    reset: true,
    distance:'60px',
    duration: 1000,
    delay:120
});

//dentro da função, é onde coloca o nome da div 
//Pode mexr com todos os cantos da animação (Left, Right...). Center: sem 'origin: 'position''

ScrollReveal().reveal('header', {delay: 100 });

ScrollReveal().reveal('select', {delay: 900});

ScrollReveal().reveal('input', {delay: 500, interval: 100  });

ScrollReveal().reveal('i', {delay: 800, origin: 'right'});

ScrollReveal().reveal('label', {delay: 300, interval: 100  });

//Mostra a animação vindo da esquerda   
ScrollReveal().reveal('span', {delay: 800, origin: 'right'});





