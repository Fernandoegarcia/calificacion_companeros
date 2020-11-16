<template>
    <div class="container"> 
        <div class="row">
            <div class="calificar m-auto">
                <h1 class="title">Rate Candidate</h1>
                <div class="estilo-formulario">
                    <div class="card-deck mt-5">
                        <div class="card d-flex flex-row align-items-center justify-content-center p-3 calificar-candidatos">
                            <div class="col-md-3 d-flex align-items-center justify-content-center">
                                <div class="profile-image">
                                    <img class="card-img-top" src="../assets/logo.png" alt="Card image cap">
                                </div>
                            </div>
                            <div class="card-body p-0 card-text">
                                <p class="card-title font-weight-bold">Juan Gutierres</p>
                                <p class="card-text">Ejecutivo de Ventas</p>
                                <p class="card-text">Asociación Popular de Ahorros y Prestamos</p>
                            </div>
                            <div class="card-footer card-footer-candidate">
                                <router-link to="/Lista" class="btn btn-primary btn-rate-candidate mb-3">Rate candidate</router-link>
                                <router-link to="" class="btn btn-success btn-rate-candidate">Sent</router-link>
                            </div>
                        </div>
                    </div>
                    <div class="aptitudes p-3">
                        <h5 class="text-left font-weight-bold">Aptitudes</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                               <span>Responsable</span>
                               <div class="actions">
                                    <button type="submit" class="mr-3 btn-like btn btn-primary">
                                        <i class="far fa-thumbs-up"></i>
                                    </button>
                                     <button type="submit" class="mr-3 btn-dislike btn btn-primary">
                                        <i class="far fa-thumbs-down"></i>
                                    </button>
                               </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                               <span>Trabajo en equipo</span>
                               <div class="actions">
                                    <button type="submit" class="mr-3 btn-like btn btn-primary"><i class="far fa-thumbs-up"></i></button>
                                    <button type="submit" class="mr-3 btn-dislike btn btn-primary">
                                        <i class="far fa-thumbs-down"></i>
                                    </button>
                               </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                               <span>Liderazgo</span>
                               <div class="actions">
                                    <button type="submit" class="mr-3 btn-like btn btn-primary"><i class="far fa-thumbs-up"></i></button>
                                    <button type="submit" class="mr-3 btn-dislike btn btn-primary">
                                        <i class="far fa-thumbs-down"></i>
                                    </button>
                               </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>