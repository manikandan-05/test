<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Payslip</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/font.css">
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
        body {font-size:16px;}
        .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
        .w3-half img:hover{opacity:1}
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        .logo { width: 150px; height: auto; } /* Adjust logo size as needed */
        .header-container { display: flex; align-items: center; justify-content: space-between; }
        .company-info { text-align: center; } /* Center align address */
        .print-button {
            background-color: green; /* Change button color to green */
            color: white; /* Change text color to white */
            border: none; /* Remove border */
            padding: 10px 20px; /* Add padding */
            cursor: pointer; /* Change cursor to pointer */
            font-size: 16px; /* Adjust font size */
        }
        .print-button:hover {
            background-color: darkgreen; /* Darken button on hover */
        }
        .payslip-wrapper {
            max-width: 800px; /* Maximum width for the payslip */
            margin: 0 auto; /* Center the payslip */
            padding: 20px; /* Add padding around the payslip */
            border: 1px solid #000; /* Optional border for the payslip */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional shadow for the payslip */
        }
        @media print {
            body {
                margin: 0; /* Remove margin for print */
            }
            .payslip-wrapper {
                margin: 0 auto; /* Center for print */
                width: auto; /* Use auto width for print */
                max-width: 100%; /* Full width for print */
            }
            .print-button {
                display: none; /* Hide print button when printing */
            }
        }
    </style>
</head>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:100px;margin-right:0px;margin-top: -5px;margin-bottom: 0px">

    <!-- Header -->
    <div class="w3-display-container w3-text-blue" style="font-size: 50px"></div>
    <div class="w3-container" style="padding: 39px 100px 32px 24px">

        <form class="w3-container" action="employee.php" method="post"></form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Function to calculate the salary breakdown based on the provided basic pay and percentages
            function calculateSalary($basicPay) {
                if ($basicPay < 100000) {
                    $hra = 0.2174;
                    $medicalAllowance = 0.0359;
                    $conveyance = 0.0460;
                    $specialAllowance = 0.2660;
                    $professionalTax = 0.0060;
                    $pf = 0.0522;
                    $insurance = 0.0236;
                } elseif ($basicPay >= 300000 && $basicPay <= 500000) {
                    $hra = 0.1500; 
                    $medicalAllowance = 0.0200; 
                    $conveyance = 0.0400; 
                    $specialAllowance = 0.2000; 
                    $professionalTax = 0.0070; 
                    $pf = 0.0600; 
                    $insurance = 0.0300; 
                } else {
                    return "Basic pay out of defined ranges.";
                }

                // Calculate earnings
                $hraAmount = $basicPay * $hra;
                $medicalAllowanceAmount = $basicPay * $medicalAllowance;
                $conveyanceAmount = $basicPay * $conveyance;
                $specialAllowanceAmount = $basicPay * $specialAllowance;

                // Calculate deductions
                $professionalTaxAmount = $basicPay * $professionalTax;
                $pfAmount = $basicPay * $pf;
                $insuranceAmount = $basicPay * $insurance;

                // Calculate gross salary
                $grossSalary = $basicPay + $hraAmount + $medicalAllowanceAmount + $conveyanceAmount + $specialAllowanceAmount;

                // Calculate total deductions
                $totalDeductions = $professionalTaxAmount + $pfAmount + $insuranceAmount;

                // Calculate net salary
                $netSalary = $grossSalary - $totalDeductions;

                return array(
                    'basicPay' => $basicPay,
                    'hra' => $hraAmount,
                    'medicalAllowance' => $medicalAllowanceAmount,
                    'conveyance' => $conveyanceAmount,
                    'specialAllowance' => $specialAllowanceAmount,
                    'professionalTax' => $professionalTaxAmount,
                    'pf' => $pfAmount,
                    'insurance' => $insuranceAmount,
                    'grossSalary' => $grossSalary,
                    'netSalary' => $netSalary
                );
            }

            // Get input values from the form
            $empid = $_POST['empid'];
            $basicPay = $_POST['basicPay'];
            $name = $_POST["name"];
            $depid = $_POST["depid"];
            $salaryDetails = calculateSalary($basicPay);

            if (is_array($salaryDetails)) {
                // Start HTML output for the payslip
                echo "<html>";
                echo "<head>";
                echo "<h1 style='text-align: center; margin-top: 20px;'>Payslip</h1>";
                echo "<style>";
                echo "body { font-family: Arial, sans-serif; }";
                echo "</style>";
                echo "</head>";
                echo "<body>" ;

                // Company logo and description in a table
                echo "<div class='payslip-wrapper'>"; // Start of payslip wrapper
                echo "<table style='width: 100%; margin-bottom: 20px;'>"; // Adjusted table for company logo
                echo "<tr>";
                echo "<td style='width: 150px;'><img src='logo.png' class='logo' alt='Company Logo'></td>"; // Ensure your logo path is correct
                echo "<td class='company-info'>Claidas Technologies Private Limited.<br>#16, Rajiv Gandhi IT Expressway, Ist Floor, East Wing, OMR, Karapakkam, Chennai - 600097.</td>";
                echo "</tr>";
                echo "</table>";

                // Payslip content
                echo "<table>";
                echo "<tr><th colspan='2' style='text-align: center;'>Employee Details</th></tr>";
                echo "<tr><td><strong>Employee ID:</strong></td><td>{$empid}</td></tr>";
                echo "<tr><td><strong>Employee Name:</strong></td><td>{$name}</td></tr>";
                echo "<tr><td><strong>Department ID:</strong></td><td>{$depid}</td></tr>";
                echo "<tr><td><strong>Basic Pay:</strong></td><td>₹" . number_format($salaryDetails['basicPay'], 2) . "</td></tr>";
                echo "<tr><td><strong>HRA:</strong></td><td>₹" . number_format($salaryDetails['hra'], 2) . "</td></tr>";
                echo "<tr><td><strong>Medical Allowance:</strong></td><td>₹" . number_format($salaryDetails['medicalAllowance'], 2) . "</td></tr>";
                echo "<tr><td><strong>Conveyance:</strong></td><td>₹" . number_format($salaryDetails['conveyance'], 2) . "</td></tr>";
                echo "<tr><td><strong>Special Allowance:</strong></td><td>₹" . number_format($salaryDetails['specialAllowance'], 2) . "</td></tr>";
                echo "<tr><td><strong>Professional Tax:</strong></td><td>₹" . number_format($salaryDetails['professionalTax'], 2) . "</td></tr>";
                echo "<tr><td><strong>Provident Fund (PF):</strong></td><td>₹" . number_format($salaryDetails['pf'], 2) . "</td></tr>";
                echo "<tr><td><strong>Insurance:</strong></td><td>₹" . number_format($salaryDetails['insurance'], 2) . "</td></tr>";
                echo "<tr><td><strong>Gross Salary:</strong></td><td>₹" . number_format($salaryDetails['grossSalary'], 2) . "</td></tr>";
                echo "<tr><td><strong>Net Salary:</strong></td><td>₹" . number_format($salaryDetails['netSalary'], 2) . "</td></tr>";
                echo "</table>";
                
                // Close the payslip wrapper
                echo "</div>"; // End of payslip-wrapper

                // Print button
                echo "<div style='text-align: center; margin-top: 20px;'>";
                echo "<button class='print-button' onclick='window.print();'>Print Payslip</button>";
                echo "</div>";

                echo "</body>";
                echo "</html>";
            }
        }
        ?>
    </div>
</div>

</body>
</html>
