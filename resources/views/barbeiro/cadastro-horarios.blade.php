<x-layout :mensagem-sucesso="$mensagemSucesso">

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
                            <h3 class="page-title">Cadastrar horarios</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Admin</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->


            <div class="row mt-2">
                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-body">
                            <form action="/professor/exercicio/adicionar" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row p-2">


                                    <div class="col-12 col-sm-6 m-3">
                                        <div class="input-block local-forms">
                                            <label>Dia</label>
                                            <input type="date" name="data" id="data" value="{{ old('data') }}" maxlength="50" class="form-control">
                                        </div>
                                    </div>

                                    <div class="input-block local-forms">

                                        <label class="mx-3" >Horarios</label>

                                        <select name="agrupamento" id="professor" class="form-control col-12 col-sm-4 m-3">

                                            <option value="">Selecione um horario</option>

                                            <option value="Abdomen">Abdômen</option>

                                            <option value="Antebraço">Antebraço</option>

                                            <option value="Biceps">Biceps</option>

                                            <option value="Costas">Costas</option>

                                            <option value="Triceps">Triceps</option>

                                            <option value="Panturrilha">Panturrilha</option>

                                            <option value="Peito">Peito</option>

                                            <option value="Ombro">Ombro</option>

                                            <option value="Glúteo">Glúteo</option>

                                            <option value="Posterior Coxa">Posterior Coxa</option>

                                            <option value="Quadriceps">Quadriceps</option>

                                        </select>

                                    </div>

                                    <div class="col-12 m-3">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Adicionar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <!-- DISPLAY TABLE -->

            <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">

                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="row align-items-center">

                            </div>
                        </div>
                        <!-- /Page Header -->
                        <div class="table-responsive">
                            <table class="table border-0 star-student table-hover table-center mb-0 table-striped">
                                <thead class="student-thread">
                                    <tr>
                                        <th>Data</th>
                                        <th>Ferramenta</th>
                                        <th>Campanha</th>
                              
                                        <th></th>


                                    </tr>
                                </thead>


                                <tbody>

                         

                                        <tr>

                                            <td>ss</td>
                                            <td>22</td>
                                            <td>
                                                <h2>
                                                    <a>ss</a>
                                                </h2>
                                            </td>

                                            <td>
                                                <h2>
                                                    <a>ss</a>
                                                </h2>
                                            </td>

                                            <td>
                                                <h2>
                                                    <a> 22</a>
                                                </h2>
                                            </td>

                                            <td>
                                                <h2>
                                                    <a>R$ 22</a>
                                                </h2>
                                            </td>

                                            <td>
                                                <h2>
                                                    <a>ss</a>
                                                </h2>
                                            </td>

                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="detalhes-custos.php?id=1" class="btn btn-sm bg-success-light me-2">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="editar-custos.php?id=1" class="btn btn-sm bg-danger-light">
                                                        <i class="feather-edit"> </i>
                                                    </a>
                                                </div>
                                            </td>

                                        </tr>
                                   

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- END TABLE -->
        </div>
        <!-- /Page Wrapper -->



    </div>
    <!-- /Main Wrapper -->


</x-layout>