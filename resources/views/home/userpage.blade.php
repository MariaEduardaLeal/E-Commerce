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
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('home/images/cat_logo2_sem_fundo.png') }}" style="width: 9%;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-cart"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-search"></i></a>
                    </li>
                    @if(auth()->check())

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile') }}">Perfil</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                        </ul>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @else
                    <li class="nav-item">
                        <a class="nav-link btn" href="{{ route('login-page') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn" href="{{ route('register-page') }}">Cadastrar</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


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


    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Sobre Nós</h5>
                    <p>Minha Loja é especializada em oferecer os melhores produtos com os melhores preços. Estamos no mercado há mais de 10 anos trazendo qualidade e confiança.</p>
                </div>
                <div class="col-md-4">
                    <h5>Contato</h5>
                    <p>Endereço: Rua Exemplo, 123, Centro</p>
                    <p>Telefone: (11) 1234-5678</p>
                    <p>Email: contato@minhaloja.com</p>
                </div>
                <div class="col-md-4">
                    <h5>Siga-nos</h5>
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <p>&copy; 2024 Minha Loja. Todos os direitos reservados.</p>
        </div>
    </footer>


</body>
<!-- jQuery (necessário para Bootstrap's JavaScript) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
