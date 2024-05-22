@extends('theme.default')

@section('content')

<div class="container-fluid">
    <div class="container-fluid">
        <div class="card-body py-4">
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-10">
                      <h6 class="card-title text-muted">Nombres total de patients enregistrés</h6>
                    </div>
                    <div class="col-md-2">
                        <a class="nav-link nav-icon-hover" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                        </a>
                    </div>
                  </div>
                  <h1 class="text-center py-3" style="font-size:50px;">12</h1>
                  <a href="#" class="btn btn-outline-primary mx-3 mt-2 d-block">Voir la liste</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-10">
                      <h6 class="card-title text-muted">Nombres total de consultations effectuées</h6>
                    </div>
                    <div class="col-md-2">
                      <a class="nav-link nav-icon-hover" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                      </a>
                  </div>
                  </div>
                  <h1 class="text-center py-3" style="font-size:50px;">12</h1>
                  <a href="#" class="btn btn-outline-primary mx-3 mt-2 d-block">Voir la liste</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-10">
                      <h6 class="card-title text-muted">Nombres de total d'examens effectuées</h6>
                    </div>
                    <div class="col-md-2">
                      <a class="nav-link nav-icon-hover" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                      </a>
                  </div>
                  </div>
                  <h1 class="text-center py-3" style="font-size:50px;">12</h1>
                  <a href="#" class="btn btn-outline-primary mx-3 mt-2 d-block">Voir la liste</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

@endsection


