import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/Home.vue";
import Login from "../views/Login.vue";
import Register from "../views/Register.vue";
import Aptitudes from "../views/Aptitudes.vue";
import Lista from "../views/Lista.vue";
import Calificar from "../views/Calificar.vue";


Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home
  },
  {
    path: "/Login",
    name: "Login",
    component: Login
  },
  {
    path: "/Register",
    name: "Register",
    component: Register
  },
  {
    path: "/Aptitudes",
    name: "Aptitudes",
    component: Aptitudes
  },
  {
    path: "/Lista",
    name: "Lista",
    component: Lista
  },
  {
    path: "/Calificar",
    name: "Calificar",
    component: Calificar
  },
 
  
  {
    path: "/about",
    name: "About",
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/About.vue")
  }
];


const router = new VueRouter({
  routes
});

export default router;
