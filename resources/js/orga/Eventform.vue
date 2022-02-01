<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Con erstellen</h4>
            </div>
            <div class="card-body">
                <form>
                    <h5 class="card-subtitle text-muted">Allgemein</h5>
                    <div class="form-group pb-2">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" placeholder="Name der Con" name="name" v-model="name"/>
                    </div>
                    <div class="form-group pb-2">
                        <label for="description">Beschreibung</label>
                        <textarea class="form-control" placeholder="Beschreibung der Con" name="description" v-model="description" rows="20"/>
                    </div>
                    <div class="form-group">
                        <label for="date">Datum</label>
                        <div class="d-flex flex-row">
                            <div class="d-flex flex-column">
                                <label for="date_start">von: </label>
                                <input type="date" class="form-control" name="date_start" v-model="date_start"/>
                            </div>
                            <div class="d-flex flex-column pb-2">
                                <label for="date_end">bis: </label>
                                <input type="date" class="form-control" name="date_end" v-model="date_end"/>                           
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="file" name="image" placeholder="Choose Image" id="image">
                    </div>

                    <div class="form-group pb-2">
                        <label for="sc_count">SC-Anzahl</label>
                        <input type="number" class="form-control" name="sc_count" placeholder="20" v-model="sc_count"/>
                    </div>
                    <div class="form-group pb-2">
                        <label for="nsc_count">NSC-Anzahl</label>
                        <input type="number" class="form-control" name="nsc_count" placeholder="20" v-model="nsc_count"/>
                    </div>
                    <div class="form-group pb-2">
                        <label for="sc_price">Spielerpreis</label>
                        <input type="number" class="form-control" name="sc_price" placeholder="20" v-model="sc_price"/>
                    </div>
                    <div class="form-group pb-2">
                        <label for="nsc_price">Nsc-Preis</label>
                        <input type="number" class="form-control" name="nsc_price" placeholder="20" v-model="nsc_price"/>
                    </div>
                    <div class="form-group pb-2">
                        <label for="foor_price">Preis Vollverpflegung (0 eintragen, wenn es keine Vollverpflegung gibt</label>
                        <input type="number" class="form-control" name="food_price" placeholder="20" v-model="food_price"/>
                    </div>

                    <div class="form-group pb-2">
                        <label for="has_registration">Mit Anmeldung?</label>
                        <input type="radio" name="has_registration" value="false" checked v-model="has_registration">
                        <label for="has_registration_0" class="form-check-label">ohne</label>
                        <input type="radio" name="has_registration" value="true" v-model="has_registration">
                        <label for="has_registration_1" class="form-check-label">mit</label>
                    </div>
                    
                    <div v-if="has_registration == 'true'">
                        <hr />
                        <h5 class="card-subtitle text-muted">Welche Angaben sollen deine Spieler machen?</h5>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_first_name" v-model="reg_first_name" checked>
                            <label for="reg_first_name" class="form-check-label">Vorname</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_last_name" v-model="reg_last_name" checked>
                            <label for="reg_last_name" class="form-check-label">Nachname</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_adress" v-model="reg_adress" checked>
                            <label for="reg_adress" class="form-check-label">Adresse</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_birthdate" v-model="reg_birthdate" checked>
                            <label for="reg_birthdate" class="form-check-label">Geburtstag</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_mail" v-model="reg_mail" checked>
                            <label for="reg_mail" class="form-check-label">Email</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_supervisor" v-model="reg_supervisor" checked>
                            <label for="reg_supervisor" class="form-check-label">Aufsichtsperson</label>
                        </div>

                        <hr />

                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_char_name" v-model="reg_char_name" checked>
                            <label for="reg_char_name" class="form-check-label">Charaktername</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_char_profession" v-model="reg_char_profession" checked>
                            <label for="reg_char_profession" class="form-check-label">Beruf des Charakters</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_char_race" v-model="reg_char_race" checked>
                            <label for="reg_char_race" class="form-check-label">Spezies</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_char_group" v-model="reg_char_group" checked>
                            <label for="reg_char_group" class="form-check-label">Gruppe des Charakters</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_known_nsc" v-model="reg_known_nsc" checked>
                            <label for="reg_known_nsc" class="form-check-label">Nsc, die der Charakter kennt</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_char_history" v-model="reg_char_history" checked>
                            <label for="reg_char_history" class="form-check-label">Charaktergeschichte</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_char_magic" v-model="reg_char_magic" checked>
                            <label for="reg_char_magic" class="form-check-label">Magiebegabung</label>
                        </div>

                        <hr />

                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_allergies" v-model="reg_allergies" checked>
                            <label for="reg_allergies" class="form-check-label">Allergien</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_tents" v-model="reg_tents" checked>
                            <label for="reg_tents" class="form-check-label">Zelte</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_pkw" v-model="reg_pkw" checked>
                            <label for="reg_pkw" class="form-check-label">Pkw</label>
                        </div>

                        <hr />
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_newsletter" v-model="reg_newsletter" checked>
                            <label for="reg_newsletter" class="form-check-label">Newsletter-Teilnahme</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_first_time" v-model="reg_first_time" checked>
                            <label for="reg_first_time" class="form-check-label">Zum ersten Mal da?</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_plot_wishes" v-model="reg_plot_wishes" checked>
                            <label for="reg_plot_wishes" class="form-check-label">Plotwünsche</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_con_wishes" v-model="reg_con_wishes" checked>
                            <label for="reg_con_wishes" class="form-check-label">Conwünsche</label>
                        </div>

                        <hr />
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_corona" v-model="reg_corona" checked>
                            <label for="reg_corona" class="form-check-label">Die Spieler sollen folgende Coronaregeln akzeptieren:</label>
                            <textarea class="form-control" rows="10" name="reg_corona_text" v-if="reg_corona"/>
                            <p v-else>keine</p>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" name="reg_agb" v-model="reg_agb" checked>
                            <label for="reg_agb" class="form-check-label">Die Spieler sollen folgende AGBs akzeptieren</label>
                            <textarea class="form-control" rows="10" name="reg_agb_text" v-if="reg_agb"/>
                            <p v-else>keine</p>
                        </div>

                        
                        
                    </div>
                    <div v-else>Ohne Anmeldung</div>
                    <button type="button" v-on:click="send_event" class="btn btn-primary">abschicken</button>
                </form>
                


            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: null,
            orga_id: null,
            description: null,
            date_start: null,
            date_end: null,
            sc_count: null,
            nsc_count: null,
            sc_price: null,
            nsc_price: null,
            food_price: null,
            has_registration: false,
            reg_first_name: true,
            reg_last_name: true,
            reg_adress: true,
            reg_birthdate: true,
            reg_mail: true,
            reg_supervisor: true,
            reg_char_name: true,
            reg_char_profession: true,
            reg_char_race: true,
            reg_char_group: true,
            reg_known_nsc: true,
            reg_char_history: true,
            reg_char_magic: true,
            reg_allergies: true,
            reg_tents: true,
            reg_pkw: true,
            reg_newsletter: true,
            reg_first_time: true,
            reg_plot_wishes: true,
            reg_con_wishes: true,
            reg_corona: true,
            reg_corona_text: "",
            reg_agb: true,
            reg_agb_text: "",
            image: null,
            image_path: null,

        }
    },

    methods: {

        async send_event() {
            if (this.has_registration == "true") {
                this.has_registration = 1
            }
            else {
                this.has_registration = 0
            }

            await axios.get('/user').then(response => {
                this.orga_id = response.data.orga_id
            });

            await this.saveImage();
            console.log('image path:')
            console.log(this.image_path);
            await axios.post("/events", {
                'name' : this.name,
                'orga_id': this.orga_id,
                'description' : this.description,
                'date_start' : this.date_start,
                "date_end": this.date_end,
                "sc_count": this.sc_count,
                "nsc_count": this.nsc_count,
                "sc_price": this.sc_price,
                "nsc_price": this.nsc_price,
                "food_price": this.food_price,
                "has_registration": this.has_registration,
                "reg_first_name": this.reg_first_name,
                "reg_last_name": this.reg_last_name,
                "reg_adress": this.reg_adress,
                "reg_birthdate": this.reg_birthdate,
                "reg_mail": this.reg_mail,
                "reg_supervisor": this.reg_supervisor,
                "reg_char_name": this.reg_char_name,
                "reg_char_profession": this.reg_char_profession,
                "reg_char_race": this.reg_char_race,
                "reg_char_group": this.reg_char_group,
                "reg_known_nsc": this.reg_known_nsc,
                "reg_char_history": this.reg_char_history,
                "reg_char_magic": this.reg_char_magic,
                "reg_allergies": this.reg_allergies,
                "reg_tents": this.reg_tents,
                "reg_pkw": this.reg_pkw,
                "reg_newsletter": this.reg_newsletter,
                "reg_first_time": this.reg_first_time,
                "reg_plot_wishes": this.reg_plot_wishes,
                "reg_con_wishes": this.reg_con_wishes,
                "reg_corona": this.reg_corona,
                "reg_coronta_text": this.reg_corona_text,
                "reg_agb": this.reg_agb,
                "reg_agb_text": this.reg_agb_text,
                "image_path": this.image_path
            });
            
        },

        async saveImage() {
            
            let photo = document.getElementById('image').files[0];
            console.log(photo);
            let data = new FormData();
            data.append('photo', photo, photo.name)
            
            await axios.post('/saveImage', data).then(response => {
                console.log(response);
                this.image_path = response.data;
            }).catch(response => {
                console.log(response)
            })
        }
    },

}
</script>

<style scoped>
    .card {
        color: rgb(59, 59, 59);
    }
</style>