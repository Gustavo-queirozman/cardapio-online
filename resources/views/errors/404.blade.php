<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página não encontrada</title>
    <style>
        :root {
            --primary-color: #d62300;
            --primary-dark: #b01d00;
            --primary-light: #ff3a17;
            --secondary-color: #faaf18;
            --secondary-dark: #e89c00;
            --secondary-light: #ffc146;
            --dark-color: #343a40;
            --light-color: #f8f9fa;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: var(--light-color);
            color: var(--dark-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .error-container {
            max-width: 800px;
            text-align: center;
            padding: 40px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .error-code {
            font-size: 120px;
            font-weight: 700;
            color: var(--primary-color);
            line-height: 1;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }
        
        .error-code::after {
            content: "";
            position: absolute;
            bottom: 20px;
            left: -10px;
            right: -10px;
            height: 10px;
            background-color: var(--secondary-color);
            z-index: -1;
            opacity: 0.4;
            border-radius: 10px;
        }
        
        .error-title {
            font-size: 32px;
            margin-bottom: 20px;
            color: var(--dark-color);
        }
        
        .error-message {
            font-size: 18px;
            margin-bottom: 30px;
            color: #6c757d;
            line-height: 1.6;
        }
        
        .btn {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 12px 24px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            margin: 0 10px 10px 0;
        }
        
        .btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .btn-outline {
            background-color: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }
        
        .btn-outline:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .error-illustration {
            max-width: 100%;
            height: auto;
            margin-bottom: 30px;
        }
        
        .error-details {
            background-color: #f1f5f8;
            border-radius: 4px;
            padding: 15px;
            margin-top: 30px;
            text-align: left;
            font-size: 14px;
            color: #6c757d;
        }
        
        .error-details p {
            margin-bottom: 5px;
        }
        
        .error-details code {
            background-color: #e9ecef;
            padding: 2px 4px;
            border-radius: 3px;
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }
        
        @media (max-width: 768px) {
            .error-code {
                font-size: 100px;
            }
            
            .error-title {
                font-size: 24px;
            }
            
            .error-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-code">404</div>
        <h1 class="error-title">Página não encontrada</h1>
        
        <div class="error-illustration">
            <svg width="300" height="200" viewBox="0 0 600 400" xmlns="http://www.w3.org/2000/svg">
                <!-- Servidor -->
                <rect x="100" y="180" width="120" height="160" rx="10" fill="#e9ecef" stroke="#6c757d" stroke-width="2"/>
                <rect x="110" y="200" width="100" height="15" rx="3" fill="#d62300"/>
                <rect x="110" y="225" width="100" height="15" rx="3" fill="#d62300"/>
                <rect x="110" y="250" width="100" height="15" rx="3" fill="#d62300"/>
                <rect x="110" y="275" width="100" height="15" rx="3" fill="#d62300"/>
                <circle cx="160" cy="340" r="5" fill="#faaf18"/>
                
                <!-- Pessoa confusa -->
                <circle cx="400" cy="150" r="40" fill="#faaf18"/>
                <circle cx="385" cy="140" r="5" fill="#343a40"/>
                <circle cx="415" cy="140" r="5" fill="#343a40"/>
                <path d="M385 170 Q400 160 415 170" stroke="#343a40" stroke-width="2" fill="none"/>
                
                <!-- Corpo -->
                <line x1="400" y1="190" x2="400" y2="270" stroke="#343a40" stroke-width="3"/>
                <line x1="400" y1="220" x2="370" y2="240" stroke="#343a40" stroke-width="3"/>
                <line x1="400" y1="220" x2="430" y2="240" stroke="#343a40" stroke-width="3"/>
                <line x1="400" y1="270" x2="380" y2="320" stroke="#343a40" stroke-width="3"/>
                <line x1="400" y1="270" x2="420" y2="320" stroke="#343a40" stroke-width="3"/>
                
                <!-- Interrogação -->
                <text x="450" y="180" font-size="70" fill="#e9ecef" font-weight="bold">?</text>
                <text x="350" y="180" font-size="70" fill="#e9ecef" font-weight="bold">?</text>
                
                <!-- Linha de conexão com falha -->
                <path d="M220 260 Q300 230 370 260" stroke="#faaf18" stroke-width="3" stroke-dasharray="10,5" fill="none"/>
                <text x="280" y="235" font-size="20" fill="#ff3a17" font-weight="bold">404</text>
            </svg>
        </div>
        
        <p class="error-message">
            A página que você está procurando pode ter sido removida, renomeada ou 
            está temporariamente indisponível.
        </p>
        
        <div>
            <a href="{{ url('/') }}" class="btn">Voltar para Home</a>
            <a href="javascript:history.back()" class="btn btn-outline">Página Anterior</a>
        </div>

    </div>
</body>
</html>