<template>
  <div class="wallpaper">
    <div class="container-fluid">
      <div class="row margin-topo justify-content-center">
        <div class="col-12 col-xs-12 col-sm-10 col-md-8 col-lg-6 text-center">
          <img
            class="img-logo-topo img-logo img-fluid img-responsive"
            src="img/elo-logo-internacional.png"
            alt
          />
        </div>
      </div>
      <!-- <div class="row row-space justify-content-center">
            <div class="col-12 text-center">
                <h2 class="bem-vindo text-white font-weight-bold text-decoration">Seja Bem Vindo</h2>
            </div>
      </div>-->

      <div class="row row-space justify-content-center">
        <div class="col-12 col-xs-6 col-sm-5 col-md-4 col-lg-3 col-ja-tenho-conta">
          <router-link to="login">
            <div class="btn btn-outline-light btn-login-register font-weight-bold">JA SOU CONTA ELO</div>
          </router-link>
        </div>
        <div class="col-12 col-xs-6 col-sm-5 col-md-4 col-lg-3 col-quero-conta">
          <router-link to="/register">
            <div
              class="btn btn-outline-light btn-login-register font-weight-bold"
            >QUERO SER CONTA ELO</div>
          </router-link>
        </div>
      </div>

      <div class="row row-space justify-content-center">
        <div class="col-4 col-xs-4 col-sm-4 col-md-1 col-lg-1 text-center">
          <div class="icon-social text-primary">
            <a target="_blank" :href="linkWhatsApp">
              <h5>
                <i class="bg-white-social fab fa-whatsapp"></i>
              </h5>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "RegisterInicial",
  data() {
    return {
      bgImagem: "",
      mobile: false,
      linkWhatsApp: "https://web.whatsapp.com/send?phone=5511998068930"
    };
  },
  beforeMount() {
    this.isMobile();
    document.body.style.backgroundImage = "url('img" + "/bg-conta-elo.png')";
    document.body.style.height = window.innerHeight;
    console.log(window.innerHeight);
  },
  components: {
    // Register,
    // Login,
  },
  methods: {
    isMobile() {
      var userAgent = navigator.userAgent.toLowerCase();
      if (
        userAgent.search(
          /(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i
        ) != -1
      ) {
        this.linkWhatsApp = "whatsapp://send?phone=5511998068930";
      } else {
        this.linkWhatsApp = "https://web.whatsapp.com/send?phone=5511998068930";
      }
    }

    //  $isMobile = isMobile();

    // $(document).ready(function(){
    //   if($isMobile == true){
    //     $(".link-whatsapp").attr("href", "whatsapp://send?phone=5511998068930");
    //   }else{
    //     $(".link-whatsapp").attr("href", "https://web.whatsapp.com/send?phone=5511998068930");
    //   }
    // });
  }
};
</script>

<style>
.btn-login-register {
  width: 100%;
}
.bem-vindo {
  text-decoration: underline;
}
.btn-log {
  margin-top: 25px;
  background-color: #00bcd5;
  border-color: #00bcd5;
}

.col-ja-tenho-conta {
  float: left;
  text-align: left;
}
.col-quero-conta {
  float: right;
  text-align: right;
}

.row-botoes-conta {
  margin-top: 17px;
}

.bg-white-social {
  background-color: white;

  padding: 12px;

  border-radius: 100%;
  color: #006a94;
}

.rem16 {
  font-size: 1.7rem;
}

.rem1 {
  font-size: 1.2rem;
}

.img-david-ceo {
  max-width: 90px;
}

body,
html {
  background-size: cover;
  background-repeat: repeat-y;
  /* background-color: #00A4BA;   */
  background-repeat: repeat-x;
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
  background-repeat: repeat-x;

  width: 100vw;
  height: 100vh;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}

.text-smart {
  color: #00a4ba;
}

.row-suporte {
  margin-top: 30px;
  margin-bottom: 15px;
}

.row-space {
  margin-top: 100px;
}

@media (max-width: 575px) {
  .col-ja-tenho-conta {
    text-align: center;
  }

  .col-quero-conta {
    text-align: center;
    margin-top: 10px;
  }
}
.col-icon {
  margin-right: auto;
}
</style>
