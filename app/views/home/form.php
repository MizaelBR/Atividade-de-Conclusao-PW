<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
            IMC
        </h2>
        <br />

        <!-- Contact Section Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">

                <form id="formulario" nome="formulario">
                    <div class="form-group row">
                        <label class="col-4 col-form-label" for="nome">Nome</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="nome" name="nome" placeholder="Fulano" type="text" class="form-control"
                                    required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="peso" class="col-4 col-form-label">Peso</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="peso" name="peso" placeholder="85" type="number" required="required"
                                    class="form-control" />
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        kg
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="altura" class="col-4 col-form-label">Altura</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="altura" name="altura" placeholder="160" type="number" class="form-control"
                                    required="required" />
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        cm
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button onclick="imc()" name="submit" type="submit" class="btn btn-primary">
                            Enviar
                        </button>
                    </div>
                </div>
                <div id="fantoche"></div>
            </div>
        </div>
    </div>
</section>