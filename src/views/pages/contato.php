<?php
$render('header', [
    'titulo' => 'Contato | Casa de Repouso Paraíso Tropical',
    'menu' => 'Contato'
    ]);
    
?>
<style>.fa{color:#00bef5;font-size: 25px;}.form-control{border: 1px solid #00bef5;}</style>

    <main>
        <section style="background: #ffffff;padding-bottom: 25px;">
            <h1 data-aos="fade" style="text-align: center;padding: 50px;color: #00bef5;">Entre em <strong>Contato</strong></h1>
            
            <?php if(!empty($flash)):?>
                <div class="alert alert-primary m-5" role="alert">
                <?=$flash;?>
                </div>
            <?php endif;?>

            <div class="row" style="max-width: 1120px; margin:auto;">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <form action="" method="post">
                        <div class="mb-3">
                          <label for="nome" class="form-label">Nome completo</label>
                          <input type="text" required class="form-control" name="nome" id="nome" aria-describedby="name" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">E-Mail</label>
                          <input type="email" required class="form-control" name="email" id="email" aria-describedby="email" placeholder="email@email.com">
                        </div>
                        <div class="mb-3">
                          <label for="celular" class="form-label">Celular</label>
                          <input type="text" required class="form-control celular" name="celular" id="celular" aria-describedby="celular" placeholder="(00) 9 0000 0000">
                        </div>
                        <div class="mb-3">
                          <label for="mensagem" class="form-label">Mensagem</label>
                          <textarea required class="form-control" name="mensagem" id="mensagem" rows="3"></textarea>
                        </div>
                        <button class="btn btn-primary btn-inicio mb-5" type="submit" style="margin-top: 10px;background: rgba(9,30,59,0);color: #00cbf9;border-width: 1px;border-color: #00cbf9;width: 100%;">Enviar</button>
                    </form>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <p>R. Marciano Luiz Bento, 242 - Gravatá, Penha - SC</p>
                    <p>CEP 88385-000</p>
                    <p>E-Mail: contato@casaderepousopt.com.br</p>
                    <p>Telefone para contato: (47) 99661-7642</p>
                    <div style="width: 100%;">
                        <a href="https://www.instagram.com/casaderepousoparaisotropical/" target="_blank"><i class="fa fa-instagram m-2" data-bss-hover-animate="pulse"></i></a>
                        <a href="https://www.facebook.com/casaderepousoparaisotropical" target="_blank"><i class="fa fa-facebook-square  m-2" data-bss-hover-animate="pulse"></i></a>
                        <a href="https://wa.me/555547996617642" target="_blank"><i class="fa fa-whatsapp  m-2" data-bss-hover-animate="pulse"></i></a>
                    </div>
                </div>

            </div>

        </section>
        <section style="background: #00bef5;padding-bottom: 25px;color: #00bef5;">
            <h1 data-aos="fade" style="text-align: center;padding: 50px;color: #fff;">Nossas Localização</h1>
            <div class="d-flex justify-content-between flex-wrap" style="max-width: 1120px;margin: auto;padding-bottom: 50px;"><iframe class="item-box" allowfullscreen="" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCDGgznsrvgJpkk1SwKH9KeRzTXY1ugHB4&amp;q=R.+Marciano+Luiz+Bento%2C+242+-+Gravat%C3%A1%2C+Penha+-+SC&amp;zoom=15" width="100%" height="400"></iframe></div>
        </section>
        <?php
    $render('footer');?>