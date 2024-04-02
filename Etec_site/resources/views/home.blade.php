<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Etec_laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
        font-family: "Poppins", sans-serif;
        opacity: 0;
    }
</style>

<body>
    <div class="container pb-5">
        <div class="col">
            <div class="row">
                <nav class="navbar navbar-expand-lg bg-dark  rounded-bottom shadow p-3 mb-5 bg-body-tertiary"
                    data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.html">Etec Zona Leste</a>
                        <button
                            class="navbar-toggler  focus-ring focus-ring-dark py-1 px-2 text-decoration-none border-0 rounded-2"
                            type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fs-6"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('sbore') }}">Sobre</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('blog') }}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contato') }}">Contato</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row">

                <div id="carouselExampleCaptions" class="carousel carousel-light  slide">
                    <div class="carousel-indicators rounded-4">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner rounded-4">
                        <div class="carousel-item active">
                            <img src="imgs/img1.svg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block bg-dark px-2 rounded fw-light text-light"
                                style="backdrop-filter: blur(10px); --bs-bg-opacity: .5; transition: all .2s ease-in;">
                                <h5>Descubra um futuro brilhante na ETEC Zona Leste</h5>
                                <p>Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossos
                                    cursos técnicos são ministrados por professores altamente qualificados,
                                    proporcionando uma educação satisfatória que combina conhecimentos acadêmicos
                                    sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
                            </div>
                        </div>
                        <div class="carousel-item rounded-4">
                            <img src="imgs/img2.svg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block px-2 rounded fw-light text-light"
                                style="backdrop-filter: blur(10px);  --bs-bg-opacity: .5; transition: all .2s ease-in;">
                                <h5>Aprendizados para além da sala de aula</h5>
                                <p>Buscamos levar o conhecimento para além da sala de aula tradicional. Incentivamos o
                                    cultivo de conexões valiosas por meio de networking e oportunidades de carreira.
                                    Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso
                                    corpo estudantil, oferecendo suporte abrangente, orientação vocacional e programas
                                    extracurriculares.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="imgs/img3.svg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block px-2 rounded fw-light text-light"
                                style="backdrop-filter: blur(10px);  --bs-bg-opacity: .5; transition: all .2s ease-in;">
                                <h5>Infraestrutura Moderna</h5>
                                <p>Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com
                                    televisões, computadores, notebooks, impressoras 3D e muitos outros componentes
                                    propícios aos projetos que desenvolvemos durante a jornada dos estudantes. Na ETEC
                                    Zona Leste, você encontrará um ambiente favorável para o impulsionar seu crescimento
                                    acadêmico e profissional.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col mt-5 d-flex flex-wrap gap-4">
                <div class="col left">
                    <div class="row pb-3 border-start border-4 inline-block elemnento" style="will-change: transform;">
                        <h1 class="fw-bolder h-10">Nossos Cursos</h1>
                        <p class="h-10">Na ETEC Zona Leste, oferecemos uma gama de cursos técnicos e integrados ao
                            ensino médio para
                            impulsionar sua carreira. Com uma abordagem educacional inovadora, combinamos teoria e
                            prática
                            para prepará-lo para os desafios do mercado de trabalho.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>Novotec Desenvolvimento de Sistemas AMS</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>O programa AMS – Formação Articulada Médio-Técnica e Superior – oferece uma
                                        formação completa em cinco anos, integrando o Ensino Médio (Etec) com o Ensino
                                        Superior Tecnológico (Fatec).</p>
                                    <p>O curso Novotec em Desenvolvimento de Sistemas AMS é oferecido na Etec e Fatec
                                        Zona Leste desde o ano de 2019, sendo esta escola pioneira na implantação deste
                                        novo modelo não só no Centro Paula Souza (CPS) como em São Paulo e no Brasil e
                                        conta com parceria com a IBM, que propicia mentorias aos alunos durante o Ensino
                                        Médio-Técnico assim como possibilita estágio aos alunos durante o Ensino
                                        Superior.</p>
                                    <p>O aluno ingressa no Ensino Médio com Habilitação Profissional de Técnico no curso
                                        de Desenvolvimento de Sistemas (DS) na Etec da Zona Leste, cursa os 3 anos de
                                        Ensino Médio-Técnico já na Fatec Zona Leste, podendo, após concluir esta fase,
                                        ingressar diretamente sem processo seletivo (vestibular) no Curso Superior em
                                        Análise e Desenvolvimento de Sistemas (ADS-AMS) na Fatec Zona Leste</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>Contabilidade</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Matemática e língua portuguesa são disciplinas importantes para entender a
                                        contabilidade, que é a ciência responsável por organizar as contas de uma
                                        empresa e
                                        registrar seus bens patrimoniais (como prédios, veículos e máquinas, entre
                                        outros).
                                        Além da matemática básica, que serve como ferramenta para calcular o lucro ou o
                                        prejuízo de uma empresa, o estudante aprenderá matemática financeira, utilizada
                                        para
                                        operações de financiamento e cálculo de taxas de juros, por exemplo. O aluno
                                        também
                                        vai conhecer quais são as regras da contabilidade e todas as leis que
                                        estabelecem o
                                        que as empresas podem fazer e quais impostos devem pagar. Na área de
                                        Informática, o
                                        estudante vai aprender a fazer planilhas e a usar programas de computador
                                        específicos para a contabilidade.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>Logística</strong>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Logística é o planejamento do caminho feito por um produto ou serviço até chegar
                                        ao
                                        cliente de forma organizada, rápida e econômica. Para planejar esse caminho, o
                                        estudante vai precisar de conhecimentos de matemática, geografia e física. O
                                        aluno
                                        aprenderá sobre os processos de compra de matérias-primas, incluindo a escolha
                                        dos
                                        fornecedores, o registro dos pedidos de compra e o recebimento dos materiais
                                        adquiridos.</p>
                                    <p>O estudante vai aprender também como se deve movimentar as cargas e os produtos
                                        dentro de um estoque para decidir se utilizará, por exemplo, um carrinho ou uma
                                        empilhadeira, e como se deve armazenar cada tipo de produto e por quanto tempo.
                                        Vai
                                        estudar ainda sobre a entrega das mercadorias compradas pelos clientes: como
                                        organizar a carga para o transporte, qual a embalagem mais adequada (em caixas
                                        de
                                        papelão ou madeira, em páletes ou contêineres), qual é o tipo de transporte mais
                                        adequado para o produto e para o cliente (caminhões, embarcações, trem ou
                                        avião), e
                                        quais são as principais rotas que podem ser utilizadas. Além disso, o estudante
                                        aprenderá sobre os custos envolvidos em cada uma das atividades.</p>
                                    <p>O candidato que ingressar no curso técnico de Logística, na modalidade AMS,
                                        poderá
                                        prosseguir os estudos em uma Fatec no curso superior de tecnologia em Logística.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>Recursos Humanos</strong>
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Anuncia vagas de emprego, descrevendo as atribuições do cargo a ser preenchido;
                                        aplica testes em processos seletivos; realiza cálculos para determinar os
                                        valores
                                        que serão descontados no salário dos funcionários, como o Imposto de Renda e a
                                        contribuição ao INSS, além de porcentagem referente a benefícios, como
                                        vale-transporte, plano de saúde etc.; insere informações no sistema para a
                                        geração
                                        de demonstrativos de pagamentos (holerites ou contracheques); cuida da
                                        documentação
                                        necessária para aposentadoria, contratação e demissão de profissionais,
                                        inclusive
                                        preenchendo informações na carteira de trabalho; organiza e arquiva documentos
                                        do
                                        setor; registra e controla período de férias e afastamento de funcionários; e
                                        auxilia no treinamento e capacitação dos empregados.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>Serviços Jurídicos</strong>
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Como o foco do curso está nas leis e normas, o aluno vai estudar as áreas do
                                        Direito.
                                        Vai aprender sobre a Constituição Federal (direito constitucional), a punição
                                        aos
                                        crimes (direito penal), as regras para relações e disputas entre as pessoas e
                                        também
                                        as normas para disputas e questões familiares (direito civil), o funcionamento
                                        dos
                                        órgãos públicos (direito administrativo), as regras para os negócios entre
                                        empresas
                                        e pessoas (direito empresarial), como deve ser a relação entre patrão e
                                        empregado,
                                        considerando direitos e deveres de cada um (direito do trabalho), cobrança de
                                        tributos, como os impostos (direito tributário) e a proteção garantida aos
                                        consumidores (direito do consumidor), entre outros assuntos.Anuncia vagas de
                                        emprego, descrevendo as atribuições do cargo a ser preenchido;
                                        aplica testes em processos seletivos; realiza cálculos para determinar os
                                        valores
                                        que serão descontados no salário dos funcionários, como o Imposto de Renda e a
                                        contribuição ao INSS, além de porcentagem referente a benefícios, como
                                        vale-transporte, plano de saúde etc.; insere informações no sistema para a
                                        geração
                                        de demonstrativos de pagamentos (holerites ou contracheques); cuida da
                                        documentação
                                        necessária para aposentadoria, contratação e demissão de profissionais,
                                        inclusive
                                        preenchendo informações na carteira de trabalho; organiza e arquiva documentos
                                        do
                                        setor; registra e controla período de férias e afastamento de funcionários; e
                                        auxilia no treinamento e capacitação dos empregados.</p>
                                    <p>O estudante vai conhecer também como são elaborados e redigidos os processos,
                                        contratos e documentos jurídicos. Além de aprender sobre as leis, o aluno vai
                                        estudar conceitos de administração de empresas, matemática financeira, técnicas
                                        de
                                        atendimento ao cliente e inglês instrumental. A língua portuguesa é fundamental.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseThree">
                                    <strong>Administração</strong>
                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Como funcionam as organizações, desde empresas privadas até ONGs, passando por
                                        órgãos
                                        públicos, comércio e indústria. O estudante vai precisar de conhecimentos de
                                        língua
                                        portuguesa, matemática, história e geografia para compreender os principais
                                        assuntos
                                        do curso, como história da administração, evolução das organizações ao longo do
                                        tempo, contabilidade, leis que regulam o funcionamento das empresas e redação de
                                        documentos.</p>
                                    <p>O aluno vai aprender ainda a analisar as chances de um negócio ou produto ser
                                        bem-sucedido e o comportamento do consumidor. Estudará também técnicas de
                                        atendimento ao cliente, empreendedorismo (iniciativas para realizar novos
                                        negócios)
                                        e como uma organização planeja alcançar seus objetivos e define suas metas para
                                        o
                                        futuro.</p>
                                    <p>O candidato que ingressar no curso técnico de Administração, na modalidade AMS,
                                        poderá prosseguir os estudos em uma Fatec no curso superior de tecnologia em
                                        Processos Gerenciais.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
<script>
gsap.registerPlugin(ScrollTrigger);

ScrollTrigger.batch("*", {
  interval: 0.1, // time window (in seconds) for batching to occur. 
  batchMax: 3,   // maximum batch size (targets)
  onEnter: batch => gsap.to(batch, {autoAlpha: 1, stagger: 0.1}),
});

</script>