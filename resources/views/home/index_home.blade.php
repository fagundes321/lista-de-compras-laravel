<x-layout title="">

    <div class="container mt-4 mb-5">

        {{-- HEADER --}}
        <div class="text-center mb-5">
            <h1 class="fw-bold text-dark mb-1">HomeManager</h1>
            <p class="text-muted mb-0">
                Gerencie sua casa de forma simples e organizada
            </p>
        </div>

        {{-- GRID PRINCIPAL --}}
        <div class="row g-4">

            {{-- COMPRAS --}}
            <div class="col-12 col-md-6 col-lg-4">
                <a href="{{ route('compras.index') }}" class="text-decoration-none">
                    <div class="card dashboard-card border border-dark shadow-sm h-100">
                        <div class="text-center d-flex justify-content-center align-items-center p-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-cart4 me-2" viewBox="0 0 16 16">
                                <path
                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                            </svg>

                            <h2 class="fw-bold mb-0 text-dark">Compras</h2>
                        </div>

                        <hr>
                        <div class="card-body text-center ">

                            <p class="fw-bold h5 text-dark text-center">
                                Total de itens
                            </p>
                            <p class="fw-bold h1 text-dark text-center ">

                                {{ $totalItens }}
                            </p>

                                <div class="text-white bg-dark text-center d-flex justify-content-center align-items-center p-2 rounded mt-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" class="bi bi-cart4 me-2" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                                    </svg>
                                    <p class="fw-bold mb-0 ">

                                        Ver Compras
                                    </p>
                                </div>

                        </div>
                    </div>
                </a>
            </div>

            {{-- FINANCEIRO --}}
            <div class="col-12 col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                   <div class="card dashboard-card border border-dark shadow-sm h-100">
                        <div class="text-center d-flex justify-content-center align-items-center p-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-cart4 me-2" viewBox="0 0 16 16">
                                <path
                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                            </svg>

                            <h2 class="fw-bold mb-0 text-dark">Financeiro</h2>
                        </div>

                        <hr>
                        <div class="card-body text-center ">

                            <p class="fw-bold h5 text-dark text-center">
                                Total Gasto
                            </p>
                               <p class="fw-bold h5 text-dark text-center">
                                Em caixa
                            </p>
                            <p class="fw-bold h1 text-dark text-center ">

                                {{-- {{ $totalItens }} --}}
                            </p>

                                <div class="text-white bg-dark text-center d-flex justify-content-center align-items-center p-2 rounded mt-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" class="bi bi-cart4 me-2" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                                    </svg>
                                    <p class="fw-bold mb-0 ">

                                        Ver Compras
                                    </p>
                                </div>

                        </div>
                    </div>
                </a>
            </div>

            {{-- DESPENSA --}}
            <div class="col-12 col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card dashboard-card border border-dark shadow-sm h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-box-seam dashboard-icon"></i>
                            <h5 class="fw-bold mt-3 text-dark">Despensa</h5>
                            <p class="text-muted small">
                                Controle de estoque e validade
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            {{-- AVALIAÇÕES --}}
            <div class="col-12 col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card dashboard-card border border-dark shadow-sm h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-star-fill dashboard-icon"></i>
                            <h5 class="fw-bold mt-3 text-dark">Avaliações</h5>
                            <p class="text-muted small">
                                Avalie produtos comprados
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            {{-- FAVORITOS --}}
            <div class="col-12 col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card dashboard-card border border-dark shadow-sm h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-heart-fill dashboard-icon"></i>
                            <h5 class="fw-bold mt-3 text-dark">Favoritos</h5>
                            <p class="text-muted small">
                                Itens mais comprados
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            {{-- HISTÓRICO --}}
            <div class="col-12 col-md-6 col-lg-4">
                <a href="#" class="text-decoration-none">
                    <div class="card dashboard-card border border-dark shadow-sm h-100">
                        <div class="card-body text-center">
                            <i class="bi bi-clock-history dashboard-icon"></i>
                            <h5 class="fw-bold mt-3 text-dark">Histórico</h5>
                            <p class="text-muted small">
                                Compras anteriores e relatórios
                            </p>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>

</x-layout>
