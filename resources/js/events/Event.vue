<template>
    <div>
        <div class="card" v-if="!loading">
            <div class="card-header">
                <h3 class="card-title"> {{ event.name }} </h3>
                <p class="card-subtitle text-muted"> {{ date_start }} - {{ date_end }}</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p class="card-text">{{event.description}}</p>
                        <p class="card-text">SC Preis: {{event.price_sc}}</p>
                        <p class="card-text">NSC Preis: {{event.price_nsc}}</p>
                    </div>
                    <div class="col-md-6">
                        <img :src="image_path" v-if="image_path">
                    </div>
                </div>                
                    <button class="btn btn-success" type="button" v-on:click="toRegistration">Zur Anmeldung</button>

            </div>
        </div>
        <div v-else>loading...</div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            event: null,
            loading: false,
            date_start : null,
            date_end : null,
            image_path: null,
            image: null,
        }
    },


    async created() {
        this.loading = true;
        await axios.get(`/api/events/${this.$route.params.id}`).then(response => {
            this.event = response.data;
            this.date_start = new Date(this.event.date_start).toLocaleDateString();
            this.date_end = new Date(this.event.date_end).toLocaleDateString();
            this.loading = false;
        });
        if (this.event.image_path) {
            this.image_path = '/storage/images/' + this.event.image_path;
            this.image_path = this.image_path.replace("/public/images", "");
        } 
    },
    methods: {
        toRegistration() {
            this.$router.push({name: 'registration', params: {eventId: this.event.id}});
        }
    },

}
</script>

<style scoped>
    .card {
        color: rgb(59, 59, 59);
    }
</style>