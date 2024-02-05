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
                        <span class="title">Etudiant</span>
                    </a>
                </li>

                <li>
                    <a href="{{route("DashBordEtudiant")}}">
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
                    <a href="{{route("DEDemande")}}">
                        <span class="icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <span class="title">Les Demandes</span>
                    </a>
                </li>
                <li>
                    <a href="{{route("DEAnonce")}}">
                        <span class="icon">
                            <ion-icon name="megaphone-outline"></ion-icon>

                        </span>
                        <span class="title">Annonces</span>
                    </a>
                </li>
              
                <li>
                    <a href="{{route("k")}}">
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
            <div class="container">
                <style>
                    
                    .container {
                        display: flex;
                        justify-content: space-between;
                     }
                
                    .recentOrders {
                        background-color: #fff;
                        padding: 20px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        width: 60%; /* Ajustez selon vos besoins */
                        color: white;
                        border-radius: 20px;
                        margin: 10px;
                        background-color:#2A2185; 
                    }
                
                    .addStudentForm {
                         margin: 5px;
                        padding: 20px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        width: 35%; /* Ajustez selon vos besoins */
                        display: flex;
                        align-items: center;
                        flex-direction: column;
                        color: white;
                        border-radius: 20px;
                        margin: 10px;
                        background-color:#2A2185; 
                    }
                
                    .cardHeader {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        margin-bottom: 20px;
                        
                    }
                
                    h2 {
                        color: #333;
                    }
                
                    .btn {
                        background-color: #28a745;
                        color: #fff;
                        border: none;
                        padding: 10px 15px;
                        cursor: pointer;
                    }.btn:hover{
                        background-color: #28a745;
                        color: #fff;
                        border: none;
                        padding: 10px 15px;
                        cursor: pointer;
                    }
                
                    table {
                        width: 100%;
                        border-collapse: collapse;
                        margin-top: 20px;
                    }
                
                    th, td {
                        border: 1px solid #ddd;
                        padding: 12px;
                        text-align: left;
                    }
                
                    th {
                        background-color: #333;
                        color: #fff;
                    }
                
                   
                
                    .addStudentForm p{
                        margin: 3px;
                    }
                    .addStudentForm button{
                       border-radius: 15px;
                       margin-left: 20px;
                    }
                    .addStudentForm input{
                        border-radius: 15px;
                       outline: none;
                       border: 1px solid black;
                        padding: 6px;
                    }
                </style>
                


                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2 style="color: white">Liste Des Étudiants</h2>
                    </div>
                
                    <table>
                        <thead>
                            <tr>
                                <td>Code</td>
                                <td>Nom</td>
                                <td>Email</td>
                                <td>Programme</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Data['ListeEtudiants'] as $etudiant)
                                <tr>
                                    <td>{{ $etudiant->ID }}</td>
                                    <td>{{ $etudiant->Nom }}</td>
                                    <td>{{ $etudiant->Email }}</td>
                                    <td>{{ $etudiant->Programme }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

    <!-- =========== Scripts =========  -->
    <script src="{{asset("js/script.js")}}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>