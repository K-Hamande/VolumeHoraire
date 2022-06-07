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
                        <li class="breadcrumb-item"><a href="{{Route('Accueil')}}">ACCUEIL</a></li>
                        {{-- <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li> --}}
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align:center " >LISTE DES ENSEIGNANTS </h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>N Matricule</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Grade</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                      

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td> 
                                                <button type="button" class="btn mb-1 btn-info">Voir</button>
                                                <button type="button" class="btn mb-1 btn-warning">Modifier</button>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                           
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="">
                            <button type="submit" class="btn mb-4 btn-rounded btn-success" style="width: 100%">PERMANANT </button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="">
                            <a href="{{ Route('etablissement')}}"class="btn mb-4 btn-rounded btn-success" style="width: 100%"> VACATAIRE </a>
                        </div>
                    </div>
                </div>{{-- debut inclusion du head --}}

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
                
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
       @include('layouts.footer')
        <!--**********************************
            Footer end
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

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>

</html>