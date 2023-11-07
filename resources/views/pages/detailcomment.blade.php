@extends('layouts.app')

@section('title')
    Client Portal Details
@endsection

@section('content')
    <!-- Page Content -->
    <div class="page-content page-details">

        <!-- Modal -->
        {{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Webcareidn.com</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text"><strong>Jenis:</strong> <span id="keterangan">Keterangan
                                            mengenai jenis
                                            project</span></p>
                                    <p class="card-text"><strong>Keterangan:</strong> <span id="keterangan">Keterangan
                                            mengenai
                                            project</span></p>
                                    <p class="card-text"><strong>Deadline:</strong> <span id="deadline">Tanggal
                                            Deadline</span></p>
                                    <p class="card-text"><strong>Status:</strong> <span id="status">Status Project
                                            (Contoh: Sedang
                                            Berlangsung)</span>
                                    </p>
                                    <p class="card-text"><strong>Masa Aktif:</strong> <span id="masaAktif">Tanggal Masa
                                            Aktif</span></p>
                                    <p class="card-text"><strong>Notes:</strong> <span id="masaAktif">Lorem ipsum dolor
                                            sit amet, ut qui
                                            commodo sensibus, id utinam inermis constituto
                                            vim. In nam dolorum interesset, per fierent ponderum ea. Eos aperiri feugiat
                                            democritum ne.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> --}}



        <div class="store-details-container" data-aos="fade-up">
            <section class="store-heading">
                <div class="container">
                    <div class="mobile-card-1 d-flex flex-row justify-content-between mb-3">
                        <div class="d-flex flex-row justify-content-between p-card-1 bg-light">
                            <div class="mobile-card-1 p-2 d-flex justify-content-center align-items-center">
                                <div>
                                    <h2 class="h2-contact">Halo {{ $client->name }}</h2>
                                    <p class="p-contact mb-3">
                                        Selamat datang di Client Portal Webcare Indonesia
                                    </p>

                                    <a href="/details/{{ $client->slug }}"
                                        class="text-white font-contact btn-contact btn btn-primary py-2 px-lg-3">
                                        Back
                                    </a>


                                </div>
                            </div>

                            <div class="section-2-card-1 d-none">
                                <div class="d-flex justify-content-center">
                                    <img class="w-image-card" src="images/portal-client/card-section-1.png"
                                        alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-row justify-content-between p-card-2 bg-primary">
                            <div class="section-1-card-2 p-2 d-flex justify-content-center align-items-center">
                                <p class="font-project text-white h3">Number of Projects</p>
                            </div>
                            <div class="section-2-card-2 d-flex justify-content-center align-items-center">
                                <p class="font-number text-white h3">{{ $projecttotal }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>


        </div>

        <div class="container mt-lg-5">

            <div class="app pt-5">

                <div class="col-md-10 col-lg-12 m-auto p-0">
                    <h1 class="h2 font-title-comments">Comments</h1>
                    <p class="lead mb-3 font-subtitle-comments">Comments for projects</p>
                    <hr>
                    @comments(['model' => $client])


                </div>

            </div>

        </div>

    </div>
@endsection
