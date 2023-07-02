import Index from "./Index.vue";
import * as VueRouter from 'vue-router'


const routes = [
    {path: "/", component: Index},
    {
        path: "/people", component: () => import("./Person/Index.vue"),
        name: "person.index",
    },
    {
        path: "/people/create", component: () => import("./Person/Create.vue"),
        name: "person.create",
    },
    {
        path: "/people/:id/edit", component: () => import("./Person/Edit.vue"),
        name: "person.edit",
    },
    {
        path: "/people/:id", component: () => import("./Person/Show.vue"),
        name: "person.show",
    },


];

export const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory("/"),
    routes,
});
