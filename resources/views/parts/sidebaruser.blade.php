<div class="dropdown profile-dropdown dropdown-trigger is-spaced is-right">

                    <img src="{{asset('img/default-user.png')}}" data-demo-src="{{asset('img/default-user.png')}}" alt="">
                    <span class="status-indicator"></span>
                    <div class="dropdown-menu" role="menu">
                        <div class="dropdown-content">
                            <div class="dropdown-head">
                                <div class="h-avatar is-large">
                                    <img class="avatar" src="{{asset('img/default-user.png')}}" data-demo-src="{{asset('img/default-user.png')}}" alt="">
                                </div>

                                <div class="meta">

                                    <span>{{ucfirst(Auth::user()->name)}}</span>

                                    <span>Admin</span>

                                </div>

                            </div>



                            <a href="{{route('users.profile')}}" class="dropdown-item is-media">

                                <div class="icon">

                                    <i class="lnil lnil-user-alt"></i>

                                </div>

                                <div class="meta">

                                    <span>Profile</span>

                                    <span>Afficher mon profile</span>

                                </div>

                            </a>

                            <a href="{{route('users.password')}}" class="dropdown-item is-media">

                                <div class="icon">

                                    <i class="lnil lnil-lock"></i>

                                </div>

                                <div class="meta">

                                    <span>Mot de passe</span>

                                    <span>Modifier mon mot de passe</span>

                                </div>

                            </a>

                            @if(Auth::user()->espace_id == 1 && Auth::user()->role == 'admin')

                                <hr class="dropdown-divider">

                                <a href="{{route('logs')}}" class="dropdown-item is-media layout-switcher">

                                    <div class="icon">

                                        <i class="lnil lnil-alarm-clock"></i>

                                    </div>

                                    <div class="meta">

                                        <span>Logs</span>

                                        <span>Historique d'activité</span>

                                    </div>

                                </a>

                            @endif

                            <hr class="dropdown-divider">

                            <div class="dropdown-item is-button">

                                <a class="button h-button is-raised is-fullwidth logout-button" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="background-color: {{$setting->companycolor}}; color : #fff !important;">

                                      <span class="icon is-small">

                                          <i data-feather="log-out"></i>

                                      </span>

                                    <span>Se déconnecter</span>

                                </a>

                            </div>

                            <form id="logout-form" action="{{route('logout')}}" method="post" style="display: none">@csrf</form>

                        </div>

                    </div>

                </div>
