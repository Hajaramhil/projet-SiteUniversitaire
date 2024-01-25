<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{asset("css/DashBord.css")}}">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="{{asset("images/logo-universite.png")}}" alt="University Logo"  class="university-logo"/>
                           
                        </span>
                        <span class="title">Responsable Module</span>
                    </a>
                </li>

                <li>
                    <a  href="{{route("DashBordProf")}}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{route("DPEtudiant")}}"  >
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Étudiants</span>
                    </a>
                </li>
                <li>
                    <a >
                        <span class="icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <span class="title">Les Demandes</span>
                    </a>
                </li>
                <li>
                    <a href="{{route("DPAnonce")}}">
                        <span class="icon">
                            <ion-icon name="megaphone-outline"></ion-icon>

                        </span>
                        <span class="title">Annonces</span>
                    </a>
                </li>
              
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <style>
              
        
                .demande {
                    border: 1px solid #ccc;
                    border-radius: 10px;
                    margin-bottom: 15px;
                    padding: 15px;
                    margin: 10px;
                }
            </style>
        
        
        <div class="container">
                <h2>Liste des Demandes d'Étudiants</h2>
        
                <!-- Exemple de demande d'étudiant -->
                <div class="demande">
                    <h3>Demande</h3>
                    
                    <p>Description de la demande Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
        
                <!-- Répétez cette structure pour chaque demande d'étudiant -->
                <div class="demande">
                    <h3>Demande</h3>
                   
                    <p>Description de la demande Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
        
                <!-- Ajoutez d'autres demandes ici -->
        
            </div>
        
    </div>

    <!-- =========== Scripts =========  -->
    <script src="{{asset("js/script.js")}}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>