@extends('template')

@section('style')
<style type="text/css">
    input, select{
        border: 1px solid #ccc !important;
    }
</style>
@endsection

@section('content')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Contato</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Contato</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>        
    <!-- end page-title -->


    <!-- start contact-section -->
    <section class="contact-sections section-padding parallax" data-bg-image="assets/images/contact-section-bg.jpge" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col col-md-4 col-md-offset-1 col-md-5">
                    <div class="contact-section-contact-box">
                        <div class="section-title-white">
                            <h2 class="text-dark">CONTATO</h2>
                        </div>
                        <div class="details">
                            <p>Para qualquer tipo de consulta, contacte-nos com os dados abaixo.</p>
                            <ul>
                                <li><i class="fa fa-phone"></i> +258 (84) 525 5563</li>
                                <li><i class="fa fa-envelope"></i> info@telconsultores.co.mz</li>
                                <li><i class="fa fa-home"></i> Nampula: Bairro, Muahivire-Expansao, U/C Namiteca</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-6 col-lg-offset-1 col-md-7">
                    <div class="section-title-whites div-contato">
                        <h2>Formulario de contato</h2>
                    </div>   
                    <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</p>

                    <div class="contact-form-s1 form">
                        <form method="post" id="contact-form" class="wpcf7-form contact-validation-active">
                            <div>
                                <label for="name">Nome</label>
                                <input type="text" id="name" name="name">
                            </div>
                            <div>
                                <label for="apelido">Apelido</label>
                                <input type="text" id="apelido" name="apelido">
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email">
                            </div>
                            <div>
                                <label for="phone">Telefone</label>
                                <input type="text" id="phone" name="phone">
                            </div>
                            <div style="width: 100%;">
                                <label for="phone">Descricao</label>
                                <textarea cols="6" rows="10" id="description" name="description" style="resize: none; height: 100px;"></textarea>
                            </div>
                            <div class="submit-btn-wrap">
                                <input value="Submit" class="theme-btn wpcf7-submit" type="submit">
                                <div id="loader">
                                    <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                </div>
                            </div>
                            <div class="error-handling-messages">
                                <div id="success"> Muito obrigado email enviado! </div>
                                <div id="error"> Ocorreu um erro ao enviar e-mail. Por favor, tente novamente mais tarde. </div>
                            </div>
                        </form>
                    </div>                     
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
        <div class="contact-women wow fadeInLeft">
            <img src="assets/images/contact-women.png" alt>
        </div>
    </section>
    <!-- end contact-section -->
@endsection