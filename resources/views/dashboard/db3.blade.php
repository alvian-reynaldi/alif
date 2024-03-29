<div class="content-wrapper">
          <div class="row mb-4">
            <div class="col-12 d-flex align-items-center justify-content-between">
              <h4 class="page-title">Dashboard Project</h4>
              <div class="d-flex align-items-center">
                <div class="wrapper mr-4 d-none d-sm-block">
                  <p class="mb-0">Summary for
                    <b class="mb-0">{{ now()->format('d M Y') }}</b>
                  </p>
                </div>
                <div class="wrapper">
                  <a href="#" class="btn btn-link d-inline-flex font-weight-bold">
                    <i class="icon-share-alt mr-1"></i>Export CSV</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 card-statistics">
              <div class="row">
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn btn-danger btn-rounded px-3 py-3 mr-2">
                          <i class="icon-docs md-18"></i>
                        </div>
                        <div class="mr-2">
                          <h5 class="card-title">New projects</h5>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div>
                          <h2>23</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn btn-info btn-rounded px-3 py-3 mr-2">
                          <i class="icon-wallet md-18"></i>
                        </div>
                        <div class="mr-2">
                          <h5 class="card-title">In Progress</h5>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div>
                          <h2>76</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn btn-warning btn-rounded px-3 py-3 mr-2">
                          <i class="icon-wallet md-18"></i>
                        </div>
                        <div class="mr-2">
                          <h5 class="card-title">Projects Done</h5>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-warning w-25" role="progressbar" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div>
                          <h2>83</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn btn-success btn-rounded px-3 py-3 mr-2">
                          <i class="icon-basket md-18"></i>
                        </div>
                        <div class="mr-2">
                          <h5 class="card-title">Total projects</h5>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div>
                          <h2>93</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Todo List</h4>
                  <ul class="d-flex justify-content-end">
                    <li class="text-success mr-3">
                      <h6 class="mb-0"><i class="fa fa-circle mr-1"></i>Mac</h6>
                    </li>
                    <li class="text-primary">
                      <h6 class="mb-0"><i class="fa fa-circle mr-1"></i>Windows</h6>
                    </li>
                  </ul>
                  <div id="ct-visits"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
              <div id="ct-daily-sales"></div>
              <div class="card">
                <div class="card-body">
                  <div class="media align-items-center">
                    <div class="media-body mr-2">
                      <h4 class="card-title mb-1">Todo List</h4>
                      <p class="mb-0">Ios app - 160 sales</p>
                    </div>
                    <div class="btn btn-primary btn-rounded px-3 py-3">
                      <i class="icon-basket md-18"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
              <div class="card">
                <div class="bg-primary card-body py-3">
                  <div class="d-flex align-items-center">
                    <i class="mdi mdi-weather-fog text-white md-48 mr-3"></i>
                    <div>
                      <h2 class="text-white mb-0">35<sup>o</sup></h2>
                      <h5 class="text-white mb-0">Clear and sunny</h5>
                    </div>
                  </div>
                  <div id="ct-weather" style="height: 120px">
                  </div>
                  <ul class="d-flex justify-content-between text-white">
                    <li>05 AM</li>
                    <li>10 AM</li>
                    <li>03 PM</li>
                    <li>08 PM</li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="media align-items-center">
                    <div class="media-body mr-2">
                      <h2 class="mb-1 card-title">Sunday</h2>
                      <p class="mb-0">November 2018</p>
                    </div>
                    <div class="btn btn-success btn-rounded px-3 py-3">
                      <i class="mdi mdi-weather-sunny md-18"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 col-lg-8 col-xl-9 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="tab-responsive">
                    <ul class="nav mb-4 line-tabs tabs-container">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#user"><i class="mdi mdi-account-outline md-18"></i>
                          Select Users</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#permission"><i class="mdi mdi-lock-outline md-18"></i>
                          Set
                          Permissions</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#manage"><i class="mdi mdi-receipt md-18"></i> Manage
                          Users</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#save"><i class="mdi mdi-checkbox-marked-outline md-18"></i>
                          Save and finish</a>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-content bg-light">
                    <section class="tab-pane active" id="user">
                      <div class="row align-items-center">
                        <div class="col-12 col-lg-6">
                          <div class="px-4 py-3">
                            <h5 class="card-title mb-0">Select Users to Manage</h5>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6">
                          <div class="px-4 py-3">
                            <ul class="d-flex justify-content-end">
                              <li class="mr-4"><a href="javascript:void(0)"><span class="btn btn-rounded btn-success px-3 py-3"><i
                                      class="mdi mdi-plus md-18"></i></span> Add Users</a></li>
                              <li><a href="javascript:void(0)"><span class="btn btn-rounded btn-danger px-3 py-3"><i
                                      class="icon-note md-18"></i></span>
                                  Edit</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive mt-4">
                        <table id="example" class="table" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th></th>
                              <th></th>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Joined</th>
                              <th>Location</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="custom-checkbox variation3 mb-0">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <i class="input-helper"></i>
                                  </label>
                                </div>
                              </td>
                              <td><img alt="user" class="rounded-circle align-middle" src="{{ asset('images/users-thumbs/user-5.jpg') }}"
                                  width="24"></td>
                              <td>Andrew Simons</td>
                              <td>Modulator</td>
                              <td>6 May 2016</td>
                              <td>Sydney, Australia</td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="custom-checkbox variation3 mb-0">
                                    <input class="form-check-input" type="checkbox">
                                    <i class="input-helper"></i>
                                  </label>
                                </div>
                              </td>
                              <td><img alt="user" class="rounded-circle align-middle" src="{{ asset('images/users-thumbs/user-6.jpg') }}"
                                  width="24"></td>
                              <td>Hanna Daniel</td>
                              <td>Admin</td>
                              <td>13 Jan 2005</td>
                              <td>Texas, United states</td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="custom-checkbox variation3 mb-0">
                                    <input class="form-check-input" type="checkbox">
                                    <i class="input-helper"></i>
                                  </label>
                                </div>
                              </td>
                              <td><img alt="user" class="rounded-circle align-middle" src="{{ asset('images/users-thumbs/user-7.jpg') }}"
                                  width="24"></td>
                              <td>Lisa Warden</td>
                              <td>Admin</td>
                              <td>21 Mar 2001</td>
                              <td>Las vegas, United states</td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="custom-checkbox variation3 mb-0">
                                    <input class="form-check-input" type="checkbox">
                                    <i class="input-helper"></i>
                                  </label>
                                </div>
                              </td>
                              <td><img alt="user" class="rounded-circle align-middle" src="{{ asset('images/users-thumbs/user-8.jpg') }}"
                                  width="24"></td>
                              <td>Julia ann</td>
                              <td>Admin</td>
                              <td>21 Mar 2004</td>
                              <td>New York, United states</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </section>
                    <section class="tab-pane" id="permission">
                      <div class="row align-items-center">
                        <div class="col-12 col-sm-6">
                          <div class="px-4 py-3">
                            <h5 class="card-title mb-0">Set Users Permission</h5>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6">
                          <div class="px-4 py-3">
                            <ul class="d-flex justify-content-end">
                              <li class="mr-4"><a href="javascript:void(0)"><span class="btn btn-rounded btn-success px-3 py-3"><i
                                      class="mdi mdi-plus md-18"></i></span> Add Users</a></li>
                              <li><a href="javascript:void(0)"><span class="btn btn-rounded btn-danger px-3 py-3"><i
                                      class="icon-note md-18"></i></span>
                                  Edit</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive mt-4">
                        <table id="example" class="table" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th></th>
                              <th></th>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Joined</th>
                              <th>Location</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="custom-checkbox variation3 mb-0">
                                    <input class="form-check-input" type="checkbox">
                                    <i class="input-helper"></i>
                                  </label>
                                </div>
                              </td>
                              <td><img alt="user" class="rounded-circle align-middle" src="{{ asset('assets/images/users-thumbs/user-5.jpg') }}"
                                  width="24"></td>
                              <td>Andrew Simons</td>
                              <td>Modulator</td>
                              <td>6 May 2016</td>
                              <td>Sydney, Australia</td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="custom-checkbox variation3 mb-0">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <i class="input-helper"></i>
                                  </label>
                                </div>
                              </td>
                              <td><img alt="user" class="rounded-circle align-middle" src="{{ asset('images/users-thumbs/user-6.jpg') }}"
                                  width="24"></td>
                              <td>Hanna Daniel</td>
                              <td>Admin</td>
                              <td>13 Jan 2005</td>
                              <td>Texas, United states</td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="custom-checkbox variation3 mb-0">
                                    <input class="form-check-input" type="checkbox">
                                    <i class="input-helper"></i>
                                  </label>
                                </div>
                              </td>
                              <td><img alt="user" class="rounded-circle align-middle" src="{{ asset('images/users-thumbs/user-7.jpg') }}"
                                  width="24"></td>
                              <td>Lisa Warden</td>
                              <td>Admin</td>
                              <td>21 Mar 2001</td>
                              <td>Las vegas, United states</td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="custom-checkbox variation3 mb-0">
                                    <input class="form-check-input" type="checkbox">
                                    <i class="input-helper"></i>
                                  </label>
                                </div>
                              </td>
                              <td><img alt="user" class="rounded-circle align-middle" src="{{ asset('images/users-thumbs/user-8.jpg') }}"
                                  width="24"></td>
                              <td>Julia ann</td>
                              <td>Admin</td>
                              <td>21 Mar 2004</td>
                              <td>New York, United states</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </section>
                    <section class="tab-pane" id="manage">
                      <div class="row align-items-center">
                        <div class="col-12 col-sm-6">
                          <div class="px-4 py-3">
                            <h5 class="card-title mb-0">Manage Users</h5>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6">
                          <div class="px-4 py-3">
                            <ul class="d-flex justify-content-end">
                              <li class="mr-4"><a href="javascript:void(0)"><span class="btn btn-rounded btn-success px-3 py-3"><i
                                      class="mdi mdi-plus md-18"></i></span> Add Users</a></li>
                              <li><a href="javascript:void(0)"><span class="btn btn-rounded btn-danger px-3 py-3"><i
                                      class="icon-note md-18"></i></span>
                                  Edit</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive mt-4">
                        <div class="table-responsive mt-4">
                          <table id="example" class="table" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th></th>
                                <th></th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Joined</th>
                                <th>Location</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <div class="form-check">
                                    <label class="custom-checkbox variation3 mb-0">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="input-helper"></i>
                                    </label>
                                  </div>
                                </td>
                                <td><img alt="user" class="rounded-circle align-middle" src="{{ asset('images/users-thumbs/user-5.jpg') }}"
                                    width="24"></td>
                                <td>Andrew Simons</td>
                                <td>Modulator</td>
                                <td>6 May 2016</td>
                                <td>Sydney, Australia</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="form-check">
                                    <label class="custom-checkbox variation3 mb-0">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="input-helper"></i>
                                    </label>
                                  </div>
                                </td>
                                <td><img alt="user" class="rounded-circle align-middle" src="{{ asset('images/users-thumbs/user-6.jpg') }}"
                                    width="24"></td>
                                <td>Hanna Daniel</td>
                                <td>Admin</td>
                                <td>13 Jan 2005</td>
                                <td>Texas, United states</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="form-check">
                                    <label class="custom-checkbox variation3 mb-0">
                                      <input class="form-check-input" type="checkbox" checked>
                                      <i class="input-helper"></i>
                                    </label>
                                  </div>
                                </td>
                                <td><img alt="user" class="rounded-circle align-middle" src="{{ asset('images/users-thumbs/user-7.jpg') }}"
                                    width="24"></td>
                                <td>Lisa Warden</td>
                                <td>Admin</td>
                                <td>21 Mar 2001</td>
                                <td>Las vegas, United states</td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="form-check">
                                    <label class="custom-checkbox variation3 mb-0">
                                      <input class="form-check-input" type="checkbox">
                                      <i class="input-helper"></i>
                                    </label>
                                  </div>
                                </td>
                                <td><img alt="user" class="rounded-circle align-middle" src="{{ asset('images/users-thumbs/user-8.jpg') }}"
                                    width="24"></td>
                                <td>Julia ann</td>
                                <td>Admin</td>
                                <td>21 Mar 2004</td>
                                <td>New York, United states</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </section>
                    <section class="tab-pane" id="save">
                      <div class="row align-items-center">
                        <div class="col-12 col-sm-6">
                          <div class="px-4 py-3">
                            <h5 class="card-title mb-0">Save and finish</h5>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6">
                          <div class="px-4 py-3">
                            <ul class="d-flex justify-content-end">
                              <li class="mr-4"><a href="javascript:void(0)"><span class="btn btn-rounded btn-success px-3 py-3"><i
                                      class="mdi mdi-plus md-18"></i></span> Add Users</a></li>
                              <li><a href="javascript:void(0)"><span class="btn btn-rounded btn-danger px-3 py-3"><i
                                      class="icon-note md-18"></i></span>
                                  Edit</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive mt-4">
                        <table id="example" class="table" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th></th>
                              <th></th>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Joined</th>
                              <th>Location</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="custom-checkbox variation3 mb-0">
                                    <input class="form-check-input" type="checkbox">
                                    <i class="input-helper"></i>
                                  </label>
                                </div>
                              </td>
                              <td><img alt="user" class="rounded-circle align-middle" src="{{ asset('images/users-thumbs/user-5.jpg') }}"
                                  width="24"></td>
                              <td>Andrew Simons</td>
                              <td>Modulator</td>
                              <td>6 May 2016</td>
                              <td>Sydney, Australia</td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="custom-checkbox variation3 mb-0">
                                    <input class="form-check-input" type="checkbox">
                                    <i class="input-helper"></i>
                                  </label>
                                </div>
                              </td>
                              <td><img alt="user" class="rounded-circle align-middle" src="{{ asset('images/users-thumbs/user-7.jpg') }}"
                                  width="24"></td>
                              <td>Hanna Daniel</td>
                              <td>Admin</td>
                              <td>13 Jan 2005</td>
                              <td>Texas, United states</td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="custom-checkbox variation3 mb-0">
                                    <input class="form-check-input" type="checkbox">
                                    <i class="input-helper"></i>
                                  </label>
                                </div>
                              </td>
                              <td><img alt="user" class="rounded-circle align-middle" src="{{ asset('images/users-thumbs/user-7.jpg') }}"
                                  width="24"></td>
                              <td>Lisa Warden</td>
                              <td>Admin</td>
                              <td>21 Mar 2001</td>
                              <td>Las vegas, United states</td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="custom-checkbox variation3 mb-0">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <i class="input-helper"></i>
                                  </label>
                                </div>
                              </td>
                              <td><img alt="user" class="rounded-circle align-middle" src="{{ asset('images/users-thumbs/user-8.jpg') }}"
                                  width="24"></td>
                              <td>Julia ann</td>
                              <td>Admin</td>
                              <td>21 Mar 2004</td>
                              <td>New York, United states</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </section>
                  </div>
                  <div class="pt-4">
                    <button class="btn btn-primary submit-btn with-arrow rounded-border"> Submit </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 col-lg-4 col-xl-3 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex">
                    <a href="javascript:void(0)" class="d-flex align-items-center">
                      <span class="btn btn-rounded btn-success px-3 py-3 mr-3">
                        <i class="mdi mdi-plus md-18"></i>
                      </span>
                      <div>
                        <h4 class="mb-0 card-title">$480.50</h4>
                        <p class="mb-0 text-muted">Your wallet balance</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div id="morris-area-chart2">
                </div>
                <div class="card-body py-3">
                  <ul class="list wallet-list">
                    <li><i class="icon-wallet md-18"></i><a href="javascript:void(0)">Withdrow money</a></li>
                    <li><i class="icon-handbag md-18"></i><a href="javascript:void(0)">Shop Now</a></li>
                    <li><i class="icon-link md-18"></i><a href="javascript:void(0)">Add funds</a></li>
                    <li><i class="icon-bag md-18"></i><a href="javascript:void(0)">Cart</a></li>
                    <li><i class="icon-wallet md-18"></i><a href="javascript:void(0)">Withdrow money</a></li>
                    <li><i class="icon-handbag md-18"></i><a href="javascript:void(0)">Shop Now</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-4 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-sm-4">
                      <img src="{{ asset('images/users-thumbs/user-9.jpg') }}" alt="pic" class="rounded-circle" />
                    </div>
                    <div class="col-sm-8">
                      <h2 class="mb-2">Jhon Kristeen</h2>
                      <h4 class="mb-4">UIUX Designer</h4>
                      <a href="javascript:void(0)" class="btn btn-sm rounded-border btn-success">
                        <i class="mdi mdi-plus md-18 mr-1"></i> FOLLOW
                      </a>
                    </div>
                  </div>
                  <div class="d-flex mt-5 justify-content-between align-items-center">
                    <div class="text-center">
                      <h4>14</h4>
                      <h6>PHOTOS</h6>
                    </div>
                    <div class="text-center">
                      <h4>54</h4>
                      <h6>VIDEOS</h6>
                    </div>
                    <div class="text-center">
                      <h4>145</h4>
                      <h6>TASKS</h6>
                    </div>
                  </div>
                </div>
                <div class="px-4 py-4 border-top border-bottom">
                  <h5 class="mb-0 text-center font-weight-100">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit, sed do
                    eiusmod tempor incididunt ut
                    labore </h5>
                </div>
                <div class="px-4 py-4 text-center">
                  <h4 class="font-weight-600">Followers</h4>
                  <ul class="align-items-center justify-content-between d-flex mt-4">
                    <li><img src="{{ asset('images/users-thumbs/user-10.jpg') }}" alt="varun" width="60" data-toggle="tooltip"
                        title="" class="rounded-circle" data-original-title="Varun Dhavan"></li>
                    <li><img src="{{ asset('images/users-thumbs/user-11.jpg') }}" alt="varun" width="60" data-toggle="tooltip"
                        title="" class="rounded-circle" data-original-title="Varun Dhavan"></li>
                    <li><img src="{{ asset('images/users-thumbs/user-12.jpg') }}" alt="varun" width="60" data-toggle="tooltip"
                        title="" class="rounded-circle" data-original-title="Varun Dhavan"></li>
                    <li><a href="" class="rounded-circle px-4 py-4 bg-primary text-white" data-toggle="tooltip" title=""
                        data-original-title="More">5+</a></li>
                  </ul>
                </div>
                <div class="border-top px-4 py-4">
                  <div class="d-flex align-items-center justify-content-between">
                    <a href="javascript:void(0)" class="btn-outline-fb btn-social-outline btn-rounded mr-2">
                      <i class="mdi mdi-facebook"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-outline-tw btn-social-outline btn-rounded mr-2">
                      <i class="mdi mdi-twitter"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-outline-dribble btn-social-outline btn-rounded mr-2">
                      <i class="mdi mdi-dribbble"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-outline-ln btn-social-outline btn-rounded mr-2">
                      <i class="mdi mdi-linkedin"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-outline-gplus btn-social-outline btn-rounded">
                      <i class="mdi mdi-google-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-8 col-sm-12 mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">MANAGE USERS</h4>
                  <div class="table-responsive">
                    <table class="table table-hover manage-u-table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>NAME</th>
                          <th>OCCUPATION</th>
                          <th>EMAIL</th>
                          <th>CATEGORY</th>
                          <th>MANAGE</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center">1</td>
                          <td><span class="font-medium">Jhon Kristeen</span>
                            <br><span class="text-muted">Texas, United states</span></td>
                          <td>Visual Designer
                            <br><span class="text-muted">Past : teacher</span></td>
                          <td>jhon@website.com
                            <br><span class="text-muted">999 - 444 - 555</span></td>
                          <td>
                            <select class="form-control">
                              <option>Modulator</option>
                              <option>Admin</option>
                              <option>User</option>
                              <option>Subscriber</option>
                            </select>
                          </td>
                          <td>
                            <a href="javascript:void(0)" class="mr-3"><i class="icon-trash md-18"></i></a>
                            <a href="javascript:void(0)"><i class="icon-note md-18"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">2</td>
                          <td><span class="font-medium">Andrew Simons</span>
                            <br><span class="text-muted">California, United States</span></td>
                          <td>UI Developer
                            <br><span class="text-muted">Past : Speaker</span></td>
                          <td>andrew@website.com
                            <br><span class="text-muted">999 - 412 - 512</span></td>
                          <td>
                            <select class="form-control">
                              <option>Modulator</option>
                              <option>Admin</option>
                              <option>User</option>
                              <option>Subscriber</option>
                            </select>
                          </td>
                          <td>
                            <a href="javascript:void(0)" class="mr-3"><i class="icon-trash md-18"></i></a>
                            <a href="javascript:void(0)"><i class="icon-note md-18"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">3</td>
                          <td><span class="font-medium">Hina Khan</span>
                            <br><span class="text-muted">New Delhi, India</span></td>
                          <td>UI/UX Designer
                            <br><span class="text-muted">Past : Model</span></td>
                          <td>hina@website.com
                            <br><span class="text-muted">999 - 400 - 005</span></td>
                          <td>
                            <select class="form-control">
                              <option>Modulator</option>
                              <option>Admin</option>
                              <option>User</option>
                              <option>Subscriber</option>
                            </select>
                          </td>
                          <td>
                            <a href="javascript:void(0)" class="mr-3"><i class="icon-trash md-18"></i></a>
                            <a href="javascript:void(0)"><i class="icon-note md-18"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">4</td>
                          <td><span class="font-medium">Sunil Grover</span>
                            <br><span class="text-muted">Texas, United states</span></td>
                          <td>Back End Developer
                            <br><span class="text-muted">Past : teacher</span></td>
                          <td>sunil@website.com
                            <br><span class="text-muted">999 - 444 - 555</span></td>
                          <td>
                            <select class="form-control">
                              <option>Modulator</option>
                              <option>Admin</option>
                              <option>User</option>
                              <option>Subscriber</option>
                            </select>
                          </td>
                          <td>
                            <a href="javascript:void(0)" class="mr-3"><i class="icon-trash md-18"></i></a>
                            <a href="javascript:void(0)"><i class="icon-note md-18"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">5</td>
                          <td><span class="font-medium">John Deo</span>
                            <br><span class="text-muted">New York, Unitedd states</span></td>
                          <td>Visual Designer
                            <br><span class="text-muted">Past : Model</span></td>
                          <td>jDeo@website.com
                            <br><span class="text-muted">999 - 111 - 222</span></td>
                          <td>
                            <select class="form-control">
                              <option>Modulator</option>
                              <option>Admin</option>
                              <option>User</option>
                              <option>Subscriber</option>
                            </select>
                          </td>
                          <td>
                            <a href="javascript:void(0)" class="mr-3"><i class="icon-trash md-18"></i></a>
                            <a href="javascript:void(0)"><i class="icon-note md-18"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">6</td>
                          <td><span class="font-medium">Lisa ann</span>
                            <br><span class="text-muted">Los Vegas, United states</span></td>
                          <td>BA
                            <br><span class="text-muted">Past : finance</span></td>
                          <td>lisa@website.com
                            <br><span class="text-muted">999 - 222 - 333</span></td>
                          <td>
                            <select class="form-control">
                              <option>Modulator</option>
                              <option>Admin</option>
                              <option>User</option>
                              <option>Subscriber</option>
                            </select>
                          </td>
                          <td>
                            <a href="javascript:void(0)" class="mr-3"><i class="icon-trash md-18"></i></a>
                            <a href="javascript:void(0)"><i class="icon-note md-18"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center">7</td>
                          <td><span class="font-medium">Julia wardon</span>
                            <br><span class="text-muted">Texas, United states</span></td>
                          <td>Visual Designer
                            <br><span class="text-muted">Past : teacher</span></td>
                          <td>julia@website.com
                            <br><span class="text-muted">999 - 432 - 123</span></td>
                          <td>
                            <select class="form-control">
                              <option>Modulator</option>
                              <option>Admin</option>
                              <option>User</option>
                              <option>Subscriber</option>
                            </select>
                          </td>
                          <td>
                            <a href="javascript:void(0)" class="mr-3"><i class="icon-trash md-18"></i></a>
                            <a href="javascript:void(0)"><i class="icon-note md-18"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 col-lg-8 col-sm-12 mb-4">
              <div id="calender"></div>
            </div>
            <div class="col-md-5 col-lg-4 mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Todo List</h4>
                  <ul class="todo-list mt-4">
                    <li>
                      <div class="form-check">
                        <label class="custom-checkbox variation3 mb-0">
                          <input class="form-check-input" type="checkbox" checked> Call John for Dinner
                          <i class="input-helper"></i>
                        </label>
                      </div>
                    </li>
                    <li>
                      <div class="form-check">
                        <label class="custom-checkbox variation3 mb-0">
                          <input class="form-check-input" type="checkbox" checked> Book Boss Flight
                          <i class="input-helper"></i>
                        </label>
                        <span class="badge badge-info">2 Days
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="form-check">
                        <label class="custom-checkbox variation3 mb-0">
                          <input class="form-check-input" type="checkbox" checked> Add meeting in calender
                          <i class="input-helper"></i>
                        </label>
                        <span class="badge badge-success">Done
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="form-check">
                        <label class="custom-checkbox variation3 mb-0">
                          <input class="form-check-input" type="checkbox" checked> Completed all task
                          <i class="input-helper"></i>
                        </label>
                        <span class="badge badge-success">Done
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="form-check">
                        <label class="custom-checkbox variation3 mb-0">
                          <input class="form-check-input" type="checkbox"> Hit the Gym
                          <i class="input-helper"></i>
                        </label>
                        <span class="badge badge-danger">3 Minutes
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="form-check">
                        <label class="custom-checkbox variation3 mb-0">
                          <input class="form-check-input" type="checkbox"> Give Purchase Report
                          <i class="input-helper"></i>
                        </label>
                        <span class="badge badge-warning">Not important
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="form-check">
                        <label class="custom-checkbox variation3 mb-0">
                          <input class="form-check-input" type="checkbox"> Play Game
                          <i class="input-helper"></i>
                        </label>
                        <span class="badge badge-primary">Tomorrow
                        </span>
                      </div>
                    </li>
                    <li>
                      <div class="form-check">
                        <label class="custom-checkbox variation3 mb-0">
                          <input class="form-check-input" type="checkbox"> Call to client
                          <i class="input-helper"></i>
                        </label>
                        <span class="badge badge-warning">Pending
                        </span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>