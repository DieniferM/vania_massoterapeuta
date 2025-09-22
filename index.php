<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Vânia Carvalho - Massoterapeuta</title>
  <style>
    /* Paleta de cores */
    :root {
      --bege-claro: #F5E9DD;
      --bege-claro-2: #e3cdb0;
      --dourado-suave: #a48b4c;
      --dourado-suave-2: #CBB893;
      --marrom-claro: #A67C52;
      --marrom-claro-2: #8C6B4F;
      --branco: #FFFFFF;
      --verde-oliva: #C6C2A5;
      --verde-oliva-2: #B9B48C;
    }

    /* Reset e base */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: var(--bege-claro);
      color: var(--marrom-claro);
      line-height: 1.6;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    a {
      color: var(--marrom-claro);
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s ease;
    }
    a:hover,
    a:focus {
      color: var(--dourado-suave);
      outline: none;
    }

    header {
      position: fixed;
      top: 0;
      width: 100%;
      background: rgba(245, 233, 221, 0.85);
      backdrop-filter: saturate(180%) blur(10px);
      border-bottom: 1px solid var(--dourado-suave-2);
      z-index: 1000;
    }

    nav {
      max-width: 1100px;
      margin: 0 auto;
      display: flex;
      justify-content: flex-end;
      padding: 1rem 1.5rem;
      gap: 2rem;
    }

    nav button,
    nav a {
      background: none;
      border: none;
      cursor: pointer;
      font-size: 1rem;
      color: var(--marrom-claro);
      font-weight: 600;
      padding: 0.25rem 0.5rem;
      border-radius: 4px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    nav button:hover,
    nav a:hover,
    nav button:focus,
    nav a:focus {
      background-color: var(--dourado-suave);
      color: var(--branco);
      outline: none;
    }

    main {
      margin-top: 60px;
      flex-grow: 1;
    }

  /* === HOME === */
  #home {
    position: relative;
    height: 100vh;
    box-sizing: border-box;
    padding: 1rem 1rem;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    scroll-margin-top: 60px;
  }

  #home video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -1;
    transform: translate(-50%, -50%);
    object-fit: cover;
    filter: brightness(0.6);
  }
  #home .overlay-text {
    position: relative; 
    max-width: 480px;
    background: rgba(245, 233, 221, 0.85);
    padding: 5rem 1.5rem 2rem;
    border-radius: 16px;
    box-shadow: 0 0 15px rgba(166, 124, 82, 0.4);
    text-align: center;
    z-index: 1;
    margin-top: 0;
  }
  #home .overlay-text h1 {
    font-size: 2.4rem;
    font-weight: 900;
    margin-bottom: 1rem;
    color: var(--dourado-suave);
    letter-spacing: 0.1em;
    text-transform: uppercase;
  }

  #home .overlay-text p {
    font-size: 1.1rem;
    color: var(--marrom-claro-2);
    line-height: 1.5;
    white-space: pre-line;
  }
  .foto-perfil-flutuante {
    position: absolute;
    top: -60px; 
    left: 50%;
    transform: translateX(-50%);
    z-index: 2;
    width: 140px;
    height: 140px;
    border-radius: 50%;
    overflow: hidden;
    border: 3px solid var(--dourado-suave);
    box-shadow: 0 0 10px rgba(166, 124, 82, 0.3);
    background-color: var(--branco);
  }

  .foto-perfil-flutuante img {
    width: 100%;
    height: auto;
    object-fit: cover;
    transform: translateY(-5%);
    display: block;
  }
  /* === MINHA ABORDAGEM === */
  #minha-abordagem {
    max-width: 1200px;
    margin: 4rem auto;
    padding: 0 1.5rem 7rem;
    display: flex;
    flex-direction: column;
    gap: 3rem;
    scroll-margin-top: 100px;
  }

  #minha-abordagem .conteudo-principal {
    display: flex;
    gap: 3rem;
    align-items: flex-start;
    justify-content: space-between;
    flex-wrap: nowrap;
  }

  #minha-abordagem .texto {
    flex: 1 1 40%;
    color: var(--marrom-claro);
    font-size: 1.1rem;
    line-height: 1.6;
    padding-left: 0;
  }

  #minha-abordagem .texto h2 {
    color: var(--dourado-suave);
    font-weight: 900;
    margin-bottom: 1rem;
    text-transform: uppercase;
    letter-spacing: 0.1em;
  }

  .carrossel-fotos {
    flex: 1 1 60%;
    max-width: none; 
    height: 580px;
    overflow: hidden;
    border-radius: 16px;
    /* box-shadow: 0 0 20px rgba(166, 124, 82, 0.3); */
    /* border: 4px solid var(--dourado-suave-2); */
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .carrossel-imagens {
    width: 100%;
    height: 100%;
    position: relative;
  }

  .carrossel-imagens img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: contain;
    opacity: 0;
    transition: opacity 0.8s ease-in-out;
    border-radius: 16px;
    /* border: 4px solid var(--dourado-suave-2); */
  }

  .carrossel-imagens img.ativa {
    opacity: 1;
    z-index: 1;
  }

  .carrossel-fotos button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: var(--branco);
    border: none;
    padding: 0.5rem 0.75rem;
    font-size: 1.5rem;
    cursor: pointer;
    z-index: 2;
    border-radius: 50%;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    color: var(--marrom-claro);
  }

  .carrossel-fotos .btn-anterior {
    left: 10px;
  }
  .carrossel-fotos .btn-proximo {
    right: 10px;
  }

  .carrossel-fotos button:hover {
    background-color: var(--dourado-suave);
    color: var(--branco);
  }


    /* === BENEFÍCIOS === */
    #beneficios {
      padding: 4rem 1.5rem;
      background: var(--bege-claro);
      scroll-margin-top: 10px;
    }

    .beneficios-content {
      max-width: 1000px;
      margin: 0 auto 1rem;
      background: var(--verde-oliva);
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(166, 124, 82, 0.15);
      padding: 1rem 1rem;
      text-align: center;
    }

    .beneficios-content h2 {
      font-size: 2rem;
      margin-bottom: 1.25rem;
      color: var(--dourado-suave);
    }

    .blocos {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1rem;
    }

    .bloco {
      background: var(--branco);
      color: var(--dourado-suave);
      padding: 0.75rem 1.25rem; /* Reduzi altura */
      border-radius: 10px;
      font-weight: 700;
      box-shadow: 0 3px 8px rgba(0,0,0,0.1);
      min-width: 180px;
      transition: background-color 0.3s ease, color 0.3s ease;
      font-size: 0.95rem;
    }


    .bloco:hover {
      background-color: var(--dourado-suave);
      color: var(--branco);
    }

    /* Vídeo depoimento */
    .video-depoimento {
      max-width: 1000px;
      margin: 0 auto;
      padding: 0.5rem 0.5rem;
      text-align: center;
      background: var(--verde-oliva);
      border-radius: 14px;
      box-shadow: 0 0 15px rgba(166, 124, 82, 0.12);
    }

    .video-depoimento h3 {
      font-size: 1.3rem;
      color: var(--dourado-suave);
      font-weight: 900;
      text-transform: uppercase;
      margin-bottom: 0.25rem;
    }

    .video-depoimento p {
      font-size: 0.95rem;
      color: var(--dourado-suave);
      max-width: 800px;
      margin: 0 auto 0.75rem;
    }

    .video-container {
      position: relative;
      padding-bottom: 35%; /* Proporção reduzida */
      height: 0;
      overflow: hidden;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(166, 124, 82, 0.15);
    }


    .video-container video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 8px;
    }

    /* === CONTATO === */
    #contato {
      max-width: 600px;
      margin: 3rem auto 5rem;
      padding: 0 1.5rem;
      background: var(--branco);
      border-radius: 16px;
      box-shadow: 0 0 20px rgba(166, 124, 82, 0.2);
      color: var(--marrom-claro);
      padding-bottom: 2rem;
    }

    #contato h2 {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 1.5rem;
      color: var(--dourado-suave);
      font-weight: 900;
      letter-spacing: 0.1em;
      text-transform: uppercase;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
    }

    label {
      font-weight: 600;
      color: var(--marrom-claro-2);
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    input[type="tel"] {
      padding: 0.75rem 1rem;
      border: 2px solid var(--dourado-suave-2);
      border-radius: 8px;
      font-size: 1rem;
      color: var(--marrom-claro);
      transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="date"]:focus,
    input[type="tel"]:focus {
      border-color: var(--marrom-claro);
      outline: none;
    }

    button[type="submit"] {
      background-color: var(--dourado-suave);
      color: var(--branco);
      font-weight: 700;
      padding: 0.75rem 1rem;
      border: none;
      border-radius: 8px;
      font-size: 1.1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover,
    button[type="submit"]:focus {
      background-color: var(--marrom-claro);
      outline: none;
    }

    /* Responsividade */
    @media (max-width: 768px) {
      #minha-abordagem .conteudo-principal {
        flex-direction: column;
      }
      .carrossel-fotos,
      #minha-abordagem .texto {
        flex: 1 1 100%;
        max-width: 100%;
      }
    }

  </style>
