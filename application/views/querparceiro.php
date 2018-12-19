
<link rel="stylesheet" href="<?php echo base_url('assets/css/scrollToTop.css') ?>"/>


<script>
    $(document).ready(function(){


        $('.scrollToTop').hide();

        //Check to see if the window is top if not then display button
        $(window).scroll(function(){
            if($(window).scrollTop() + $(window).height() > $(document).height()-20) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        //Click event to scroll to top
        $('.scrollToTop').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });

    });
</script>



<br><br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 class="section-heading title-blue">Quer ser nosso parceiro?</h2>
                <br/>
            </div>
            <div class="col-md-12">
                <p>
                    Ao tornar-se nosso parceiro, a sua empresa estará integrada na organização da EBEC Challenge Aveiro,
                    contando com o apoio de uma equipa dinâmica e empenhada em satisfazer as necessidades de
                    desenvolvimento extracurricular dos estudantes, <b>bem como os interesses da sua empresa</b>.
                </p>
                <p class="">
                    Ao ser parceiro da EBEC Challenge Aveiro 2018 será uma parte essencial do evento e verá a
                    sua empresa ser promovida nas nossas <b>redes sociais</b> e no <b>website do evento</b>, com um maior alcance e
                    proximidade à <b>Universidade de Aveiro</b>, conhecida pelo seu dinamismo, inovação e empreendedorismo.
                </p>

             </div>
            <div class="col-lg-12 text-center">
                <br>
                <a class="hvr-sweep-to-right button2-diego" id="myBtn"> Contacte-nos&nbsp;<span class="fa fa-chevron-right"></span></a>
