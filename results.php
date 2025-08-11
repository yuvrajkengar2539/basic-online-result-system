
   

<?php
require 'dbconnect.php';
session_start();

if ($_POST['captcha'] != $_SESSION['captcha']) {
    die("<h3 style='color:red;'>Captcha is incorrect. Please go back and try again.</h3>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Result</title>
 <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #f6d365, #fda085);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .resultcon {
            background-color: #ffffff;
            padding: 25px 40px;
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.15);
            max-width: 400px;
            width: 100%;
            
        }
        h3 {
            margin-bottom: 15px;
            color: #333;
            border-bottom: 2px solid #fda085;
            display: inline-block;
            padding-bottom: 5px;
        }
        p {
            margin: 8px 0;
            font-size: 16px;
            color: #555;
            background: #f9f9f9;
            padding: 8px;
            border-radius: 8px;
        }
        .percentage {
            font-size: 18px;
            font-weight: bold;
            color: #28a745;
        }
    </style>

</head>
<body>
<div class="resultcon" id="resultcon">
<?php
if (isset($_POST['rollno'])) {
    $rollno = $_POST['rollno'];

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT name, marathi, english, hindi, maths, science, social_science, percentage 
                            FROM students 
                            WHERE rollno = ?");
    $stmt->bind_param("s", $rollno); // "s" means string type
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        echo "<h3>Roll No: " . htmlspecialchars($rollno) . "</h3>";
        echo "<p><strong>Name:</strong> " . htmlspecialchars($row['name']) . "</p>";
        echo "<p>Marathi: " . htmlspecialchars($row['marathi']) . "</p>";
        echo "<p>Hindi: " . htmlspecialchars($row['hindi']) . "</p>";
        echo "<p>English: " . htmlspecialchars($row['english']) . "</p>";
        echo "<p>Maths: " . htmlspecialchars($row['maths']) . "</p>";
        echo "<p>Science: " . htmlspecialchars($row['science']) . "</p>";
        echo "<p>Social Science: " . htmlspecialchars($row['social_science']) . "</p>";

        $totalmarks = (int)($row['marathi'] + $row['hindi'] + $row['english'] +
                            $row['maths'] + $row['science'] + $row['social_science']);

        echo "<p style='font-weight: bold;'>Total Marks: " . $totalmarks . "</p>";

        $status = ($row['percentage'] >= 35) ? 'Pass' : 'Fail';
        echo "<p id='status'>Status: " . htmlspecialchars($status) . "</p>";
        echo "<p class='percentage'>Percentage: " . htmlspecialchars($row['percentage']) . "%</p>";
    } else {
        echo "<h3>No result found for Roll No: " . htmlspecialchars($rollno) . "</h3>";
    }

    $stmt->close();
}
$conn->close();
?>
<button onclick="downloadPDF()" style='margin-left :200px;'>Download PDF</button>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script>
let statusElement = document.getElementById('status');
if (statusElement) {
    if (statusElement.textContent.includes('Pass')) {
        statusElement.style.color = 'green';
    } else {
        statusElement.style.color = 'red';
    }
}

function downloadPDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();
    const content = document.getElementById("resultcon").innerText;
    doc.text(content, 10, 10);
    doc.save("result.pdf");
}
</script>
</body>
</html>
