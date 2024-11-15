// Validação do formulário
document.getElementById('reservaForm').addEventListener('submit', function(event) {
    const nome = document.getElementById('nome').value;
    const data = document.getElementById('data').value;
    const hora = document.getElementById('hora').value;
    const pessoas = document.getElementById('pessoas').value;

    if (!nome || !data || !hora || !pessoas) {
        alert("Por favor, preencha todos os campos.");
        event.preventDefault(); // Impede o envio do formulário
    } else {
        alert("Sua reserva foi feita com sucesso!");
    }
});

// Efeito de animação no botão de reserva ao passar o mouse
const btnReserva = document.querySelector('.btn-reservar');
btnReserva.addEventListener('mouseover', () => {
    btnReserva.style.transform = "scale(1.05)";
});

btnReserva.addEventListener('mouseout', () => {
    btnReserva.style.transform = "scale(1)";
});

// Exemplo de interação adicional com o botão
btnReserva.addEventListener('click', () => {
    btnReserva.style.backgroundColor = "#004d00"; // Mudança de cor quando clicado
});

