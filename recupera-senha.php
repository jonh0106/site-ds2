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
                <p class="text-center"> Informe seu E-mail para recuperar a senha </p>
                <form action="" id="form-recupera">

                    <!-- caixa de e-mail -->

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-open"></i></span>
                        </div>
                        <input type="text" name="email" class="form-control" placeholder="E-mail" aria-label="email" aria-describedby="basic-addon1">
                    </div>

                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary"> Recuperar </button>
                    </div>

                </form>

                <p>

                    <a href="login.php">Fazer login</a>

                </p>

            </div>
        </div>

        </div>



    </main><!-- /.container -->

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery-validation/dist/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#form-recupera").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    }

                },
                messages: {
                    email: {
                        required: "Para recuperar a senha, insira um E-mail!",
                        email: "Por favor, insira um E-mail válido!"
                    }
                },
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass("invalid-feedback");
                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.next("label"));
                    } else {
                        error.insertAfter(element);
                    }

                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-valid").removeClass("is-invalid");
                }
            })
        })
    </script>


</body>

</html>