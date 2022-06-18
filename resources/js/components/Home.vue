<template>
    <div id="link">
        <Navbar></Navbar>
        
        <div class="welcome" id="banner">
             
            
            <div class="text-center">
               
                <h1>Simplify Your links free</h1>
                <p class="lead">create and share trusted, best powerful short link </p>
                <Urlshort></Urlshort>

                
               
            </div>

        </div>

        <div class="square">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>

        <div class="circle">
             <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <FooterComponent></FooterComponent>
        
    </div>
</template>

<script>
import Navbar from './Navbar';
import Urlshort from './Urlshort';
import FooterComponent from './Footer';


    export default {
        name: "Home",
        components:{
            Navbar,
            Urlshort,
            FooterComponent

        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
