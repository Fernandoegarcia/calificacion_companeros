"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports["default"] = void 0;

var _vue = _interopRequireDefault(require("vue"));

var _vueRouter = _interopRequireDefault(require("vue-router"));

var _Home = _interopRequireDefault(require("../views/Home.vue"));

var _Login = _interopRequireDefault(require("../views/Login.vue"));

var _Register = _interopRequireDefault(require("../views/Register.vue"));

var _Aptitudes = _interopRequireDefault(require("../views/Aptitudes.vue"));

var _Lista = _interopRequireDefault(require("../views/Lista.vue"));

var _Calificar = _interopRequireDefault(require("../views/Calificar.vue"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _getRequireWildcardCache() { if (typeof WeakMap !== "function") return null; var cache = new WeakMap(); _getRequireWildcardCache = function _getRequireWildcardCache() { return cache; }; return cache; }

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } if (obj === null || _typeof(obj) !== "object" && typeof obj !== "function") { return { "default": obj }; } var cache = _getRequireWildcardCache(); if (cache && cache.has(obj)) { return cache.get(obj); } var newObj = {}; var hasPropertyDescriptor = Object.defineProperty && Object.getOwnPropertyDescriptor; for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) { var desc = hasPropertyDescriptor ? Object.getOwnPropertyDescriptor(obj, key) : null; if (desc && (desc.get || desc.set)) { Object.defineProperty(newObj, key, desc); } else { newObj[key] = obj[key]; } } } newObj["default"] = obj; if (cache) { cache.set(obj, newObj); } return newObj; }

_vue["default"].use(_vueRouter["default"]);

var routes = [{
  path: "/",
  name: "Home",
  component: _Home["default"]
}, {
  path: "/Login",
  name: "Login",
  component: _Login["default"]
}, {
  path: "/Register",
  name: "Register",
  component: _Register["default"]
}, {
  path: "/Aptitudes",
  name: "Aptitudes",
  component: _Aptitudes["default"]
}, {
  path: "/Lista",
  name: "Lista",
  component: _Lista["default"]
}, {
  path: "/Calificar",
  name: "Calificar",
  component: _Calificar["default"]
}, {
  path: "/about",
  name: "About",
  // route level code-splitting
  // this generates a separate chunk (about.[hash].js) for this route
  // which is lazy-loaded when the route is visited.
  component: function component() {
    return Promise.resolve().then(function () {
      return _interopRequireWildcard(require("../views/About.vue"));
    });
  }
}];
var router = new _vueRouter["default"]({
  routes: routes
});
var _default = router;
exports["default"] = _default;