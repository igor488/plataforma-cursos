@extends('layouts.app')

@section('content')
    <!-- Banner logo abaixo do header -->
    <div style="width: 100%; height: 300px; background: url('/imagens/banner.jpg') center/cover no-repeat; display: flex; align-items: center; justify-content: center; color: white; font-size: 36px; font-weight: bold;">
        Bem-vindo à nossa plataforma!
    </div>

    <div class="container py-5">
        <h1 class="mb-4 text-center">Encontre o curso ideal para você</h1>

        @if ($cursos->isEmpty())
            <p class="text-center text-muted">Nenhum curso disponível no momento.</p>
        @else
            <div class="position-relative">
                <!-- Setas -->
                <button id="prev" class="btn btn-dark position-absolute start-0 top-50 translate-middle-y z-3" style="z-index: 10;">&#10094;</button>
                <button id="next" class="btn btn-dark position-absolute end-0 top-50 translate-middle-y z-3" style="z-index: 10;">&#10095;</button>

                <!-- Carrossel de cursos -->
                <div id="carousel" class="d-flex overflow-auto gap-3 px-5 scroll-smooth" style="scroll-behavior: smooth;">
                    @foreach ($cursos as $curso)
                        <div class="card flex-shrink-0 shadow-sm" style="width: 220px;">
                            <img src="{{ asset('storage/' . $curso->imagem) }}" class="card-img-top" alt="Imagem do curso" style="height: 140px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $curso->titulo }}</h5>
                                <p class="card-text text-muted" style="font-size: 0.85rem;">
                                    {{ Str::limit($curso->descricao, 80) }}
                                </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <a href="{{ $curso->link }}" target="_blank" class="btn btn-primary w-100">Acessar</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>

    <script>
        const carousel = document.getElementById('carousel');
        const nextBtn = document.getElementById('next');
        const prevBtn = document.getElementById('prev');

        nextBtn.addEventListener('click', () => {
            carousel.scrollBy({ left: 240, behavior: 'smooth' });
        });

        prevBtn.addEventListener('click', () => {
            carousel.scrollBy({ left: -240, behavior: 'smooth' });
        });
    </script>
@endsection
