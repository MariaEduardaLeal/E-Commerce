<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Cadastro de Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/geral.css') }}">
    <link rel="stylesheet" href="{{ asset('css/accessibility_menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adm.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <script src="{{ asset('js/accessibility_menu.js') }}" defer></script>

</head>
<body>
    @include('includes.navbar')
    @include('includes.accessibility_menu')
    <div class="form-container">
        <h1>Cadastrar Produto</h1>

        <!-- Formulário de cadastro -->
        <form id="productForm">
            <label for="productName">Nome do Produto</label>
            <input type="text" id="productName" name="name" placeholder="Digite o nome do produto" required />

            <label for="productPrice">Preço</label>
            <input type="number" id="productPrice" name="price" placeholder="Digite o preço" required />

            <label for="productDescription">Descrição</label>
            <textarea id="productDescription" name="description" placeholder="Descrição do produto" rows="3"></textarea>

            <label for="productType">Tipo de Produto</label>
            <select id="productType" name="type" required>
                <option value="">Selecione uma categoria</option>
                <option value="roupas">Roupas</option>
                <option value="eletrodomesticos">Eletrodomésticos</option>
                <option value="produtos_de_cachorro">Produtos de Cachorro</option>
            </select>

            <!-- Campo de cores -->
            <label>Cores</label>
            <div id="colorInputs" class="flex items-center">
                <input type="color" name="color[]" placeholder="Cor (ex: Vermelho)" />
                <button type="button" id="addColorBtn" class="add-button">Adicionar Cor</button>
            </div>

            <!-- Campo de tamanhos -->
            <label>Tamanhos</label>
            <div id="sizeButtons" class="flex flex-wrap">
                <button type="button" class="size-button">PP</button>
                <button type="button" class="size-button">P</button>
                <button type="button" class="size-button">M</button>
                <button type="button" class="size-button">G</button>
                <button type="button" class="size-button">GG</button>
                <button type="button" class="size-button">XG</button>
                <button type="button" class="size-button">XGG</button>
            </div>

            <label for="productImages">Imagens</label>
            <input type="file" id="productImages" name="images[]" accept="image/png, image/jpeg" multiple />

            <button type="submit" class="submit-btn">Cadastrar Produto</button>
        </form>
    </div>
    @include('includes.footer')
</body>

</html>
