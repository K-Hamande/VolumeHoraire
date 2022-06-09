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
                                <h4 class="card-title" style="text-align:center " >LISTE DES ACTIVITES </h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Periode</th>
                                                <th>ECUE</th>
                                                <th>Debut</th>
                                                <th>Fin</th>
                                                <th>Type Activité</th>
                                                <th>Enseignant</th>
                                                <th>Année Academique</th>
                                                <th>Statu</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                      

                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td> 
                                                
                                                <button type="button" class="btn mb-1 btn-info"> Voir </button>
                                                {{-- {{Route('EditActivite',[id => $Variable->id]) }} --}}
                                                <button type="button" class="btn mb-1 btn-warning"> <a href="{{Route('editActivite')}}"> Modifier</a> </button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Supprimer</button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModalCenter">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"> Suppression d'une activité</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body" style="color: red">
                                                                    Voulez vous vraiment supprimer l'activité ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-info" data-dismiss="modal">NON</button>
                                                                <button type="button" class="btn btn-danger">OUI</button>
                                                            </div>
                                                                    </form>
                                                            </div>       
                                                       </div>
                                                    </div>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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