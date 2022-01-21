<template>
    <div>
        <div v-if="!loading">
            <h1>{{ user.name }} </h1>
        </div>
        <div v-else>loading...</div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            loading: false,
            user: null
        }
    },

    created() {
        this.loading = true;
        axios.get('/user').then(response =>{
            this.user = response.data;
            this.loading = false;
        });
    }
}
</script>