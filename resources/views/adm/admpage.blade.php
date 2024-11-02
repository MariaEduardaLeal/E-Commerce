<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        :root {
            --roxo: #9a4ded;
            --azul: #4c75a3;
        }

        body {
            background-color: #1f2937; /* Cor de fundo escura */
            transition: background-color 0.3s;
        }

        .dark-bg {
            background-color: #2d3748; /* Fundo do cartão escuro */
        }

        .text-white {
            color: white;
        }

        .text-gray-700 {
            color: #e2e8f0; /* Texto claro */
        }

        .size-button {
            background-color: #4a5568; /* Cor de fundo dos botões de tamanho */
            color: #e2e8f0; /* Cor do texto */
        }

        .size-button.selected {
            background-color: var(--roxo);
        }

        button {
            transition: background-color 0.3s;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
            margin-bottom: 20px; /* Margem para o espaço do switch */
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:checked+.slider:before {
            transform: translateX(26px);
        }

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
</head>

<body class="flex flex-col h-screen">

    <div class="container mx-auto p-6 flex-grow">
        <h1 class="text-3xl font-bold text-white mb-6">Admin Dashboard</h1>

        <!-- Switch de tema -->
        <label class="switch">
            <input type="checkbox" id="themeSwitch">
            <span class="slider round"></span>
        </label>

        <form id="productForm" class="dark-bg p-6 rounded-lg shadow-md mb-6">
            <h2 class="text-2xl font-semibold text-white mb-4">Cadastrar Produto</h2>

            <div class="mb-4">
                <label for="productName" class="block text-sm font-medium text-gray-700">Nome do Produto</label>
                <input type="text" id="productName" name="name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" />
            </div>

            <div class="mb-4">
                <label for="productPrice" class="block text-sm font-medium text-gray-700">Preço</label>
                <input type="number" id="productPrice" name="price" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" />
            </div>

            <div class="mb-4">
                <label for="productDescription" class="block text-sm font-medium text-gray-700">Descrição</label>
                <textarea id="productDescription" name="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" rows="3"></textarea>
            </div>

            <div class="mb-4">
                <label for="productType" class="block text-sm font-medium text-gray-700">Tipo de Produto</label>
                <select id="productType" name="type" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                    <option value="roupas">Roupas</option>
                    <option value="eletrodomesticos">Eletrodomésticos</option>
                    <option value="produtos_de_cachorro">Produtos de Cachorro</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Cores</label>
                <div id="colorInputs" class="flex space-x-2">
                    <input type="text" name="color[]" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" placeholder="Cor" />
                    <button type="button" id="addColorBtn" class="mt-1 bg-blue-500 text-white px-3 py-1 rounded">Adicionar Cor</button>
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Tamanhos</label>
                <div id="sizeButtons" class="flex space-x-2">
                    <button type="button" class="size-button mt-1 px-4 py-2 rounded">PP</button>
                    <button type="button" class="size-button mt-1 px-4 py-2 rounded">P</button>
                    <button type="button" class="size-button mt-1 px-4 py-2 rounded">M</button>
                    <button type="button" class="size-button mt-1 px-4 py-2 rounded">G</button>
                    <button type="button" class="size-button mt-1 px-4 py-2 rounded">GG</button>
                    <button type="button" class="size-button mt-1 px-4 py-2 rounded">XG</button>
                    <button type="button" class="size-button mt-1 px-4 py-2 rounded">XGG</button>
                    <button type="button" id="addSizeBtn" class="mt-1 bg-blue-500 text-white px-3 py-1 rounded">Adicionar Tamanho</button>
                </div>
            </div>

            <div class="mb-4">
                <label for="productImages" class="block text-sm font-medium text-gray-700">Imagens</label>
                <input type="file" id="productImages" name="images[]" accept="image/png, image/jpeg" multiple class="mt-1 block w-full" />
            </div>

            <button type="submit" class="mt-2 bg-green-500 text-white px-4 py-2 rounded">Cadastrar Produto</button>
        </form>

        <div id="chartContainer" class="dark-bg p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-white mb-4">Gráfico de Transações</h2>
            <canvas id="transactionsChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.size-button').click(function () {
                $(this).toggleClass('selected');
            });

            $('#themeSwitch').change(function () {
                if ($(this).is(':checked')) {
                    $('body').css('background-color', '#ffffff');
                    $('.dark-bg').css('background-color', '#f7fafc');
                    $('.text-white').css('color', '#000');
                    $('.text-gray-700').css('color', '#1a202c');
                } else {
                    $('body').css('background-color', '#1f2937');
                    $('.dark-bg').css('background-color', '#2d3748');
                    $('.text-white').css('color', 'white');
                    $('.text-gray-700').css('color', '#e2e8f0');
                }
            });

            $('#addSizeBtn').click(function () {
                // Lógica para adicionar um novo tamanho, se necessário
            });
        });
    </script>
    <script src="{{ asset('js/admpage.js') }}"></script>
</body>

</html>
