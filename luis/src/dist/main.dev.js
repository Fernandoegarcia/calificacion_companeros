"use strict";

var _vue = _interopRequireDefault(require("vue"));

var _App = _interopRequireDefault(require("./App.vue"));

var _router = _interopRequireDefault(require("./router"));

require("bootstrap/dist/css/bootstrap.min.css");

require("bootstrap-vue/dist/bootstrap-vue.css");

require("@fortawesome/fontawesome-free/css/all.css");

require("@fortawesome/fontawesome-free/js/all.js");

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }

_vue["default"].config.productionTip = false;
new _vue["default"]({
  router: _router["default"],
  render: function render(h) {
    return h(_App["default"]);
  }
}).$mount("#app");