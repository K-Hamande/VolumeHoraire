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

            <div class="container-fluid mt-3">
                
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center"> INFORMATION SUR L'ENSEIGNANT</h4>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Designation</th>

                                                  
                                                    <th style="text-align: right">Détail</th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>Matricule</td>
                                                    <td style="text-align: right" >
                                                        <span> {{$Permanent->matricule}} </span>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nom & Prénom</td>
                                                    <td style="text-align: right" >
                                                        <span> {{ Str::of($Permanent->nom)->upper() }}  </span>
                                                        <span> {{$Permanent->prenom}} </span>
                                                    </td>
                                                <tr>
                                                    <td>Responsabilité</td>
                                                    <td style="text-align: right" >
                                                        <span> {{$Permanent->Responsabilite->intituleResponsabilite}} </span> 
                                                        
                                                    </td>
                                                <tr>
                                                    <td>Grade</td>
                                                    <td style="text-align: right" >
                                                        {{$Permanent->Grade->intituleGrade}} </span> 
                                                    </td>
                                                </tr>
                                              
                                                    <td>Volume H Statutaire</td>
                                                    
                                                    <td style="text-align: right" >
                                                        <span> {{$Permanent->attribution->VH_CoursMagistral}} CM ou  {{$Permanent->attribution->VH_TravauxDiriges}}  TD</span>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Taux d'abattement</td>
                                                    <td style="text-align: right">

                                                        @if ($Permanent->Responsabilite->typeAbattement == "Pourcentage(%)" )
                                                             <span> {{$Permanent->Responsabilite->abattement}} % </span>
                                                        @else
                                                        <span> {{$Permanent->Responsabilite->abattement}} Heures  </span>
                                                        @endif
                                                       
                                                    </td>
                                                <tr>
                                                </tr>
                                              
                                                <td>Volume H après abattement </td>
                                                
                                                <td style="text-align: right" >
                                                    <span> {{$Permanent->attribution->CM_ApresAbattement}} CM  ou {{$Permanent->attribution->TD_ApresAbattement}} TD </span>
                                                </td>
                                                

                                                <tr>
                                                    <td>Volume confié en Cours Magistral</td>
                                                    <td style="text-align: right" >
                                                        <span> {{$Permanent->attribution->VCM_confie}} </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Volume confié en travaux Dirigés</td>
                                                    <td style="text-align: right" >
                                                        <span> {{$Permanent->attribution->VTD_confie}} </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Estimation du volume Horaire restant</td>
                                                    <td style="text-align: right" >
                                                        <span> {{$Permanent->attribution->Estimation}} </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="{{Route('updatAttribution',['id'=>$Permanent->attribution->id])}}"> <button type="button" class="btn btn-warning">Modifier</button> </a>
                                                    </td>
                                                    <td style="text-align: right" >
                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Supprimer</button>
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
                                                                    <a href="{{Route('updatAttribution',['id'=>$Permanent->attribution->id])}}"><button type="button" class="btn btn-danger">OUI</button></a>
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
               

            </div>
            <div class="col-lg-2"></div>
        </div>
            <!-- #/ container -->
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @include('layouts.script2')