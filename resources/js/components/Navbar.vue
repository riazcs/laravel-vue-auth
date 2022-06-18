<template>


      <section id="nav-bar">
           <nav class="navbar navbar-expand-md navbar-light bg-primary text-white font-weight-bold">
           
                <a class="navbar-brand text-uppercase text-light" href="/" style="font-size:30px;">
                URL SHORT
                   
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">

                    <div class="navbar-nav " style="margin-left:1100px;">
                         <li class="nav-item">
                            <router-link class="nav-link text-light" to="/login">Login</router-link>
                         </li>
                            
                             <li class="nav-item">
                                <router-link class="nav-link text-light" to="/register">Register</router-link>
                            </li>
                
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                    User Name
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="" @click.prevent="logout">
                                    Logout
                                      
                                    </a>
                                </div>
                            </li>
                    </div>    
                    
                </div>
            
        </nav>
      </section>

    
</template>

<script>
    export default {


        methods:{

            logout(){
                axios.post('/logout', {

                }).then((response)=>{
                    location.href = '/';
                    alert('logout successfully done')

                }).catch((error)=>{

                })
            }

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