<!--                <button id="myBtn">Open Modal</button>-->

                <!-- The Modal -->
                <div id="myModaldiego" class="modal2">

                    <!-- Modal content -->
                    <div class="modal-content2">
                        <div class="modal-header">
                            <span class="close">&times;</span>
                            <h2 class="title_color_diego_blue">Formulário</h2>
                        </div>
                        <div class="modal-body2">
                            <div class="typeform-widget" data-url="https://diegocaldeira.typeform.com/to/ItnXRb" style="width: 100%; height: 500px;" > </div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;" > powered by <a href="https://www.typeform.com//?utm_campaign=ItnXRb&amp;utm_source=typeform.com-11467697-Basic&amp;utm_medium=typeform&amp;utm_content=typeform-embedded-poweredbytypeform&amp;utm_term=EN" style="color: #999" target="_blank">Typeform</a> </div>
                        </div>
                    </div>

                </div>

                <script>
                    // Get the modal
                    var modal = document.getElementById('myModaldiego');

                    // Get the button that opens the modal
                    var btn = document.getElementById("myBtn");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks the button, open the modal
                    btn.onclick = function() {
                        modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>
            </div>
        </div>      
    </div>
</section>
<section class="division-blue">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading title-orange">Patrocine uma das modalidades</h2>
                <br/>
            </div>
            <div class="col-md-4">
                <img class="imgsize img-responsive" src="<?php echo base_url('assets/img/querparceiro/1.jpg')?>">

            </div>

            <div class="col-md-8">
                <p>

                </p>
                <p>

                </p>
                <p class="d" style="color:#ffffff">
                    Ao ser parceira da EBEC Aveiro 2018 numa das modalidades do evento, terá acesso a um contacto direto com os participantes através das provas.
                    De acordo com a <b style="color: orange">modalidade em questão</b>, os participantes terão pela frente a resolução de um desafio lançado pela empresa.
                </p>
            </div>
        </div>
    </div>
    <br><br>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 class="section-heading title-blue">Esteja na nossa feira de empresas</h2>
                <br/>
            </div>


            </div>
            <div class="col-md-7">
                <p>


                </p>
                <br><br><br>
                <p class="">
                    A feira de empresas é aberta a toda a comunidade académica e tem o intuito de ser uma ferramenta de
                    exposição e partilha da empresa, e dos seus produtos e serviços, bem como uma oportunidade de
                    recrutamento para todos os estudantes interessados da Universidade de Aveiro.

                </p>
            </div>
        <div class="col-md-5">
            <div class="fotorama" data-width="400" ata-ratio="4/3" data-nav="thumbs" data-thumbheight="48"  data-loop="true" data-autoplay="true" data-stopautoplayontouch="false">
                <img src="../../assets/img/media/2016/23.jpg">
                <img src="../../assets/img/media/2016/24.jpg">
                <img src="../../assets/img/media/2016/25.jpg">

            </div>

        </div>
    </div>
</section>
<!--<section class="bg-white">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12 text-center">-->
<!--                <h2 class="section-heading">Torne-se nosso parceiro promocional</h2>-->
<!--                <br/>-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--                <img class="imgsize" src="--><?php //echo base_url('assets/img/querparceiro/graf2.png')?><!--">-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="col-md-8">-->
<!--                <p>-->
<!---->
<!--                </p>-->
<!--                <p>-->
<!---->
<!--                </p>-->
<!--                <p class="d">-->
<!--                    Ao ser parceiro da EBEC Aveiro 2017 será uma parte essencial do evento e verá a sua empresa ser promovida nas nossas redes sociais e no website do evento, com um maior alcance e proximidade à Universidade de Aveiro, conhecida pelo seu dinamismo, inovação e empreendedorismo.-->
<!---->
<!--                </p>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<section>-->
<!--    <h2>Animated Modal with Header and Footer</h2>-->
<!---->
<!--    <!-- Trigger/Open The Modal -->
<!--    <button id="myBtn">Open Modal</button>-->
<!---->
<!--    <!-- The Modal -->
<!--    <div id="myModaldiego" class="modal2">-->
<!---->
<!--        <!-- Modal content -->
<!--        <div class="modal-content2">-->
<!--            <div class="modal-header2">-->
<!--                <span class="close">&times;</span>-->
<!--                <h2 class="title_color_diego_blue">Formulário</h2>-->
<!--            </div>-->
<!--            <div class="modal-body2">-->
<!--                <div class="typeform-widget" data-url="https://diegocaldeira.typeform.com/to/ItnXRb" style="width: 100%; height: 500px;" > </div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;" > powered by <a href="https://www.typeform.com//?utm_campaign=ItnXRb&amp;utm_source=typeform.com-11467697-Basic&amp;utm_medium=typeform&amp;utm_content=typeform-embedded-poweredbytypeform&amp;utm_term=EN" style="color: #999" target="_blank">Typeform</a> </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--    <script>-->
<!--        // Get the modal-->
<!--        var modal = document.getElementById('myModaldiego');-->
<!---->
<!--        // Get the button that opens the modal-->
<!--        var btn = document.getElementById("myBtn");-->
<!---->
<!--        // Get the <span> element that closes the modal-->
<!--        var span = document.getElementsByClassName("close")[0];-->
<!---->
<!--        // When the user clicks the button, open the modal-->
<!--        btn.onclick = function() {-->
<!--            modal.style.display = "block";-->
<!--        }-->
<!---->
<!--        // When the user clicks on <span> (x), close the modal-->
<!--        span.onclick = function() {-->
<!--            modal.style.display = "none";-->
<!--        }-->
<!---->
<!--        // When the user clicks anywhere outside of the modal, close it-->
<!--        window.onclick = function(event) {-->
<!--            if (event.target == modal) {-->
<!--                modal.style.display = "none";-->
<!--            }-->
<!--        }-->
<!--    </script>-->
<!--</section>-->

<!--        <div class="typeform-widget" data-url="https://catarinajorge.typeform.com/to/E1ELoW" data-text="EBEC Aveiro 2017 - parceiros" style="width:100%;height:500px;"></div>-->
<!--        <script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>-->
<!--        <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;">Powered by<a href="https://www.typeform.com/examples/?utm_campaign=E1ELoW&amp;utm_source=typeform.com-5195607-Basic&amp;utm_medium=typeform&amp;utm_content=typeform-embedded-poweredbytypeform&amp;utm_term=PT" style="color: #999" target="_blank">Typeform</a></div>-->
<!--        <a href="" class="scrollToTop"></a>-->

<!--</section>-->