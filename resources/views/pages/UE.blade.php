{{-- debut inclusion du head --}}

@include('layouts.head')

{{-- debut inclusion du head --}}

<body>

{{-- *******************
       debut inclusion du Preloader 
 ******************** --}}
   
            @include('layouts.preloader')

{{-- *******************
        fin inclusion  Preloader 
******************** --}}


{{-- 
     **********************************
        debut inclusion de la barre de navigation horizontale
    *********************************** --}}

                @include('layouts.navbar')


{{-- **********************************
        fin inclusion de la barre de navigation horizontale
*********************************** --}}





  
{{-- **********************************
   debut inclusion de la barre de navigation verticale
*********************************** --}}


        @include('layouts.sidebar')

{{-- 
  **********************************
              fin inclusion de la barre de navigation verticale
        *********************************** --}}





        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{Route('EtablissementRegister')}}" id="step-form-horizontal" class="step-form-horizontal" method="post">
                            @csrf
                            <div>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="intitulé UE" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="number" name="prenom" class="form-control" placeholder="cerdit de l'UE" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <div class="">
                                                <button type="submit" class="btn mb-4 btn-rounded btn-success" style="width: 100%">ENREGISTRER UE</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <a href="{{ Route('ecue')}}"class="btn mb-4 btn-rounded btn-info" style="width: 100%"> AJOUTER UNE MATIERE </a>
                                            </div>
                                        </div>
                                    </div>
                                </section>  
                        </form>


                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>

        <!--**********************************
            Content body end
        ***********************************-->
    
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>


    <script src="./plugins/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="./plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="./js/plugins-init/jquery-steps-init.js"></script>

</body>

</html>