</head>
<body>
  <header>
    <nav aria-label="Menu principal">
      <a href="#home" role="button">Home</a>
      <a href="#minha-abordagem" role="button">Minha abordagem</a>
      <a href="#beneficios" role="button">Benefícios</a>
      <a href="#contato" role="button">Contato</a>
    </nav>
  </header>
  <main>
    <!-- HOME -->
    <section id="home" aria-label="Seção inicial com vídeo e apresentação">
      <video autoplay muted loop playsinline aria-hidden="true" tabindex="-1" preload="auto" poster="">
        <source src="/video/massagem_video_fundo_varios.mp4" type="video/mp4" />
        Seu navegador não suporta vídeo.
      </video>
      <div class="overlay-text" role="region" aria-live="polite">
        <div class="foto-perfil-flutuante">
          <img src="\img\vania.jpg" alt="Foto de Vânia Carvalho" />
        </div>
        <!-- <div class="foto-perfil">
            <img src="\img\vania.jpg" alt="Foto de Vânia Carvalho" />
        </div> -->
        <h1>MASSOTERAPIA<br />COM PROPÓSITO E CUIDADO</h1>
        <p>
          Sou Vânia Carvalho, massoterapeuta, e ajudo pessoas a aliviar dores físicas, emocionais e estéticas. 
          Utilizo técnicas exclusivas de massagem para promover bem-estar, equilíbrio e qualidade de vida, permitindo que meus pacientes vivam com mais conforto, prazer e saúde.
        </p>
      </div>
    </section>
    <!-- MINHA ABORDAGEM -->
    <section id="minha-abordagem" aria-label="Seção minha abordagem">
      <div class="conteudo-principal">
        <div class="texto">
          <h2>Avaliação e atendimento</h2>
          <p>
            Na avaliação, procuro entender a origem da dor. Se envolve nervos, inflamação, articulações ou músculos. Sempre a partir da descrição dos sintomas. 
            Esse cuidado me permite escolher a melhor abordagem para proporcionar alívio e qualidade de vida.
          </p>
          <br>
            Mas meu trabalho vai além da dor: cada atendimento é uma experiência completa de relaxamento, que une alívio,
            conforto e tranquilidade, ajudando você a se reconectar consigo mesmo.
          </p>
        </div>
       
        <div class="carrossel-fotos">
          <button class="btn-anterior" aria-label="Imagem anterior">&#10094;</button>

          <div class="carrossel-imagens">
            <img src="/img/avaliaçao_massoterapia.png" alt="Massagem relaxante em paciente" class="ativa" />
            <img src="/img/foto_banco_brasil1.jpg" alt="Vânia realizando massagem em funcionarios do banco do brasil" />
            <img src="/img/massagem_relaxante.png" alt="Atendimento personalizado" />
            <img src="/img/vania_massoterapeuta.png" alt="Ambiente de atendimento com luz suave" />
          </div>

          <button class="btn-proximo" aria-label="Próxima imagem">&#10095;</button>
        </div>
      </div>
    </section>
    <!-- BENEFÍCIOS -->
    <section id="beneficios" aria-label="Seção benefícios">
      <div class="beneficios-content">
        <h2>Benefícios</h2>
        <div class="blocos" role="list">
          <div class="bloco" role="listitem" tabindex="0">Redução do estresse</div>
          <div class="bloco" role="listitem" tabindex="0">Alívio de dores musculares</div>
          <div class="bloco" role="listitem" tabindex="0">Melhora da circulação</div>
          <div class="bloco" role="listitem" tabindex="0">Equilíbrio emocional</div>
        </div>
      </div>

      <div class="video-depoimento">
        <h3>Experiências reais de quem já foi atendido</h3>
        <p>Assista ao que nossos pacientes têm a dizer sobre os resultados e benefícios que sentiram com os atendimentos personalizados.</p>
        
        <div class="video-container">
          <video autoplay muted loop playsinline preload="metadata" poster="img/thumb-video.jpg">
            <source src="/video/massagem_video_fundo_varios.mp4" type="video/mp4"/>
            Seu navegador não suporta o vídeo.
          </video>
        </div>
      </div>
    </section>
    <!-- CONTATO -->
    <section id="contato" aria-label="Seção contato">
      <h2>Contato</h2>
      <form id="form-agenda" aria-describedby="form-desc" novalidate>
        <p id="form-desc" style="color: var(--marrom-claro-2); margin-bottom: 1rem;">
          Preencha o formulário para agendar sua sessão.
        </p>
        <label for="nome">Nome completo</label>
        <input type="text" id="nome" name="nome" required autocomplete="name" placeholder="Seu nome completo" />

        <label for="contato-info">Email ou WhatsApp</label>
        <input type="text" id="contato-info" name="contato-info" required placeholder="Email ou WhatsApp" autocomplete="email tel" />

        <label for="data-agenda">Data desejada</label>
        <input type="date" id="data-agenda" name="data-agenda" required min="" />

        <button type="submit" aria-label="Enviar formulário de agendamento">Agendar</button>
      </form>
      <p id="form-feedback" role="alert" style="margin-top: 1rem; font-weight: 700;"></p>
    </section>
  </main>

  <script>
     const imagens = document.querySelectorAll('.carrossel-imagens img');
      const btnAnterior = document.querySelector('.btn-anterior');
      const btnProximo = document.querySelector('.btn-proximo');
      let indexAtual = 0;

      function mostrarImagem(index) {
        imagens.forEach((img, i) => {
          img.classList.toggle('ativa', i === index);
        });
      }

      btnAnterior.addEventListener('click', () => {
        indexAtual = (indexAtual - 1 + imagens.length) % imagens.length;
        mostrarImagem(indexAtual);
      });

      btnProximo.addEventListener('click', () => {
        indexAtual = (indexAtual + 1) % imagens.length;
        mostrarImagem(indexAtual);
      });
    // Ajusta o mínimo da data para hoje no input date
    const inputDate = document.getElementById('data-agenda');
    const today = new Date().toISOString().split('T')[0];
    inputDate.setAttribute('min', today);

    // Menu navegação suave
    document.querySelectorAll('nav a').forEach(link => {
      link.addEventListener('click', e => {
        e.preventDefault();
        const targetId = link.getAttribute('href').substring(1);
        const targetSection = document.getElementById(targetId);
        if (targetSection) {
          targetSection.scrollIntoView({ behavior: 'smooth' });
        }
      });
    });

    // Formulário e integração com Google Calendar via API (exemplo simplificado)
    // Para funcionar, precisa configurar OAuth2 e API Google Calendar no backend.
    // Aqui só simula o envio e feedback.

    const form = document.getElementById('form-agenda');
    const feedback = document.getElementById('form-feedback');

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      feedback.textContent = '';
      const nome = form['nome'].value.trim();
      const contato = form['contato-info'].value.trim();
      const data = form['data-agenda'].value;

      if (!nome || !contato || !data) {
        feedback.style.color = 'red';
        feedback.textContent = 'Por favor, preencha todos os campos.';
        return;
      }

      // Simulação de envio para backend que cria evento no Google Calendar
      feedback.style.color = varToRgb('--marrom-claro');
      feedback.textContent = 'Enviando seu agendamento...';

      try {
        // Exemplo: enviar dados para backend via fetch
        // const response = await fetch('/api/agendar', {
        //   method: 'POST',
        //   headers: { 'Content-Type': 'application/json' },
        //   body: JSON.stringify({ nome, contato, data }),
        // });
        // const result = await response.json();
        // if (result.success) {
        //   feedback.style.color = 'green';
        //   feedback.textContent = 'Agendamento realizado com sucesso!';
        //   form.reset();
        // } else {
        //   throw new Error(result.message || 'Erro ao agendar.');
        // }

        // Como não há backend, simula sucesso após 1.5s
        await new Promise(r => setTimeout(r, 1500));
        feedback.style.color = 'green';
        feedback.textContent = 'Agendamento realizado com sucesso! Em breve entraremos em contato.';
        form.reset();
      } catch (error) {
        feedback.style.color = 'red';
        feedback.textContent = 'Erro ao realizar agendamento. Tente novamente mais tarde.';
        console.error(error);
      }
    });

    function varToRgb(varName) {
      const style = getComputedStyle(document.documentElement);
      return style.getPropertyValue(varName).trim() || '#A67C52';
    }
  </script>
</body>
</html>
