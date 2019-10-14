<template>
<div>
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="form-group">
                <input class="form-control input-main-login" v-model="inputs.name" type="text" placeholder="Digite seu nome completo">
            </div>
            <div class="form-group">
                <input class="form-control input-main-login" v-model="inputs.email" type="text" placeholder="Digite seu e-mail">
            </div>
            <div class="form-group">
                <input class="form-control input-main-login" v-model="inputs.celular" v-mask="'+### (##) #####-####'" type="text" placeholder="Telefone +000 (00) 00000-0000">
            </div>
            <div class="form-group">
                <input class="form-control input-main-login" v-model="inputs.password" type="password" placeholder="Crie sua senha">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-6 text-left">
                        <!-- <a href="./login">
                                    <div class="btn btn-outline-light font-weight-bold">FAZER LOGIN</div>
                                </a> -->
                    </div>
                    <div class="col-12 text-center">
                        <div class="btn btn-outline-light font-weight-bold" @click="Register(inputs)">CADASTRAR</div>
                    </div>
                </div>
            </div>
            <div class="row" v-if="message === 'Cadastrado'">
                <div class="col-12">
                    <h5 class="text-center">CADASTRADO COM SUCESSO</h5>
                </div>
            </div>
            <div class="row" v-else>
                <div class="col-12">
                    <h5 class="text-center">{{message}}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import {
    mask
} from "vue-the-mask";
import axios from 'axios'
export default {
    name: "Register",
    data() {
        return {
            inputs: {},
            data: "",
            message: "",
        }
    },
    methods: {
        cadastrar() {
            console.log(this.inputs)
        },

        Register(inputs) {
            //   console.log(inputs)
            var pathname = window.location.pathname;
            let url = pathname + 'api/users/register';

            console.log(url)

            axios
                .post(url, inputs)
                .then(response => {

                    this.data = response.data.data
                    console.log(this.message)
                    this.inputs = {};
                    this.message = response.data.message
                })
                .catch(function (error) {

                    console.log(error);

                });
        },
    },
    directives: {
        mask
    }
}
</script>
