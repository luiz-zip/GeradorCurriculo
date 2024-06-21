<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Gerar Currículo PontoCom</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->    
    <link rel="icon" type="image/png" href="images/icons/unipar_ld_schema_logo.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->    
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->    
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form action="gerar_curriculo.php" method="POST" class="login100-form validate-form">
                    <div class="fleximagem">
                        <img src="images/logo.unipar.png" class="imageLogo">
                    </div>
                
                    <div class="wrap-input100 validate-input" data-validate="Nome é obrigatório!">
                        <input class="input100" type="text" name="nome" id="nome" required>
                        <span class="focus-input100"></span>
                        <label for="nome" class="label-input100">Nome</label>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Data de Nascimento é obrigatória!">
                        <input class="input100" type="date" name="dataNascimento" id="dataNascimento" onchange="calcularIdade()" required>
                        <span class="focus-input100"></span>
                        <label for="dataNascimento" class="label-input100">Data de Nascimento</label>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input id="idade" class="inputReadOnly" type="number" name="idade" readonly value=0>
                        <label for="idade" class="label-input100readonly">Idade</label>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Descrição é obrigatória!">
                        <input class="input100" type="text" name="descricao" id="descricao" required>
                        <span class="focus-input100"></span>
                        <label for="descricao" class="label-input100">Descrição | Objetivo</label>
                    </div>

                    <h4 class="sectiontitles">- Contato</h4>
                    <div class="wrap-input100 validate-input" data-validate="Telefone é obrigatório!">
                        <input class="input100" type="text" name="telefone" id="telefone" required>
                        <span class="focus-input100"></span>
                        <label for="telefone" class="label-input100">Telefone</label>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Email é obrigatório!">
                        <input class="input100" type="email" name="email" id="email" required>
                        <span class="focus-input100"></span>
                        <label for="email" class="label-input100">Email</label>
                    </div>

                    <h4 class="sectiontitles">- Endereço</h4>
                    <div class="wrap-input100 validate-input" data-validate="Endereço é obrigatório!">
                        <input class="input100" type="text" name="endereco" id="endereco" required>
                        <span class="focus-input100"></span>
                        <label for="endereco" class="label-input100">Bairro, Cidade - Estado</label>
                    </div>

                    <!-- Educação Section -->
                    <div id="educacaoFields">
                        <h4 class="sectiontitles">- Educação</h4>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="educacao[]" required>
                            <span class="focus-input100"></span>
                            <label class="label-input100">Instituição | Curso</label>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button style="margin-bottom: 10px;" type="button" class="login100-form-btn" onclick="addField('educacaoFields', 'Instituição | Curso')">Adicionar Educação</button>
                    </div>

                    <!-- Experiência Section -->
                    <div id="experienciaFields">
                        <h4 class="sectiontitles">- Experiência</h4>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="experiencia[]" required>
                            <span class="focus-input100"></span>
                            <label class="label-input100">Empresa | Cargo</label>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="periodo[]" required>
                            <span class="focus-input100"></span>
                            <label class="label-input100">Período de Contrato (Ano Início - Ano Fim)</label>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="descricaoCargo[]" required>
                            <span class="focus-input100"></span>
                            <label class="label-input100">Descrição do Cargo</label>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button style="margin-bottom: 10px;" type="button" class="login100-form-btn" onclick="addExperienceField()">Adicionar Experiência</button>
                    </div>

                    <!-- Habilidades Section -->
                    <div id="habilidadesFields">
                        <h4 class="sectiontitles">- Habilidades</h4>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="habilidades[]" required>
                            <span class="focus-input100"></span>
                            <label class="label-input100">Habilidade</label>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button style="margin-bottom: 10px;" type="button" class="login100-form-btn" onclick="addField('habilidadesFields', 'Habilidade')">Adicionar Habilidade</button>
                    </div>

                    <div class="container-login100-form-btn">
                        <button style="margin-top: 20px;" type="submit" class="login100-form-btn">
                            Gerar Currículo ONLINE
                        </button>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('images/bggerador.png');">
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function calcularIdade() {
            const dataNascimento = document.getElementById('dataNascimento').value;
            const nascimento = new Date(dataNascimento);
            const hoje = new Date();
            let idade = hoje.getFullYear() - nascimento.getFullYear();
            const mes = hoje.getMonth() - nascimento.getMonth();
            if (mes < 0 || (mes === 0 && hoje.getDate() < nascimento.getDate())) {
                idade--;
            }
            document.getElementById('idade').value = idade;
        }

        function addField(sectionId, label) {
            const container = document.getElementById(sectionId);
            const fieldDiv = document.createElement('div');
            fieldDiv.className = 'wrap-input100 validate-input';
            fieldDiv.setAttribute('data-validate', `${label} é obrigatório!`);

            const input = document.createElement('input');
            input.className = 'inputNew';
            input.type = 'text';
            input.name = sectionId.slice(0, -6) + '[]'; // Remove "Fields" from sectionId to use as name
            input.required = true;

            const span = document.createElement('span');
            span.className = 'focus-input100';

            const labelElement = document.createElement('label');
            labelElement.className = 'label-input100New';
            labelElement.innerText = label;

            fieldDiv.appendChild(input);
            fieldDiv.appendChild(span);
            fieldDiv.appendChild(labelElement);

            container.appendChild(fieldDiv);
        }

         function addExperienceField() {
            const container = document.getElementById('experienciaFields');
            
            const fields = [
                { name: 'experiencia[]', label: 'Empresa | Cargo' },
                { name: 'periodo[]', label: 'Período de Contrato (Ano Início - Ano Fim)' },
                { name: 'descricaoCargo[]', label: 'Descrição do Cargo' }
            ];

            fields.forEach(field => {
                const fieldDiv = document.createElement('div');
                fieldDiv.className = 'wrap-input100 validate-input';
                fieldDiv.setAttribute('data-validate', `${field.label} é obrigatório!`);

                const input = document.createElement('input');
                input.className = 'inputNew';
                input.type = 'text';
                input.name = field.name;
                input.required = true;

                const span = document.createElement('span');
                span.className = 'focus-input100';

                const labelElement = document.createElement('label');
                labelElement.className = 'label-input100New';
                labelElement.innerText = field.label;

                fieldDiv.appendChild(input);
                fieldDiv.appendChild(span);
                fieldDiv.appendChild(labelElement);

                container.appendChild(fieldDiv);
            });
        }
    </script>
    
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>
