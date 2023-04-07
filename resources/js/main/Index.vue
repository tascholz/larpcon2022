<template>
    
    <div>
        
        <nav class="navbar navbar-bg flex flex-col">
            <router-link class="navbar-brand ml-3 nav-custom ml-2" :to="{name: 'home'}">Larpcons</router-link>
            <button class="navbar-toggler d-md-none" type="button">
                <span id="menuburger" @click="MenuOpen" fill="none" stroke="currentColor">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </span>    
            </button>
            <ul class="navbar-nav d-none d-md-flex flex-row">
                    
                    <li class="nav-item mx-2">
                        <router-link class="nav-link nav-custom" :to="{name: 'calendar'}">Kalender</router-link>
                    </li>
    
                    
                   <li class="nav-item mx-2">
                        <router-link class="nav-link nav-custom" :to="{name: 'user'}" v-if="user">Spieler-Bereich</router-link>
                        <router-link class="nav-link disabled" :to="{name: 'user'}" v-else>Spieler-Bereich</router-link>
                    </li>
        
                    <li class="nav-item mx-2">
                        <router-link class="nav-link nav-custom" :to="{name: 'orga'}" v-if="orga_id">Orga-Bereich</router-link>
                        <router-link class="nav-link disabled" :to="{name: 'orga'}" v-else>Orga-Bereich</router-link>
                    </li>
    
                    <li class="nav-item mx-2">
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
            <!--mobile menu-->
            
    
        </nav>
        <div class="hidden ml-2" id="menu">
                    <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item" @click="MenuOpen">
                        <router-link class="nav-link nav-custom" :to="{name: 'calendar'}">Kalender</router-link>
                    </li>
    
                    
                   <li class="nav-item" @click="MenuOpen">
                        <router-link class="nav-link nav-custom" :to="{name: 'user'}" v-if="user">Spieler-Bereich</router-link>
                        <router-link class="nav-link disabled" :to="{name: 'user'}" v-else>Spieler-Bereich</router-link>
                    </li>
        
                    <li class="nav-item" @click="MenuOpen">
                        <router-link class="nav-link nav-custom" :to="{name: 'orga'}" v-if="orga_id">Orga-Bereich</router-link>
                        <router-link class="nav-link disabled" :to="{name: 'orga'}" v-else>Orga-Bereich</router-link>
                    </li>
    
                    <li class="nav-item" @click="MenuOpen">
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
        <div class="background">
                <div class="col-md-10 p-2 content">
                    <router-view></router-view>
                </div>
    
            </div>
        </div>
        <!-- <div class="fixed top-0 left-0 right-0 bg-white g-opacity-30 z-20 p-2" id="navbar">
            <div class="md:flex md:flex-row md:justify-between">
                <span class="inline md:w-64 md:text-xl">Larpcons</span>
                <svg class="w-6 h-6 md:hidden cursor-pointer inline mr-4" id="menuburger" @click="MenuOpen" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </div>
            <div class="bg-white md:bg-transparent w-full hidden md:block" id="menu">
                <ul class="flex flex-col md:flex-row md:justify-end">
                    <li class="text-xl my-4" @click="LinkOpen">
                        <router-link class="px-4 custom menu-active-link" :to="{name: 'calendar'}">Kalender</router-link>
                    </li>
                </ul>
            </div>
        </div> -->
    
    
    
    
    
        <!-- <div>
             <nav class="navbar navbar-expand-sm  nav-bg">
                <router-link class="navbar-brand ml-4 nav-custom" :to="{name: 'home'}">Larpcons</router-link>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="" id="navbarsExample03">
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
        </div> -->
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
            },
            MenuOpen() {
            const menuburger = document.querySelector('#menuburger');
            const menu = document.querySelector('#menu');
            if (menu.classList.contains('hidden')){
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
            open.value = !open.value;
            },
            LinkOpen() {
                const menu = document.querySelector('#menu');
                menu.classList.add('hidden');
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
        .hidden {
            display: none;
        }
    </style>