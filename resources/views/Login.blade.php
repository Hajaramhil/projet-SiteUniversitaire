<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <style>

body {
    margin: 0;
    font-family: 'Noto Sans', sans-serif;
}

body * {
    box-sizing: border-box;
}

h1 {
    color : white;
    margin-left: 20px;
}

.main-login {
    width: 100vw; /* vw: porcentagem da largura da sua viewport(tela) */
    height: 100vh;
    background: #201b2c;
    display: flex;
    justify-content: center; /* centraliza no eixo x */
    align-items: center;
}

.left-login {
    width: 50vw;
    height: 100vh;
    display: flex;
    justify-content: center; /* centraliza no eixo x */
    align-items: center;
    flex-direction: column;
}

.left-login > h1 { /* Todos h1 dentro da div left-login */
    font-size: 3vw;
    color: #77ffc0;
}

.left-login-image {
    width: 40vw;
    border-radius: 20px;
    
}

.right-login {
    width: 50vw;
    height: 100vh;
    display: flex;
    justify-content: center; /* centraliza no eixo x */
    align-items: center;
}

.card-login {
    width: 60%; /* 60% dos 50vh (pq está dentro da div left-login) */
    display: flex;
    justify-content: center; /* centraliza no eixo x */
    align-items: center;
    flex-direction: column;
    padding: 30px 35px; /* se tiver 2 valores, o primeiro é o eixo y e o segundo é o eixo x */
    background: #2f2841;
    border-radius: 20px;
    box-shadow: 0px 10px 40px #00000056; /* 1 valor é o eixo x, 2 valor é eixo y, 3 valor é blur, 4 valor é cor */
}

.card-login > h1 { /* pega todos h1 dentro da div .card-login */
    color: #0f8;
    font-weight: 800;
    margin: 0;
}

.textfield {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    margin: 10px 0px;
}

.textfield > input {
    width: 100%;
    border: none;
    border-radius: 10px;
    padding: 15px;
    background: #514869;
    color: #f0ffffde;
    font-size: 12pt;
    box-shadow: 0px 10px 40px #00000056;
    outline: none;
    box-sizing: border-box;
}

.textfield > label {
    color: #f0ffffde;
    margin-bottom: 10px;
}

.textfield > input::placeholder {
    color: #f0ffff94;
}

.btn-login {
    width: 100%;
    padding: 16px 0px;
    margin: auto;
    margin-top: 25px;
    margin-bottom: 25px;
    border: none;
    border-radius: 8px;
    outline: none;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 3px;
    color: #2b134b;
    background: #0f8;
    cursor: pointer;
    box-shadow: 0px 10px 40px -12px #00ff8052;
}

.register_btn {
    font-family: 'Noto Sans', sans-serif;
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: 2px;
    color: white;
}

.register_span {
    color: #0f8;
}

@media only screen and (max-width: 950px) {
    .card-login {
        width: 85%;
    }
}

@media only screen and (max-width: 600px) {
    .main-login {
        flex-direction: column;
        padding-bottom: 30px;
    }

    .left-login > h1 {
        display: none;
    }

    .left-login {
        width: 100%;
        height: auto;
    }

    .right-login {
        width: 100%;
        height: auto;
    }

    .left-login-image {
        width: 50vw;
    }

    .card-login {
        width: 90%;
    }

    .btn-plus {
        width: 100%;
    }
}
    </style>
</head>
<body>

        <div class="main-login">
            <div class="left-login">
                <h1>S'authentifier <br>Et passez votre expérience d'étude la plus agréable</h1>
                <img src="{{ asset('images/logoLogin.jpg') }}" class="left-login-image" alt="Image introuvable">
            </div>

            <div class="right-login">
                <div class="card-login">
                    <form action="{{ route('DashBordLogin') }}" method="post">
                        @csrf  
                        <h1>LOGIN</h1>
                        <div class="textfield">
                            <label for="user">Email d'utilisateur</label>
                            <input type="text" name="email" placeholder="Entrer Email d'utilisateur">
                        </div>
                        <div class="textfield">
                            <label for="pass">Mot de passe</label>
                            <input type="password" name="password" placeholder="Mot de passe">
                        </div>
                        <input type="submit" class="btn-login" value="Login">
                        <div class="btn-plus">
                            <a class="register_btn">Vous n'avez pas de compte ? <span class="register_span">Créer compte</span></a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>