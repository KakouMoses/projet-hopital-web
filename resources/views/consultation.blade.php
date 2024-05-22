@extends('theme.default')
@section('content')
      <div class="container-fluid">

        <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
            <div class="card-body p-4">
                <div class="row d-flex">
                <div class="col-9">
                    <h5 class="card-title fw-semibold mb-4">Listes des consultations</h5>
                </div>
                <div class="col-3">
                    <button type="button" class="btn btn-primary m-1 justify-content-end" data-bs-toggle="modal" data-bs-target="#CreationConsultation">
                    <i class="ti ti-plus fs-6"></i>
                    Faire une nouvelle consultation
                    </button>
                </div>
                </div>
                <div class="table-responsive">
                <table id="example" class="table text-nowrap mb-0 align-middle display">
                    <thead class="text-dark fs-4">
                    <tr>
                        <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Id Consultation</h6>
                        </th>
                        <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Id specialiste</h6>
                        </th>
                        <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Id patient</h6>
                        </th>
                        <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Constantes</h6>
                        </th>
                        <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Diagnostic</h6>
                        </th>
                        <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Prescription</h6>
                        </th>
                        <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Date consultation</h6>
                        </th>
                        <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Date controle</h6>
                        </th>
                        <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">
                            1
                        </h6>
                        </td>
                        <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">
                            Kakou
                        </p>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">
                                Kakou
                            </p>
                            </td>
                        <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">
                            Kakou Moise
                        </p>
                        </td>
                        <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">
                            Masculin
                        </p>
                        </td>
                        <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">
                            0101020203
                        </p>
                        </td>
                        <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">
                            kakou@gmail.com
                        </p>
                        </td>
                        <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">
                            kakou@gmail.com
                        </p>
                        </td>
                        <td class="border-bottom-0">
                        <button type="button" class="btn btn-info rounded-2 fw-semibold" data-bs-toggle="modal" data-bs-target="#ModalInfo">
                            <i class="ti ti-eye fs-6"></i>
                        </button>
                        <button type="button" class="btn btn-success rounded-2 fw-semibold">
                            <i class="ti ti-pencil fs-6"></i>
                        </button>
                        <button type="button" class="btn btn-danger rounded-2 fw-semibold">
                            <i class="ti ti-trash fs-6"></i>
                        </button>
                        <button type="button" class="btn btn-warning rounded-2 fw-semibold">
                            <i class="ti ti-file fs-6"></i>
                        </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection
    </div>
</div>

@section('modal')
<!-- Modal -->
<div class="modal fade" id="CreationConsultation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">FAIRE UNE NOUVELLE CONSULTATION</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="">
            <div class="row pt-3">
            <div class="row py-2">
                <div class="col-md-6">
                <label for="Nom" class="form-label">Id Patient</label>
                <select class="form-select" id="validationCustom04" required>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="...">...</option>
                </select>
                </div>
                <div class="col-md-6">
                <label for="Prenom" class="form-label">Id Specialiste</label>
                <select class="form-select" id="validationCustom04" required>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="...">...</option>
                </select>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md-6">
                    <label for="Antecedent" class="form-label">Constantes</label>
                    <textarea class="form-control" id="Antecedent" rows="4"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="Antecedent" class="form-label">Prescriptions</label>
                    <textarea class="form-control" id="Antecedent" rows="4"></textarea>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md-6">
                    <label for="Antecedent" class="form-label">Observations</label>
                    <textarea class="form-control" id="Antecedent" rows="4"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="Antecedent" class="form-label">Diagnostic</label>
                    <textarea class="form-control" id="Antecedent" rows="4"></textarea>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md-6">
                    <label for="Profesion" class="form-label">Acte Medical</label>
                    <input type="text" class="form-control" id="Profesion" required>
                </div>
                <div class="col-md-6">
                    <label for="Contact" class="form-label">Date controle</label>
                    <input type="date" class="form-control" id="Contact" required>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Fiche de consultation ...</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="fw-semibold" >
                                Id Consultation :
                            </h6>

                        </div>
                        <div class="col-md-9">
                            <p class="fw-normal">
                                ...
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="fw-semibold" >
                                Id Specialiste :
                            </h6>

                        </div>
                        <div class="col-md-9">
                            <p class="fw-normal">
                                ...
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="fw-semibold" >
                                Diagnostic :
                            </h6>

                        </div>
                        <div class="col-md-9">
                            <p class="fw-normal">
                                Masculin
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="fw-semibold" >
                                Constantes :
                            </h6>

                        </div>
                        <div class="col-md-9">
                            <p class="fw-normal">
                                ...
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="fw-semibold" >
                                Prescription :
                            </h6>

                        </div>
                        <div class="col-md-9">
                            <p class="fw-normal">
                                Kakou Moise
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="fw-semibold" >
                                Acte medical :
                            </h6>
                        </div>
                        <div class="col-md-9">
                            <p class="fw-normal">
                                ...
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="fw-semibold" >
                                Date consultation :
                            </h6>

                        </div>
                        <div class="col-md-9">
                            <p class="fw-normal">
                                ...
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="fw-semibold" >
                                Date contrôle :
                            </h6>

                        </div>
                        <div class="col-md-9">
                            <p class="fw-normal">
                                ...
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="fw-semibold" >
                                Observations :
                            </h6>

                        </div>
                        <div class="col-md-9">
                            <p class="fw-normal">
                                ...
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="fw-semibold" >
                                Enregistré le :
                            </h6>

                        </div>
                        <div class="col-md-9">
                            <p class="fw-normal">
                                Kakou Moise
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-success" >Modifier</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
        </div>
    </div>
    </div>
</div>
@endsection

