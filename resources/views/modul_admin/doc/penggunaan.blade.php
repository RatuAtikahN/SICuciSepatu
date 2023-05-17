@extends('layouts.backend')
@section('title','Instalasi & Penggunaan | Dokumentasi Aplikasi Laundry')
@section('content')
  <section id="knowledge-base-question">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 order-1 order-md-2">
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title mb-1">
                      <i data-feather="smartphone" class="font-medium-5 mr-25"></i>
                      <span>Instalasi & Penggunaan Aplikasi Laundry</span> <hr>
                  </h4>
                  <p>
                    <h5>Requirements</h5>
                    <ul>
                      <li>PHP 7.3 or higher</li>
                      <li>Database (eg: MySQL)</li>
                      <li>Web Server (eg: Apache, Nginx, IIS)</li>
                    </ul>

                    <h5>Installation</h5>
                    <h5>Credentials</h5>
                    <ul>
                      <li> Login sebagai Administrator
                        <ul>
                          <li>Email : <code>admin@laundry.com</code></li>
                          <li>Password <code> 123456</code> </li>
                        </ul>
                      </li>
                      <li> Login sebagai Karyawan
                        <ul>
                          <li>Untuk membuat akun karyawan silahkan pergi ke menu <b> Data User > Karyawan</b> </li>
                          <li>Untuk Password, silahkan masukan<code> 123456</code> </li>
                        </ul>
                      </li>
                    </ul>
                  </p>
              </div>
          </div>
      </div>
    </div>
  </section>
  <!-- contact me -->
  <section class="faq-contact">
      <div class="row mt-2 pt-75">
          <div class="col-12 text-center">
              <h2>Punya Pertanyaan ?</h2>
              <p class="mb-3">
              </p>
          </div>
          <div class="col-sm-6">
              <div class="card text-center faq-contact-card shadow-none py-1">
                  <div class="card-body">
                      <div class="avatar avatar-tag bg-light-primary mb-2 mx-auto">
                          <i class="font-medium-3 feather icon-message-circle"></i>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-6">
              <div class="card text-center faq-contact-card shadow-none py-1">
                  <div class="card-body">
                      <div class="avatar avatar-tag bg-light-primary mb-2 mx-auto">
                          <i class="font-medium-3 feather icon-mail"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--/ contact me -->
@endsection