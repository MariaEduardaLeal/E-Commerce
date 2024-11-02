<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>

        <form id="productForm" class="bg-white p-6 rounded-lg shadow-md mb-6">
            <h2 class="text-2xl font-semibold mb-4">Cadastrar Produto</h2>

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
                <div id="sizeInputs" class="flex space-x-2">
                    <select name="size[]" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                        <option value="PP">PP</option>
                        <option value="P">P</option>
                        <option value="M">M</option>
                        <option value="G">G</option>
                        <option value="GG">GG</option>
                        <option value="XG">XG</option>
                        <option value="XGG">XGG</option>
                    </select>
                    <button type="button" id="addSizeBtn" class="mt-1 bg-blue-500 text-white px-3 py-1 rounded">Adicionar Tamanho</button>
                </div>
            </div>

            <div class="mb-4">
                <label for="productImages" class="block text-sm font-medium text-gray-700">Imagens</label>
                <input type="file" id="productImages" name="images[]" accept="image/png, image/jpeg" multiple class="mt-1 block w-full" />
            </div>

            <button type="submit" class="mt-2 bg-green-500 text-white px-4 py-2 rounded">Cadastrar Produto</button>
        </form>

        <div id="chartContainer" class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Gráfico de Transações</h2>
            <canvas id="transactionsChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script ></script>
    <script src="{{ asset('js/admpage.js') }}"></script>

</body>
</html>
