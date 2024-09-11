@extends('layout.index')

@section('contenido')
@include('layout.nav')

<h2 class="mt-4">
    <center>Datos generales</center>
</h2>
<div class="row mt-4">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="text-center">AVG Impressions</div>
                <div class="d-flex align-items-center justify-content-between mt-3">
                    <div>
                        <h2 class="counter">2.648</h2>
                        26.84%
                    </div>
                    <div class="border  bg-soft-danger rounded p-3">
                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20px" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="progress bg-soft-danger shadow-none w-100" style="height: 6px">
                        <div class="progress-bar bg-danger" data-toggle="progress-bar" role="progressbar"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="text-center">AVG Engagements Rate</div>
                <div class="d-flex align-items-center justify-content-between mt-3">
                    <div>
                        <h2 class="counter">2.648</h2>
                        26.84%
                    </div>
                    <div class="border bg-soft-info rounded p-3">
                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20px" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="progress bg-soft-info shadow-none w-100" style="height: 6px">
                        <div class="progress-bar bg-info" data-toggle="progress-bar" role="progressbar"
                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="text-center">AVG Reach</div>
                <div class="d-flex align-items-center justify-content-between mt-3">
                    <div>
                        <h2 class="counter">2.648</h2>
                        26.84%
                    </div>
                    <div class="border bg-soft-success rounded p-3">
                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20px" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="progress bg-soft-success shadow-none w-100" style="height: 6px">
                        <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="text-center">AVG Transport</div>
                <div class="d-flex align-items-center justify-content-between mt-3">
                    <div>
                        <h2 class="counter">2.648</h2>
                        26.84%
                    </div>
                    <div class="border  bg-soft-primary rounded p-3">
                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20px" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="progress bg-soft-primary shadow-none w-100" style="height: 6px">
                        <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar"
                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card bg-soft-info">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="bg-soft-info rounded p-3">
                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="text-end">
                        <h2 class="counter">5600</h2>
                        Doctors
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card bg-soft-warning">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="bg-soft-warning rounded p-3">
                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="text-end">
                        <h2 class="counter">5600</h2>
                        Nurses
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card bg-soft-danger">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="bg-soft-danger rounded p-3">
                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                        </svg>
                    </div>
                    <div class="text-end">
                        <h2 class="counter">3500</h2>
                        Patients
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card bg-soft-primary">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="bg-soft-primary rounded p-3">
                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="text-end">
                        <h2 class="counter">4500</h2>
                        Pharmacists
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="bg-info text-white rounded p-3">
                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20px" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div class="text-end">
                        Customers
                        <h2 class="counter">75</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="bg-warning text-white rounded p-3">
                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="text-end">
                        Products
                        <h2 class="counter">60</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="bg-success text-white rounded p-3">
                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="text-end">
                        User
                        <h2 class="counter">80</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="bg-danger text-white rounded p-3">
                        <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="text-end">
                        Category
                        <h2 class="counter">45</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection