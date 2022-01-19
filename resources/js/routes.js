import VueRouter from "vue-router";
import Landing from "./main/Landing";
import User from "./user/User";
import Orga from "./orga/Orga";
import Calendar from "./events/Calendar";
import Login from "./auth/Login";


const routes = [
    {
        path: "/",
        component: Landing,
        name: "home",
    },
    {
        path: "/sc",
        component: User,
        name: "user",
    },
    {
        path: "/orga",
        component: Orga,
        name: "orga",
    },
    {
        path: "/calendar",
        component: Calendar,
        name: "calendar",
    },
    {
        path: "/login-vue",
        component: Login,
        name: "login"
    },
];

const router = new VueRouter({
    routes,
    mode: "history",
});

export default router; 