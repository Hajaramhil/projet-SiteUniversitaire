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
                    <a href="{{route("DashBordProf")}}" >
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a  >
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Étudiants</span>
                    </a>
                </li>
                <li>
                    <a href="{{route("DPDemande")}}">
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
               
         
        
                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 20px;
                    margin: 20px;
                }
        
                th, td {
                    border: 1px solid #ddd;
                    padding: 10px;
                    text-align: left;
                }
        
                th {
                    background-color: #f2f2f2;
                }
        
            </style>
        
         <div class="container">
                <h2>Liste des Étudiants du module</h2>
        
                <table>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Programme</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Data['ListeEtudiants'] as $etudiant)
                        <tr>
                            <td>{{ $etudiant->Nom }}</td>
                            <td>{{ $etudiant->Email }}</td>
                            <td>{{ $etudiant->Programme }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        
    </div>

    <!-- =========== Scripts =========  -->
    <script src="{{asset("js/script.js")}}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>