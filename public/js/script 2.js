
var PageEditEtudiant = `
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
    }

    .addStudentForm {
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 35%; /* Ajustez selon vos besoins */
        display: flex;
        align-items: center;
        flex-direction: column;
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

    tr:nth-child(even) {
        background-color: #f9f9f9;
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
        <h2>Liste Des Étudiants</h2>
     </div>

    <table>
        <thead>
            <tr>
                <td>Nom</td>
                <td>Email</td>
                <td>Filière</td>
            </tr>
        </thead>
        <tbody>
            <!-- Student Rows Here -->
            <tr>
                <td>Jean Dupont</td>
                <td>jean.dupont@example.com</td>
                <td>Science</td>
            </tr>
            <!-- Repeat for other students -->
        </tbody>
    </table>
</div>

<div class="addStudentForm">
    <h2>Ajouter/supprimer Étudiant</h2>
    
    <form id="addStudentForm">
        <p>code</p>
        <input type="number"  name="code" required>
        <p>Nom complet</p>
        <input type="text" name="nom" required>
        <p>Password</p>
        <input type="password" name="password" required>
        <p>Email</p>
        <input type="email"  name="email" required>
        <p>Programme (deust,licence ,Master) </p>
        <input type="text" id="filiere" name="Programme" required>
        <p>Ajout ou supression</p>
        <input type="checkbox">
        <button type="submit" class="btn">Valider</button>
    </form>
</div>
</div>
`


// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};
function showSection(sectionId) {
  // Hide all sections
  document.querySelectorAll('.main .section').forEach(section => {
      section.style.display = 'none';
  });

  // Show the selected section
  document.querySelector('#' + sectionId).style.display = 'block';
}

// Add click event listener for navigation items
document.querySelectorAll('.navigation a').forEach(navItem => {
  navItem.addEventListener('click', function() {
      const sectionId = this.getAttribute('href').slice(1);
      main.innerHTML = PageEditEtudiant; // Assuming href="#dashboard", etc.
      showSection(sectionId);
  });
});
