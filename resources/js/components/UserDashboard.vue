<template>

    <div class="container-fluid" >
         <Navbar></Navbar>
        
            <div class="row justify-content-center">
                <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Upload Image</div>
                    <div class="card-body">
                        <div v-if="success != ''" class="alert alert-success">
                            {{success}}
                        </div>
                        <form @submit="formSubmit" enctype="multipart/form-data" style="margin-bottom:200px; margin-top:100px;">
                            <input type="file" class="form-control" v-on:change="onChange"><br><br>
                            <button class="btn btn-primary btn-block">Upload</button>
                        </form>
                    </div>
                </div>
            </div>

           
        </div>
    <FooterComponent></FooterComponent>

    </div>
   
    

  
</template>

<script>
import Navbar from './Navbar.vue';
import FooterComponent from './Footer.vue';
export default {

    components:{
        Navbar,
        FooterComponent

    },

    data() {
            return {
                name: '',
                file: '',
                success: ''
            };
        },


        methods: {
            onChange(e) {
                this.file = e.target.files[0];
            },
            formSubmit(e) {
                e.preventDefault();
                let existingObj = this;
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data'
                    }
                }
                let data = new FormData();
                data.append('file', this.file);
                axios.post('/api/upload', data, config)
                    .then(function (res) {
                        existingObj.success = res.data.success;
                    })
                    .catch(function (err) {
                        existingObj.output = err;
                    });
            }
        }
 
}
</script>

<style>

</style>