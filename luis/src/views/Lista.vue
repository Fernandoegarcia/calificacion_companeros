<template>
    <div class="container"> 
        <div class="row">
            <div class="login m-auto">
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
                                <router-link to="/Calificar" class="btn btn-primary btn-rate-candidate">Rate candidate</router-link>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</template>