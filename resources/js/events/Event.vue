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
                        <p class="card-text">SC Preis: {{event.sc_price}} €</p>
                        <p class="card-text">NSC Preis: {{event.nsc_price}} €</p>
                    </div>
                    <div class="col-md-6">
                        <img :src="image_path" 
                            class="thumbnail"
                            v-if="image_path"
                            width="400px"
                            v-on:click="toggleImageCard">
                    </div>
                </div>                
                    <button class="btn btn-success" type="button" v-on:click="toRegistration" v-if="event.has_registration">Zur Anmeldung</button>

            </div>
        </div>
        <div v-else>loading...</div>

        <div class="image-container" v-on:click="toggleImageCard" v-if="showImage">
            <img :src="image_path" class="img-card" alt="...">
        </div>
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
            showImage: false,
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
        },

        toggleImageCard() {
            this.showImage = !this.showImage
        }
    },

}
</script>

<style scoped>
    .card {
        color: rgb(59, 59, 59);
    }

    .thumbnail:hover {
        cursor: pointer;
    }

    .image-container {
        position: fixed;
        top: 5%;
        bottom: 5%;
        left: 10%;
        right: 10%;
        

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .img-card {
        height: 90%;
      ;
    }
</style>
