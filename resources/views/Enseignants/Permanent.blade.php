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
                        <li class="breadcrumb-item active"><a href=" {{Route('listeEnseignant')}}">Liste des enseignants</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col lg-2"></div>

                @if (session('Message'))
                <div   class="alert alert-success text-center">
                    <div class="col lg-8">
                        {{session('Message')}}
                    </div>
                </div>
                @endif

                <div class="col lg-2"></div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg"></div>
                    <div class="col-lg-8 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center"> ENSEIGNANT PERMANENT </h4>
                                <form action="{{Route('permanentRegister') }}" id="step-form-horizontal" class="step-form-horizontal" method="post">
                                    @csrf
                                    <div>
                                        <section>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="nom" class="form-control @error('nom') is-invalid  @enderror " placeholder="Nom" value="{{ old('nom')}}" >
                                                    </div>
                                                @error('nom')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="prenom" class="form-control @error('nom') is-invalid  @enderror " placeholder="Prénom"value="{{ old('prenom')}}" >
                                                    </div>
                                                @error('prenom')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="number" name="telephone" class="form-control @error('nom') is-invalid  @enderror " placeholder="Téléphone" value="{{ old('telephone')}}">
                                                    </div>
                                                @error('telephone')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="matricule" class="form-control @error('nom') is-invalid  @enderror " placeholder="Matricule"value="{{ old('matricule')}}" >
                                                    </div>
                                                @error('matricule')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                </div>
                                            </div>
                                        </section>
                                        <section>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control @error('nom') is-invalid  @enderror " placeholder="Email"  value="{{ old('email')}}">
                                                    </div>
                                                @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Selectionner la responsabilité:</label>
                                                        <select class="form-control" id="sel1" name="responsabilite">
                                                           @foreach ($Responsabilite as $responsabilites)
                                                           <option value="{{$responsabilites->id}} " > {{$responsabilites->intituleResponsabilite}} </option>
                                                           @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                        </section>
                                        <section>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Grade:</label>
                                                        <select class="form-control" id="sel1" name="grade">
                                                            @foreach ($Grade as $Grade)
                                                            <option value="{{$Grade->id}}" > {{$Grade->intituleGrade}} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Selectionner l'etablissement:</label>
                                                        <select class="form-control" id="sel1" name="ufr">
                                                           @foreach ($Ufr as $Etablissement)
                                                           <option value="{{$Etablissement->id}} " > {{$Etablissement->intitule}} || {{ $Etablissement->sigle}} </option>
                                                           @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </section>
                                        <section>
                                            <div class="row">
        
                                               
                                                
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
                <div class="col-lg"></div>
                </div>




        <div class="row">
            <div class="col-lg-12">
                {{-- <div class="card">
                    <div class="card-body">
                        <div class="active-member">
                            <div class="table-responsive">
                                <table class="table table-xs mb-0">
                                    <thead>
                                        <tr>
                                            <th>Customers</th>
                                            <th>Product</th>
                                            <th>Country</th>
                                            <th>Status</th>
                                            <th>Payment Method</th>
                                            <th>Activity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="./images/avatar/1.jpg" class=" rounded-circle mr-3" alt="">Sarah Smith</td>
                                            <td>iPhone X</td>
                                            <td>
                                                <span>United States</span>
                                            </td>
                                            <td>
                                                <div>
                                                    <div class="progress" style="height: 6px">
                                                        <div class="progress-bar bg-success" style="width: 50%"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                            <td>
                                                <span>Last Login</span>
                                                <span class="m-0 pl-3">10 sec ago</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="./images/avatar/2.jpg" class=" rounded-circle mr-3" alt="">Walter R.</td>
                                            <td>Pixel 2</td>
                                            <td><span>Canada</span></td>
                                            <td>
                                                <div>
                                                    <div class="progress" style="height: 6px">
                                                        <div class="progress-bar bg-success" style="width: 50%"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                            <td>
                                                <span>Last Login</span>
                                                <span class="m-0 pl-3">50 sec ago</span>
                                            </td>
                                        </tr>
                                        <tr>
                                          
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                </div>                        
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        {{-- ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div> --}}
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @include('layouts.script')