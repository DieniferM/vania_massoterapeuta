<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessoria de Enfermagem</title>
    <link rel="stylesheet" type="text/css" href="<?php echo 'styles.css?v=' . filemtime('styles.css'); ?>"/>

</head>
<body>
    <header>
        <div class="logo">#Logo - frase</div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#entenda-etapas">Entenda as Etapas</a></li>
                <li><a href="#direitos-italia">Quem Tem Direito</a></li>
                <li><a href="#documentos">Documentos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <div class="home-content">
            <h1>Bem-vindo à Assessoria de Enfermagem</h1>
        </div>
    </section>

   <section id="sobre">
    <div class="sobre-content">
        <h2>Sobre Nós</h2>
        <p>Nossa missão, valores e objetivos guiam nosso trabalho como assessoria de enfermagem.</p>
        <div class="blocos">
            <div class="bloco">
                <h3>Missão</h3>
                <p>Descrição breve sobre a missão.</p>
            </div>
            <div class="bloco">
                <h3>Valores</h3>
                <p>Descrição breve sobre os valores.</p>
            </div>
            <div class="bloco">
                <h3>Objetivo</h3>
                <p>Descrição breve sobre o objetivo.</p>
            </div>
        </div>
    </div>
</section>


   <section id="entenda-etapas">
    <div class="entenda-content">
        <div class="entenda-texto">
            <h2>Entenda as Etapas</h2>
            <ul>
                <li>Registro na Ordem dos Enfermeiros</li>
                <li>Tradução dos documentos</li>
                <li>Validação de certificados</li>
                <li>Preparação para o exame de equivalência</li>
                <li>Solicitação de visto</li>
            </ul>
        </div>
        <div class="entenda-imagem">
            <img src="https://images.unsplash.com/photo-1696952384801-079962407b0d?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Entenda as Etapas">
        </div>
    </div>
</section>

    <section id="direitos-italia">
        <h2>Quem Tem Direito a Trabalhar como Enfermeiro na Itália</h2>
        <div class="direitos-content">
            <div class="col">
                <h3>Requisitos</h3>
                <ul>
                    <li>Diploma Reconhecido</li>
                    <li>Experiência Profissional</li>
                    <li>Certificação Linguística</li>
                </ul>
            </div>
            <div class="col">
                <h3>Outros</h3>
                <ul>
                    <li>Requisitos de Visto</li>
                    <li>Registro no Conselho de Enfermagem</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="documentos">
        <h2>Ainda não encontrou todos os documentos?</h2>
        <p>Nós encontramos para você!</p>
        <p>Se você está tendo dificuldades para reunir todos os documentos necessários para trabalhar como enfermeiro na Itália, nossa equipe pode ajudar. Entre em contato conosco para obter suporte completo na busca e obtenção dos documentos.</p>
    </section>

    <section id="contato">
        <h2>Contato</h2>
        <form>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </section>

    <footer>
        <div class="footer-info">
            <p>Telefone: (39) 1234-5678</p>
            <p>Endereço: Exemplo, São Paulo, SP</p>
            <p>&copy; 2024 Assessoria de Enfermagem. Desenvolvido por https://dienifermendonca.tech/</p>
        </div>
        <button id="login-btn">Login</button>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
