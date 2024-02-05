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
                            <img   src="{{asset("images/logo-universite.png")}}" alt="University Logo"  class="university-logo"/>
                           
                        </span>
                        <span class="title">Responsable </span>
                    </a>
                </li>

                <li>
                    <a href="{{route("DashBordResponsable")}}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class ="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{route("DREtudiant")}}">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Étudiants</span>
                    </a>
                </li>
                <li>
                <a href="{{route("DRProf")}}">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <span class="title">Enseignants</span>
                </a>
            </li>

                <li>
            
                    <a  >
                        <span class="icon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </span>
                        <span class="title">Gestion  Des Salles</span>
                    </a>
                </li>

               

                <li>
                    <a href="{{route("DRAnonce")}}">
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
            <style>
                /* Add specific styles for salles.html here */
                /* Example styles: */
                
        
                
        
                h2 {
                    color: #333;
                }
        
                /* Button Styles */
                button {
                    padding: 10px;
                    background-color: #2A2185;
                    color: #fff;
                    cursor: pointer;
                    border: none;
                    height: 40px;
                    width: 150px;
                    border-radius: 5px;
                }
        
                /* Modal Styles */
                .modal {
                    display: none;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.5);
                }
        
                .modal-content {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 5px;
                }
        
                .close {
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    font-size: 20px;
                    cursor: pointer;
                }
        
                /* Form Styles */
                form {
                    display: flex;
                    flex-direction: column;
                }
        
                label {
                    margin-bottom: 8px;
                }
        
                input {
                    margin-bottom: 15px;
                    padding: 8px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                }
        
                /* Classrooms List Styles */
                .classrooms-list {
                    margin-top: 20px;
                }
        
                .classroom {
                    border: 1px solid #ccc;
                    padding: 15px;
                    margin-bottom: 15px;
                    background-color: #fff;
                    border-radius: 10px;
                    background-color: #2A2185;
                    color: white
                }
        
                /* Edit/Delete Buttons Styles */
                .edit-delete-buttons {
                    display: flex;
                    justify-content: space-between;
                    margin-top: 10px;
                }
        
                .edit-delete-buttons button {
                    padding: 8px;
                    margin-right: 10px;
                    cursor: pointer;
                    background-color: white;
                    color: black;
                    border: none;
                    border-radius: 10px;
                }
            </style>
            <div class="container" style="padding: 20px">
                <!-- Content specific to salles.html -->
                <h2>Classrooms</h2>
        
                <button onclick="openCreateModal()">Add Classroom</button>
        
                <div id="classrooms-list" class="classrooms-list">
                    <!-- Classrooms will be dynamically added here -->
                </div>
        
                <!-- Create Classroom Modal -->
                <div id="create-modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeCreateModal()">&times;</span>
                        <h3>Create New Classroom</h3>
                        <form action="{{route("AjoutClasse")}}" method="POST">
                            @csrf
                            <label for="classroom-name">Classroom Name:</label>
                            <input type="text"  name="nom" required>
        
                            <label for="classroom-capacity">Capacity:</label>
                            <input type="number"   name="capacite" required>
        
                            <button type="submit" >Create Classroom</button>
                        </form>
                    </div>
                </div>
        
                <!-- Edit Classroom Modal -->
                <div id="edit-modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeEditModal()">&times;</span>
                        <h3>Supression de classe</h3>
                        <form action="{{route("SupressionClasse")}}" method="POST">
                            @csrf
                            <label for="edit-classroom-name">ID de la classe:</label>
                            <input type="number" id="edit-classroom-name" name ="ID" required>
        
                            <label for="edit-classroom-capacity">Capacity:</label>
                            <input type="number" id="edit-classroom-capacity" required>
        
                            <button type="submit" >suprimer</button>
                        </form>
                    </div>
                </div>
        
                <!-- <script src="assets/js/salles.js"></script> Add a specific JS file for salles -->
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        // Mock data for initial classrooms
                        let classrooms = <?php echo  json_encode($Data["classe"]);?>;
                        // Display initial classrooms
                        displayClassrooms();
        
                        // Function to display classrooms
                        function displayClassrooms() {
                            const classroomsList = document.getElementById("classrooms-list");
        
                            // Clear the existing content
                            classroomsList.innerHTML = "";
        
                            // Display each classroom
                            classrooms.forEach(classroom => {
                                const classroomElement = document.createElement("div");
                                classroomElement.className = "classroom";
                                classroomElement.innerHTML = `
                                    <h3>${classroom.name}</h3>
                                    <p>Capacite: ${classroom.capacity}</p>
                                    <p>numero de la classe: ${classroom.id}</p>
                                    <div class="edit-delete-buttons">
                                        <button  onclick="openEditModal(${classroom.id})">Delete</button>
                                     </div>
                                `;
                                classroomsList.appendChild(classroomElement);
                            });
                        }
        
                        // Function to open the create modal
                        window.openCreateModal = function () {
                            document.getElementById("create-modal").style.display = "block";
                        };
        
                        // Function to close the create modal
                        window.closeCreateModal = function () {
                            document.getElementById("create-modal").style.display = "none";
                        };
        
                        // Function to open the edit modal
                        window.openEditModal = function (id) {
                            const classroomToEdit = classrooms.find(classroom => classroom.id === id);
        
                            if (classroomToEdit) {
                                document.getElementById("edit-classroom-name").value = id;
                                document.getElementById("edit-classroom-capacity").value = classroomToEdit.capacity;
                                document.getElementById("edit-modal").style.display = "block";
                                document.getElementById("edit-modal").dataset.id = id;
                            }
                        };
        
                        // Function to close the edit modal
                        window.closeEditModal = function () {
                            document.getElementById("edit-modal").style.display = "none";
                        };
        
                        // Function to add a new classroom
                        window.addClassroom = function () {
                            const name = document.getElementById("classroom-name").value;
                            const capacity = document.getElementById("classroom-capacity").value;
        
                            // Validate the capacity (assuming a positive integer is required)
                            if (!/^[1-9]\d*$/.test(capacity)) {
                                alert("Please enter a valid positive integer for capacity.");
                                return;
                            }
        
                            // Create a new classroom object
                            const newClassroom = { id: generateId(), name, capacity: parseInt(capacity) };
        
                            // Add the new classroom to the list
                            classrooms.push(newClassroom);
        
                            // Display all classrooms including the new one
                            displayClassrooms();
        
                            // Clear the form fields
                            document.getElementById("classroom-name").value = "";
                            document.getElementById("classroom-capacity").value = "";
        
                            // Close the create modal
                            closeCreateModal();
                        };
        
                        // Function to generate a unique ID for classrooms
                        function generateId() {
                            return Math.floor(Math.random() * 1000) + 1;
                        }
        
                        // Function to save edited classroom
                        window.saveEditedClassroom = function () {
                            const id = document.getElementById("edit-modal").dataset.id;
                            const classroomToEdit = classrooms.find(classroom => classroom.id == id);
        
                            if (classroomToEdit) {
                                classroomToEdit.name = id;
                                classroomToEdit.capacity = parseInt(document.getElementById("edit-classroom-capacity").value);
        
                                // Display updated classrooms
                                displayClassrooms();
        
                                // Close the edit modal
                                closeEditModal();
                            }
                        };
        
                        // Function to delete a classroom
                        window.deleteClassroom = function (id) {
                            const confirmDelete = confirm("Are you sure you want to delete this classroom?");
        
                            if (confirmDelete) {
                                classrooms = classrooms.filter(classroom => classroom.id !== id);
        
                                // Display updated classrooms
                                displayClassrooms();
                            }
                        };
                    });
                </script>
            </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="{{asset("js/script.js")}}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
















