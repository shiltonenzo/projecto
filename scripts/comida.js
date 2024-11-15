// Função para trocar as imagens automaticamente
function trocarImagens() {
    const pratos = document.querySelectorAll('.menu-pratos .prato-item img');
    const promocoes = document.querySelectorAll('.promocoes .promocao-item img');

    let indexPrato = 0;
    let indexPromocao = 0;

    // Função que troca a imagem de uma lista de elementos (menu ou promoções)
    function trocarImagem(elementos, index, intervalo) {
        setInterval(() => {
            // Remove a classe 'visible' da imagem anterior
            elementos[index].classList.remove('visible');
            
            // Avança para a próxima imagem, e se chegar no final, reinicia
            index = (index + 1) % elementos.length;
            
            // Adiciona a classe 'visible' à nova imagem
            elementos[index].classList.add('visible');
        }, intervalo);
    }

    // Iniciar a troca de imagens
    trocarImagem(pratos, indexPrato, 3000);  // Trocar a imagem do menu de pratos a cada 3 segundos
    trocarImagem(promocoes, indexPromocao, 3000);  // Trocar a imagem das promoções a cada 3 segundos
}

// Chamar a função para iniciar a troca de imagens
trocarImagens();
