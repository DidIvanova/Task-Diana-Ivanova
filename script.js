document.addEventListener("DOMContentLoaded", () => {
    const taskTableBody = document.querySelector("#taskTable tbody");
    const searchInput = document.querySelector("#search");

    function fetchData() {
        console.log("Fetching data..."); 

        fetch("api.php")
            .then(response => response.json())
            .then(data => {
                console.log("Data fetched:", data);  
                updateTable(data);
            })
            .catch(error => console.error("Error fetching tasks:", error));
    }

    function updateTable(data) {
        taskTableBody.innerHTML = "";
        data.forEach(task => {
            const row = document.createElement("tr");
            row.innerHTML = `
                <td>${task.task}</td>
                <td>${task.title}</td>
                <td>${task.description}</td>
                <td style="background-color: ${task.colorCode};">${task.colorCode}</td>
            `;
            taskTableBody.appendChild(row);
        });
    }

    searchInput.addEventListener("input", () => {
        const filter = searchInput.value.toLowerCase();
        const rows = taskTableBody.querySelectorAll("tr");
        rows.forEach(row => {
            row.style.display = Array.from(row.cells).some(cell =>
                cell.textContent.toLowerCase().includes(filter)
            ) ? "" : "none";
        });
    });

    fetchData();

    setInterval(() => {
        fetchData(); 
    }, 3600000);
});

document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("modal");
    const openModal = document.getElementById("openModal");
    const closeModal = document.getElementById("closeModal");
    const fileInput = document.getElementById("fileInput");
    const imagePreview = document.getElementById("imagePreview");

    openModal.addEventListener("click", () => {
        modal.style.display = "flex";
    });

    closeModal.addEventListener("click", () => {
        modal.style.display = "none";
    });

    fileInput.addEventListener("change", event => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = e => {
                imagePreview.innerHTML = `<img src="${e.target.result}" alt="Selected Image">`;
            };
            reader.readAsDataURL(file);
        }
    });
});