// form-validation.js

document.addEventListener("DOMContentLoaded", () => {
    const contactForm = document.getElementById("contactForm");

    // Efeito de sombra ao foco nos campos do formulário
    contactForm.addEventListener("focusin", (event) => {
        event.target.style.boxShadow = "0 0 5px 2px #4CAF50";
    });

    contactForm.addEventListener("focusout", (event) => {
        event.target.style.boxShadow = "none";
    });

    // Validação do formulário
    contactForm.addEventListener("submit", (event) => {
        event.preventDefault();

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const subject = document.getElementById("subject").value.trim();
        const message = document.getElementById("message").value.trim();

        if (!name || !email || !subject || !message) {
            alert("Por favor, preencha todos os campos.");
            return;
        }

        alert("Obrigado pelo contato! Responderemos em breve.");
        contactForm.reset();
    });
});
