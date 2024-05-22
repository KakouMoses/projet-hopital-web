@extends('theme.default')
@section('content')
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                <div class="card-body p-4">
                    <div class="row d-flex">
                    <div class="col-9">
                        <h5 class="card-title fw-semibold mb-4">Listes des examens</h5>
                    </div>
                    <div class="col-3">
                        <button type="button" class="btn btn-primary m-1 justify-content-end" data-bs-toggle="modal" data-bs-target="#CreationConsultation">
                        <i class="ti ti-plus fs-6"></i>
                        Faire un nouvel examen
                        </button>
                    </div>
                    </div>
                    <div class="table-responsive">
                    <table id="example" class="table text-nowrap mb-0 align-middle display">
                        <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Id Examen</h6>
                            </th>
                            <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Id Consultation</h6>
                            </th>
                            <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Raison</h6>
                            </th>
                            <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Resultat Examen</h6>
                            </th>
                            <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Date Examen</h6>
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
        </div>
    </div>
@endsection
    </div>
@section('modal')
    <!-- Modal -->
    <div class="modal fade" id="CreationConsultation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">FAIRE UN NOUVEL EXAMEN</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="">
                  <div class="row pt-3">
                  <div class="row py-2">
                      <div class="col-md-6">
                      <label for="Nom" class="form-label">Id Consultation</label>
                      <select class="form-select" id="validationCustom04" required>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="...">...</option>
                      </select>
                      </div>
                      <div class="col-md-6">
                      <label for="Profesion" class="form-label">Libellé examen</label>
                      <input type="text" class="form-control" id="Profesion" required>
                      </div>
                  </div>
                  <div class="row py-2">
                      <div class="col-md-6">
                          <label for="Antecedent" class="form-label">Raison</label>
                          <textarea class="form-control" id="Antecedent" rows="4"></textarea>
                      </div>
                      <div class="col-md-6">
                        <label for="Profesion" class="form-label">Libellé examen</label>
                        <textarea class="form-control" id="Antecedent" rows="4"></textarea>
                      </div>
                  </div>
                  <div class="row py-2">
                      <div class="col-md-12">
                          <label for="Antecedent" class="form-label">Resultat</label>
                          <textarea class="form-control" id="Antecedent" rows="6"></textarea>
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

          <div class="modal fade" id="ModalInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Fiche d'examen ...</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="fw-semibold" >
                                        Numero d'examen :
                                    </h6>

                                </div>
                                <div class="col-md-9">
                                    <p class="fw-normal">
                                        1
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="fw-semibold" >
                                        Numero de consultation:
                                    </h6>

                                </div>
                                <div class="col-md-9">
                                    <p class="fw-normal">
                                        1
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="fw-semibold" >
                                        Libellé de l'examen :
                                    </h6>

                                </div>
                                <div class="col-md-9">
                                    <p class="fw-normal">
                                        Examen sanguin
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="fw-semibold" >
                                        Raison :
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
                                        Resultat examen :
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

  </div>
@endsection

