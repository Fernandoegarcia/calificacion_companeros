<template>
    <div>
        <v-toolbar color="green accent-4">
            <v-spacer />
            <v-toolbar-title>
            Login
            </v-toolbar-title>
            <v-spacer />
        </v-toolbar>

        <v-row justify="center" align-content="center">
            <div class="LoginBox green accent-1">
                <h1>Login/Sign Up:</h1>
                <br />
                <h2>
                    User Name:
                </h2>
                <v-text-field v-model="name" />
                <h2>
                    Email:
                </h2>
                <v-text-field v-model="email" type="email"/>
                <h2>
                    Cargo:
                </h2>
                <v-text-field v-model="cargo"/>
                <h2>
                    Company:
                </h2>
                <v-text-field v-model="company"/>
                <h2>
                    Password:
                </h2>
                <v-text-field v-model="pwd" type="password"/>

                <h2>Sex:</h2>

                <v-select :items="sexs" v-model="sex" />

                <h2>Age:</h2>

                <v-text-field type="number" />

                <h2>Date:</h2>

                <input type="date" v-model="date" />

                <br>
                <br>
                <br>


                <v-btn color="pink accent-3" @click="signup" class="mr-9">
                    Sign Up
                </v-btn>


                <v-btn color="primary">
                    Login
                </v-btn>
            </div>
        </v-row>

    </div>
</template>

<script>
export default {
    methods: {
        async signup() {
            const credentials = {

                "nombre": this.name,
                "compañia": this.company,
                "cargo": this.cargo,
                "sexo": this.sex,
                "edad": this.age,
                "fecha_nacimiento": this.date,
                "user_name": this.name,
                "password": this.pwd,
                "email": this.email

            }

            console.log(credentials);

            const response = await fetch("http://127.0.0.1:8000/usuario/registrar", {
                mode: 'cors',
                method: "POST",
                headers: {
                    "Content-Type": 'application/json',
                    "Accept": 'application/json'
                },
                body: JSON.stringify(credentials)
            });

            const text = await response.text();

            console.log(text)
        }
    },
    data: () => ({
        name: "",
        company: "",
        cargo: "",
        sexs: ['masculino', "femenino", "otro"],
        sex: "",
        email: "",
        pwd: "",
        age: 18,
        date: ""
    })
}
</script>

<style scoped>
.LoginBox {
    margin-top: 10%;
    padding: 60px 100px;
    border-radius: 20px;
}
</style>