      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="{{ route('dashboard') }}"><img class="img-fluid" src="{{ asset('assets/logo.png') }}" alt=""></a></div>
          </div>
          <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i></div>
                  <input class="form-control-plaintext" placeholder="Recherche">
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu">
            <ul class="nav-menus">
              {{-- <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="shopping-bag"></i><span class="badge badge-pill badge-secondary">4</span></div>
                <div class="notification-dropdown cart onhover-show-div">
                  <div class="m-3">
                    <div class="row">
                      <div class="col">
                        <p> <b>5 </b>Items in Cart</p>
                      </div>
                      <div class="col text-end">
                        <p class="m-0">Cart Subtotal</p>
                        <h5 class="txt-primary f-w-700">5000$</h5>
                      </div>
                    </div><a class="btn btn-dark w-100 mt-1" href="checkout.html">Process To Checkout</a>
                  </div>
                  <ul class="border-top custom-scrollbar">
                    <li>
                      <div class="media"><img src="../assets/images/product/small/tshirt.png" alt="">
                        <div class="media-body"><a href="product.html">Woman T-shirt - yellow</a>
                          <h6 class="price">200$</h6>
                          <div class="row">
                            <div class="col-9">
                              <h6 class="qty">Qty
                                <input class="form-control" type="number" placeholder="1">
                              </h6>
                            </div>
                            <div class="col-3 text-end d-flex"><i class="me-1" data-feather="edit"></i><i data-feather="trash-2"></i></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media"><img src="../assets/images/product/small/bag.png" alt="">
                        <div class="media-body"><a href="product.html">Woman bag - purple</a>
                          <h6 class="price">100$</h6>
                          <div class="row">
                            <div class="col-9">
                              <h6 class="qty">Qty
                                <input class="form-control" type="number" placeholder="1">
                              </h6>
                            </div>
                            <div class="col-3 text-end d-flex"><i class="me-1" data-feather="edit"></i><i data-feather="trash-2"></i></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media"><img src="../assets/images/product/small/headphone.png" alt="">
                        <div class="media-body"><a href="product.html">Unisex headphone - Red</a>
                          <h6 class="price">2000$</h6>
                          <div class="row">
                            <div class="col-9">
                              <h6 class="qty">Qty
                                <input class="form-control" type="number" placeholder="1">
                              </h6>
                            </div>
                            <div class="col-3 text-end d-flex"><i class="me-1" data-feather="edit"></i><i data-feather="trash-2"></i></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media"><img src="../assets/images/product/small/chair.png" alt="">
                        <div class="media-body"><a href="product.html">Ergonomic Chair</a>
                          <h6 class="price">920$</h6>
                          <div class="row">
                            <div class="col-9">
                              <h6 class="qty">Qty
                                <input class="form-control" type="number" placeholder="1">
                              </h6>
                            </div>
                            <div class="col-3 text-end d-flex"><i class="me-1" data-feather="edit"></i><i data-feather="trash-2"></i></div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="m-3 mt-1"><a class="btn btn-light w-100 mt-3" href="cart.html">View cart</a></div>
                </div>
              </li> --}}

              {{-- <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="badge badge-pill badge-primary">4</span></div>
                <div class="notification-dropdown onhover-show-div">
                  <div class="m-3"><a class="btn btn-dark w-100" href="email_inbox.html">You have 4 notifications</a></div>
                  <ul class="border-top">
                    <li>
                      <p class="mb-0 ps-4 p-relative"><a href="to-do.html"><i class="fa fa-circle me-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></a></p>
                    </li>
                    <li>
                      <p class="mb-0 ps-4 p-relative"><a href="to-do.html"><i class="fa fa-circle me-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></a></p>
                    </li>
                    <li>
                      <p class="mb-0 ps-4 p-relative"><a href="to-do.html"><i class="fa fa-circle me-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></a></p>
                    </li>
                    <li>
                      <p class="mb-0 ps-4 p-relative"><a href="to-do.html"><i class="fa fa-circle me-3 font-warning"></i>Delivery Complete<span class="pull-right">6 hr  </span></a></p>
                    </li>
                  </ul>
                  <div class="m-3 mt-1"><a class="btn btn-light w-100" href="email_inbox.html">View all</a></div>
                </div>
              </li>
              <li class="onhover-dropdown"><i data-feather="message-square"></i>
                <div class="chat-dropdown onhover-show-div">
                  <div class="m-3"><a class="btn btn-dark w-100" href="chat.html">You have 3 message</a></div>
                  <ul class="border-top custom-scrollbar">
                    <li>
                      <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/avtar/emoji/7.png" alt="">
                        <div class="status-circle online"></div>
                        <div class="media-body"><a href="chat.html"><span>Erica Hughes</span></a>
                          <p class="f-12 light-font">okay, trying now.</p>
                        </div>
                        <p class="badge badge-primary">32 min</p>
                      </div>
                    </li>
                    <li>
                      <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/avtar/emoji/8.png" alt="">
                        <div class="status-circle away"></div>
                        <div class="media-body"><a href="chat.html"><span>Kori Thomas</span></a>
                          <p class="f-12 light-font">i could help in some of bug?</p>
                        </div>
                        <p class="badge badge-success">58 min</p>
                      </div>
                    </li>
                    <li>
                      <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/avtar/emoji/4.png" alt="">
                        <div class="status-circle offline"></div>
                        <div class="media-body"><a href="chat.html"><span>Ain Chavez</span></a>
                          <p class="f-12 light-font">It's working awesome :)</p>
                        </div>
                        <p class="badge badge-danger">1 hr</p>
                      </div>
                    </li>
                    <li>
                      <div class="media"><img class="img-fluid rounded-circle me-3" src="../assets/images/avtar/emoji/1.png" alt="">
                        <div class="status-circle offline"></div>
                        <div class="media-body"><a href="chat.html"><span>Johan deo</span></a>
                          <p class="f-12 light-font">Great Thanks you !!</p>
                        </div>
                        <p class="badge badge-danger">2 hr</p>
                      </div>
                    </li>
                  </ul>
                  <div class="m-3"><a class="btn btn-light w-100" href="chat.html">View all</a></div>
                </div>
              </li> --}}
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown">
                <div class="media profile-media"><span style="text-transform: uppercase; background:rgb(110, 7, 114);padding:10px 11px;color:#fff;font-size:1.1em;border-radius:50%">{{ Str::substr(Auth()->guard('organisateur')->user()->nom, '0', '1') }}{{ Str::substr(Auth()->guard('organisateur')->user()->prenom, '0', '1') }}</span></div>
                <ul class="profile-dropdown onhover-show-div" style="width: 250px;position: absolute;left:-150px">
                    <div class="infos text-center">

                        <p> <span style="font-size: 1.3em;font-weight:bold">{{ Auth()->guard('organisateur')->user()->nom, }} {{ Auth()->guard('organisateur')->user()->prenom, }}</span> <br>
                            {{ Auth()->guard('organisateur')->user()->email }}
                        </p>

                        <span></span>
                    </div>


                  <li><a href="#"><i data-feather="user"></i><span>Profile </span></a></li>
                  <li><a href=""><span style="font-size: 12px"></span></a></li>
                  <li><a class="" href="{{ route('logout') }}"><i data-feather="log-in"></i>Déconnexion</a></li>
                  <style>
                    .btn-premium{
                        background: linear-gradient(to right, rgb(173, 160, 36),rgb(116, 105, 6));
                        color:#fff;
                        box-shadow:2px 2px 8px rgba(0, 0, 0, 0.39);
                        transition: all 0.3s ease-in

                    }
                    .btn-premium:hover{
                        scale: 0.9;
                        color: #fff !important;
                        background: linear-gradient(to right, rgb(19, 24, 94),rgb(105, 9, 114))
                    }

                  </style>
                  @if (Auth()->guard('organisateur')->user()->formule->libelle === "basic")

                  <li class="" style=""><a class="nav-link link-nav btn-premium text-light" href="{{ route('premium.all') }}"><i data-feather="award" style=""> </i><span>Passer à Premium  </span></a></li>
                  @else

                  @endif

                </ul>
              </li>
            </ul>
          </div>
          <div class="d-lg-none col mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
