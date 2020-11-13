<template>
    <div>
        <v-toolbar color="green accent-4">
            <v-toolbar-title>
                Login
            </v-toolbar-title>
        </v-toolbar>

        <v-row justify="center" align-content="center">
            <div class="LoginBox green accent-1">
                <h1>Login:</h1>
                
                <h2>
                    Email:
                </h2>

                <v-text-field type="email" v-model="email" />

                <h2>
                    Password:
                </h2>

                <v-text-field type="password" v-model="pwd" />

                <v-spacer />
                
                <v-btn color="pink accent-3" @click="login">
                    Login
                </v-btn>

                <v-spacer />
            </div>
        </v-row>

    </div>
</template>

<script>
export default {
    data: () => ({
        email: "",
        pwd: ""
    }),
    methods: {
        async login() {
            const credentials = {
                "email": this.email,
                "password": this.pwd
            }

            const response = await fetch("http://127.0.0.1:8000/User/login", {
                mode: 'cors',
                method: "POST",
                headers: {
                    Accept: "application/json",
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(credentials)
            });

            const json = await response.json();

            console.log(json)

        }
    }
}
</script>

<style scoped>
.LoginBox {
    margin-top: 10%;
    padding: 60px 100px;
    border-radius: 20px;
}
</style>