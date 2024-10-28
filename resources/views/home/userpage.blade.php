<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Online</title>
    <link rel="icon" href="{{ asset('home/images/cat_logo2.jpeg') }}" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS e dependências -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Ícones do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --roxo: #9a4ded;
            --azul: #4c75a3;
        }


        /* Estilos do menu */
        .navbar {
            background-color: var(--roxo);
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
        }

        .navbar-brand:hover,
        .nav-link:hover {
            color: var(--azul) !important;
        }

        .carousel {
            position: relative;
            max-width: 100%;
            overflow: hidden;
            height: 400px;
            background-color: var(--azul);
        }

        .carousel-item {
            display: none;
            position: absolute;
            width: 100%;
            height: 100%;
            color: white;
            text-align: center;
            font-size: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .carousel-item.active {
            display: flex;
            opacity: 1;
            position: relative;
        }

        .product-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }


        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        button.prev,
        button.next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            padding: 10px;
            cursor: pointer;
            font-size: 1.5rem;
            z-index: 10;
            /* Garante que os botões fiquem sobre o conteúdo */
        }

        button.prev {
            left: 10px;
        }

        button.next {
            right: 10px;
        }


        /* Seção de produtos */
        .product-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            margin: 10px;
        }

        .product-card img {
            width: 100%;
            height: auto;
            max-height: 200px;
            object-fit: contain;
        }

        .product-card h5 {
            color: var(--roxo);
        }

        /* Footer */
        footer {
            background-color: var(--roxo);
            color: white;
            padding: 40px 0;
            margin-top: auto;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            color: var(--azul);
        }

        footer .social-icons a {
            margin: 0 10px;
            font-size: 1.5rem;
        }
    </style>
</head>

<body>

    <!-- Menu Superior -->
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
    <div class="container my-5">
        <h2 class="text-center mb-4" style="color: var(--roxo);">Produtos em Destaque</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="product-card">
                    <img src="{{ asset('home/images/t-shit1.jpeg') }}" alt="T-Shirt">
                    <h5>T-Shirt</h5>
                    <p>R$ 50,00</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="{{ asset('home/images/bags.jpeg') }}" alt="Bag">
                    <h5>Bag</h5>
                    <p>R$ 70,00</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="{{ asset('home/images/dress.png') }}" alt="Dress">
                    <h5>Dress</h5>
                    <p>R$ 100,00</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="{{ asset('home/images/p10.png') }}" alt="T-Shirt">
                    <h5>T-Shirt</h5>
                    <p>R$ 60,00</p>
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
