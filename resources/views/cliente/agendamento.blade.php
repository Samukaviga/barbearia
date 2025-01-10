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

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Agendamento</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Cliente</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="card comman-shadow">
                <div class="card-body">
                    <form>
                        <div class="row gap-3">

                            <div class="col-12 col-sm-4">
                                <div class="input-block local-forms calendar-icon">
                                    <label>Data<span class="login-danger">*</span></label>
                                    <input class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="student-submit">
                                    <button type="submit" class="btn btn-primary">Buscar</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12 col-lg-12 col-xl-12 d-flex">
                <div class="card flex-fill comman-shadow">
                    <div class="card-body">
                        <div class="teaching-card">
                            <ul class="activity-feed">
                                <li class="d-flex align-items-center">
                                    <div class="d-flex flex-column gap-2">
                                        <span class="fs-7 mx-3 text-muted"><a>Horário</a></span>
                                        <span class="feed-text fs-3 mx-3 fw-bold"><a>11:00</a></span>
                                    </div>
                                    <div class="activity-btns ms-auto">
                                        <button type="button" class="btn btn-secondary">Agendar</button>
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
                                        <span class="fs-7 mx-3 text-muted"><a>Horário</a></span>
                                        <span class="feed-text fs-3 mx-3 fw-bold"><a>11:30</a></span>
                                    </div>
                                    <div class="activity-btns ms-auto">
                                        <button type="button" class="btn btn-secondary">Agendar</button>
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