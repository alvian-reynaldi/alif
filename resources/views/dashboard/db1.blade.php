<div class="content-wrapper">
          <div class="row mb-4">
            <div class="col-12 d-flex align-items-center justify-content-between">
              <h4 class="page-title">Dashboard Penjualan</h4>
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
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between pb-2">
                        <h5 class="card-title">Todays Income</h5>
                        <i class="icon-docs md-18"></i>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="text-muted">Avg. Session</p>
                        <p class="text-muted">max: 40</p>
                      </div>
                      <div class="progress progress-xs">
                        <div class="progress-bar bg-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between pb-2">
                        <h5 class="card-title">Total Revenue</h5>
                        <i class="icon-pie-chart md-18"></i>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="text-muted">Avg. Session</p>
                        <p class="text-muted">max: 120</p>
                      </div>
                      <div class="progress progress-xs">
                        <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between pb-2">
                        <h5 class="card-title">Pending Product</h5>
                        <i class="icon-wallet md-18"></i>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="text-muted">Avg. Session</p>
                        <p class="text-muted">max: 54</p>
                      </div>
                      <div class="progress progress-xs">
                        <div class="progress-bar bg-danger w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between pb-2">
                        <h5 class="card-title">Sales</h5>
                        <i class="icon-screen-desktop md-18"></i>
                      </div>
                      <div class="d-flex justify-content-between">
                        <p class="text-muted">Avg. Session</p>
                        <p class="text-muted">max: 143</p>
                      </div>
                      <div class="progress progress-xs">
                        <div class="progress-bar bg-warning w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-5 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h4 class="card-title">Sales Status</h4>
                    <p class="text-muted d-none d-md-block">{{ now()->format('d M Y, h:i A') }}</p>
                  </div>
                  <div class="chart-container doughnut">
                    <canvas class="mt-4" id="sales-status" height="200" width="200"></canvas>
                    <div id="sales-status-legend" class="legend half-width-legend mt-4">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 mb-4 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Total Sales By Products</h4>
                  <div class="d-flex justify-content-between pb-4">
                    <p class="card-description mb-0 d-none d-sm-block">Activity from 4 Jan 2017 to 10 Jan 2017</p>
                    <div id="product-sales-legend" class="legend">
                    </div>
                  </div>
                  <div class="chart-container line-chart">
                    <canvas class="mt-4" id="product-sales" height="250" width="250"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Total Revenue</h4>
                  <div class="w-75 mx-auto mt-4">
                    <div class="d-flex justify-content-between text-center mb-2">
                      <div class="wrapper">
                        <h4>6,256</h4>
                        <small class="text-muted">Total sales</small>
                      </div>
                      <div class="wrapper">
                        <h4>8569</h4>
                        <small class="text-muted">Open Campaign</small>
                      </div>
                    </div>
                  </div>
                  <div id="morris-line-example" style="height:200px"></div>
                </div>
              </div>
            </div>
            <div class="col-md-7 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between pb-4">
                    <h4 class="card-title mb-0">Email Campaign</h4>
                    <p class="mb-0">Last 6 day
                      <i class="mdi mdi-chevron-down"></i>
                    </p>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="card mb-4">
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <div class="inner flex-grow">
                              <p class="mb-0">Booking</p>
                              <h4 class="font-weight-bold">16543</h4>
                            </div>
                            <div class="inner d-flex align-items-center">
                              <h1 class="text-primary font-weight-bold">13%</h1>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card mb-4">
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <div class="inner flex-grow">
                              <p class="mb-0">Customer Baru</p>
                              <h4 class="font-weight-bold">26458</h4>
                            </div>
                            <div class="inner d-flex align-items-center">
                              <h1 class="text-info font-weight-bold">64%</h1>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <div class="inner flex-grow">
                              <p class="mb-0">Ditolak</p>
                              <h4 class="font-weight-bold">2398</h4>
                            </div>
                            <div class="inner d-flex align-items-center">
                              <h1 class="text-danger font-weight-bold">24%</h1>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <div class="inner flex-grow">
                              <p class="mb-0">Dalam Proses</p>
                              <h4 class="font-weight-bold">12790</h4>
                            </div>
                            <div class="inner d-flex align-items-center">
                              <h1 class="text-success font-weight-bold">30%</h1>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-4 mb-4 stretch-card">
              <div class="card dashboard-news-card">
                <div class="card-body d-flex flex-column position-relative">
                  <div class="d-flex justify-content-between pb-4">
                    <h4 class="card-title text-white mb-0">News</h4>
                    <i class="icon-reload text-white"></i>
                  </div>
                  <div class="text-white mt-auto">
                    <div class="wrapper">
                      <h4 class="border-bottom">A Big Data Strategy Is Key To Achieve Greater Alpha</h4>
                      <p>Advantages and challenges abound for investment professionals focusing on big data, large data sets analyzed computationally,  and alternative data, data sets obtained from less traditional sources, such as social media, for investment analysis.</p>
                      <a class="text-small text-white font-weight-bold" href="#">READ MORE</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4 stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h4 class="card-title">Aktivitas</h4>
                  </div>
                  <p class="card-description">Aktivitas Insan ALIF saat ini</p>
                  <div class="list d-flex align-items-center border-bottom py-3">
                    <img class="rounded-circle img-sm" src="{{ asset('images/users-thumbs/user-1.jpg') }}" alt="profile-pic">
                    <div class="wrapper w-100 ml-3">
                      <p class="mb-0">
                        <b>Purwanto </b>Sosialisasi di Bekasi</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                          <p class="mb-0">Sosialisasi Program Talangan Haji</p>
                        </div>
                        <small class="text-muted ml-auto">2 hours ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="list d-flex align-items-center border-bottom py-3">
                    <img class="rounded-circle img-sm" src="{{ asset('images/users-thumbs/user-2.jpg') }}" alt="profile-pic">
                    <div class="wrapper w-100 ml-3">
                      <p class="mb-0">
                        <b>Harry P </b>Sosialisasi di Bandung</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                          <p class="mb-0">Sosialisasi Produk Umroh</p>
                        </div>
                        <small class="text-muted ml-auto">3 hours ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="list d-flex align-items-center border-bottom py-3">
                    <img class="rounded-circle img-sm" src="{{ asset('images/users-thumbs/user-3.jpg') }}" alt="profile-pic">
                    <div class="wrapper w-100 ml-3">
                      <p class="mb-0">
                        <b>Sari </b>posted di e-SOP</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                          <p class="mb-0">Update Segmentasi Ekonomi terbaru</p>
                        </div>
                        <small class="text-muted ml-auto">1 hours ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="list d-flex align-items-center pt-3">
                    <img class="rounded-circle img-sm" src="{{ asset('images/users-thumbs/user-4.jpg') }}" alt="profile-pic">
                    <div class="wrapper w-100 ml-3">
                      <p class="mb-0">
                        <b>Yoelhaidry </b>sosialisasi di Semarang</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                          <p class="mb-0">Profil dan Cara Penggunaan Asuransi Reliance</p>
                        </div>
                        <small class="text-muted ml-auto">1 hours ago</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4 stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <h4 class="card-title">Sales Chart</h4>
                  <p class="card-description">Based on last month analytics.</p>
                  <div class="mt-auto" id="dashboard-sales-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card support-pane-card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="card-title mb-0">Customer support</h4>
                    <div class="btn-toolbar mb-0 d-none d-sm-block" role="toolbar" aria-label="Toolbar with button groups">
                      <div class="btn-group mr-3" role="group" aria-label="First group">
                        <button type="button" class="btn btn-success">
                          <i class="mdi mdi-plus-circle"></i> Add
                        </button>
                      </div>
                      <div class="btn-group mr-3" role="group" aria-label="Second group">
                        <button type="button" class="btn btn-outline-secondary">
                          <i class="mdi mdi-alert-circle-outline"></i>
                        </button>
                        <button type="button" class="btn btn-outline-secondary">
                          <i class="mdi mdi-delete-empty"></i>
                        </button>
                      </div>
                      <div class="btn-group" role="group" aria-label="Third group">
                        <button type="button" class="btn btn-outline-secondary">
                          <i class="mdi mdi-printer"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive support-pane no-wrap">
                    <div class="t-row">
                      <div class="thumb">
                        <div class="img-sm bg-info">DD</div>
                      </div>
                      <div class="content">
                        <p class="font-weight-bold mb-2 d-inline-block">Didin Deschamps</p>
                        <p class="text-muted mb-2 d-inline-block">23 Apr 2019</p>
                        <p>Tindak lanjut account Col 4 & 5</p>
                      </div>
                      <div class="tile">
                        <p class="text-muted mb-2">Project</p>
                        <p class="font-weight-bold">Pusat</p>
                      </div>
                      <div class="tile">
                        <p class="text-muted mb-2">Target</p>
                        <p class="font-weight-bold">14 hari</p>
                      </div>
                    </div>
                    <div class="t-row">
                      <div class="thumb">
                        <div class="img-sm bg-danger">LS</div>
                      </div>
                      <div class="content">
                        <p class="font-weight-bold mb-2 d-inline-block">Lina Sukoco</p>
                        <p class="text-muted mb-2 d-inline-block">24 Apr 2019</p>
                        <p>Litigasi account2 cabang Bekasi</p>
                      </div>
                      <div class="tile">
                        <p class="text-muted mb-2">Project</p>
                        <p class="font-weight-bold">Cabang Bekasi
                        </p>
                      </div>
                      <div class="tile">
                        <p class="text-muted mb-2">Target</p>
                        <p class="font-weight-bold">5 hari</p>
                      </div>
                    </div>
                    <div class="t-row">
                      <div class="thumb">
                        <div class="img-sm bg-success">SB</div>
                      </div>
                      <div class="content">
                        <p class="font-weight-bold mb-2 d-inline-block">Syamsul Bahri</p>
                        <p class="text-muted mb-2 d-inline-block">06 Mei 2019</p>
                        <p>Penyelesaian pengaduan dari customer cabang Bogor</p>
                      </div>
                      <div class="tile">
                        <p class="text-muted mb-2">Rutin</p>
                        <p class="font-weight-bold">Cabang Bogor</p>
                      </div>
                      <div class="tile">
                        <p class="text-muted mb-2">Target</p>
                        <p class="font-weight-bold">2 hari</p>
                      </div>
                    </div>
                    <div class="t-row">
                      <div class="thumb">
                        <div class="img-sm bg-warning">CM</div>
                      </div>
                      <div class="content">
                        <p class="font-weight-bold mb-2 d-inline-block">Cacha Maricha</p>
                        <p class="text-muted mb-2 d-inline-block">06 Mei 2019</p>
                        <p>Pemetaan BPKB pasca pemekaran cabang</p>
                      </div>
                      <div class="tile">
                        <p class="text-muted mb-2">Project</p>
                        <p class="font-weight-bold">HO</p>
                      </div>
                      <div class="tile">
                        <p class="text-muted mb-2">Target</p>
                        <p class="font-weight-bold">1 minggu</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-4">
                    <p class="mb-0 d-none d-md-block">Showing 1 to 20 of 20 entries</p>
                    <nav>
                      <ul class="pagination rounded mb-0 pagination-success">
                        <li class="page-item">
                          <a class="page-link" href="#">
                            <i class="mdi mdi-chevron-left"></i>
                          </a>
                        </li>
                        <li class="page-item">
                          <a class="page-link active" href="#">1</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">
                            <i class="mdi mdi-chevron-right"></i>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>