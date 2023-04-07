<template>
    <div v-if="!submitted">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Anmeldung</h4>
                <button 
                    v-on:click="formAutofill" 
                    v-if="user != null"
                    class="btn btn-success">automatisch ausfüllen</button>
            </div>
            <div class="card-body col-md-6">
                <div class="form">
                    <h5 class="card_subtitle text-muted">Allgemein</h5>
                    <div class="form-group" v-if="event.reg_first_name == 1">
                        <label for="first_name">Vorname</label>
                        <input type="text" class="form-control" name="first_name" v-model="reg_first_name">
                    </div>
                    <div class="form-group" v-if="event.reg_last_name == 1">
                        <label for="last_name">Nachname</label>
                        <input type="text" class="form-control" name="last_name" v-model="reg_last_name">
                    </div>
                    <div class="form-group" v-if="event.reg_adress == 1">
                        <label for="adress">Straße und Hausnummer</label>
                        <input type="text" class="form-control" name="adress" v-model="reg_adress_street">
                    </div>
                    <div class="form-group" v-if="event.reg_adress == 1">
                        <label for="adress">Postleitzahl</label>
                        <input type="text" class="form-control" name="adress" v-model="reg_adress_pcode">
                    </div>
                    <div class="form-group" v-if="event.reg_adress == 1">
                        <label for="adress">Ort</label>
                        <input type="text" class="form-control" name="adress" v-model="reg_adress_city">
                    </div>
                    <div class="form-group" v-if="event.reg_birthdate == 1">
                        <label for="birthdate">Geburtstag</label>
                        <input type="date" class="form-control" name="birthdate" v-model="reg_birthdate">
                    </div>
                    <div class="form-group" v-if="event.reg_mail == 1">
                        <label for="mail">Email</label>
                        <input type="email" class="form-control" name="mail" v-model="reg_mail">
                    </div>
                    <div class="form-group" v-if="event.reg_supervisor == 1">
                        <label for="supervisor">Aufsichtsperson</label>
                        <input type="text" class="form-control" name="supervisor" v-model="reg_supervisor">
                    </div>

                    <div class="form-group" v-if="event.reg_food_price != 0">
                        <label for="first_time">Möchtest du ein Nsc sein?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="food" id="no" value="nein" checked v-model="reg_food">
                            <label class="form-check-label" for="no">
                                nein
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="food" id="yes" value="ja" v-model="reg_food">
                            <label class="form-check-label" for="yes">
                                ja
                            </label>
                        </div>
                    </div>
		    <p>Wenn du NSC zein möchtest, überspringe den IT-Teil</p>

                    <hr />
                    <h5 class="card-subtitle text-muted">It</h5>
                    <div class="form-group" v-if="event.reg_char_name == 1">
                        <label for="char_name">Charaktername</label>
                        <input type="text" class="form-control" name="char_name" v-model="reg_char_name">
                    </div>
                    <div class="form-group" v-if="event.reg_char_profession == 1">
                        <label for="char_profession">It-Beruf</label>
                        <input type="text" class="form-control" name="char_profession" v-model="reg_char_profession">
                    </div>
                    <div class="form-group" v-if="event.reg_char_race == 1">
                        <label for="char_race">Spezies</label>
                        <input type="text" class="form-control" name="char_race" v-model="reg_char_race">
                    </div>
                    <div class="form-group" v-if="event.reg_char_group == 1">
                        <label for="char_group">Gruppe</label>
                        <input type="text" class="form-control" name="char_group" v-model="reg_char_group">
                    </div>
                    <div class="form-group" v-if="event.reg_known_nsc == 1">
                        <label for="known_nsc">Dem Charakter bekannte Nsc</label>
                        <textarea class="form-control" name="known_nsc" rows="10" v-model="reg_known_nsc"/>
                    </div>
                    <div class="form-group" v-if="event.reg_char_history == 1">
                        <label for="char_history">Charaktergeschichte</label>
                        <textarea class="form-control" name="char_history" rows="10" v-model="reg_char_history"/>
                    </div>

                    <div class="form-group" v-if="event.reg_char_magic == 1">
                        <label for="char_magic">Magiebegabung</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="char_magic" id="mundane" value="keine" checked v-model="reg_char_magic">
                            <label class="form-check-label" for="mundane">
                                keine
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="char_magic" id="magic" value="magiebegabt" v-model="reg_char_magic">
                            <label class="form-check-label" for="magic">
                                magisch begabt
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="char_magic" id="cleric" value="klerikal" v-model="reg_char_magic">
                            <label class="form-check-label" for="cleric">
                                klerikal begabt
                            </label>
                        </div>
                    </div>
                    <hr />
                    <h5 class="card-subtitle text-muted">Ot-Infos</h5>

                    <div class="form-group" v-if="event.reg_allergies == 1">
                        <label for="allergies">Allergien</label>
                        <textarea class="form-control" name="allergies" rows="10" v-model="reg_allergies"/>
                    </div>

                    <div class="form-group" v-if="event.reg_tents == 1">
                        <label for="tents">Zelte</label>
                        <input type="text" class="form-control" name="tents" v-model="reg_tents">
                    </div>

                    <div class="form-group" v-if="event.reg_pkw == 1">
                        <label for="pkw">Auto</label>
                        <input type="text" class="form-control" name="pkw" v-model="reg_pkw">
                    </div>

                    <div class="form-group" v-if="event.reg_newsletter == 1">
                        <label for="newsletter">Möchtest du unseren Newsletter abonieren?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="newsletter" id="no" value="nein" checked v-model="reg_newsletter">
                            <label class="form-check-label" for="no">
                                nein
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="newsletter" id="yes" value="ja" v-model="reg_newsletter">
                            <label class="form-check-label" for="yes">
                                ja
                            </label>
                        </div>
                    </div>

                    <div class="form-group" v-if="event.reg_first_time == 1">
                        <label for="first_time">Bist du das erste mal auf einer unserer Cons?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="first_time" id="no" value="nein" checked v-model="reg_first_time">
                            <label class="form-check-label" for="no">
                                nein
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="first_time" id="yes" value="ja" v-model="reg_first_time">
                            <label class="form-check-label" for="yes">
                                ja
                            </label>
                        </div>
                    </div>


                    <div class="form-group" v-if="event.reg_plot_wishes == 1">
                        <label for="plot_wishes">Plotwünsche</label>
                        <textarea class="form-control" name="plot_wishes" rows="10" v-model="reg_plot_wishes"/>
                    </div>

                    <div class="form-group" v-if="event.reg_con_wishes == 1">
                        <label for="con_wishes">Wünsche an die Con</label>
                        <textarea class="form-control" name="con_wishes" rows="10" v-model="reg_con_wishes"/>
                    </div>

                    <div class="form-group" v-if="event.reg_corona == 1">
                        <p class="card-text"> {{ event.reg_corona_text }} </p>
                        <input type="checkbox" id="corona" value="akzeptiert" v-model="reg_corona">
                        <label for="corona">Ich bestätige hiermit, die Regeln zu Corona gelesen zu haben</label>
                    </div>
                    <div class="form-group" v-if="event.reg_agb == 1">
                        <p class="card-text"> {{ event.reg_agb_text }} </p>
                        <input type="checkbox" id="agb" value="akzeptiert" v-model="reg_agb">
                        <label for="corona">Ich bestätige hiermit, die AGBs gelesen zu haben</label>
                    </div>
                <button type="button" class="btn btn-success" v-on:click="submitForm">anmelden</button>
                    
                </div>
            </div>
        </div>
    </div>
    <div v-else>Danke für deine Anmeldung, eine Bestätigungsemail ist zu dir unterwegs</div>

