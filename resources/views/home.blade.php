@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-right">
        <div class="col-md-12">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box blue-bg">
                          <i class="fa fa-users"></i>
                          <div class="count">12</div>
                          <div class="title">Boys</div>
                        </div>
                        <!--/.info-box-->
                      </div>
                      <!--/.col-->

                      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box brown-bg">
                          <i class="fa fa-users"></i>
                          <div class="count">80</div>
                          <div class="title">Girls</div>
                        </div>
                        <!--/.info-box-->
                      </div>
                      <!--/.col-->

                      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box dark-bg">
                          <i class="fa fa-users"></i>
                          <div class="count">20</div>
                          <div class="title">Boys under 13</div>
                        </div>
                        <!--/.info-box-->
                      </div>
                      <!--/.col-->

                      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="info-box green-bg">
                          <i class="fa fa-users"></i>
                          <div class="count">30</div>
                          <div class="title">Girls under 13</div>
                        </div>
                        <!--/.info-box-->
                      </div>
                      <!--/.col-->

                    </div>

            </div>
        </div>

      </div>
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              List of children
            </header>

            <table class="table table-striped table-advance table-hover">
              <tbody>
                <tr>
                  <th><i class="icon_profile"></i> Full Name</th>
                  <th><i class="icon_calendar"></i> Parent's Name</th>
                  <th><i class="icon_mail_alt"></i> class</th>
                  <th><i class="icon_pin_alt"></i> HBF</th>
                  <th><i class="icon_mobile"></i> Phone</th>
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
                <tr>
                  <td>Mario Norris</td>
                  <td>2010-02-08</td>
                  <td>mildred@hour.info</td>
                  <td>Amarillo</td>
                  <td>945-547-5302</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
    </div>
</div>
@endsection
