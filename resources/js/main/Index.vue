<template>
    <div>
         <nav class="navbar navbar-expand-sm  nav-bg">
            <router-link class="navbar-brand ml-4 nav-custom" :to="{name: 'home'}">Larpcons</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav mr-auto">
                
                <li class="nav-item">
                    <router-link class="nav-link nav-custom" :to="{name: 'calendar'}">Kalender</router-link>
                </li>

                
               <li class="nav-item">
                    <router-link class="nav-link nav-custom" :to="{name: 'user'}" v-if="user">Spieler-Bereich</router-link>
                    <router-link class="nav-link disabled" :to="{name: 'user'}" v-else>Spieler-Bereich</router-link>
                </li>
    
                <li class="nav-item">
                    <router-link class="nav-link nav-custom" :to="{name: 'orga'}" v-if="orga_id">Orga-Bereich</router-link>
                    <router-link class="nav-link disabled" :to="{name: 'orga'}" v-else>Orga-Bereich</router-link>
                </li>

                <li class="nav-item">
                    <a 
                        v-on:click = "logout"
                        class="nav-link nav-custom" 
                        :to="{name: 'home'}"
                        v-if="user"
                        >
                        Logout</a>
                    <router-link class="nav-link nav-custom" :to="{name: 'login'}" v-else>Login</router-link>
                </li>
                </ul>
            </div> 
        </nav>
        <div class="background">
            <div class="col-md-10 p-2 content">
                <router-view></router-view>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            user: null,
            orga_id: null
        }
    },

    methods: {
        logout() {
            axios.post('/logout').then(response =>{
               this.redirect(); 
            });
        },

        async redirect() {
             //await this.$router.push({name: 'home'});
             window.location.reload();
         }
    },

    created() {
        axios.get('/user').then(response =>{
            
            if ( response.status !== 200){
                throw new Error(response.status)
            }
            else {
                this.user = response.data;
                this.orga_id = response.data.orga_id;
            }

        })
        .catch(function(error){
            console.log("user is not logged in")
        });
    }
}
</script>

<style scoped>
    .nav-bg {
        background-color: rgb(55, 87, 57);
        color: white;
    }
    .nav-custom {
        color: white;
    }

    .nav-custom:hover {
        color:white;
        cursor: pointer;
        text-shadow:
            0 0 7px #fff,
            0 0 10px #fff,
            0 0 21px #fff,
            0 0 42px #0fa,
            0 0 82px #0fa;
    }
    .background {
        height: 100vh;
        padding: 20px;
        background-color: rgb(55, 87, 57);
        background-image: url("/img/bg.jpg");
        background-size: cover;
    }

    .content {
        background-color: rgba(55, 87, 57, 0.774);
        margin-left: auto;
        margin-right: auto;
        color: white;
    }
</style>