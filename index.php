<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://nafezly.com/css/cust-fonts.css">
    <link rel="stylesheet" type="text/css" href="https://nafezly.com/css/fontawsome.min.css">
    <link rel="stylesheet" type="text/css" href="https://nafezly.com/css/responsive-font.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>Dashboard • Link Shortener API</title>
  </head>
  <body>

    <div class="col-12 p-0" id="wp-main-container">
    
    <div class="col-12 py-1" style="min-height:calc( 100vh - 300px)">
       <div class="container">
        <div class="col-12 p-0">
          <div class="col-lg-6 col-12 mx-auto p-0">

            <div class="elm__logo">
              <img src="/assets/img/large.png">
            </div>

            <div class="col-12 py-1 text-center" v-if="response!=null">
              <div class="col-12 py-1" v-if="response!=null">
                <div class="col-12 py-1" v-if="response.link_id!=null">
                  <div class="col-12">
                    <a v-bind:href="response.short_link" target="_blank">{{response.short_link}}</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 pt-1">
               <input type="url" v-model="search_input" class="form-control focus-0 rounded-pill px-4 text-center" style="box-shadow: unset!important;height: 50px;" placeholder="Place your long link here">
             </div>
             <div class="col-12 py-5 text-center justify-content-center d-flex align-items-center text-center">
               <button class="btn btn-primary rounded-pill px-5 py-2 font-2 d-inline-block mx-auto focus-0" @click="shorten()" style="box-shadow:unset!important;" style="background-color: #3CB371;">SHORT IT<span class="fas fa-spinner-third fa-spin" v-if="isloading"></span> </button>
             </div>
             
             <div class="col-12 py-3 text-center">
              <a href="https://github.com/ismailian/short-ui" target="_blank">
                <span class="fab fa-github font-5 mb-4 d-inline-block" style="color: #6cc644;"></span> 
              </a>
            </div>
             
          </div>
        </div>
       </div>
    </div> 

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
  </body>
</html>