<template>
        <div class="card col-md-4">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Your Email" name="email" v-model="email">
                        
                        <label class="form-label" for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Your Password" name="password" v-model="password">

                        <div class="d-grid gap-2 pt-2">
                            <button class="btn btn-primary" type=button v-on:click = "testLogin">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        
</template>

<script>
export default {
    data() {
        return {
            loading: false,
            email: null,
            password: null,
            user: null
        }
    },

    methods: {
        async testLogin() {
            await axios.get('sanctum/csrf-cookie');
            await axios.post("/login", {
                email: this.email,
                password: this.password
            });

            await axios.get('/user')
                .then(response => {
                    window.location.reload();
                });
        },

        async initLogin() {
            await axios.get('/sanctum/csrf-cookie').then(response => {
                this.login();
            });
                
        },

        async login() {
            axios.post('/login', {
                email: "admin@admin.de",
                password: "testtest"
            })
        }
    }
}
</script>