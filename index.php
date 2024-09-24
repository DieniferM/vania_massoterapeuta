<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vânia Massoterapeuta</title>
    <link rel="stylesheet" type="text/css" href="<?php echo 'styles.css?v=' . filemtime('styles.css'); ?>"/>

</head>
<body>
    <header>
        <!-- <div class="logo">#Logo</div> -->
        <nav>
            <ul>
                <li><a href="#home">Inicio</a></li>
                <li><a href="#entenda-etapas">Benefícios</a></li>
                <li><a href="#sobre">Quem sou eu</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <!-- <li><a href="#documentos">Documentos</a></li> -->
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <div class="home-content">
            <h1>Conheça os benefícios</h1>
        </div>
    </section>

   <section id="sobre">
    <div class="sobre-content">
        <h2>Minha Trajetória na Massoterapia</h2>
        <p>Descrição completa1</p>
        <div class="blocos">
            <div class="bloco">
                <h3>Exemplo1</h3>
                <p>Descrição1.</p>
            </div>
            <div class="bloco">
                <h3>Exemplo2</h3>
                <p>Descrição2.</p>
            </div>
            <div class="bloco">
                <h3>Exemplo13</h3>
                <p>Descrição13.</p>
            </div>
        </div>
    </div>
</section>


   <section id="entenda-etapas">
    <div class="entenda-content">
        <div class="entenda-texto">
            <h2>Como a massoterapia pode melhorar sua saúde e bem-estar?</h2>
            <ul>
                <li>Alívio do Estresse</li>
                <li>Redução de Dores Musculares</li>
                <li>Melhora da Circulação Sanguínea e Linfática</li>
                <li>Aumento da Flexibilidade</li>
                <li>Fortalecimento do Sistema Imunológico</li>
                <li>Melhora da Qualidade do Sono</li>
                <li>Melhoria da Postura</li>
                <li>Alívio de Dores de Cabeça e Enxaquecas</li>
            </ul>
        </div>
        <div class="entenda-imagem">
            <img src="img/img1.jpg" alt="Entenda as Etapas">
        </div>
    </div>
</section>

    <section id="servicos">
        <h2>Serviços</h2>
        <div class="direitos-content">
            <div class="col">
                <h3>Massagem terapêutica</h3>
                <ul>
                    <li>Aliviar dores musculares e articulares</li>
                    <li>Melhorar a circulação</li>
                    <li>Aumentar a mobilidade e flexibilidade</li>
                    <li>Alívio do estresse físico e mental</li>
                    <li>Tratar lesões esportivas</li>
                </ul>
            </div>
            <div class="col">
                <h3>Drenagem linfática</h3>
                <ul>
                    <li>Redução de Inchaço e Retenção de Líquidos</li>
                    <li>Aceleração da Recuperação Pós-operatória</li>
                    <li>Fortalecimento do Sistema Imunológico</li>
                    <li>Combate à Celulite</li>
                    <li>Melhora da Circulação e Desintoxicação</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- <section id="documentos">
        <h2>Ainda não encontrou todos os documentos?</h2>
        <p>Nós encontramos para você!</p>
        <p>Se você está tendo dificuldades para reunir todos os documentos necessários para trabalhar como enfermeiro na Itália, nossa equipe pode ajudar. Entre em contato conosco para obter suporte completo na busca e obtenção dos documentos.</p>
    </section> -->

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
            <p>Endereço: Exemplo, Santa Catarina, SC</p>
        </div>
        <div class="footer-copy">
            <p>&copy; Desenvolvido por dienifermendonca.tech © 2024. Todos os direitos reservados.</p>
        </div>

        <!-- <button id="login-btn">Login</button> -->
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
