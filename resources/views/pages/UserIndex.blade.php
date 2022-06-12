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
                                <h4 class="card-title" style="text-align:center " >LISTE DES UTILISATEURS </h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Email</th>
                                                <th>Sexe</th>
                                                <th>Téléphone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                       @foreach ($AllUsers as $Users)

                                    <tbody>
                                        <tr>
                                            <td> {{ $Users->name }} </td>
                                            <td> {{ $Users->prenom }} </td>
                                            <td> {{ $Users->email }} </td>
                                            <td> {{ $Users->sexe }} </td>
                                            <td> {{ $Users->telephone }} </td>
                                        
                                            <td> 
                                                    <button type="button" class="btn btn-info">Voir</button>
                                                    <a href=" {{Route('updatUser',['id'=>$Users->id])}} "> <button type="button" class="btn btn-warning">Modifier</button> </a>
                                                    <a href="{{Route('deletUser',['id'=>$Users->id])}}"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Supprimer</button></a>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModalCenter">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"> Suppression d'un utilisateur</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body" style="color: red">
                                                                    Voulez vous vraiment supprimer  ?
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
                                           
                                       @endforeach
                                       
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

    @include('layouts.script')