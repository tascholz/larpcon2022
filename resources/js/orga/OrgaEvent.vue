<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{event.name}}</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th v-if="cb_first_name" scope="col">Vorname</th>
                                <th v-if="cb_last_name" scope="col">Nachname</th>
                                <th v-if="cb_adress" scope="col">Adresse</th>
                                <th v-if="cb_birthdate" scope="col">Geburtstag</th>
                                <th v-if="cb_email" scope="col">Email</th>
                                <th v-if="cb_supervisor" scope="col">Aufsichtsperson</th>
                                <th v-if="cb_food" scope="col">Verpflegung</th>
                                <th v-if="cb_char_name" scope="col">It Name</th>
                                <th v-if="cb_char_profession" scope="col">It Beruf</th>
                                <th v-if="cb_race" scope="col">Spezies</th>
                                <th v-if="cb_group" scope="col">It Gruppe</th>
                                <th v-if="cb_known_nsc" scope="col">Bekannte NSCs</th>
                                <th v-if="cb_char_history" scope="col">Charaktergeschichte</th>
                                <th v-if="cb_magic" scope="col">Magiebegabung</th>
                                <th v-if="cb_allergies" scope="col">Allergien</th>
                                <th v-if="cb_tents" scope="col">Zelte</th>
                                <th v-if="cb_pkw" scope="col">PKW</th>
                                <th v-if="cb_newsletter" scope="col">Newsletter?</th>
                                <th v-if="cb_first_time" scope="col">Zum ersten Mal da?</th>
                                <th v-if="cb_plot_wishes" scope="col">Plot Wünsche</th>
                                <th v-if="cb_con_wishes" scope="col">Con Wünsche</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr v-for="registration in registrations" :key="registration.id">
                                <td>{{registration.id}}</td>
                                <td v-if="cb_first_name">{{registration.reg_first_name}}</td>
                                <td v-if="cb_last_name">{{registration.reg_last_name}}</td>
                                <td v-if="cb_adress">{{registration.reg_adress_street}}, {{registration.reg_adress_pcode}} {{registration.reg_adress_city}}</td>
                                <td v-if="cb_birthdate">{{registration.reg_birthdate}}</td>
                                <td v-if="cb_email">{{registration.reg_mail}}</td>
                                <td v-if="cb_supervisor">{{registration.reg_supervisor}}</td>
                                <td v-if="cb_food">{{registration.reg_food}}</td>
                                <td v-if="cb_char_name">{{registration.reg_char_name}}</td>
                                <td v-if="cb_char_profession">{{registration.reg_char_profession}}</td>
                                <td v-if="cb_race">{{registration.reg_char_race}}</td>
                                <td v-if="cb_group">{{registration.reg_char_group}}</td>
                                <td v-if="cb_known_nsc">{{registration.reg_known_nsc}}</td>
                                <td v-if="cb_char_history">{{registration.reg_char_history}}</td>
                                <td v-if="cb_magic">{{registration.reg_char_magic}}</td>
                                <td v-if="cb_allergies">{{registration.reg_allergies}}</td>
                                <td v-if="cb_tents">{{registration.reg_tents}}</td>
                                <td v-if="cb_pkw">{{registration.reg_pkw}}</td>
                                <td v-if="cb_newsletter">{{registration.reg_newsletter}}</td>
                                <td v-if="cb_first_time">{{registration.reg_first_time}}</td>
                                <td v-if="cb_plot_wishes">{{registration.reg_plot_wishes}}</td>
                                <td v-if="cb_con_wishes">{{registration.reg_con_wishes}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <input type="checkbox" id="cb_first_name" checked v-model="cb_first_name">
                    <label for="cb_first_name">Vorname</label>
                    <input type="checkbox" id="cb_last_name" checked v-model="cb_last_name">
                    <label for="cb_last_name">Nachname</label>
                    <input type="checkbox" id="cb_adress" checked v-model="cb_adress">
                    <label for="cb_adress">Adresse</label>
                    <input type="checkbox" id="cb_birthdate" checked v-model="cb_birthdate">
                    <label for="cb_birthdate">Geburtstag</label>
                    <input type="checkbox" id="cb_email" checked v-model="cb_email">
                    <label for="cb_email">Email</label>
                    <input type="checkbox" id="cb_supervisor" checked v-model="cb_supervisor">
                    <label for="cb_supervisor">Aufsichtsperson</label>
                    <input type="checkbox" id="cb_food" checked v-model="cb_food">
                    <label for="cb_food">Verpflegung</label>
                    <input type="checkbox" id="cb_char_name" checked v-model="cb_char_name">
                    <label for="cb_char_name">It Name</label>
                    <input type="checkbox" id="cb_char_profession" checked v-model="cb_char_profession">
                    <label for="cb_char_profession">It Beruf</label>
                    <input type="checkbox" id="cb_race" checked v-model="cb_race">
                    <label for="cb_race">Spezies</label>
                    <input type="checkbox" id="cb_group" checked v-model="cb_group">
                    <label for="cb_group">It Gruppe</label>
                    <input type="checkbox" id="cb_known_nsc" checked v-model="cb_known_nsc">
                    <label for="cb_known_nsc">Bekannte Nsc</label>
                    <input type="checkbox" id="cb_char_history" checked v-model="cb_char_history">
                    <label for="cb_char_history">Charaktergeschichte</label>
                    <input type="checkbox" id="cb_magic" checked v-model="cb_magic">
                    <label for="cb_magic">Megiebegabung</label>
                    <input type="checkbox" id="cb_allergies" checked v-model="cb_allergies">
                    <label for="cb_allergies">Allergien</label>
                    <input type="checkbox" id="cb_tents" checked v-model="cb_tents">
                    <label for="cb_tents">Zelte</label>
                    <input type="checkbox" id="cb_pkw" checked v-model="cb_pkw">
                    <label for="cb_pkw">Pkw</label>
                    <input type="checkbox" id="cb_newsletter" checked v-model="cb_newsletter">
                    <label for="cb_newsletter">Newsletter</label>
                    <input type="checkbox" id="cb_first_time" checked v-model="cb_first_time">
                    <label for="cb_first_time">Erstes Mal?</label>
                    <input type="checkbox" id="cb_plot_wishes" checked v-model="cb_plot_wishes">
                    <label for="cb_plot_wishes">Plotwünsche</label>
                    <input type="checkbox" id="cb_con_wishes" checked v-model="cb_con_wishes">
                    <label for="cb_con_wishes">Conwünsche</label>
                </div>
                
            </div>
        </div>
    </div>
</template>

<script>
export default {

    data() {
        return {
            event: null,
            adress: null,
            registrations: null,
            cb_first_name: true,
            cb_last_name: true,
            cb_adress: true,
            cb_birthdate: true,
            cb_email: true,
            cb_supervisor: true,
            cb_food: true,
            cb_char_name: true,
            cb_char_profession: true,
            cb_race: true,
            cb_group: true,
            cb_known_nsc: true,
            cb_char_history: true,
            cb_magic: true,
            cb_allergies: true,
            cb_tents: true,
            cb_pkw: true,
            cb_newsletter: true,
            cb_first_time: true,
            cb_plot_wishes: true,
            cb_con_wishes: true,
        }
    },

    created() {
        this.event = this.$route.params.event;
        console.log(`/registrations/${this.event.id}`)
        axios.get(`/api/registrations/${this.event.id}`, { withCredentials: true }).then(response => {
            this.registrations = response.data;
        })
    },
}
</script>

<style scoped>
    .card {
        color: rgb(59, 59, 59)
    }
</style>