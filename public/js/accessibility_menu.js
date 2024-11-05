document.getElementById('toggleTheme').addEventListener('click', () => {
    const body = document.body;
    const formContainer = document.querySelector('.form-container');
    const labels = document.querySelectorAll('label');
    const h1 = document.querySelector('h1');

    if (body.getAttribute('data-theme') === 'dark') {
        body.setAttribute('data-theme', 'light');
        body.style.backgroundColor = '#f3f4f6';
        body.style.color = '#4a5568';
        formContainer.style.backgroundColor = 'white';
        formContainer.style.color = '#4a5568';
        h1.style.backgroundColor = 'white';
        h1.style.color = '#4a5568';

        labels.forEach(label => {
            label.style.color = '#4a5568'; // Cor das labels para o tema claro
        });
    } else {
        body.setAttribute('data-theme', 'dark');
        body.style.backgroundColor = '#2d3748';
        body.style.color = '#e2e8f0';
        formContainer.style.backgroundColor = '#4a5568';
        formContainer.style.color = '#e2e8f0';
        h1.style.backgroundColor = '#4a5568';
        h1.style.color = '#e2e8f0';

        labels.forEach(label => {
            label.style.color = '#e2e8f0'; // Cor das labels para o tema escuro
        });
    }
});

// Ajuste do tamanho do texto
const increaseTextBtn = document.getElementById('increaseText');
const decreaseTextBtn = document.getElementById('decreaseText');
let fontSize = 16; // Tamanho inicial da fonte

increaseTextBtn.addEventListener('click', () => {
    fontSize += 2;
    document.body.style.fontSize = fontSize + 'px';
});

decreaseTextBtn.addEventListener('click', () => {
    if (fontSize > 12) {
        fontSize -= 2;
        document.body.style.fontSize = fontSize + 'px';
    }
});
