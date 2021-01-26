<template>
    <div class="wallpaper">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-sm-12 text-center">
                   <router-link to="/">
                        <img class="img-logo img-fluid" src="img/elo-logo-internacional.png" alt="">
                    <p class="font-weight-bold text-center text-white">BEM VINDO!</p>
                    <hr/>
                   </router-link>
                </div>
            </div>
    
            <LoginComponent></LoginComponent>

        
        </div>
    </div>
</template>

<script>
import LoginComponent from '../components/auth/Login'
// import RegisterComponent from '../components/auth/Register'
// import ReceberComponent from '../components/auth/Receber'
// import Footer from '../components/layouts/Footer'
export default {
    name: "Login",
    components:{
        LoginComponent,
        // RegisterComponent,
        // ReceberComponent, 
        // Footer,
    },
    beforeMount() {
        this.isMobile()
        document.body.style.backgroundImage = "url('img" + "/bg-conta-elo.png')";
document.body.style.height = window.innerHeight;
console.log(window.innerHeight)
        
    }
}
</script>

<style>
.wallpaper {
    height: 100%;
    width: 100%;
    background-repeat: repeat-y;
    background-repeat: repeat-x;

    width: 100vw;
height: 100vh;
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
}

.hr-space{
    margin-bottom:40px;
    margin-top:40px;
}
body{

    background-color:#00A4BA
}
.img-logo {
    margin-bottom:20px;
    margin-top:30px;
}
.row-suporte {
    margin-top: 30px;
    margin-bottom:15px;
}

input.form-control.input-main-login {
    margin-bottom: 10px;
    border: aliceblue;
    border-bottom: 1px solid white;
    background-color: #f0f8ff00;
    color: white;
    border-radius: 0rem;
}

.form-control:focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0);
}

.form-control::-webkit-input-placeholder {
    color: #ced4da;
}

/* WebKit, Blink, Edge */

.form-control:-moz-placeholder {
    color: #ced4da;
}

/* Mozilla Firefox 4 to 18 */

.form-control::-moz-placeholder {
    color: white;
}

/* Mozilla Firefox 19+ */

.form-control:-ms-input-placeholder {
    color: white;
}

/* Internet Explorer 10-11 */

.form-control::-ms-input-placeholder {
    color: white;
}

/* Microsoft Edge */
</style>