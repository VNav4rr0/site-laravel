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
                        <a class="navbar-brand" href="#">Etec Zona Leste</a>
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
                <h1>Conheça Nossa Instituição</h1>
                <p>
                    Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste
                    se destaca como um importante polo educacional na região. Sua história remonta ao compromisso com a
                    excelência educacional e o desenvolvimento profissional dos estudantes.
                </p>
                <p>
                    Fundada em [insira o ano de fundação], a Etec Zona Leste rapidamente se estabeleceu como uma
                    instituição de referência no ensino técnico e tecnológico. Desde o início, sua missão foi
                    proporcionar oportunidades de aprendizado que preparassem os alunos para os desafios do mercado de
                    trabalho, além de incentivá-los a buscar a excelência acadêmica.</p>
                <p>Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado,
                    ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de
                    professores e funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como
                    informática, administração, eletrônica, entre outros, proporcionando aos alunos uma formação sólida
                    e atualizada.</p>
                <p>
                    Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades
                    extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, eventos culturais e
                    esportivos. Essas atividades complementam o currículo escolar, promovendo o desenvolvimento integral
                    dos estudantes e estimulando o trabalho em equipe, a liderança e a criatividade.</p>
            </div>
        </div>
        <div class="col d-flex flex-wrap gap-4">

            <div class="row">
                <h1>Vestibulinho</h1>
                <p>Contemplando os dois semestres do ano, o Vestibulinho é a porta de entrada para os cursos que se
                    dividem
                    em modalidades, sendo elas na ETEC Zona Leste: Ensino Técnico, Ensino Integrado Tradicional
                    (M-Tec) e
                    Articulação Médio-Técnica e Superior (AMS). É importante que os interessados à candidatura
                    compreendam
                    cada uma das modalidades, escolhendo a mais adequada à sua disponibilidade. Para a obtenção de
                    um
                    resultado positivo, o candidato deve se preparar para a prova com antecedência.</p>
            </div>
        </div>
        <div class="alert alert-warning" role="alert">
            <strong>Informações Importantes sobre o exame do Vestibulinho ETEC</strong><br><br>
            <p>01 – A prova avalia conhecimentos nas principais matérias da Base Nacional Comum Curricular (BNCC) do
                Ensino Fundamental II, incluindo Linguagens (Língua Portuguesa), Matemática, Ciências Humanas (Geografia
                e História) e Ciências da Natureza;</p>

                <p>02 – As questões não são separadas por disciplinas, podendo ser multidisciplinares ou específicas;</p>

                <p>03 – Valores e ações que promovam uma sociedade mais humana, justa e sustentável são avaliados, exigindo
                atenção a temas atuais relacionados a esses tópicos;</p>

                <p>04 – As questões abordam competências como interpretação de diversos tipos de texto, aplicação de
                conhecimentos do Ensino Fundamental para resolver problemas, análise crítica de argumentos,
                reconhecimento de diferentes formas de linguagem e avaliação de ações de acordo com critérios
                estabelecidos.</p>
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
        onEnter: batch => gsap.to(batch, { autoAlpha: 1, stagger: 0.1 }),
    });

</script>