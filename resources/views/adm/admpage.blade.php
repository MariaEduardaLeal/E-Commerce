<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Cadastro de Produto</title>
    <link rel="icon" href="{{ asset('home/images/cat_logo2.jpeg') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/geral.css') }}">
    <link rel="stylesheet" href="{{ asset('css/accessibility_menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adm.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
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
            <input type="text" id="productPrice" name="price" placeholder="Digite o preço" required />

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
            <div id="colorContainer" style="display: none;">
                <label>Cores</label>
                <div id="colorInputs" class="flex items-center">
                    <input id="color_input" type="color" name="color[]" value="#ffffff" />
                    <button type="button" id="addColorBtn" class="add-button">Adicionar Cor</button>
                </div>
            </div>


            <!-- Campo de tamanhos -->
            <div id="sizeContainer" style="display: none;">
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
            </div>

            <label for="productImages">Imagens</label>
            <input type="file" id="productImages" name="images[]" accept="image/png, image/jpeg" multiple required />

            <button type="submit" class="submit-btn">Cadastrar Produto</button>
        </form>
    </div>
    @include('includes.footer')

    <script>
        $(document).ready(function() {

            $('#productPrice').mask('R$ 000.000.000,00', {
                reverse: true
            });

            // Exibe ou oculta os campos de acordo com o tipo de produto selecionado
            $('#productType').on('change', function() {
                var selectedType = $(this).val();


                if (selectedType === 'roupas' || selectedType === 'eletrodomesticos') {
                    $('#colorContainer').show();
                } else {
                    $('#colorContainer').hide();
                }


                if (selectedType === 'roupas') {
                    $('#sizeContainer').show();
                } else {
                    $('#sizeContainer').hide();
                }
            });


            $('#addColorBtn').on('click', function() {

                let currentColor = $('#color_input').val();

                $('#colorInputs').append('<input disabled type="color" name="color[]" value="' + currentColor + '" />');
            });



            $('#productForm').on('submit', function(e) {
                if ($('#productImages')[0].files.length === 0) {
                    e.preventDefault();
                    alert('Por favor, adicione pelo menos uma imagem.');
                }
            });
        });
    </script>
</body>

</html>
