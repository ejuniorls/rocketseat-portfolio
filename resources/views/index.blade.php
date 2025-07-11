<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfólio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <!-- Phosphor Icons CDN -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body>
    <div class="container mx-auto px-5">
        <header class="page_header hero">
            <p class="hero_hello">Hello World! Meu nome é <span class="hero_name">Martina Santos</span> e sou</p>
            <h1 class="hero_title">Desenvolvedora PHP</h1>
            <p class="hero_description">Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo
                sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para
                desafios complexos.</p>

            <ul class="hero_skills">
                <li class="hero_skill bg-port-green-500">GitHub</li>
                <li class="hero_skill bg-port-purple-500">PHP</li>
                <li class="hero_skill bg-port-blue-500">CSS</li>
                <li class="hero_skill bg-port-red-500">HTML</li>
                <li class="hero_skill bg-port-yellow-500">Javascript</li>
            </ul>
        </header>

        <section class="page_projects projects">
            <h2 class="projects_subtitle">Meu trabalho</h2>
            <h2 class="projects_title">Veja os projetos em destaque</h2>
            <div class="projects_grid">
                @foreach ($projects as $project)
                    <article class="project_card">
                        <div class="project_card_image">
                            <img src="{{ asset('images/' . $project['image']) . '.png' }}" alt="">
                        </div>

                        <div class="project_card_content">
                            <h3 class="project_card_title">{{ $project['title'] }}</h3>
                            <p class="project_card_description">{{ $project['description'] }}</p>
                            <ul class="project_card_tags">
                                @foreach ($project['languages'] as $language)
                                    <li class="project_card_tag {{ $language[1] }}">{{ $language[0] }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        <section class="page_contact contact">
            <h2 class="contact_subtitle">Contato</h2>
            <h2 class="contact_title">Gostou do meu trabalho?</h2>
            <p class="contact_description">Entre em contato ou acompanhe nas redes sociais!</p>
            <ul class="contact_links">
                @foreach ($contacts as $contact)
                    <a href="{{ $contact['link'] }}" target="_blank" class="contact_link">
                        <div class="flex items-center space-x-2 text-port-gray-500">
                            <i class="ph {{ $contact['icon'] }} text-xl text-port-gray-400"></i>
                            <span>{{ $contact['page'] }}</span>
                        </div>
                        <i class="ph ph-arrow-up-right text-blue-500 text-lg"></i>
                    </a>
                @endforeach
            </ul>
        </section>
    </div>
</body>

</html>
