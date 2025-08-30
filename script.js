
document.getElementById("searchForm").addEventListener("submit", function (event) {
    event.preventDefault();

    var searchInput = document.getElementById("searchInput").value;
    var resultBox = document.getElementById("results");
    var loading = document.getElementById("loading");

    resultBox.style.display = "none";
    loading.style.display = "block";

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "search.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            loading.style.display = "none"; // Hide loading animation
            console.log("Response from server:", xhr.responseText); // Debugging line

            if (xhr.status == 200) {
                if (xhr.responseText.includes("Database connection failed") || xhr.responseText.includes("Query preparation failed")) {
                    alert("Error: Check your database connection!");
                }

                if (xhr.responseText.includes("Sorry")) {
                    resultBox.className = "error-box"; // Apply error styling
                    resultBox.innerHTML = xhr.responseText;
                } else {
                    resultBox.className = "result-box"; // Apply results styling
                    resultBox.innerHTML = xhr.responseText;
                }

                resultBox.classList.add("slide-in");
                resultBox.style.display = "block";
            } else {
                alert("Error fetching data. Status Code: " + xhr.status);
            }
        }
    };

    xhr.send("search=" + encodeURIComponent(searchInput));
});
