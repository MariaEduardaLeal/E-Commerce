$(document).ready(function() {
    // Adiciona campo de cor
    $('#addColorBtn').click(function() {
        $('#colorInputs').append(`
            <input type="text" name="color[]" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" placeholder="Cor" />
        `);
    });

    // Adiciona campo de tamanho
    $('#addSizeBtn').click(function() {
        $('#sizeInputs').append(`
            <select name="size[]" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                <option value="PP">PP</option>
                <option value="P">P</option>
                <option value="M">M</option>
                <option value="G">G</option>
                <option value="GG">GG</option>
                <option value="XG">XG</option>
                <option value="XGG">XGG</option>
            </select>
        `);
    });

    // Inicializa gráfico de transações
    const ctx = document.getElementById('transactionsChart').getContext('2d');
    const transactionsChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Roupas', 'Eletrodomésticos', 'Produtos de Cachorro'],
            datasets: [{
                data: [30, 50, 20], // Exemplo de dados, você pode alterar conforme necessário
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    // Handle product form submission
    $('#productForm').on('submit', function(event) {
        event.preventDefault();
        // Aqui você pode adicionar a lógica para enviar os dados do formulário para o servidor
        alert('Produto cadastrado com sucesso!');
        this.reset(); // Limpa o formulário após o envio
    });
});
