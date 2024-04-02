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
            <div class="row ">
                <h1>APM</h1>
                <p>A Associação de Pais e Mestres (APM) é uma instituição privada, auxiliar da escola, e tem por
                    finalidade apoiar o processo de gestão escolar, a assistência ao aluno e a integração
                    escola-família-comunidade.</p>
            </div>
            <div class="row my-5 mb-3">
                <h1>Horários de Atendimento</h1>
                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">Segunda</th>
                            <th scope="col">Quarta</th>
                            <th scope="col">Sexta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>08h00min. às 09h30min.</td>
                            <td>14h30min. às 15h30min.</td>
                            <td>19h30min. às 20h30min.</td>
                        </tr>
                        <tr>

                            <td>08h00min. às 09h30min.</td>
                            <td>14h30min. às 15h30min.</td>
                            <td>19h30min. às 20h30min.</td>
                        </tr>
                        <tr>


                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <h1 class="mb-3">Equipe</h1>
                
                <ul class="list-group">
                    <li class="list-group-item">Diretora de Serviços Acadêmicos – Solange Mariano Borim</li>
                    <li class="list-group-item">Agente Técnico e Administrativo – Diva Neide Bortoli </li>
                    <li class="list-group-item">Agente Técnico e Administrativo – Ênio Ramos Araújo</li>
                    <li class="list-group-item">Agente Técnico e Administrativo – Edilene Mary Schimith</li>
                </ul>
            </div>
            <div class="row mt-5">
                <h1>Contato</h1>
                <p><strong>E-mail:</strong> e211dir@cps.sp.gov.br</p>
                <p><strong>Telefones:</strong>  (11) 2045-4025 | (11) 2045-4026 | (11) 2045-4009</p>
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