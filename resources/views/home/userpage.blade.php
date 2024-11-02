<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Online</title>
    <link rel="icon" href="{{ asset('home/images/cat_logo2.jpeg') }}" type="image/png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('home/css/geral.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/userpage.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('home/css/menu.css') }}">

</head>

<body>
    @include('includes.navbar')
    <!-- Carrossel CSS Puro -->
    <div class="carousel">
        <div class="carousel-item active">
            <h2>20% off em Produtos de Casa</h2>
        </div>
        <div class="carousel-item">
            <h2>40% off em Roupas</h2>
        </div>
        <div class="carousel-item">
            <h2>10% off em Produtos de Cachorro</h2>
        </div>
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>


    <!-- Seção de Produtos -->
    <div class="container">
        <h2 class="text-center mb-4" style="color: var(--roxo);">Produtos em Destaque</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="product-card">
                    <img src="{{ asset('home/images/t-shit1.jpeg') }}" alt="T-Shirt">
                    <h5>T-Shirt</h5>
                    <p>R$ 50,00</p>
                    <div class="button-container">
                        <button class="btn add-to-cart">Adicionar ao Carrinho</button>
                        <button class="btn view-product">Visualizar Produto</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="{{ asset('home/images/bags.jpeg') }}" alt="Bag">
                    <h5>Bag</h5>
                    <p>R$ 70,00</p>
                    <div class="button-container">
                        <button class="btn add-to-cart">Adicionar ao Carrinho</button>
                        <button class="btn view-product">Visualizar Produto</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="{{ asset('home/images/dress.png') }}" alt="Dress">
                    <h5>Dress</h5>
                    <p>R$ 100,00</p>
                    <div class="button-container">
                        <button class="btn add-to-cart">Adicionar ao Carrinho</button>
                        <button class="btn view-product">Visualizar Produto</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="{{ asset('home/images/p10.png') }}" alt="T-Shirt">
                    <h5>T-Shirt</h5>
                    <p>R$ 60,00</p>
                    <div class="button-container">
                        <button class="btn add-to-cart">Adicionar ao Carrinho</button>
                        <button class="btn view-product">Visualizar Produto</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes/footer')


</body>
<!-- jQuery (necessário para Bootstrap's JavaScript) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    let currentIndex = 0;
    const items = document.querySelectorAll('.carousel-item');

    function showSlide(index) {
        items.forEach((item, i) => {
            item.classList.remove('active');
            if (i === index) {
                item.classList.add('active');
            }
        });
    }

    function moveSlide(step) {
        currentIndex = (currentIndex + step + items.length) % items.length;
        showSlide(currentIndex);
    }

    // Iniciar o carrossel com o primeiro item ativo
    showSlide(currentIndex);
</script>

</html>
