@extends('layouts.app')

@section('content')
<div class="container shadow-sm mb-5 bg-body rounded" style="width: 90%; margin-top: 130px;" >
    <div class="row justify-content-center mt-5">
        <!-- Employee Table -->
        <main class="">
          <div class="m-auto p-5">
            <div class="row mb-5" style="position: relative; left: 18%">
              <div class="col-6 mt-3 text-end" style="color: #1840C4;">
                <h5 class="fw-bold fs-3">DAILY TIME RECORDS LOGS </h5>
              </div>  
               <div class="col-6 mt-3" style="color: #1840C4">
                  <img class=" img-fluid"  src="{{asset('images/logo2.png')}}" alt="logo" style="height: 30px; width: auto;">
                </div>
            </div>
            <div class="d-flex justify-content-center m-auto search mb-5">
                <div class="pe-2">
                    <form class="d-flex" method="post" action="">
                        <label for="search" class="form-label pe-3 mt-1" ><strong>Search</strong></label>
                        <input type="search" class="form-control shadow-sm" id="search" style="width: 700px; height: auto;">
                    </form>
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle text-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background: none; border: none;">
                      Filter <i class="fa-solid fa-filter"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Actions</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
            </div>
            <div class="row">
                <div class="col-6 shadow p-4">
                    <div class="row">
                        <div class="col-6">
                            <div class="col-12 mb-4 id">
                                <p class="text-center fw-bold text-uppercase f-xl text-primary fs-5 text-uppercase">id 123456</p>
                            </div>
                            <div class="col-12 text-center mb-4">
                                <img class="rounded-circle shadow" src="{{$list->photo ? asset('storage/' . $list->photo) : asset('iamges/logo.png')}}" height="238px" width="236px" alt="">
                            </div>
                            <div class="col-12 text-center">
                                <span class="fs-4" style="font-family: 'Ubunto', sans-serif; font-weight: 600;">BILL GATES</span> <br>
                            </div>
                            <div class="col-12 text-center mb-4">
                                <span class="d-block" style="margin-left: -50px;">Front Office</span>
                                <span style="margin-left: -27px;">Front Manager</span>
                            </div>
                            <div class="col-12 workHour">
                                <p class="text-center fw-bold text-primary">9:00am to 5:00pm</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="col-12 ms-4 fs-4 mb-5">
                                <p class="text-uppercase">Date Today</p>
                                <p class="ms-5 text-primary">10/04/2022</p>
                            </div>
                            <div class="col-12 ms-4 fs-4 mb-5">
                                <p class="text-uppercase">CURRENT TIME</p>
                                <p class="ms-5 text-primary">3:00PM</p>
                            </div>
                            <div class="col-12 ms-4 fs-4">
                                <p>CURRENT INCOME</p>
                                <p class="ms-5 text-primary">Php 30,000.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row mb-3">

                        <div class="col-6 d-grid gap-2">
                            <button type="button" class="btn btn-primary fw-bold">Time - in</button>
                        </div>
                        <div class="col-6 d-grid gap-2">
                            <button type="button" class="btn btn-danger fw-bold">Time -  out</button>
                        </div>
                        
                    </div>
                    <table class="table table-hover shadow table-primary table-striped text-center shadow-sm">
                        <thead>
                          <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Time-in</th>
                            <th scope="col">Time-out</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
    
                            {{-- @unless (count($Lists) == 0)
                            
                            @foreach ($Lists as $List)
                                <tr>
                                <td>{{$List->last_name}} {{$List->first_name}}</th>
                                <td>{{$List->id}}</td>
                                <td>{{$List->date}}</td>
                                <td>{{$List->time_in}}</td>
                                <td>{{$List->time_out}}</td>
                                </tr>
                            @endforeach
                                
                            @else --}}
                                <tr>
                                <td colspan="7">No Daily Time Records</td>
                                </tr>
                            {{-- @endunless --}}
    
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </main>
    </div>
</div>
@endsection