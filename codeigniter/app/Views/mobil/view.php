<div class="container">

    <div class="row">
        <div class="col-8 py-4">
            <div class="card">
                <div class="card-body">
                    <div id="mobilSlide" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php for ($i = 1; $i < 6; $i++) : ?>
                                <div class="carousel-item <?= (($i == 1) ? "active" : "") ?>" data-interval="10000">
                                    <img src="https://picsum.photos/600/300?random=<?= $i ?>" class="d-block w-100">
                                </div>
                            <?php endfor; ?>
                        </div>
                        <a class="carousel-control-prev" href="#mobilSlide" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#mobilSlide" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body text-center">
                    <a href="#" class="btn btn-primary mr-2">Edit</a>
                    <a href="#" class="btn btn-danger mr-2">Hapus</a>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h3>Detail</h3>
                    <hr />
                    <div class="row">
                        <div class="col">
                            <div class="row mb-2">
                                <div class="col-6">
                                    Merek
                                </div>
                                <div class="col-6">
                                    Toyota
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    Merek
                                </div>
                                <div class="col-6">
                                    Toyota
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    Merek
                                </div>
                                <div class="col-6">
                                    Toyota
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mb-2">
                                <div class="col-6">
                                    Merek
                                </div>
                                <div class="col-6">
                                    Toyota
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    Merek
                                </div>
                                <div class="col-6">
                                    Toyota
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    Merek
                                </div>
                                <div class="col-6">
                                    Toyota
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h3>Deskripsi</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, eligendi. Possimus nobis, veniam molestiae cupiditate saepe adipisci dolores quo! Quaerat dolorem illum ullam harum ex sint omnis sequi eaque nobis.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="position: sticky; top: 4.9rem">
                <div class="card-body">
                    <h3>Rp XX.XXX.XXX,00</h3>
                    <span class="text-muted">2017</span><br />
                    <span>Lorem Ipsum X AE 12 2017</span><br />
                    <div class="mt-5">
                        <span class="lokasi float-left">Malang, Jawa Timur, Indonesia</span>
                        <span class="lokasi float-right">Apr 5 2000</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-3 w-100">Beli</a>
                </div>
            </div>
        </div>
    </div>
</div>