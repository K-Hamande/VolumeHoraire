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
                                <h4 class="card-title" style="text-align: center"> INFORMATION SUR L ' ENSEIGNANT</h4>
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
                                                        <span> {{$Attribution->VH_CoursMagistral}} CM ou  {{$Attribution->VH_TravauxDiriges}}  TD</span>
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
                                                        {{-- @if( )
                                                          
                                                        @else
                                                       

                                                        @endif --}}
                                                    </td>
                                                <tr>
                                                </tr>
                                              
                                                <td>Volume H après abattement </td>
                                                
                                                <td style="text-align: right" >
                                                    <span> {{$Attribution->CM_ApresAbattement}} CM  ou {{$Attribution->TD_ApresAbattement}} TD </span>
                                                </td>
                                                

                                                <tr>
                                                    <td>Volume confié en Cours Magistral</td>
                                                    <td style="text-align: right" >
                                                        <span> {{$Attribution->VCM_confie}} </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Volume confié en travaux Dirigés</td>
                                                    <td style="text-align: right" >
                                                        <span> {{$Attribution->VTD_confie}} </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Estimation du volume Horaire restant</td>
                                                    <td style="text-align: right" >
                                                        <span> {{$Attribution->Estimation}} </span>
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