
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    
                    <li class="nav-label">
                        <a href="{{Route('Accueil')}}"> <i class="icon-copy fa fa-dashboard" aria-hidden="true"></i> ACCUEIL </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">{{ Auth::user()->pseudo }}</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="#"> Role </a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-copy fa fa-briefcase"></i> <span class="nav-text"> Attribution</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a a href="{{Route('attribution')}}">Nouvelle Attribution</a></li>
                            <li><a href="{{Route('listeAttribution')}}">liste des Attributions</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-copy fa fa-briefcase"></i> <span class="nav-text"> Activité Pédagogique</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a a href="{{Route('nouvelleActivite')}}">Nouvelle Activité</a></li>
                            <li><a href="{{Route('activiteProgrammer')}}">Activité Programmée</a></li>
                            <li><a href="{{Route('activiteTerminer')}}">Activité Terminée </a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-copy fa fa-briefcase"></i> <span class="nav-text"> Formation</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{Route('addFormationList')}}">Nouvelle Formation</a></li>
                            <li><a href=" {{Route('listFormation')}} ">Liste des formations</a></li>
                        </ul>
                    </li>

                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow"" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Enseignants</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <li class="mega-menu mega-menu-sm">
                                    <a class="has-arrow"" aria-expanded="false">
                                        <span class="nav-text">Enregistrement</span>
                                    </a>
                                    <ul aria-expanded="false">
                                        <li><a href="{{Route('permanent')}}">Permanent </a></li>
                                        <li><a href="{{Route('vacataire')}}">Vacataire</a></li>
                                    </ul>
                                </li>

                            </li>
                            <li><a href="{{Route('listeEnseignant')}}">liste des Enseignant</a></li>
                            <li><a href="{{Route('responsabilite')}}"> Responsabilité Enseignant </a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow"" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Délegués</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{Route('enseignantActivite')}}">Enregistrement</a></li>
                            <li><a href="{{Route('enseignantActivite')}}">Activité En cours </a></li>
                            
                        </ul>
                    </li>

                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow"" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Parametrage</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{Route('createUser')}}">Utilisateur</a></li>
                            <li><a href="{{Route('etablissement')}}">Etablissement</a></li>
                            <li><a href="{{Route('grade')}}">Grade Enseignant</a></li>
                            <li><a href="{{Route('departement')}}">Département</a></li>
                            <li><a href="{{Route('filiere')}}">Filière</a></li>
                            <li><a href="{{Route('ue')}}">UE</a></li>
                            <li><a href="{{Route('ecue')}}">ECUE</a></li>
                            <li><a href="{{Route('annee')}}">Année Academique</a></li>
                        </ul>
                    </li>

                    {{-- <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow"" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Parametrage</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{Route('createUser')}}">Utilisateur</a></li>
                            <li><a href="{{Route('etablissement')}}">Etablissement</a></li>
                            <li><a href="{{Route('departement')}}">Département</a></li>
                            <li><a href="{{Route('filiere')}}">Filière</a></li>
                            <li><a href="{{Route('ue')}}">UE</a></li>
                            <li><a href="{{Route('ecue')}}">Matière</a></li>
                        </ul>
                    </li> --}}
                   
                   
                  {{-- <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i> <span class="nav-text">Charts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./chart-flot.html">Flot</a></li>
                            <li><a href="./chart-morris.html">Morris</a></li>
                            <li><a href="./chart-chartjs.html">Chartjs</a></li>
                            <li><a href="./chart-chartist.html">Chartist</a></li>
                            <li><a href="./chart-sparkline.html">Sparkline</a></li>
                            <li><a href="./chart-peity.html">Peity</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="nav-label">UI Components</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">UI Components</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.html">Accordion</a></li>
                            <li><a href="./ui-alert.html">Alert</a></li>
                            <li><a href="./ui-badge.html">Badge</a></li>
                            <li><a href="./ui-button.html">Button</a></li>
                            <li><a href="./ui-button-group.html">Button Group</a></li>
                            <li><a href="./ui-cards.html">Cards</a></li>
                            <li><a href="./ui-carousel.html">Carousel</a></li>
                            <li><a href="./ui-dropdown.html">Dropdown</a></li>
                            <li><a href="./ui-list-group.html">List Group</a></li>
                            <li><a href="./ui-media-object.html">Media Object</a></li>
                            <li><a href="./ui-modal.html">Modal</a></li>
                            <li><a href="./ui-pagination.html">Pagination</a></li>
                            <li><a href="./ui-popover.html">Popover</a></li>
                            <li><a href="./ui-progressbar.html">Progressbar</a></li>
                            <li><a href="./ui-tab.html">Tab</a></li>
                            <li><a href="./ui-typography.html">Typography</a></li>
                        <!-- </ul>
                    </li> --}}
                    {{-- <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-layers menu-icon"></i><span class="nav-text">Components</span>
                        </a>
                        <ul aria-expanded="false"> -->
                            <li><a href="./uc-nestedable.html">Nestedable</a></li>
                            <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="./uc-toastr.html">Toastr</a></li>
                        </ul>
                    </li> --}}
                        {{-- <li>
                            <a href="widgets.html" aria-expanded="false">
                                <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>
                            </a>
                        </li> --}}
                    {{-- <li class="nav-label">Forms</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./form-basic.html">Basic Form</a></li>
                            <li><a href="./form-validation.html">Form Validation</a></li>
                            <li><a href="./form-step.html">Step Form</a></li>
                            <li><a href="./form-editor.html">Editor</a></li>
                            <li><a href="./form-picker.html">Picker</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Table</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./table-basic.html" aria-expanded="false">Basic Table</a></li>
                            <li><a href="./table-datatable.html" aria-expanded="false">Data Table</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="nav-label">Pages</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./page-login.html">Login</a></li>
                            <li><a href="./page-register.html">Register</a></li>
                            <li><a href="./page-lock.html">Lock Screen</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>