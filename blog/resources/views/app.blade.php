@includeIf('elems.header')
<body>
<header>
    хедер
</header>
<aside>
    сайдбар
    @section('sidebar')
        @show
</aside>
<main>
    @section('content')
        @show
</main>
@includeIf('elems.footer')