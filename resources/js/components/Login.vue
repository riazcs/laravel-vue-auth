<template>
  <div class="container-fluid">
    <Navbar></Navbar>
    <div class="row align-items-center height-100vh">
        <div class="col-4 mx-auto max-width-none">
            <div class="card w-400 border-0 login-width">
                <div class="card-body">
                    <div class="form-group col-12">
                        <h5>Sign into your account</h5>
                    </div>

                    <form>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" v-model="email" class="form-control" placeholder="Enter email">
                        </div>

                         <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" v-model="password" class="form-control" placeholder="Enter password">
                        </div>

                        <div class="form-group flexbox py-3 form-style">
                            <div class="custom-control custom-checkbox pl-0">
                                <input type="checkbox" name="remember"> Remember me
                            </div>     
                        </div>

                        <div class="form-group">
                           <button class="btn btn-primary btn-block" @click.prevent="userlogin">Login</button>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                Don't have an account?
                                <router-link to="/register">Create Account</router-link>
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
            email: '',
            password:''
        }
    },

    methods:{
        userlogin(){
            axios.post('/login',{
                email: this.email,
                password: this.password

            }).then((response)=>{
                alert(response)

            }).catch((error)=>{

            })

        }
    }

}
</script>

<style>

</style>