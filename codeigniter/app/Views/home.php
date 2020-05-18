<div class="container">
    <div class="text-center my-3">
        <a href="#" class="btn btn-primary mx-2">Fiat</a>
        <a href="#" class="btn btn-primary mx-2">Kijang</a>
        <a href="#" class="btn btn-primary mx-2">Toyota</a>
    </div>
    <div class="row row-cols-3">
        <?php for ($i = 1; $i < 5; $i++) : ?>
            <div class="col p-2">
                <div class="card">
                    <img src="https://picsum.photos/200/200?random=<?= $i ?>" loading="lazy" class="card-img-top" alt="...">
                    <div class="card-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo dolorum cum magnam aut fuga unde pariatur
                    </div>
                    <div class="card-footer">
                        <a href="/mobil/lorem-ipsum" class="btn btn-primary">Info</a>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>