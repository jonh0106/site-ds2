<!DOCTYPE html>
<!-- saved from url=(0063)https://getbootstrap.com.br/docs/4.1/examples/starter-template/ -->
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon/icon.ico">

    <title>Template inicial, usando Bootstrap.</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/starter-template.css" rel="stylesheet">
    <script src="js/fontawesome.js"></script>
</head>

<body cz-shortcut-listen="true">



    <main role="main" class="container">

        <div class="row">
            <div class="col-sm-4 offset-sm-4 border shadow">
                <h1 class="text-center">
                    <a href="index.php">DS II </a>
                </h1>
                <p class="text-center"> Crie sua conta gratuita </p>
                <form action="" id="form-registro">

                    <!-- campo para nome-->

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="nome" class="form-control" placeholder="Nome Completo" aria-label="nome" aria-describedby="basic-addon1">
                    </div>

                    <!-- caixa de e-mail -->

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-open"></i></span>
                        </div>
                        <input type="text" name="email" class="form-control" placeholder="E-mail" aria-label="email" aria-describedby="basic-addon1">
                    </div>

                    <!-- caixa para senha -->

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                        </div>
                        <input type="password" name="senha" class="form-control" placeholder="Senha" aria-label="senha" aria-describedby="basic-addon1">
                    </div>

                    <!-- caixa para confirmar a senha -->

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                        </div>
                        <input type="password" name="confirmaSenha" class="form-control" placeholder="Repita a Senha" aria-label="senha" aria-describedby="basic-addon1">
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">
                            Aceitar os <a href="#" data-toggle="modal" data-target="#Termos">Termos</a>
                        </label>
                    </div>


                    <div class="form-group text-right">
                        <button Type="button" class="btn btn-primary "> Cadastar </button>
                    </div>


                </form>

                <p>

                    <a href="login.php">Ja tenho uma conta</a>

                </p>


            </div>
        </div>

        </div>



    </main><!-- /.container -->
<!-- Botão para acionar modal -->

<!-- Modal -->
<div class="modal fade" id="Termos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Termos site DS2 </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem libero tempore sint ducimus unde, aperiam adipisci nam rerum repudiandae molestias mollitia natus. Nulla autem ipsum eos molestiae ex adipisci consectetur?
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio est consequatur, error velit vero dolore maiores. Obcaecati nulla distinctio pariatur. Nulla dolor velit sed error placeat dignissimos quidem voluptatibus ducimus.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery-validation/dist/jquery.validate.min.js"></script>
     <script>
$(document).ready(function (){
    $("#form-registro").validate({
        rules:{
           nome:{
               require:true
           },
           email:{
               require:true,
               email:true
           },
           senha:{
               require:true,
               minlength: 6
           }

        },
        messages:{
            nome:{
                require:"Nome obrigatorio"
            },
            email:{
            require:"O E-mail e obrigatorio",
            email:"Informe um E-mail valido"
        },
         senha:{
             require:"Informe uma senha",
             minlength:"Informe uma senha minima de 6 digitos"

         }

        },
        errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `invalid-feedback` class to the error element
					error.addClass( "invalid-feedback" );
					error.insertAfter( element );
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
				}

    })

} )

     </script>

</body>

</html>