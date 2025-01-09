<x-layout>

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        @isset($mensagemSucesso)
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            {{ $mensagemSucesso }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endisset

        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="content container-fluid">



            <!-- Overview Section -->
            <div class="row justify-content-center">
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-center align-items-center">
                                <div class="db-info d-flex flex-column align-items-center gap-1">
                                    <h6>Agendamentos</h6>
                                    <h3>2</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-center align-items-center">
                                <div class="db-info d-flex flex-column align-items-center gap-1">
                                    <h6>Faturamento Previsto</h6>
                                    <h3>R$ 45,00</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /Overview Section -->

            <div class="col-12 col-lg-12 col-xl-12 d-flex">
                <div class="card flex-fill comman-shadow">

                    <div class="card-body">
                        <div class="teaching-card">

                            <ul class="activity-feed">
                                <li class="d-flex align-items-center">
                                    <div class="d-flex flex-column gap-2">
                                        <ul class="teacher-date-list">
                                            <li><i class="fas fa-clock me-2"></i>09:00 - 09:45</li>
                                        </ul>
                                        <span class="feed-text1 mx-3 fw-bold"><a>William</a></span>
                                        <span class="fs-7 mx-3 text-muted"><a>Cabelo e Barba</a></span>
                                    </div>

                                    <div class="activity-btns ms-auto ">
                                        <h5>R$ 50,00</h5>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-12 col-xl-12 d-flex">
                <div class="card flex-fill comman-shadow">

                    <div class="card-body">
                        <div class="teaching-card">

                            <ul class="activity-feed">
                                <li class="d-flex align-items-center">
                                    <div class="d-flex flex-column gap-2">
                                        <ul class="teacher-date-list">
                                            <li><i class="fas fa-clock me-2"></i>09:00 - 09:45</li>
                                        </ul>
                                        <span class="feed-text1 mx-3 fw-bold"><a>William</a></span>
                                        <span class="fs-7 mx-3 text-muted"><a>Cabelo e Barba</a></span>
                                    </div>

                                    <div class="activity-btns ms-auto ">
                                        <h5>R$ 50,00</h5>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Page Wrapper -->



    </div>
    <!-- /Main Wrapper -->


</x-layout>