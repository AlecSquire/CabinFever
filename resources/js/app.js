import "./bootstrap";
// import "./@css";
import { createApp } from "vue";
import { h } from "vue";
import Home from "./components/Home.vue";
import.meta.glob(["../images/***"]);

const app = createApp({});

app.component("Home", Home);
app.mount("#app");
