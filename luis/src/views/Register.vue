<template>
<!-- Titulo -->
    <div> 
      <h1 class="title">Create a new account</h1>
      <h2 class="title">It's quick and easy</h2>
    
       <div class="container">
      <div class="row">
        <div class="m-auto">
            <form>
              <div class="form-row estilo-formulario mb-3 p-4">
                  <div class="form-group col-md-4">
                      <label for="inputEmail4">First name</label>
                      <input type="email" class="form-control" id="inputEmail4" placeholder="your email">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="inputPassword4">Last name</label>
                      <input type="password" class="form-control" id="inputPassword4" placeholder="your last name">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="inputGender">Gender</label>
                      <select id="inputGender" class="form-control select-css">
                        <option selected>Choose...</option>
                        <option>Female</option>
                        <option>Male</option>
                        <option>Other</option>
                      </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputAddress">Email</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="info@email.com">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="inputZip">Company</label>
                      <input type="text" class="form-control" id="inputZip">
                  </div>
                    
                  <div class="form-group col-md-4">
                      <label for="inputZip">Charge</label>
                      <input type="text" class="form-control" id="inputZip">
                  </div>
                  
                  <div class="form-group col-md-4">
                    <label for="inputAddress2">Password</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="******">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="inputCity">Confirm Password</label>
                      <input type="text" class="form-control" placeholder="******">
                  </div>
                    
                  <div class="form-group col-md-4">
                      <label for="inputType">Type</label>
                      <select id="inputType" class="form-control select-css">
                        <option selected>Choose...</option>
                        <option>Employee</option>
                        <option>Unemployed</option>
                        <option>employer</option>
                      </select>
                  </div>
              </div>
              
              <div class="form-group col-md-12 d-flex justify-content-end">
              <router-link 
                to="/Aptitudes" 
                class="btn btn-primary btn-next"  
                id="btn-next"
              >
                Next
              </router-link>
              </div>
            </form>
        </div>
      </div>
    </div>
    </div>
</template>

