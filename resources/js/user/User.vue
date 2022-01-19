<template>
    <div>
        <h1>{{ user.name }} </h1>
    </div>
</template>

<script>
export default {
    data() {
        return {
            user: null
        }
    },

    created() {
        axios.get('/user').then(response =>{
            this.user = response.data;
        });
    }
}
</script>