@extends('theme.default')

@section('content')
<div class="container-fluid">

    <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
        <div class="card-body p-4">
            <div class="row d-flex">
            <div class="col-9">
                <h5 class="card-title fw-semibold mb-4">Listes des dossiers</h5>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-primary m-1 justify-content-end" data-bs-toggle="modal" data-bs-target="#CreationDossier">
                <i class="ti ti-plus fs-6"></i>
                Créer un nouveau dossier
                </button>
            </div>
            </div>
            <div class="table-responsive">
            <table id="example" class="table text-nowrap mb-0 align-middle display">
                <thead class="text-dark fs-4">
                <tr>
                    <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Numero dossier</h6>
                    </th>
                    <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Nom</h6>
                    </th>
                    <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Prenom</h6>
                    </th>
                    <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Sexe</h6>
                    </th>
                    <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Contact</h6>
                    </th>
                    <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Email</h6>
                    </th>
                    <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Action</h6>
                    </th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($matching as $item)
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
                    @endforeach

                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection

@section('modal')
    <!-- Modal -->
    <div class="modal fade" id="CreationDossier" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">CREER UN NOUVEAU DOSSIER</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ isset($dossier) ? route('dossiers.update', $dossier->numeroDossier) : route('dossiers.store') }}" method="post">
                @csrf
                <div class="row pt-3">
                <div class="row py-2">
                    <div class="col-md-4">
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="Nom" required>
                    </div>
                    <div class="col-md-8">
                    <label for="Prenom" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="Prenom" required>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-5">
                    <label for="Date" class="form-label">Date de naissance</label>
                    <input type="date" class="form-control" id="Date" required>
                    </div>
                    <div class="col-md-5">
                    <label for="Lieu" class="form-label">Lieu de naissance</label>
                    <input type="text" class="form-control" id="Lieu" required>
                    </div>
                    <div class="col-md-2">
                    <label for="validationCustom04" class="form-label">Sexe</label>
                    <select class="form-select" id="validationCustom04" required>
                        <option value="Masculin">Masculin</option>
                        <option value="Feminin">Feminin</option>
                    </select>
                    </div>
                </div>
                    <div class="row py-2">
                    <div class="col-md-6">
                        <label for="Profesion" class="form-label">Profession</label>
                        <input type="text" class="form-control" id="Profesion" required>
                    </div>
                    <div class="col-md-6">
                        <label for="Contact" class="form-label"> Contact</label>
                        <input type="number" class="form-control" id="Contact" required>
                    </div>
                    </div>
                    <div class="row py-2">
                    <div class="col-md-8">
                        <label for="Email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="Email">
                    </div>
                    <div class="col-md-4">
                        <label for="groupeSanguin" class="form-label">Groupe sanguin</label>
                        <select class="form-select" id="groupeSanguin" required>
                        <option value="">Je ne sais pas</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB -</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>

                        </select>
                    </div>
                    </div>
                    <div class="row py-2">
                    <div class="col-md-12">
                        <label for="antecedents" class="form-label">Antecedents</label>
                        <textarea class="form-control" id="antecedents" rows="8"></textarea>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary" data-bs-target="{{ route('dossiers.store') }}">Enregistrer</button>
                </div>
                </div>
            </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="ModalInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Dossier du patient ...</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <h6 class="fw-semibold" >
                                    Nom :
                                </h6>

                            </div>
                            <div class="col-md-9">
                                <p class="fw-normal">
                                    Kakou
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <h6 class="fw-semibold" >
                                    Prenom(s) :
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
                                    Sexe :
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
                                    Date de naissance :
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
                                    Lieu de naissance :
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
                                    Contact :
                                </h6>

                            </div>
                            <div class="col-md-9">
                                <p class="fw-normal">
                                    0101020203
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <h6 class="fw-semibold" >
                                    Profession :
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
                                    Email :
                                </h6>

                            </div>
                            <div class="col-md-9">
                                <p class="fw-normal">
                                    kakou@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <h6 class="fw-semibold" >
                                    Groupe sanguin :
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
                                    Antecedents :
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

