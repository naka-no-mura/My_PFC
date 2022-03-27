require("./bootstrap");

import { createApp } from "vue";
import Sample from "./components/Sample.vue";

createApp({
    components: {
        Sample,
    },
}).mount("#app");

// import "./bootstrap";
// import Vue from "vue";
// import Sample from "./components/Sample.vue";

// Vue.component("sample-component", require("./components/Sample.vue").default);

// const app = new Vue({
//     el: "#app",
//     components: {
//         Sample,
//     },
// });
