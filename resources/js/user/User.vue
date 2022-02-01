<template>
    <div>
        <div v-if="!loading">
            <h1>Hallo {{ user.name }} </h1>
            <p v-on:click="toggleDataForm" class="clickable">Anmeldedaten speichern/ändern</p>
            <p class="bg-success" v-if="changeDataSuccess">gespeichert</p>
            <div v-if="showDataForm">
                <form>
                    <div class="form-group">
                        <label for="first_name">Vorname</label>
                        <input type="text" class="form-control" name="user_first_name" v-model="user_first_name">
                    </div>
                    <div class="form-group">
                        <label for="user_last_name">Nachname</label>
                        <input type="text" class="form-control" name="user_last_name" v-model="user_last_name">
                    </div>
                    <div class="form-group">
                        <label for="user_street">Straße und Hausnummer</label>
                        <input type="text" class="form-control" name="user_street" v-model="user_street">
                    </div>
                    <div class="form-group">
                        <label for="user_pcode">Plz</label>
                        <input type="text" class="form-control" name="user_pcode" v-model="user_pcode">
                    </div>
                    <div class="form-group">
                        <label for="user_city">Ort</label>
                        <input type="text" class="form-control" name="user_city" v-model="user_city">
                    </div>
                    <div class="form-group">
                        <label for="user_birthdate">Geburtsdatum</label>
                        <input type="date" class="form-control" name="user_birthdate" v-model="user_birthdate">
                    </div>
                    <button type="button" class="btn btn-success" v-on:click="submitForm">speichern</button>

                </form>
            </div>
        </div>
        <div v-else>loading...</div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            loading: false,
            changeDataSuccess: false,
            user: null,
            showDataForm: false,
            user_first_name: null,
            user_last_name: null,
            user_street: null,
            user_pcode: null,
            user_city: null,
            user_birthdate: null
        }
    },

    methods: {
        toggleDataForm() {
            this.showDataForm = !this.showDataForm
        },

        submitForm() {
            axios.put(`/api/users/${this.user.id}`, {
                'user_id': this.user.id,
                'user_first_name': this.user_first_name,
                'user_last_name': this.user_last_name,
                'user_street': this.user_street,
                'user_pcode': this.user_pcode,
                'user_city': this.user_city,
                'user_birthdate': this.user_birthdate
            }).then(response =>{
                this.changeDataSuccess = true;
                this.toggleDataForm();
                setTimeout(() => {  this.changeDataSuccess = false; }, 2000);
            });
        }
    },

    created() {
        this.loading = true;
        axios.get('/user').then(response =>{
            this.user = response.data;
            this.loading = false;
            this.user_first_name = response.data.user_first_name;
            this.user_last_name = response.data.user_last_name;
            this.user_street = response.data.user_street;
            this.user_pcode = response.data.user_pcode;
            this.user_city = response.data.user_city;
            this.user_birthdate = response.data.user_birthdate;
        });
    }
}
</script>

<style scoped>
    .clickable {
        cursor: pointer;
    }
</style>