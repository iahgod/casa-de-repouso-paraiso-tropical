<?php
$render('header', [
    'titulo' => 'Casa de Repouso Paraíso Tropical',
    'menu' => 'Home'
    ]);
?>
    <main>

        <div class="container">
            <div class="col-12 mb-5">
                <h1 data-aos="fade" style="text-align: center;padding: 50px;color: #00bef5;">Conheça a <strong>Casa de Repouso Paraíso Tropical</strong></h1>

                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <p data-aos="zoom-in" style="text-align: justify;color: #00bef5;">Nossa casa de repouso Paraiso Tropical em Penha, é uma instituição de longa permanência particular.
                        Temos como meta a prioridade ao cuidado e proteção dos nossos idosos, proporcionando-lhes qualidade de vida e amparo nesta fase tão delicada. Além de sermos casa de  longa permanência também disponibilizamos os serviços de hospedagem e casa dia. Tendo como prioridade cuidados especiais para os idosos com grau de dependência I e II acima de 60 anos, com suporte psicológico, fisioterapêutico, atividades ocupacionais e interativas. Com uma equipe de  profissionais composta por coordenador, assistente social, enfermeiros, cuidadores 24 horas, entre outros, que se dedicam na manutenção destes cuidados da melhor forma possível, tendo como prioridade um tratamento diferenciado e humanizado.</p>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <img class="img-fluid" data-aos="zoom-in" src="<?=$base?>/assets/img/home.jpeg">
                    </div>

                </div>
                <div class="row justify-content-center mt-5">
                    <div style="width:250px;"><a href="<?=$base?>/quem-somos" class="btn btn-outline-info btn-lg">Conheça a Casa de Repouso</a></div>
                </div>
            </div>
        </div>


        <section style="background: #00bef5;padding-bottom: 50px;">
            <h1 data-aos="fade" style="text-align: center;padding: 50px;color: #fff;">Nossos Serviços</h1>
            <div class="d-flex justify-content-center align-items-center flex-wrap justify-content-sm-center align-items-sm-center" style="max-width: 1120px;margin: auto;padding-bottom: 50px;">

                <div class="d-xl-flex flex-column justify-content-between align-items-xl-center item-box" data-aos="zoom-in" style="width: 300px;;background: #fff;margin: auto;margin-top: 5px;min-height: 300px;">
                    <div class="d-flex d-sm-flex d-xl-flex flex-column justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center" style="height: 300px;padding: 20px;"><i class="fa fa-home" data-bss-hover-animate="pulse" style="font-size: 60px;color: #00bef5;"></i>
                        <h3 style="color: #00bef5;">Longa permanência</h3>
                    </div>
                    
                </div>
                <div class="d-xl-flex flex-column justify-content-between align-items-xl-center item-box" data-aos="zoom-in" style="width: 300px;;background: #fff;margin: auto;margin-top: 5px;min-height: 300px;">
                    <div class="d-flex d-sm-flex d-xl-flex flex-column justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center" style="height: 300px;padding: 20px;"><i class="fas fa-bed" data-bss-hover-animate="pulse" style="font-size: 60px;color: #00bef5;"></i>
                        <h3 style="color: #00bef5;">Hospedagem</h3>
                    </div>
                    
                </div>
                <div class="d-xl-flex flex-column justify-content-between align-items-xl-center item-box" data-aos="zoom-in" style="width: 300px;background: #fff;margin: auto;margin-top: 5px;min-height: 300px;">
                    <div class="d-flex d-sm-flex d-xl-flex flex-column justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center" style="height: 300px;padding: 20px;"><i class="fas fa-heartbeat" data-bss-hover-animate="pulse" style="font-size: 60px;color: #00bef5;"></i>
                        <h3 class="text-center" style="color: #00bef5;">Casa dia</h3>
                    </div>
                </div>
            </div>
        </section>

        <section style="background: #fff;padding-bottom: 50px;">
            <h1 data-aos="fade" style="text-align: center;padding: 50px;color: #00bef5;">Nossas Atividades</h1>
            <div class="d-flex justify-content-center align-items-center flex-wrap justify-content-sm-center align-items-sm-center" style="max-width: 1120px;margin: auto;padding-bottom: 50px;">
                <div class="d-xl-flex flex-column justify-content-between align-items-xl-center item-box" data-aos="zoom-in" style="width: 300px;background:#00bef5;margin: auto;margin-top: 5px;min-height: 300px;">
                    <div class="d-flex d-sm-flex d-xl-flex flex-column justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center item-hide" style="height: 300px;padding: 20px;"><i class="fa fa-bed" data-bss-hover-animate="pulse" style="font-size: 60px;color: rgb(255,255,255);"></i>
                        <h3 style="color: rgb(255,255,255);text-align:center;">Serviço de Hospedagem</h3>
                        <p style="text-align: center;color: rgb(255,255,255);">Hospedagem de curta e longa duração.<br></p>
                    </div>
                    
                </div>

                <div class="d-xl-flex flex-column justify-content-between align-items-xl-center item-box" data-aos="zoom-in" style="width: 300px;background:#00bef5;margin: auto;margin-top: 5px;min-height: 300px;">
                    <div class="d-flex d-sm-flex d-xl-flex flex-column justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center item-hide" style="height: 300px;padding: 20px;"><i class="fa fa-heartbeat" data-bss-hover-animate="pulse" style="font-size: 60px;color: rgb(255,255,255);"></i>
                        <h3 style="color: rgb(255,255,255);text-align:center;">Atividades Física e Cognitiva</h3>
                        <p style="text-align: center;color: rgb(255,255,255);">Neurológica, Muscular, Equilíbrio, Musculação Terapêutica, Esportes Coletivos...<br></p>
                    </div>
                    
                </div>

                <div class="d-xl-flex flex-column justify-content-between align-items-xl-center item-box" data-aos="zoom-in" style="width: 300px;background:#00bef5;margin: auto;margin-top: 5px;min-height: 300px;">
                    <div class="d-flex d-sm-flex d-xl-flex flex-column justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center item-hide" style="height: 300px;padding: 20px;"><i class="fas fa-theater-masks" data-bss-hover-animate="pulse" style="font-size: 60px;color: rgb(255,255,255);"></i>
                        <h3 style="color: rgb(255,255,255);text-align:center;">Atividades Lúdicas</h3>
                        <p style="text-align: center;color: rgb(255,255,255);">Dança, Música, Jogos, Teatro, Filmes, Humor, Trabalhos Manuais, Jardinagem...<br></p>
                    </div>
                    
                </div>


                <div class="d-xl-flex flex-column justify-content-between align-items-xl-center item-box" data-aos="zoom-in" style="width: 300px;background:#00bef5;margin: auto;margin-top: 5px;min-height: 300px;">
                    <div class="d-flex d-sm-flex d-xl-flex flex-column justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center item-hide" style="height: 300px;padding: 20px;"><i class="fas fa-screwdriver" data-bss-hover-animate="pulse" style="font-size: 60px;color: rgb(255,255,255);"></i>
                        <h3 style="color: rgb(255,255,255);text-align:center;">Cuidados com a beleza</h3>
                        <p style="text-align: center;color: rgb(255,255,255);">Corte de cabelo, Maquiagem e Manicure.<br></p>
                    </div>
                    
                </div>

                <div class="d-xl-flex flex-column justify-content-between align-items-xl-center item-box" data-aos="zoom-in" style="width: 300px;background:#00bef5;margin: auto;margin-top: 5px;min-height: 300px;">
                    <div class="d-flex d-sm-flex d-xl-flex flex-column justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center item-hide" style="height: 300px;padding: 20px;"><i class="fas fa-people-carry" data-bss-hover-animate="pulse" style="font-size: 60px;color: rgb(255,255,255);"></i>
                        <h3 style="color: rgb(255,255,255);text-align:center;">Fisioterapia</h3>
                        <p style="text-align: center;color: rgb(255,255,255);">Neurofuncional e Muscular.<br></p>
                    </div>
                    
                </div>

                <div class="d-xl-flex flex-column justify-content-between align-items-xl-center item-box" data-aos="zoom-in" style="width: 300px;background:#00bef5;margin: auto;margin-top: 5px;min-height: 300px;">
                    <div class="d-flex d-sm-flex d-xl-flex flex-column justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center item-hide" style="height: 300px;padding: 20px;"><i class="fas fa-stethoscope" data-bss-hover-animate="pulse" style="font-size: 60px;color: rgb(255,255,255);"></i>
                        <h3 style="color: rgb(255,255,255);text-align:center;">Enfermagem 24h</h3>
                        <p style="text-align: center;color: rgb(255,255,255);">Equipe de enfermagem treinada para qualquer situação.<br></p>
                    </div>
                    
                </div>
                
                </div>
            </div>
        </section>


        <section style="background: #00bef5;padding-bottom: 25px;color: #00bef5;">
            <h1 data-aos="fade" style="text-align: center;padding: 50px;color: #fff;">Nossas Localização</h1>
            <div class="d-flex justify-content-between flex-wrap" style="max-width: 1120px;margin: auto;padding-bottom: 50px;"><iframe class="item-box" allowfullscreen="" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCDGgznsrvgJpkk1SwKH9KeRzTXY1ugHB4&amp;q=R.+Marciano+Luiz+Bento%2C+242+-+Gravat%C3%A1%2C+Penha+-+SC&amp;zoom=15" width="100%" height="400"></iframe></div>
        </section>
<?php
    $render('footer');
?>