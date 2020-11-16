<template>
    <div class="container"> 
        <div class="row">
            <div class="login m-auto">
                <h1 class="title">Wellcome</h1>

                <form>
                    <div class="form-row estilo-formulario mb-3 p-4">
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">User/E-mail</label>
                            <input type="email" class="form-control" placeholder="Write your user or email" />
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" placeholder="Write your password">
                        </div>
                    </div>
                    <div class="form-group col-md-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-signin">Sign in</button>
                    </div>
                    <div class="dont-have-an-account col-md-12">
                        <p>Don't have an account yet? <router-link to="/Register" class="link-register">Click here to register</router-link></p>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</template>