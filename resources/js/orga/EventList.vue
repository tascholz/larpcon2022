<template>
    <div v-if="!loading">
        <hr />
        <div v-for="event in events" :key="event.id">
            <router-link :to="{name: 'orga-event', params: {event}}"><button class="btn btn-success" v-bind="event">{{event.name}}</button> </router-link>
            
        </div>
    </div>
    <div v-else>loading</div>
</template>

<script>
export default {
    data() {
        return {
            loading: false,
            events: null
        }
    },

    async created() {
        this.loading = true;
        await axios.get('/user').then(response =>{
             this.user = response.data;
        });

        await axios.get(`/api/orgaEventList`, { withCredentials: true }).then(response =>{
            this.events = response.data;
            this.loading = false;
        })
    }
}
</script>