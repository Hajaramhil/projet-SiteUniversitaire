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
        }
        
        .main-login {
            width: 100vw; 
            height: 100vh;
            background: #a2a1af;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .left-login {
            width: 50vw;
            height: 100vh;
        
            justify-content: center; 
            align-items: center;
            flex-direction: column;
        }
        
        .left-login > h1 {
            font-size: 3vw;
            font-family: Ubuntu;
            color: #2a2185;
        }
        
        .left-login-image {
            width: 40vw;
            border-radius: 20%;
            
        }
        
        .right-login {
            width: 50vw;
            height: 100vh;
            display: flex;
            justify-content: center; 
            align-items: center;
        }
        
        .card-login {
            width: 60%; 
        
            justify-content: center; 
            align-items: center;
            flex-direction: column;
            padding: 30px 35px; 
            background: #2a2185;
            border-radius: 20px;
            box-shadow: 0px 10px 40px #00000056; 
        }
        
        .card-login > h1 { 
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
            background: rgb(111, 108, 116);
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
        h1{
            margin-left: 50px;
        }
        img{
            margin-left: 30px;
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
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>