//Opções basicas para criar as animações
ScrollReveal({
    reset: true,
    distance:'60px',
    duration: 1000,
    delay:120
});

//dentro da função, é onde coloca o nome da div 
//Pode mexr com todos os cantos da animação (Left, Right...). Center: sem 'origin: 'position''

//mostra o banner da pagina 
ScrollReveal().reveal('.input-field', {delay: 100 });

//Mostra a animação vindo da esquerda   
ScrollReveal().reveal('.main-text', {delay: 100, origin: 'left'});

//Mostra os textos dos cards vindo de baixo, com intervalo cada um
ScrollReveal().reveal('.inner', {delay: 100, origin: 'bottom', interval: 100  });



