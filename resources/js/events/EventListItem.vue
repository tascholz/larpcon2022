<template>
    <div>
        <div class="card w-100">
            <div class="card-header">
                <router-link :to="{name: 'event', params: {id}}" class="event-title">
                    <h3 class="card-title"> {{ name }} </h3>
                </router-link>
                
                <p class="card-subtitle text-muted"> {{ formatted_date_start }} - {{ formatted_date_end }}</p>
            </div>
            <div class="card-body">
                <p class="card-text">{{ description }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: { 
        "name": String, 
        "description": String, 
        "id": Number, 
        "date_start": String,
        "date_end": String
    },

    data() {
        return {
            formatted_date_start: null,
            formatted_date_end: null,
        }
    },

    created() {
        this.formatted_date_start = new Date(this.date_start).toLocaleDateString();
        this.formatted_date_end = new Date(this.date_end).toLocaleDateString();
    }
    
}
</script>

<style scoped>
    .card {
        color: rgb(59, 59, 59)
    }

    .event-title {
        color:rgb(59, 59, 59);
    }
</style>