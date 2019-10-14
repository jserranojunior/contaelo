<template>
<div>
    <div class="row row-space justify-content-center">
        <div class="col-10">
            <div class="form-group">
                <input type="email" class="form-control input-main-login" v-model="inputs.email" placeholder="Digite seu e-mail">
            </div>
            <div class="form-group">
                <input type="password" class="form-control input-main-login" v-model="inputs.password" placeholder="Digite sua senha">
            </div>
        </div>
        <div class="col-10 text-left">
            <div class="form-group">
                <div class="row">                    
                        <div class="col-12 text-center">
                           
                            <div class="btn  btn-outline-light font-weight-bold float-center" @click="Login()">ACESSE</div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                         <button type="button" class="btn btn-link text-white text-left">Esqueci minha senha</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "Login",
    data(){
        return{
            inputs:{}
        }
    },
    methods: {
        Login() {
            console.log("LOGIN FEITO")
        }
    }
}
</script>
