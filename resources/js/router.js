import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

// function getRouteComponent(path_file) {
//     return "./components/backend/" + path_file + "Component.vue";
// }
function setComponent(path_file) {
    const route_path = "./components/app/backend/pages/" + path_file + "Component.vue";
    return import ("" + route_path);
}
const routes = [
    { path: "*", component: () => setComponent("error/404") },
    {
        path: "/",
        redirect: { path: '/' }
    },
    {
       path: "/home",
       component: () => setComponent("Home"),
       name: "home"
    },
    {
        path: "/user",
        component: () => setComponent("user/User"),
        name: "user",
    },
];

const router = new VueRouter({
    routes,
    mode:"history",
    linkActiveClass: "active",
    linkExactActiveClass: "exact-active" // short for `
});

router.beforeResolve((to, from, next) => {
    //
    next();
});

router.afterEach((to, from) => {
    // setTimeout(function() { $('.page-loader-wrapper').fadeOut(); }, 50);
});

export default router;
