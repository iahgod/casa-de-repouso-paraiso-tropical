<?=$render('header', ['config'=>$config, 'pagina'=>'Home']);?>
<link rel="stylesheet" type="text/css" href="<?=$base;?>/assets/css/curriculo.css"/>

<section class="part" id="apresentacao">
    <div class="part_title">Crie o seu currículo grátis</div>
    <div class="part_line"></div>
    <div class="part_text">Apenas insira os seus dados e crie já, nada ficara salvo!</div>

    <form class="form_loja" method="POST" action="<?=$base;?>/edit" enctype="multipart/form-data">
    <detailss>
        <div class="form_combo">
            <div>
                <label for="">Nome completo</label><br>
                <input type="text" name="title" id="nome" placeholder="Fulano de Tal" autocomplete="off" required id=""><br>
            </div>
            <div>
                <label for="">Endereço - Insira o endereço completo</label><br>
                <input type="text" name="valor" id="endereco" autocomplete="off" placeholder="Rua Alegre, 123 - Cidade Brasileira, Estado, País" required id=""><br>
            </div>
            <div>
                <label for="">E-Mail</label><br>
                <input type="text" name="resumo" id="email" autocomplete="off" placeholder="email@email.com" required id=""><br>
            </div>
            <div>
                <label for="">Telefone/Celular</label><br>
                <input type="text" name="venda" id="telefone" autocomplete="off" placeholder="(47) 12345-1234" required id=""><br>
            </div>
            <div>
                <label for="">Objetivo - Cargo pretendido</label><br>
                <input type="text" name="venda" id="objetivo" autocomplete="off" placeholder="Vendedor(a)" required id=""><br>
            </div>
        </div>
        <div class="form_combo">
            <div>
                <label for="">Qualificação Profissional</label><br>
                <textarea name="descricao" id="qualificacao" autocomplete="off" placeholder="Excelente capacidade de comunicação, relacionamento interpessoal e ótima eloquência verbal" cols="10" rows="05"></textarea><br>
            </div>
            <div>
                <label for="">Experiência Profissional</label><br>
                <textarea name="descricao" id="exp" autocomplete="off" placeholder="Vendedor(a) por 3 anos na Albuquerque e Cia; Treinei novos funcionários, com o aumento de 5% nas vendas." cols="10" rows="05"></textarea><br>
            </div>
            <div>
                <label for="">Formação</label><br>
                <textarea name="descricao" id="formacao" autocomplete="off" placeholder="Em andamento - Curso técnico em Marketing " cols="10" rows="05"></textarea><br>
            </div>
        </div>
        <div class="form_combo">
            <div>
                <label for="">Cursos adicionais</label><br>
                <textarea name="descricao" id="cursos" autocomplete="off" placeholder="Excelente capacidade de comunicação, relacionamento interpessoal e ótima eloquência verbal" cols="10" rows="05"></textarea><br>
            </div>
            <div>
                <label for="">Idiomas</label><br>
                <textarea name="descricao" id="idiomas" autocomplete="off" placeholder="Vendedor(a) por 3 anos na Albuquerque e Cia; Treinei novos funcionários, com o aumento de 5% nas vendas." cols="10" rows="05"></textarea><br>
            </div>
        </div>
        <div class="form_combo">
            <div>
                <label for="">Foto de perfil</label><br>
                <input class="file" id="uploadfoto"  type="file" name="img1" accept="image/png, image/jpeg" placeholder="" id=""><br>
            </div>
        </div>
        <input class="btn-submit" type="button" onclick="gerar()" value="Salvar">
        
    </detailss>
</form>

<div class="part_title">Visualização do currículo - Você pode editar o campo abaixo manualmente também.</div>
    <div class="part_line"></div>

    <form id="section-to-print" contenteditable="true" class="form_loja curriculo" style="background-color:#fff;color:#000;" method="POST" action="<?=$base;?>/edit" enctype="multipart/form-data">
    <detailss>

        <div class="form_combo combo_curriculo">
            <div class="img">
                <img src="https://res.cloudinary.com/murano-inc/image/upload/v1650048902/icones/woman-gf3deec45c_1920_zm6xio.jpg" id="fotopreview" height="180px" width="180px" alt="">
            </div>
            <div class="info">
                <h1 style="text-align: right;" id="nomeC">Iago Vinicios</h1>
                <div class="item_info">
                    <div id="enderecoC">Rua Alegre, 123 - Cidade Brasileira, Estado, País</div><div style="margin-left:5px;"><img src="<?=$base;?>/assets/img/location.png" width="30px" alt=""></div>
                </div>
                <div class="item_info">
                    <div id="emailC">iahgod25@gmail.com</div><div style="margin-left:5px;"><img src="<?=$base;?>/assets/img/email.png" width="30px" alt=""></div>
                </div>
                <div class="item_info">
                    <div id="telefoneC">(47) 99241-2115</div><div style="margin-left:5px;"><img src="<?=$base;?>/assets/img/telephone.png" width="30px" alt=""></div>
                </div>
            </div>
        </div>
        <br>
        <h1>Objetivo</h1>
        <p id="objetivoC">Vendedor</p>
        <br>
        <h1>Qualificação Profissional</h1>
        <p id="qualificacaoC">Excelente capacidade de comunicação, relacionamento interpessoal e ótima eloquência verbal</p>
        <br>
        <h1>Experiência Profissional</h1>
        <p id="expC">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, ad animi! Iure quos tempora saepe ex. Dolores magni iste ab quis atque quos officia tempora vel, provident cum similique obcaecati!</p>
        <br>
        <h1>Formação</h1>
        <p id="formacaoC">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, ad animi! Iure quos tempora saepe ex. Dolores magni iste ab quis atque quos officia tempora vel, provident cum similique obcaecati!</p>
        <br>
        <h1>Cursos Adicionais</h1>
        <p id="cursosC">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, ad animi! Iure quos tempora saepe ex. Dolores magni iste ab quis atque quos officia tempora vel, provident cum similique obcaecati!</p>
        <br>
        <h1>Idiomas</h1>
        <p id="idiomasC">Inglês - Básico</p>
        <br>
        <br>
        <br>
        <br>
        <div contenteditable="false">
            <p style="font-size: 15px;">Currículo criado em https://www.iahgod.com.br</p>
        </div>
        
    </detailss>
</form>

<input class="btn-submit" type="button" onclick="print()" value="Imprimir">

<script src="<?=$base;?>/assets/scripts/curriculo.js"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
</section>

<?=$render('footer', ['config'=>$config]);?>