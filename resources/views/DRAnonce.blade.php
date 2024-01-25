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
                        <span class="title">Responsable Péda</span>
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
            
                    <a href="{{route("DRSalle")}}">
                        <span class="icon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </span>
                        <span class="title">Gestion  Des Salles</span>
                    </a>
                </li>

               

                <li>
                    <a  >
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
                /* Add specific styles for annonces.html here */
                /* Example styles: */
               
                
                .announcement {
                    border: 1px solid #ccc;
                    padding: 15px;
                    margin-bottom: 15px;
                    background-color: #fff;
                    border-radius: 5px;
                    font-family: Arial, sans-serif;
                }
                
                .add-announcement-form {
                    margin-top: 20px;
                }
                
                #announcement-form,
                #edit-form {
                    display: flex;
                    flex-direction: column;
                }
                
                #announcement-form label,
                #edit-form label {
                    margin-bottom: 8px;
                }
                
                #announcement-form input,
                #announcement-form textarea,
                #edit-form input,
                #edit-form textarea {
                    margin-bottom: 15px;
                    padding: 8px;
                }
                
                #announcement-form button,
                #edit-form button {
                    padding: 10px;
                    background-color: #007BFF;
                    color: #fff;
                    cursor: pointer;
                }
                
                /* Modal styles */
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
                button
                    {
                        background-color: #28a745;
                        color: #fff;
                        border: none;
                        padding: 10px 15px;
                        border-radius: 15px;
                        cursor: pointer;
                        margin: 7px;
                    }
                
            </style>
            <div class="container" style="padding: 20px; font-family: Arial, sans-serif;">
                <!-- Content specific to annonces.html -->
                <h2>Latest Announcements</h2>
        
                <button onclick="openCreateModal()">Add Announcement</button>
        
                <div id="announcements-list" class="announcements-list">
                    <!-- Announcements will be dynamically added here -->
                </div>
        
                <!-- Create Announcement Modal -->
                <div id="create-modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeCreateModal()">&times;</span>
                        <h3>Create New Announcement</h3>
                        <form id="announcement-form">
                            <label for="announcement-title">Title:</label>
                            <input type="text" id="announcement-title" required>
        
                            <label for="announcement-content">Content:</label>
                            <textarea id="announcement-content" required></textarea>
        
                            <button type="button" onclick="addAnnouncement()">Create Announcement</button>
                        </form>
                    </div>
                </div>
        
                <!-- Edit Announcement Modal -->
                <div id="edit-modal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeEditModal()">&times;</span>
                        <h3>Edit Announcement</h3>
                        <form id="edit-form">
                            <label for="edit-announcement-title">Title:</label>
                            <input type="text" id="edit-announcement-title" required>
        
                            <label for="edit-announcement-content">Content:</label>
                            <textarea id="edit-announcement-content" required></textarea>
        
                            <button type="button" onclick="saveEditedAnnouncement()">Save Changes</button>
                        </form>
                    </div>
                </div>
        
                <!-- <script src="assets/js/annonces.js"></script> Add a specific JS file for announcements -->
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        // Mock data for initial announcements
                        let announcements = [
                            { id: 1, title: "Announcement 1", content: "Content for Announcement 1" },
                            { id: 2, title: "Announcement 2", content: "Content for Announcement 2" }
                        ];
        
                        // Display initial announcements
                        displayAnnouncements();
        
                        // Function to display announcements
                        function displayAnnouncements() {
                            const announcementsList = document.getElementById("announcements-list");
        
                            // Clear the existing content
                            announcementsList.innerHTML = "";
        
                            // Display each announcement
                            announcements.forEach(announcement => {
                                const announcementElement = document.createElement("div");
                                announcementElement.className = "announcement";
                                announcementElement.innerHTML = `
                                    <h3>${announcement.title}</h3>
                                    <p>${announcement.content}</p>
                                    <div class="edit-delete-buttons">
                                        <button onclick="openEditModal(${announcement.id})">Edit</button>
                                        <button onclick="deleteAnnouncement(${announcement.id})">Delete</button>
                                    </div>
                                `;
                                announcementsList.appendChild(announcementElement);
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
                            const announcementToEdit = announcements.find(announcement => announcement.id === id);
        
                            if (announcementToEdit) {
                                document.getElementById("edit-announcement-title").value = announcementToEdit.title;
                                document.getElementById("edit-announcement-content").value = announcementToEdit.content;
                                document.getElementById("edit-modal").style.display = "block";
                                document.getElementById("edit-modal").dataset.id = id;
                            }
                        };
        
                        // Function to close the edit modal
                        window.closeEditModal = function () {
                            document.getElementById("edit-modal").style.display = "none";
                        };
        
                        // Function to add a new announcement
                        window.addAnnouncement = function () {
                            const title = document.getElementById("announcement-title").value;
                            const content = document.getElementById("announcement-content").value;
        
                            // Create a new announcement object
                            const newAnnouncement = { id: generateId(), title, content };
        
                            // Add the new announcement to the list
                            announcements.push(newAnnouncement);
        
                            // Display all announcements including the new one
                            displayAnnouncements();
        
                            // Clear the form fields
                            document.getElementById("announcement-title").value = "";
                            document.getElementById("announcement-content").value = "";
        
                            // Close the create modal
                            closeCreateModal();
                        };
        
                        // Function to generate a unique ID for announcements
                        function generateId() {
                            return Math.floor(Math.random() * 1000) + 1;
                        }
        
                        // Function to save edited announcement
                        window.saveEditedAnnouncement = function () {
                            const id = document.getElementById("edit-modal").dataset.id;
                            const announcementToEdit = announcements.find(announcement => announcement.id == id);
        
                            if (announcementToEdit) {
                                announcementToEdit.title = document.getElementById("edit-announcement-title").value;
                                announcementToEdit.content = document.getElementById("edit-announcement-content").value;
        
                                // Display updated announcements
                                displayAnnouncements();
        
                                // Close the edit modal
                                closeEditModal();
                            }
                        };
        
                        // Function to delete an announcement
                        window.deleteAnnouncement = function (id) {
                            const confirmDelete = confirm("Are you sure you want to delete this announcement?");
        
                            if (confirmDelete) {
                                announcements = announcements.filter(announcement => announcement.id !== id);
        
                                // Display updated announcements
                                displayAnnouncements();
                            }
                        };
                    });
                </script>
            </div>

    <!-- =========== Scripts =========  -->
    <script src="{{asset("js/script.js")}}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
















