<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cardápio digital online para lanchonetes, bares e restaurantes. Aumente suas vendas com nosso sistema responsivo e prático.">
    <meta name="keywords" content="cardápio digital, menu online, cardápio para lanchonete, cardápio QR code">
    <title>MenuDigital - Cardápio Online para Lanchonetes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        :root {
            --primary: #d62300;
            --primary-dark: #b01d00;
            --primary-light: #ff3a17;
            --secondary: #faaf18;
            --secondary-dark: #e89c00;
            --secondary-light: #ffc146;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f9f9f9;
            scroll-behavior: smooth;
            overflow-x: hidden;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        header {
            background-color: var(--primary);
            color: white;
            padding: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 4rem 1rem;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin-bottom: 2rem;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s;
            border: none;
            cursor: pointer;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
        }
        
        .btn-secondary {
            background-color: var(--secondary);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s;
            margin-left: 1rem;
            border: none;
            cursor: pointer;
        }
        
        .btn-secondary:hover {
            background-color: var(--secondary-dark);
        }
        
        .features {
            padding: 4rem 1rem;
            background-color: #fff;
        }
        
        .features h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 3rem;
            color: var(--primary);
        }
        
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .feature-card {
            background-color: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            background-color: var(--secondary-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem auto;
            color: white;
            font-size: 1.5rem;
        }
        
        .feature-card h3 {
            margin-bottom: 1rem;
            color: var(--primary-dark);
            font-size: 1.3rem;
        }
        
        .demo {
            padding: 4rem 1rem;
            background-color: #f5f5f5;
            text-align: center;
        }
        
        .demo h2 {
            font-size: 2rem;
            margin-bottom: 2rem;
            color: var(--primary);
        }
        
        .demo-img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .pricing {
            padding: 4rem 1rem;
            background-color: white;
        }
        
        .pricing h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 3rem;
            color: var(--primary);
        }
        
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .pricing-card {
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            text-align: center;
            position: relative;
            overflow: hidden;
            border: 1px solid #eee;
            display: flex;
            flex-direction: column;
        }
        
        .pricing-card.highlight {
            border: 2px solid var(--secondary);
        }
        
        .pricing-card.highlight::before {
            content: "POPULAR";
            position: absolute;
            top: 0;
            right: 0;
            background-color: var(--secondary);
            color: white;
            padding: 0.5rem 1rem;
            font-size: 0.8rem;
            font-weight: bold;
        }
        
        .pricing-card h3 {
            color: var(--primary);
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .price {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
            color: var(--primary-dark);
        }
        
        .price span {
            font-size: 1rem;
            color: #777;
        }
        
        .features-list {
            list-style: none;
            padding: 0;
            margin: 0 0 2rem 0;
            text-align: left;
            flex-grow: 1;
        }
        
        .features-list li {
            padding: 0.5rem 0;
            border-bottom: 1px solid #eee;
        }
        
        .features-list li::before {
            content: "✓";
            color: var(--secondary);
            margin-right: 0.5rem;
            font-weight: bold;
        }
        
        .testimonials {
            padding: 4rem 1rem;
            background-color: #f5f5f5;
        }
        
        .testimonials h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 3rem;
            color: var(--primary);
        }
        
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            position: relative;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--secondary-light);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            color: white;
            font-weight: bold;
        }
        
        .author-info h4 {
            margin: 0;
            color: var(--primary-dark);
        }
        
        .author-info p {
            margin: 0;
            color: #777;
            font-size: 0.9rem;
        }
        
        .cta {
            padding: 4rem 1rem;
            background-color: var(--primary-light);
            color: white;
            text-align: center;
        }
        
        .cta h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        
        .cta p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 2rem auto;
        }
        
        footer {
            background-color: #333;
            color: white;
            padding: 2rem 1rem;
            text-align: center;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            margin-bottom: 1rem;
        }
        
        .footer-links a {
            color: white;
            margin: 0 1rem;
            text-decoration: none;
        }
        
        .footer-links a:hover {
            text-decoration: underline;
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .btn-secondary {
                margin-left: 0;
                margin-top: 1rem;
                display: block;
                width: 100%;
                box-sizing: border-box;
            }
            
            .btn-primary {
                display: block;
                width: 100%;
                box-sizing: border-box;
                margin-bottom: 1rem;
            }
            
            .cta h2 {
                font-size: 1.5rem;
            }
            
            .feature-grid {
                grid-template-columns: 1fr;
            }
            
            .pricing-grid {
                grid-template-columns: 1fr;
            }
            
            .testimonials-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-links {
                flex-direction: column;
                gap: 1rem;
            }
            
            .footer-links a {
                margin: 0;
            }
        }
        
        @media (max-width: 480px) {
            .hero h1 {
                font-size: 1.8rem;
            }
            
            .container {
                padding: 0 15px;
            }
            
            .feature-card {
                padding: 1rem;
            }
            
            .pricing-card {
                padding: 1.5rem;
            }
            
            .testimonial-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h2>MenuDigital</h2>
            <nav class="mobile-nav" id="mobileNav">
                <button class="mobile-menu-btn" id="mobileMenuBtn">☰</button>
                <div class="mobile-menu-content" id="mobileMenuContent">
                    <a href="#features">Benefícios</a>
                    <a href="#pricing">Planos</a>
                    <a href="#testimonials">Depoimentos</a>
                    <a href="#contact">Contato</a>
                </div>
            </nav>
        </div>
    </header>
    
    <style>
        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .mobile-nav {
            position: relative;
        }
        
        .mobile-menu-btn {
            background: transparent;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            display: none;
        }
        
        .mobile-menu-content {
            display: flex;
            gap: 1.5rem;
        }
        
        .mobile-menu-content a {
            color: white;
            text-decoration: none;
        }
        
        .mobile-menu-content a:hover {
            text-decoration: underline;
        }
        
        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }
            
            .mobile-menu-content {
                display: none;
                position: absolute;
                top: 100%;
                right: 0;
                background-color: var(--primary-dark);
                padding: 1rem;
                border-radius: 5px;
                flex-direction: column;
                gap: 1rem;
                min-width: 150px;
                z-index: 100;
            }
            
            .mobile-menu-content.active {
                display: flex;
            }
        }
    </style>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenuContent = document.getElementById('mobileMenuContent');
            
            if (mobileMenuBtn && mobileMenuContent) {
                mobileMenuBtn.addEventListener('click', function() {
                    mobileMenuContent.classList.toggle('active');
                });
                
                // Fechar menu ao clicar fora
                document.addEventListener('click', function(event) {
                    if (!mobileMenuBtn.contains(event.target) && !mobileMenuContent.contains(event.target)) {
                        mobileMenuContent.classList.remove('active');
                    }
                });
            }
        });
    </script>
    
    <section class="hero">
        <div class="container" style="display:flex; flex-direction:column; align-items:center; text-align: center;">
            <h1>Transforme sua Lanchonete com Cardápios Digitais</h1>
            <p >Aumente suas vendas, reduza custos e proporcione uma experiência moderna aos seus clientes com nossa solução de cardápio online simples e eficiente.</p>
            <div>
                <a href="#demo" class="btn-primary">Ver demonstração</a>
                <a href="#pricing" class="btn-secondary">Conhecer planos</a>
            </div>
        </div>
    </section>
    
    <section class="features" id="features">
        <div class="container">
            <h2>Por que escolher nosso serviço?</h2>
            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon">📱</div>
                    <h3>100% Responsivo</h3>
                    <p>Cardápio perfeitamente adaptado para qualquer dispositivo: celulares, tablets e computadores.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3>Atualizações em Tempo Real</h3>
                    <p>Altere preços, adicione ou remova itens instantaneamente sem precisar reimprimir cardápios.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔍</div>
                    <h3>Busca Inteligente</h3>
                    <p>Seus clientes encontram rapidamente o que desejam com nossa ferramenta de busca otimizada.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📊</div>
                    <h3>Análise de Dados</h3>
                    <p>Descubra quais são os pratos mais visualizados e otimize seu menu com base em dados reais.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🛒</div>
                    <h3>Pedidos Online</h3>
                    <p>Integração opcional com sistema de pedidos para que clientes possam comprar diretamente pelo cardápio.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔧</div>
                    <h3>Fácil de Gerenciar</h3>
                    <p>Interface administrativa intuitiva, sem necessidade de conhecimentos técnicos.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="demo" id="demo">
        <div class="container">
            <h2>Veja como funciona</h2>
            <div class="demo-wrapper">
                <div class="demo-frame-container">
                    <iframe src="http://localhost:8000/burguer_king" frameborder="0" class="demo-frame" id="demoFrame" allowfullscreen></iframe>
                </div>
                <div class="demo-devices">
                    <div class="device-selector">
                        <button class="device-btn active" data-device="desktop">Desktop</button>
                        <button class="device-btn" data-device="tablet">Tablet</button>
                        <button class="device-btn" data-device="mobile">Mobile</button>
                    </div>
                    <p>Visualize como seu cardápio ficará em diferentes dispositivos</p>
                    <div class="demo-link">
                        <a href="http://localhost:8000/burguer_king" target="_blank" class="btn-secondary">Abrir em nova guia</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <style>
        .demo-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
        }
        
        .demo-frame-container {
            width: 100%;
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            background-color: white;
        }
        
        .demo-frame {
            width: 100%;
            height: 600px;
            border: none;
            display: block;
        }
        
        .demo-devices {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 100%;
        }
        
        .device-selector {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
        }
        
        .device-btn {
            padding: 0.5rem 1rem;
            border-radius: 5px;
            border: 1px solid var(--primary);
            background: transparent;
            color: var(--primary);
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .device-btn.active {
            background-color: var(--primary);
            color: white;
        }
        
        .demo-link {
            margin-top: 1.5rem;
        }
        
        @media (max-width: 768px) {
            .device-selector {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .demo-frame {
                height: 500px;
            }
        }
        
        @media (max-width: 480px) {
            .demo-frame {
                height: 400px;
            }
        }
    </style>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deviceBtns = document.querySelectorAll('.device-btn');
            const demoFrame = document.getElementById('demoFrame');
            const frameContainer = document.querySelector('.demo-frame-container');
            
            if (deviceBtns.length > 0 && demoFrame && frameContainer) {
                deviceBtns.forEach(btn => {
                    btn.addEventListener('click', function() {
                        // Remove active class from all buttons
                        deviceBtns.forEach(b => b.classList.remove('active'));
                        
                        // Add active class to clicked button
                        this.classList.add('active');
                        
                        // Get device type
                        const deviceType = this.getAttribute('data-device');
                        
                        // Adjust iframe container style based on device type
                        switch(deviceType) {
                            case 'desktop':
                                frameContainer.style.maxWidth = '100%';
                                break;
                            case 'tablet':
                                frameContainer.style.maxWidth = '768px';
                                break;
                            case 'mobile':
                                frameContainer.style.maxWidth = '375px';
                                break;
                        }
                    });
                });
            }
        });
    </script>
    
    <section class="pricing" id="pricing">
        <div class="container">
            <h2>Planos que cabem no seu bolso</h2>
            <div class="pricing-grid">
                <div class="pricing-card">
                    <h3>Básico</h3>
                    <div class="price">R$89<span>/mês</span></div>
                    <ul class="features-list">
                        <li>Cardápio digital personalizado</li>
                        <li>QR Code para acesso</li>
                        <li>Até 50 itens</li>
                        <li>Atualizações ilimitadas</li>
                        <li>Suporte por e-mail</li>
                    </ul>
                    <a href="#contact" class="btn-primary">Começar agora</a>
                </div>
                <div class="pricing-card highlight">
                    <h3>Profissional</h3>
                    <div class="price">R$149<span>/mês</span></div>
                    <ul class="features-list">
                        <li>Tudo do plano Básico</li>
                        <li>Até 150 itens</li>
                        <li>Categorização avançada</li>
                        <li>Integração com pedidos online</li>
                        <li>Análise de dados básica</li>
                        <li>Suporte prioritário</li>
                    </ul>
                    <a href="#contact" class="btn-secondary">Escolher plano</a>
                </div>
                <div class="pricing-card">
                    <h3>Premium</h3>
                    <div class="price">R$249<span>/mês</span></div>
                    <ul class="features-list">
                        <li>Tudo do plano Profissional</li>
                        <li>Itens ilimitados</li>
                        <li>Múltiplos cardápios</li>
                        <li>Análise de dados avançada</li>
                        <li>Integração com sistemas de PDV</li>
                        <li>Suporte 24/7</li>
                    </ul>
                    <a href="#contact" class="btn-primary">Entrar em contato</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="testimonials" id="testimonials">
        <div class="container">
            <h2>O que nossos clientes dizem</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <p class="testimonial-text">"Desde que implementamos o cardápio digital, reduzimos em 30% o tempo de atendimento e aumentamos as vendas em 20%. Nossos clientes adoram a praticidade!"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">JR</div>
                        <div class="author-info">
                            <h4>João Ribeiro</h4>
                            <p>Hamburgueria Artesanal</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"A facilidade de atualização é impressionante. Conseguimos criar promoções relâmpago e ajustar preços instantaneamente conforme nossa necessidade."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">MC</div>
                        <div class="author-info">
                            <h4>Maria Costa</h4>
                            <p>Pizzaria Bella Napoli</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"O suporte técnico é excelente. Qualquer dúvida que temos é prontamente resolvida. Recomendo fortemente para qualquer estabelecimento."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">AS</div>
                        <div class="author-info">
                            <h4>André Santos</h4>
                            <p>Lanchonete do André</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="cta" id="contact">
        <div class="container">
            <h2>Pronto para modernizar sua lanchonete?</h2>
            <p>Dê o próximo passo e transforme a experiência dos seus clientes com nosso cardápio digital.</p>
            <a href="#contact" class="btn-secondary">Começar gratuitamente</a>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <h3>MenuDigital</h3>
                    <p>Transformando a experiência gastronômica.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook">📱</a>
                        <a href="#" aria-label="Instagram">📸</a>
                        <a href="#" aria-label="LinkedIn">💼</a>
                    </div>
                </div>
                <div class="footer-nav">
                    <div class="footer-links">
                        <a href="#">Sobre nós</a>
                        <a href="#">Blog</a>
                        <a href="#">Termos de uso</a>
                        <a href="#">Privacidade</a>
                        <a href="#contact">Contato</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 MenuDigital - Todos os direitos reservados</p>
                <p>
                    <a href="#" class="back-to-top">Voltar ao topo ↑</a>
                </p>
            </div>
        </div>
    </footer>
    
    <style>
        .footer-content {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 2rem;
        }
        
        .footer-logo {
            flex: 1;
            min-width: 200px;
        }
        
        .footer-logo h3 {
            margin-top: 0;
            margin-bottom: 0.5rem;
        }
        
        .footer-logo p {
            margin-bottom: 1rem;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            transition: background-color 0.3s;
        }
        
        .social-links a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        
        .footer-nav {
            flex: 2;
            min-width: 200px;
        }
        
        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .back-to-top {
            color: white;
            text-decoration: none;
        }
        
        .back-to-top:hover {
            text-decoration: underline;
        }
        
        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                gap: 2rem;
            }
            
            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Back to top functionality
            const backToTopButton = document.querySelector('.back-to-top');
            
            if (backToTopButton) {
                backToTopButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }
        });
    </script>
</body>
</html>