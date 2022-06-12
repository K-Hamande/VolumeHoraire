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
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center">Ajouter une UE</h4>
                                <form action="" id="step-form-horizontal" class="step-form-horizontal" method="post">
                                    @csrf
                                    <div>
                                        <section>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="etablissement" class="form-control" placeholder="Info L1S1" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="departement" class="form-control" placeholder="UE" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="codeFormation" class="form-control" placeholder="ECUE" required>
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
{{-- ====================================================================================== --}}
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center">INFO L1S1 2022-2023</h4>

                                {{-- ================================================== --}}


                                <div class="active-member">
                                                    <div class="table-responsive">
                                                        <table class="table table-xs mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th>Etablisseent</th>
                                                                    <th>Departement</th>
                                                                    
                                                                    <th>Intitué</th>
                                                                    <th>Niveau</th>
                                                                    <th>Année Academique</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>ST</td>
                                                                    <td>ST</td>
                                                                    <td>
                                                                        <span>Info</span>
                                                                    </td>
                                                                    <td>
                                                                        L1S1
                                                                    </td>
                                                                    <td>2022-2023</td>
                                                                </tr>
                                                               
                                                               
                                                            </tbody>
                                                        </table>
                                </div>

                                {{-- ================================================================================ --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
       
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @include('layouts.script')