<template>
  <div>


    <v-toolbar color="green accent-4">
      <v-spacer />
      <v-toolbar-title>
        Home
      </v-toolbar-title>
      <v-spacer />
    </v-toolbar>

    

  </div>
</template>

<script>
export default {
  created() {
    const token = localStorage.token;

    if (!token) {
      location.href = '#/login';
    }

  }
}
</script>
