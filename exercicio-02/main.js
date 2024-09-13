// Criando um contador de cliques em um botão usando JavaScript para manipular o DOM.

const btn = document.querySelector('button'); // Selecionando o botão
const count = document.querySelector('h3'); // Selecionando o contador

// Adicionando um evento de clique no botão
btn.addEventListener('click', () => {
    // Pegando o valor do contador no localStorage
    const counter = localStorage.getItem('counter') || 0;
    // Convertendo o valor do contador para inteiro e incrementando 1
    const newCounter = parseInt(counter) + 1;
    
    // Atualizando o contador
    localStorage.setItem('counter', newCounter);
    count.textContent = newCounter;
});

// Adicionando um evento de carregamento da página
window.addEventListener('load', () => {
    const counter = localStorage.getItem('counter') || 0;
    count.textContent = counter;
});