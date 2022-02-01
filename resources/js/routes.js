import VueRouter from "vue-router";
import Landing from "./main/Landing";
import User from "./user/User";
import Orga from "./orga/Orga";
import Calendar from "./events/Calendar";
import Event from "./events/Event";
import EventRegistration from "./events/EventRegistration"
import OrgaEvent from "./Orga/OrgaEvent"

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
    {
        path: "/event/:id",
        component: Event,
        name: "event"
    },
    {
        path: "registration/:id",
        component: EventRegistration,
        name: 'registration'
    },
    {
        path: "/orgaevent/:id",
        component: OrgaEvent,
        name: 'orga-event'
    }
];

const router = new VueRouter({
    routes,
    mode: "history",
});

export default router; 