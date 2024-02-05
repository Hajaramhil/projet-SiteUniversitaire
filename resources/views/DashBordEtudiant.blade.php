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
                        <span class="title">Etudiant </span>
                    </a>
                </li>

                <li>
                    <a >
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{route("DEEtudiant")}}">
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
            <div class="topbar">
                <div class="toggle" >
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    
                </div>

                <div class="user">
                    <img src="{{asset("images/utilisateur.png")}}" alt="">
                </div>
            </div>
            <div class="cardBox">
                @foreach ($Data['Statistiques'] as $statistique)
                    <div class="card">
                        <div>
                            <div class="numbers">{{ $statistique->Nombre }}</div>
                            <div class="cardName">{{ $statistique->Type }}</div>
                        </div>
            
                        <div class="iconBx">
                            @if ($statistique->Type == 'Etudiants')
                                <ion-icon name="person-outline"></ion-icon>
                            @elseif ($statistique->Type == 'Enseignants')
                                <ion-icon name="school-outline"></ion-icon>
                            @elseif ($statistique->Type == 'Formations Continues & Initiales')
                                <ion-icon name="book-outline"></ion-icon>
                            @elseif ($statistique->Type == 'Département')
                                <ion-icon name="easel-outline"></ion-icon>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Notes Des Étudiants </h2>
                        <a href="#" class="btn">View All</a>
                    </div>
            
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Notes</td>
                                <td>Session</td>
                                <td>Status</td>
                            </tr>
                        </thead>
            
                        <tbody>
                            @foreach ($Data['Notes'] as $note)
                            <tr>
                                <td>
                                    @php
                                        $etudiant = array_filter($Data['ListeEtudiants'], function ($etudiant) use ($note) {
                                            return $etudiant->ID == $note->Etudiant_ID;
                                        });
                        
                                        $etudiant = reset($etudiant); // Obtient le premier élément du tableau
                                    @endphp
                        
                                    @if($etudiant)
                                        {{ $etudiant->Nom }}
                                    @else
                                        Étudiant non trouvé
                                    @endif
                                </td>
                                <td>{{ $note->Note }}</td>
                                <td>{{ $note->Session }}</td>
                                <td><span class="status">{{ $note->Statut }}</span></td>
                            </tr>
                        @endforeach
                        
                        
                        </tbody>
                    </table>
                </div>

                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Liste Des Étudiants</h2>
                    </div>
        
                    <table>
                        <tbody>
                            @foreach ($Data['ListeEtudiants'] as $etudiant)
                                <tr>
                                    <td width="60px">
                                        <div class="imgBx"><img src="{{ $etudiant->Genre ? asset("images/customer02.jpg") : asset("images/customer01.jpg") }}" alt=""></div>                                    </td>
                                    <td>
                                        <h4>{{ $etudiant->Nom }} <br> <span>{{ $etudiant->Programme }}</span></h4>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="{{asset("js/script.js")}}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>