</template>

<script>
export default {
    data() {
        return {
            user: null,
            loading: false,
	    submitted: false,
            event: null,
            reg_first_name: null,
            reg_last_name: null,
            reg_adress_street: null,
            reg_adress_pcode: null,
            reg_adress_city: null,
            reg_birthdate: null,
            reg_mail: null,
            reg_supervisor: null,
            reg_food: null,
            reg_char_name: null,
            reg_char_profession: null,
            reg_char_race: null,
            reg_char_group: null,
            reg_known_nsc: null,
            reg_char_history: null,
            reg_char_magic: null,
            reg_allergies: null,
            reg_tents: null,
            reg_pkw: null,
            reg_newsletter: null,
            reg_first_time: null,
            reg_plot_wishes: null,
            reg_con_wishes: null,
            reg_corona: null,
            reg_agb: null
            
        }
    },

    methods: {
        submitForm() {
            if (this.reg_food == "nein"){
                this.reg_food = 0;
            } else {
                this.reg_food = 1
            }
            if (this.reg_newsletter == "nein"){
                this.reg_newsletter = 0;
            } else {
                this.reg_newsletter = 1
            }
            if (this.reg_first_time == "nein"){
                this.reg_first_time = 0;
            } else {
                this.reg_first_time = 1
            }

	    this.submitted = true;

            axios.post('/api/registrations', {
                'event_id': String(this.event.id),
                'reg_first_name': this.reg_first_name,
                'reg_last_name': this.reg_last_name,
                'reg_adress_street': this.reg_adress_street,
                'reg_adress_pcode': this.reg_adress_pcode,
                'reg_adress_city': this.reg_adress_city,
                'reg_birthdate': this.reg_birthdate,
                'reg_mail': this.reg_mail,
                'reg_supervisor': this.reg_supervisor,
                'reg_food': this.reg_food,
                'reg_char_name': this.reg_char_name,
                'reg_char_profession': this.reg_char_profession,
                'reg_char_race': this.reg_char_race,
                'reg_char_group': this.reg_char_group,
                'reg_known_nsc': this.reg_known_nsc,
                'reg_char_history': this.reg_char_history,
                'reg_char_magic': this.reg_char_magic,
                'reg_allergies': this.reg_allergies,
                'reg_tents': this.reg_tents,
                'reg_pkw': this.reg_pkw,
                'reg_newsletter': this.reg_newsletter,
                'reg_first_time': this.reg_first_time,
                'reg_plot_wishes': this.reg_plot_wishes,
                'reg_con_wishes': this.reg_con_wishes,
                'reg_corona': this.reg_corona,
                'reg_agb': this.reg_agb
            });
        },

        formAutofill() {
            this.reg_first_name = this.user.user_first_name;
            this.reg_last_name = this.user.user_last_name;
            this.reg_adress_street = this.user.user_street;
            this.reg_adress_pcode = this.user.user_pcode;
            this.reg_adress_city = this.user.user_city;
            this.reg_birthdate= this.user.user_birthdate;
        },
    },

    async created() {
        this.loading = true;
        console.log("loading...");
        this.eventId = this.$route.params.id;
        await axios.get(`/api/events/${this.$route.params.id}`).then(response => {
            this.event = response.data;
            this.loading = false;
        });
        console.log("retrieved event data");

        await axios.get('/user').then(response =>{
            this.user = response.data;
        });
    }
}
</script>

<style scoped>
    .card {
        color: rgb(59, 59, 59)
    }
</style>
