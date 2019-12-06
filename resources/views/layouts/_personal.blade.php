                  <a href="javascript:void(0)" data-toggle="dropdown" class="nav-link" id="userProfile" aria-haspopup="true"
                    aria-expanded="false">
                    <img src="{{ asset('images/users-thumbs/user-1.jpg') }}" width="24" alt="user" class="rounded-circle align-middle" />
                  </a>
                  <div class="dropdown-menu" aria-labelledby="userProfile">
                    <ul>
                      <li>
                        <a href="javascript:void(0)" class="p-0 border-bottom">
                          <div class="d-flex w-100 justify-content-center">
                            <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                              <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                            </div>
                            <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                              <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                            </div>
                            <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                              <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0)" class="text-dark">
                          Profile
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0)" class="text-dark">
                          Manage Accounts
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0)" class="text-dark">
                          Change Password
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="text-dark">
                          Sign Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                      </li>
                    </ul>
                  </div>