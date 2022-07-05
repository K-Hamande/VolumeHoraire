
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    
                    <li class="nav-label">
                        <a href="{{Route('Accueil')}}"> <i class="icon-copy fa fa-home" aria-hidden="true"></i> ACCUEIL </a>
                    </li>
                  

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-copy fa fa-sitemap" aria-hidden="true"></i><span class="nav-text"> Attribution</span>
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
                            <i class="icon-copy fa fa-mortar-board" aria-hidden="true"></i> <span class="nav-text"> Formation</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{Route('addFormationList')}}">Nouvelle Formation</a></li>
                            <li><a href=" {{Route('listFormation')}} ">Liste des formations</a></li>
                        </ul>
                    </li>

                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow"" aria-expanded="false">
                            <i class="icon-copy fa fa-vcard" aria-hidden="true"></i><span class="nav-text">Enseignants</span>
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
                            <i class="icon-copy fa fa-group" aria-hidden="true"></i><span class="nav-text">Délegués</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{Route('enseignantActivite')}}">Enregistrement</a></li>
                            <li><a href="{{Route('enseignantActivite')}}">Activité En cours </a></li>
                            
                        </ul>
                    </li>

                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow"" aria-expanded="false">
                            <i class="icon-copy fa fa-gears" aria-hidden="true"></i><span class="nav-text">Parametrage</span>
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

                </ul>
            </div>
        </div>