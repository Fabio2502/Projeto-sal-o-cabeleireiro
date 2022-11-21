<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/pages/AgendarHorarios/agendamentos.css">
    <title>Agendamento Horario</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="/assets/fotos/agendamento.png" alt="">
        </div>
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Agende Seu Horario</h1>
                    </div>

                    <div class="login-button">
                        <button><a href="/pages/principal/index.php">Voltar</a></button>
                    </div>
                   
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" name="firstname" required placeholder="Digite seu primeiro nome" >
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="lastname" required placeholder="Digite seu sobrenome" >
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" required placeholder="Digite seu e-mail" >
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="number" required placeholder="(xx) xxxx-xxxx" >
                    </div>

                    <div class="input-box">
                        <label for="password">Horario</label>
                        <input id="password" type="time" required name="horario"  >
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Data</label>
                        <input id="confirmDate" type="date" required name="confirmDate" >
                    </div>

                </div>

                <div class="trabalho-inputs">
                    <div class="trabalho-title">
                        <h6>Trabalho</h6>
                    </div>

                    <div class="trabalho-group">
                        <div class="trabalho-input">
                            <input id="female" type="radio" name="trabalho">
                            <label for="female">Terapia Capilar</label>
                        </div>

                        <div class="trabalho-input">
                            <input id="male" type="radio" name="trabalho">
                            <label for="male">Cortes</label>
                        </div>

                        <div class="trabalho-input">
                            <input id="others" type="radio" name="trabalho">
                            <label for="others">Tratamentos</label>
                        </div>

                        <div class="trabalho-input">
                            <input id="none" type="radio" name="trabalho">
                            <label for="none">Tintura</label>
                        </div>
                    </div>
                </div>

                <div class="agendar-button">
                    <button><a href="#">Agendar Horario</a> </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>