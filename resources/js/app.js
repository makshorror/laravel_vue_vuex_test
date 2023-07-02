import "./bootstrap";
import store from "./store/index.js";

import {createApp} from "vue";
import {router} from "./components/router.js";

import Index from "./components/Index.vue";

const app = createApp({});

app.use(router);

app.use(store);

app.component("index", Index);

app.mount("#app");


