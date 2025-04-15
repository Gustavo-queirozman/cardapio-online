<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $empresa->nome_empresa }} - Cardápio digital com as melhores opções gastronômicas">
    <meta name="theme-color" content="#d62300">
    <title>{{ $empresa->nome_empresa }} - Cardápio</title>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <style>
        /* Design System Variables - Mobile-First 2025 */
        :root {
            /* Core palette */
            --primary: #d62300;
            --primary-dark: #b01d00;
            --primary-light: #ff3a17;
            --secondary: #faaf18;
            --secondary-dark: #e89c00;
            --secondary-light: #ffc146;
            
            /* Neutral palette */
            --neutral-900: #121212;
            --neutral-800: #2d2d2d;
            --neutral-700: #424242;
            --neutral-600: #616161;
            --neutral-500: #757575;
            --neutral-400: #9e9e9e;
            --neutral-300: #c4c4c4;
            --neutral-200: #e0e0e0;
            --neutral-100: #f5f5f5;
            --neutral-50: #fafafa;
            
            /* Semantic colors */
            --success: #22c55e;
            --warning: #facc15;
            --error: #ef4444;
            --info: #3b82f6;
            
            /* Spacing system (rem based) */
            --space-2xs: 0.25rem;  /* 4px */
            --space-xs: 0.5rem;    /* 8px */
            --space-sm: 0.75rem;   /* 12px */
            --space-md: 1rem;      /* 16px */
            --space-lg: 1.5rem;    /* 24px */
            --space-xl: 2rem;      /* 32px */
            --space-2xl: 3rem;     /* 48px */
            --space-3xl: 4rem;     /* 64px */
            
            /* Typography */
            --font-sans: 'Inter var', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            --font-display: 'Clash Display', 'Inter var', sans-serif;
            
            /* Border radius */
            --radius-sm: 0.25rem;  /* 4px */
            --radius-md: 0.5rem;   /* 8px */
            --radius-lg: 0.75rem;  /* 12px */
            --radius-xl: 1rem;     /* 16px */
            --radius-full: 9999px;
            
            /* Shadows */
            --shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            
            /* Animation */
            --transition-fast: 150ms cubic-bezier(0.4, 0, 0.2, 1);
            --transition-normal: 250ms cubic-bezier(0.4, 0, 0.2, 1);
            --transition-slow: 350ms cubic-bezier(0.4, 0, 0.2, 1);
            
            /* Containers */
            --container-max: 1440px;
            --container-padding: var(--space-md);
            
            /* Z-index layers */
            --z-low: 10;
            --z-mid: 100;
            --z-high: 1000;
        }
        
        /* Reset & Base Styles */
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            font-size: 16px;
            scroll-behavior: smooth;
            height: 100%;
            color-scheme: light;
        }
        
        body {
            font-family: var(--font-sans);
            font-size: 1rem;
            line-height: 1.5;
            color: var(--neutral-800);
            background-color: var(--neutral-50);
            min-height: 100%;
            display: flex;
            flex-direction: column;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            padding-bottom: env(safe-area-inset-bottom);
        }
        
        img, svg {
            display: block;
            max-width: 100%;
            height: auto;
        }
        
        /* Container styles - Mobile First */
        .container {
            width: 100%;
            margin-inline: auto;
            padding-inline: var(--space-md);
        }
        
        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-display);
            font-weight: 600;
            line-height: 1.2;
            color: var(--neutral-900);
        }
        
        p {
            margin-bottom: var(--space-md);
        }
        
        /* Enhanced Header - Mobile First */
        .header {
            background-color: var(--primary);
            color: white;
            padding: var(--space-md) 0;
            box-shadow: var(--shadow-md);
            position: relative;
            overflow: hidden;
            text-align: center;
        }
        
        .header::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 40%;
            height: 100%;
            background: linear-gradient(135deg, transparent 40%, rgba(255, 255, 255, 0.1) 100%);
            z-index: 0;
        }
        
        .header-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 1;
            gap: var(--space-xs);
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            gap: var(--space-xs);
        }
        
        .logo {
            font-family: var(--font-display);
            font-size: 1.75rem;
            font-weight: 700;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .header-tagline {
            font-size: 0.9375rem;
            font-weight: 500;
            opacity: 0.9;
            margin-top: var(--space-xs);
        }
        
        /* Info Bar - Mobile First */
        .info-bar {
            background-color: var(--neutral-800);
            color: white;
            padding: var(--space-md) 0;
            font-size: 0.875rem;
        }
        
        .info-container {
            display: flex;
            flex-direction: column;
            gap: var(--space-sm);
        }
        
        .info-item {
            display: flex;
            align-items: center;
            gap: var(--space-xs);
            opacity: 0.85;
            transition: opacity var(--transition-fast);
        }
        
        .info-item:hover {
            opacity: 1;
        }
        
        .info-item i {
            min-width: 18px;
            text-align: center;
            color: var(--secondary);
        }
        
        /* Categories Navigation - Mobile First */
        .categories {
            background-color: var(--secondary);
            padding: var(--space-md) 0;
            position: sticky;
            top: 0;
            z-index: var(--z-mid);
            box-shadow: var(--shadow-sm);
            transition: transform var(--transition-normal), box-shadow var(--transition-normal);
        }
        
        .categories.scrolled {
            box-shadow: var(--shadow-md);
        }
        
        .categories-container {
            display: flex;
            overflow-x: auto;
            gap: var(--space-xs);
            padding-bottom: var(--space-xs);
            -ms-overflow-style: none;
            scrollbar-width: none;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            padding-inline: calc(var(--space-md) - var(--container-padding));
            margin-inline: calc(var(--container-padding) - var(--space-md));
        }
        
        .categories-container::-webkit-scrollbar {
            display: none;
        }
        
        .category-btn {
            background-color: white;
            color: var(--neutral-700);
            border: none;
            padding: var(--space-xs) var(--space-md);
            border-radius: var(--radius-full);
            font-weight: 600;
            font-size: 0.875rem;
            cursor: pointer;
            white-space: nowrap;
            transition: all var(--transition-normal);
            scroll-snap-align: start;
            box-shadow: var(--shadow-sm);
            flex-shrink: 0;
        }
        
        .category-btn:hover {
            background-color: var(--neutral-100);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }
        
        .category-btn.active {
            background-color: var(--neutral-800);
            color: white;
            box-shadow: var(--shadow-md);
        }
        
        /* Menu Section - Mobile First */
        .menu-container {
            padding: var(--space-lg) 0;
            flex: 1;
        }
        
        .menu-section {
            margin-bottom: var(--space-xl);
        }
        
        .menu-title {
            font-size: 1.5rem;
            margin-bottom: var(--space-lg);
            color: var(--primary);
            position: relative;
            padding-bottom: var(--space-xs);
        }
        
        .menu-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, var(--secondary), var(--primary));
            border-radius: var(--radius-full);
        }
        
        .menu-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: var(--space-lg);
        }
        
        .menu-item {
            background-color: white;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: transform var(--transition-normal), box-shadow var(--transition-normal);
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .menu-item:active {
            transform: scale(0.98);
        }
        
        .menu-img-container {
            position: relative;
            overflow: hidden;
            aspect-ratio: 16 / 9;
        }
        
        .menu-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform var(--transition-slow);
        }
        
        .menu-item:hover .menu-img {
            transform: scale(1.05);
        }
        
        .menu-category-tag {
            position: absolute;
            top: var(--space-sm);
            right: var(--space-sm);
            background-color: var(--primary);
            color: white;
            font-size: 0.6875rem;
            font-weight: 600;
            padding: var(--space-2xs) var(--space-xs);
            border-radius: var(--radius-full);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .menu-content {
            padding: var(--space-md);
            display: flex;
            flex-direction: column;
            flex: 1;
        }
        
        .menu-name {
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: var(--space-xs);
            color: var(--neutral-900);
        }
        
        .menu-description {
            color: var(--neutral-600);
            font-size: 0.875rem;
            margin-bottom: var(--space-md);
            line-height: 1.5;
            flex: 1;
        }
        
        .menu-action {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
        }
        
        .menu-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: baseline;
        }
        
        .menu-price-currency {
            font-size: 0.875rem;
            font-weight: 600;
            margin-right: var(--space-2xs);
        }
        
        .add-to-cart {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: var(--space-xs);
            background-color: var(--primary);
            color: white;
            border: none;
            padding: var(--space-xs) var(--space-md);
            border-radius: var(--radius-md);
            font-weight: 600;
            font-size: 0.875rem;
            cursor: pointer;
            transition: all var(--transition-normal);
        }
        
        .add-to-cart:hover {
            background-color: var(--primary-dark);
        }
        
        .add-to-cart:active {
            transform: scale(0.95);
        }
        
        /* Footer - Mobile First */
        .footer {
            background-color: var(--neutral-800);
            color: var(--neutral-200);
            padding: var(--space-xl) 0 var(--space-lg);
            margin-top: auto;
        }
        
        .footer-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: var(--space-xl);
        }
        
        .footer-section {
            display: flex;
            flex-direction: column;
        }
        
        .footer-title {
            font-size: 1.125rem;
            margin-bottom: var(--space-md);
            color: var(--secondary);
            position: relative;
            padding-bottom: var(--space-xs);
        }
        
        .footer-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background-color: var(--secondary);
            border-radius: var(--radius-full);
        }
        
        .footer-text {
            margin-bottom: var(--space-xs);
            opacity: 0.85;
            line-height: 1.6;
            font-size: 0.9375rem;
        }
        
        .footer-hours {
            display: grid;
            grid-template-columns: 1fr;
            gap: var(--space-xs);
        }
        
        .schedule-row {
            display: flex;
            flex-direction: column;
            margin-bottom: var(--space-sm);
        }
        
        .footer-day {
            font-weight: 500;
            color: white;
            font-size: 0.9375rem;
        }
        
        .footer-time {
            opacity: 0.85;
            font-size: 0.875rem;
        }
        
        .contact-link {
            display: flex;
            align-items: center;
            gap: var(--space-sm);
            color: var(--neutral-200);
            text-decoration: none;
            margin-bottom: var(--space-md);
            transition: color var(--transition-fast);
            font-size: 0.9375rem;
        }
        
        .contact-link:hover {
            color: white;
        }
        
        .contact-icon {
            color: var(--secondary);
            min-width: 16px;
            text-align: center;
        }
        
        .social-links {
            display: flex;
            gap: var(--space-md);
            margin-top: var(--space-md);
            justify-content: center;
        }
        
        .social-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: var(--radius-full);
            transition: all var(--transition-normal);
        }
        
        .social-icon:hover {
            background-color: var(--secondary);
            color: var(--neutral-800);
            transform: translateY(-4px);
        }
        
        .copyright {
            text-align: center;
            margin-top: var(--space-xl);
            padding-top: var(--space-md);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.8125rem;
            opacity: 0.7;
        }
        
        /* Animations - Optimized for mobile */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .menu-item {
            animation: fadeInUp 0.4s ease forwards;
            opacity: 0;
        }
        
        /* Floating action button for cart/contact */
        .floating-action {
            position: fixed;
            bottom: var(--space-md);
            right: var(--space-md);
            background-color: var(--secondary);
            color: var(--neutral-900);
            width: 56px;
            height: 56px;
            border-radius: var(--radius-full);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-lg);
            z-index: var(--z-high);
            cursor: pointer;
            transition: all var(--transition-normal);
        }
        
        .floating-action:hover, .floating-action:focus {
            background-color: var(--secondary-dark);
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
        }
        
        .floating-action i {
            font-size: 1.25rem;
        }
        
        /* Touch-friendly interactions */
        button, a {
            -webkit-tap-highlight-color: transparent;
        }
        
        /* Skeleton loading state */
        .skeleton {
            background: linear-gradient(90deg, var(--neutral-200) 25%, var(--neutral-100) 50%, var(--neutral-200) 75%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
            border-radius: var(--radius-md);
        }
        
        @keyframes shimmer {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
        
        /* Progressive enhancement for larger screens */
        @media (min-width: 576px) {
            .menu-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: var(--space-md);
            }
            
            .footer-hours {
                grid-template-columns: max-content 1fr;
                gap: var(--space-xs) var(--space-md);
                align-items: baseline;
            }
            
            .schedule-row {
                display: contents;
            }
        }
        
        @media (min-width: 768px) {
            .container {
                padding-inline: var(--space-lg);
                max-width: var(--container-max);
            }
            
            .header {
                padding: var(--space-lg) 0;
                text-align: left;
            }
            
            .header-container {
                flex-direction: row;
                justify-content: space-between;
            }
            
            .info-container {
                flex-direction: row;
                justify-content: space-between;
            }
            
            .menu-title {
                font-size: 1.75rem;
            }
            
            .menu-name {
                font-size: 1.25rem;
            }
            
            .menu-description {
                font-size: 0.9375rem;
            }
            
            .footer-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (min-width: 992px) {
            .menu-grid {
                grid-template-columns: repeat(3, 1fr);
            }
            
            .logo {
                font-size: 2rem;
            }
            
            .footer-container {
                grid-template-columns: repeat(3, 1fr);
            }
            
            .social-links {
                justify-content: flex-start;
            }
        }
        
        @media (min-width: 1200px) {
            .menu-grid {
                grid-template-columns: repeat(4, 1fr);
            }
            
            .menu-content {
                padding: var(--space-lg);
            }
        }
        
        /* Utility classes */
        .visually-hidden {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }
        
        /* Focus styles for accessibility */
        :focus-visible {
            outline: 3px solid var(--secondary);
            outline-offset: 2px;
        }
        
        /* Reduced motion preferences */
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
            
            .menu-item {
                animation: none !important;
                opacity: 1 !important;
            }
        }
    </style>
    <!-- Optimized loading of Font Awesome -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </noscript>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container header-container">
            <div class="logo-container">
                <div class="logo" aria-label="Logo da empresa">{{ strtoupper($empresa->nome_empresa) }}</div>
            </div>
            <div class="header-tagline">
                <p>O melhor sabor, a melhor experiência!</p>
            </div>
        </div>
    </header>
    
    <!-- Info Bar -->
    <div class="info-bar">
        <div class="container info-container">
            <div class="info-item">
                <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                <span>{{ $empresa->rua }}, {{ $empresa->numero }} - {{ $empresa->bairro }}</span>
            </div>
            <div class="info-item">
                <i class="fas fa-map" aria-hidden="true"></i>
                <span>{{ $empresa->estado }} - {{ $empresa->uf }}</span>
            </div>
            <div class="info-item">
                <i class="fas fa-building" aria-hidden="true"></i>
                <span>{{ substr($empresa->cnpj, 0, 2) }}.{{ substr($empresa->cnpj, 2, 3) }}.{{ substr($empresa->cnpj, 5, 3) }}/{{ substr($empresa->cnpj, 8, 4) }}-{{ substr($empresa->cnpj, 12, 2) }}</span>
            </div>
        </div>
    </div>
    
    <!-- Categorias -->
    <nav class="categories" id="categories-nav" aria-label="Categorias de produtos">
        <div class="container">
            <div class="categories-container">
                <button class="category-btn active" data-category="todos" aria-pressed="true">Todos</button>
                @php
                    $categorias = $produtos->pluck('categoria')->unique();
                @endphp
                @foreach($categorias as $categoria)
                    <button class="category-btn" data-category="{{ strtolower($categoria) }}" aria-pressed="false">{{ $categoria }}</button>
                @endforeach
            </div>
        </div>
    </nav>
    
    <!-- Menu Section -->
    <main class="menu-container container" style="padding: 10px">
        <h1 class="visually-hidden">Cardápio {{ $empresa->nome_empresa }}</h1>
        
        @php
            $categorias = $produtos->groupBy('categoria');
        @endphp
        
        @foreach($categorias as $categoria => $items)
            <section class="menu-section" id="categoria-{{ strtolower($categoria) }}" aria-labelledby="titulo-{{ strtolower($categoria) }}">
                <h2 class="menu-title" id="titulo-{{ strtolower($categoria) }}">{{ $categoria }}</h2>
                <div class="menu-grid">
                    @foreach($items as $index => $produto)
                        <article class="menu-item" style="animation-delay: {{ $index * 0.05 }}s">
                            <div class="menu-img-container">
                                @if($produto->url_imagem)
                                    <img src="{{ $produto->url_imagem }}" alt="{{ $produto->nome }}" class="menu-img" loading="lazy">
                                @else
                                    <img src="/api/placeholder/300/169" alt="{{ $produto->nome }}" class="menu-img" loading="lazy">
                                @endif
                                <span class="menu-category-tag">{{ $categoria }}</span>
                            </div>
                            <div class="menu-content">
                                <h3 class="menu-name">{{ $produto->nome }}</h3>
                                <p class="menu-description">{{ $produto->descricao }}</p>
                                <div class="menu-action">
                                    <span class="menu-price">
                                        <span class="menu-price-currency">R$</span>
                                        {{ number_format($produto->preco, 2, ',', '.') }}
                                    </span>
                                    <!--
                                    <button class="add-to-cart" data-id="{{ $produto->id }}" aria-label="Adicionar {{ $produto->nome }} ao carrinho">
                                        <i class="fas fa-plus add-to-cart-icon" aria-hidden="true"></i>
                                        <span>Adicionar</span>
                                    </button>-->
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
        @endforeach
    </main>
    
    <!-- Floating action button -->
    <a href="https://wa.me/3199998888" class="floating-action" aria-label="Contato via WhatsApp">
        <i class="fab fa-whatsapp" aria-hidden="true"></i>
    </a>
    
 

    <!-- Footer -->
    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-section">
                <h3 class="footer-title">{{ $empresa->nome_empresa }}</h3>
                <address class="footer-address">
                    <p class="footer-text">{{ $empresa->rua }}, {{ $empresa->numero }}</p>
                    <p class="footer-text">{{ $empresa->bairro }}</p>
                    <p class="footer-text">{{ $empresa->estado }} - {{ $empresa->uf }}</p>
                    <p class="footer-text">CNPJ: {{ substr($empresa->cnpj, 0, 2) }}.{{ substr($empresa->cnpj, 2, 3) }}.{{ substr($empresa->cnpj, 5, 3) }}/{{ substr($empresa->cnpj, 8, 4) }}-{{ substr($empresa->cnpj, 12, 2) }}</p>
                </address>
            </div>
            
            <div class="footer-section">
                <h3 class="footer-title">Horário de Funcionamento</h3>
                <div class="footer-hours">
                    <span class="footer-day">Segunda a Sexta:</span>
                    <span class="footer-time">10h às 22h</span>
                    
                    <span class="footer-day">Sábados e Domingos:</span>
                    <span class="footer-time">10h às 23h</span>
                    
                    <span class="footer-day">Feriados:</span>
                    <span class="footer-time">11h às 22h</span>
                </div>
            </div>
            
            <div class="footer-section">
                <h3 class="footer-title">Contato</h3>
                <a href="tel:3133334444" class="contact-link">
                    <i class="fas fa-phone contact-icon" aria-hidden="true"></i>
                    <span>(31) 3333-4444</span>
                </a>
                <a href="https://wa.me/3199998888" class="contact-link">
                    <i class="fab fa-whatsapp contact-icon" aria-hidden="true"></i>
                    <span>(31) 99999-8888</span>
                </a>
          
                
                <div class="social-links">
                    <a href="#" class="social-icon" aria-label="Facebook">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="social-icon" aria-label="Instagram">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="social-icon" aria-label="Twitter">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="copyright">
            <p>&copy; {{ date('Y') }} {{ $empresa->nome_empresa }}. Todos os direitos reservados.</p>
        </div>
    </footer>
<script>
    // Otimize a lógica de filtragem por categoria
document.addEventListener('DOMContentLoaded', () => {
    // Seleção de elementos
    const categoryButtons = document.querySelectorAll('.category-btn');
    const menuSections = document.querySelectorAll('.menu-section');
    
    // Função para filtrar itens do menu pela categoria
    function filterMenuByCategory(selectedCategory) {
        // Remover classe ativa de todos os botões
        categoryButtons.forEach(btn => {
            btn.classList.remove('active');
            btn.setAttribute('aria-pressed', 'false');
        });
        
        // Adicionar classe ativa ao botão atual
        const activeButton = document.querySelector(`.category-btn[data-category="${selectedCategory}"]`);
        if (activeButton) {
            activeButton.classList.add('active');
            activeButton.setAttribute('aria-pressed', 'true');
        }
        
        // Animação para esconder todos os items primeiro
        menuSections.forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(20px)';
        });
        
        // Após breve delay, mostrar ou esconder com base na categoria
        setTimeout(() => {
            menuSections.forEach(section => {
                const sectionCategory = section.id.replace('categoria-', '');
                
                if (selectedCategory === 'todos' || sectionCategory === selectedCategory) {
                    // Mostrar esta seção
                    section.style.display = 'block';
                    // Animar a entrada
                    setTimeout(() => {
                        section.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                        section.style.opacity = '1';
                        section.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    // Esconder a seção
                    setTimeout(() => {
                        section.style.display = 'none';
                    }, 400); // Espera a animação terminar
                }
            });
        }, 100);
        
        // Scroll suave para o topo da seção de menu
        document.querySelector('.menu-container').scrollIntoView({ 
            behavior: 'smooth', 
            block: 'start' 
        });
    }
    
    // Adicionar evento de clique aos botões de categoria
    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            const selectedCategory = button.getAttribute('data-category');
            filterMenuByCategory(selectedCategory);
        });
    });
    
    // Adicionar suporte para filtragem via URL hash
    function checkUrlHash() {
        if (window.location.hash) {
            const category = window.location.hash.substring(1); // Remove o #
            if (document.querySelector(`.category-btn[data-category="${category}"]`)) {
                filterMenuByCategory(category);
            }
        }
    }
    
    // Verificar hash ao carregar a página
    window.addEventListener('load', checkUrlHash);
    
    // Verificar mudanças no hash
    window.addEventListener('hashchange', checkUrlHash);
});
</script>
</body>
</html>