<template>
    <div class="main" v-if="!loading">
        <h1> {{orga.name }} </h1>

        <div v-if="!changeDescriptionState">
            <p id="description"> {{orga.description }} </p>
            <button class="align-self-center mt-2 btn btn-success" type="button" v-on:click = "changeDescription">Beschreibung ändern</button>
        </div>
        <div class="d-flex flex-column" v-else>
            <textarea rows=10 v-model="orga.description"/>
            <div class="d-flex flex-row">
                <button class="align-self-center mt-2 btn btn-success" type="button" v-on:click="submitDescription">Beschreibung ändern</button>
                <button class="align-self-center mt-2 btn btn-success" type="button" v-on:click="abortDescription">abbrechen</button>
            </div>
            
        </div>
        
        <hr />
        <div class="utilities">
            <button class="btn btn-success mt-2" type="button" v-on:click="showEventform">Neue Con erstellen</button>
            <button class="btn btn-success mt-2" type="button" v-on:click="showEventList">Cons anzeigen</button>
        </div>
        <!-- <div class="utilities">
            <router-link to="newevent">
                <button class="mt-2 btn btn-primary" type="button">Neue Con erstellen</button>
            </router-link>
        </div> -->

        <eventform v-if="eventform"></eventform>
        <event-list v-if="eventList"></event-list>
    </div>
    <div v-else>loading...</div>
</template>

<script>
import Eventform from './Eventform.vue';
import EventList from './EventList.vue'
export default {
    components: {
        Eventform,
        EventList
    },

    data() {
        return {
            loading: false,
            user: null,
            orga: null,
            changeDescriptionState : false,
            eventform: false,
            eventList: false

        }
    },

    methods: {
        showEventform() {
            this.eventform = !this.eventform;
            this.eventList = false
        },
        showEventList() {
            this.eventList = !this.eventList;
            this.eventform = false
        },

        changeDescription() {
            this.changeDescriptionState = !this.changeDescriptionState;
        },

        abortDescription() {
            window.location.reload();
        },

        async submitDescription() {
            await axios.put(`/orgas/${this.orga}`, {
                'description' : this.orga.description
            });
            this.changeDescriptionState = false;
        }
    },

    async created() {
        this.loading = true;
        await axios.get('/user').then(response =>{
             this.user = response.data;
        });

        await axios.get(`/api/orgas/${this.user.orga_id}`).then(response =>{
            this.orga = response.data;
            this.loading = false;
        })
        
        
    }
}
</script>

<style scoped>
    h1 {
        text-align: center;
    }

    .main {
        display:flex;
        flex-direction: column;
        padding: 5px;
        
    }

    .utilities {
        padding: 5px;
    }
</style>