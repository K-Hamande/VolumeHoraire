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
                        <li class="breadcrumb-item"><a href="{{Route('Accueil')}}">Accueil</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">liste des departements</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col lg-2"></div>
                    <div class="col-lg-8 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center"> DEPARTEMENT </h4>
                                <form action="" id="step-form-horizontal" class="step-form-horizontal" method="post">
                                    @csrf
                                    <div>
                                        <section>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Selectionner le UFR:</label>
                                                        <select class="form-control" id="sel1" name="choixDep">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="intitule" class="form-control" placeholder="Intitulé Departement" required>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </section>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            
                                        </div>
                                        <div class="col-lg-4">
        
                                                <button type="submit" class="btn mb-4 btn-rounded btn-success" style="width: 100%">ENREGISTRER</button>
                                        </div>
                                        <div class="col-lg-4">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col lg-2"></div>
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