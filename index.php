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
                <li><a href="#sobre_mim">Quem sou eu</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#beneficios">Benefícios</a></li>
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

   <section id="servicos">
    <div class="servicos-content">
        <h2>Serviços</h2>
        <div class="blocos">
            <div class="bloco">
                <h3>Drenagem linfática</h3>
                <ul>
                    <li>Redução de Inchaço e Retenção de Líquidos</li>
                    <li>Aceleração da Recuperação Pós-operatória</li>
                    <li>Fortalecimento do Sistema Imunológico</li>
                    <li>Combate à Celulite</li>
                    <li>Melhora da Circulação e Desintoxicação</li>
                </ul>
            </div>
            <div class="bloco">
                <h3>Massagem terapêutica</h3>
                <ul>
                    <li>Aliviar dores musculares e articulares</li>
                    <li>Melhorar a circulação</li>
                    <li>Aumentar a mobilidade e flexibilidade</li>
                    <li>Alívio do estresse físico e mental</li>
                    <li>Tratar lesões esportivas</li>
                </ul>
            </div>
            <div class="bloco">
                <h3>Exemplo13</h3>
                <p>Descrição13.</p>
            </div>
        </div>
    </div>
</section>
    <section id="sobre_mim">
        <div class="entenda-content">
            <div class="entenda-texto">
                <h2>Minha Trajetória na Massoterapia</h2>
                <p>Minha jornada na massoterapia começou com uma grande paixão pelo bem-estar e pela saúde. Desde cedo, percebi o impacto positivo do toque terapêutico na qualidade de vida das pessoas. Com dedicação, me especializei em diversas técnicas para oferecer um atendimento completo e personalizado.</p>
                <p>Ao longo dos anos, tive o privilégio de ajudar muitos clientes a aliviarem dores musculares, reduzirem o estresse e melhorarem sua circulação. Cada atendimento é uma oportunidade de proporcionar mais equilíbrio e conforto para quem confia no meu trabalho.</p>
                <p>Meu compromisso é continuar aprendendo e evoluindo, sempre buscando novas formas de trazer benefícios através da massagem.</p>
            </div>
            <div class="entenda-imagem">
                <img src="img/vania.jpg" alt="Minha trajetória na Massoterapia">
            </div>
        </div>
    </section>

    <section id="beneficios">
        <h2>Como a massoterapia pode melhorar sua saúde e bem-estar?</h2>
        <!-- <div class="beneficios-imagem">
            <img src="img/img1.jpg" alt="Entenda as Etapas">
        </div> -->
        <div class="beneficios-content">
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
            <p>(48) 9964-73154</p>
            <p>Pedras Grandes, SC</p>
        </div>
        <div class="footer-copy">
            <p>&copy; Desenvolvido por dienifermendonca.tech © 2024. Todos os direitos reservados.</p>
        </div>

        <!-- <button id="login-btn">Login</button> -->
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
