<template>

  <div class="container-fluid">
     <Navbar></Navbar>
     
    <div class="row align-items-center height-100vh">
       
        <div class="col-4 mx-auto max-width-none">
            <div class="card w-400 border-0 login-width">
                
               
                <div class="card-body">
                    <div class="form-group col-12">
                        <h5>Create an account</h5>
                    </div>

                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" v-model="name" class="form-control" placeholder="Enter email">
                        </div>

                         <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" v-model="email" class="form-control" placeholder="Enter email">
                        </div>

                         <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" v-model="password" class="form-control" placeholder="Enter password">
                        </div>

                           <div class="form-group">
                            <label for="password-confirmation">Confirm Password</label>
                            <input type="password" id="password-confirmation" v-model="password_confirmation" class="form-control" placeholder="Confirm password"><br><br>
                          </div>


                      
                        <div class="form-group">
                           <button class="btn btn-primary btn-block" @click.prevent="submitRegister">Sign Up</button>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                Already have an account?
                                <router-link to="/login">Login</router-link>
                            </div>
                        </div>

                    </form>
                </div>
                
            </div>

        </div>

    </div>
    <FooterComponent></FooterComponent>

  </div>
</template>

<script>
import Navbar from './Navbar';
import FooterComponent from './Footer';

export default {

    components:{
        Navbar,
        FooterComponent


    },
 

    data(){
        return{
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
        }
    },

    mounted(){
        console.log('component loaded')
    },

    methods:{
        submitRegister(){
            axios.post('/api/register', {
                name: this.name,
                email:this.email,
                password:this.password,
                password_confirmation:this.password_confirmation

            }).then((response)=>{
                console.log(response, 'response')
                this.$router.push('/user-dashboard');
                this.reset_form();
            }).catch((error)=>{
                console.log("error")
            })

        },

        reset_form(){
            this.name = null;
            this.email = null;
            this.password = null;
            this.password_confirmation = null;
        }
    }

}
</script>

<style>

</style>