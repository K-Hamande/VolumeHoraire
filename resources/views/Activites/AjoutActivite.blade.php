use App\Models\Permanent;
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

                    <div class="col-lg-2"></div>

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center">Ajouter une formation</h4>
                                <form action="{{ Route('register') }}" id="step-form-horizontal" class="step-form-horizontal" method="post">
                                    @csrf
                                    <div>
                                        <section>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <select class="form-control" id="sel1" name="annee">
                                                           @foreach ($annee as $annees)
                                                           <option value="{{$annees->id}}">{{$annees->annee}}</option>
                                                           @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="number" name="nombreHeure" class="form-control" placeholder="nombre d'Heure" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="date" name="date" class="form-control" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="time" name="heureFin" class="form-control" placeholder="Code Formation" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="time" name="heureFin" class="form-control" placeholder="Code Formation" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <select class="form-control" id="sel1" name="annee">
                                                           @foreach ($Permanent as $Permanents)
                                                           <option value="{{$Permanents->id}}">{{$Permanents->nom}} {{$Permanents->nom}} </option>
                                                           @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <select class="form-control" id="sel1" name="annee">
                                                           @foreach ($Formation as $Formations)
                                                           <option value="">{{$Formations->intituleFormation}}</option>
                                                           @endforeach
                                                        </select>
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
                    <div class="col-lg-2"></div>
                </div>
{{-- ====================================================================================== --}}
                    
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        @include('layouts.script')