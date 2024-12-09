<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Table</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Dataset</h1>
        <input type="text" id="search" placeholder="Search data...">
        <table id="taskTable">
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Color Code</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        <button id="openModal">Upload image</button>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span id="closeModal" class="close">&times;</span>
            <input type="file" id="fileInput">
            <div id="imagePreview"></div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
