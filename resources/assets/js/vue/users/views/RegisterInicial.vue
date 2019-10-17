<template>
<div class="wallpaper">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <img class="img-logo-topo img-logo img-fluid" src="img/elo-logo.png" alt="">
            </div>
        </div>
         <Login></Login>
        <Register></Register>
       <div class="row justify-content-center">
            <div class="col-12 text-center">
               <div class="icon-social text-primary">                    
                        <h4><i class="fab fa-whatsapp text-success"></i>
                            <span class="text-white">(11)99806-8930</span>
                        </h4> 
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-xs-6 col-sm-4 col-md-2 col-lg-2 text-center">
                <a href="#">
                    <img class="img-logo img-fluid" src="img/disponivel-googleplay.png" alt="">
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="row">
                    <div class="col-4 text-center">
                <div class="icon-social text-primary">
                    <a href="https://twitter.com/ContaElo" target="_blank">
                        <h3><i class="fab fa-twitter"></i></h3>
                    </a>
                </div>
            </div>
            <div class="col-4 text-center">
                <div class="icon-social text-danger">
                    <a href="https://www.instagram.com/contaelo/" target="_blank" class="text-danger">
                        <h3><i class="fab fa-instagram"></i></h3>
                    </a>
                </div>
            </div>
            <div class="col-4 text-center">
                <div class="icon-social text-primary">
                    <a href="https://www.facebook.com/contaelooficial/" target="_blank" class="">
                        <h3><i class="fab fa-facebook-f"></i></h3>
                    </a>
                </div>
            </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="icon-social text-white">
                    <a href="#">
                    <img class="img-logo img-fluid" src="img/david-marca.png" alt="">
                </a>
                  
                </div>
            </div>            
        </div>
    </div>
</div>

</template>

<script>
import Register from '../components/auth/Register'
import Login from '../components/auth/Login'
export default {
    name: "RegisterInicial",
    data() {
        return {
            bgImagem: ""
        }
    },    
    beforeMount() {
        document.body.style.backgroundImage = "url('img" + "/bg-conta-elo.png')";
    },
    components:{
        Register,
        Login,
    }
}
</script>

<style>
body,
html {
    background-size: cover;
    background-repeat:repeat-y;
    background-color: #00A4BA;
  
    margin: 0px;
}
.hr-space {
    margin-bottom: 40px;
    margin-top: 40px;
}
.wallpaper {
    height: 100%;
    width: 100%;
    background-repeat: repeat-y;
}
.text-smart {
    color: #00A4BA
}
.img-logo-topo {
    width: 200px;
}
.img-logo {
    margin-bottom: 20px;
    margin-top: 30px;
}
.row-suporte {
    margin-top: 30px;
    margin-bottom: 15px;
}
</style>
