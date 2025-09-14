<?php include 'header.php'; ?>

<h1>Mortgage Calculator</h1>

<?php
// Initialize variables
$loan_amount = '';
$interest_rate = '';
$loan_term = '';
$monthly_payment = '';
$total_interest = '';
$total_payment = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loan_amount = $_POST['loan_amount'];
    $interest_rate = $_POST['interest_rate'];
    $loan_term = $_POST['loan_term'];

    if (is_numeric($loan_amount) && is_numeric($interest_rate) && is_numeric($loan_term) && $loan_amount > 0 && $interest_rate >= 0 && $loan_term > 0) {
        $monthly_interest_rate = ($interest_rate / 100) / 12;
        $number_of_payments = $loan_term * 12;

        if ($monthly_interest_rate > 0) {
            $pow_val = pow(1 + $monthly_interest_rate, $number_of_payments);
            $monthly_payment_val = $loan_amount * ($monthly_interest_rate * $pow_val) / ($pow_val - 1);
        } else {
            // For 0% interest rate
            $monthly_payment_val = $loan_amount / $number_of_payments;
        }
        
        $total_payment = $monthly_payment_val * $number_of_payments;
        $total_interest = $total_payment - $loan_amount;

        $monthly_payment = number_format($monthly_payment_val, 2);
        $total_interest_formatted = number_format($total_interest, 2);
        $loan_amount_formatted = number_format($loan_amount, 2);

    } else {
        $monthly_payment = "Invalid input. Please enter valid numbers.";
    }
}
?>

<style>
    .chart {
        width: 100%;
        background-color: #f1f1f1;
        border-radius: 5px;
        margin-top: 20px;
        display: flex;
    }
    .bar {
        height: 30px;
        text-align: center;
        line-height: 30px;
        color: white;
        white-space: nowrap;
    }
    .principal-bar {
        background-color: #4CAF50;
    }
    .interest-bar {
        background-color: #f44336;
    }
</style>

<form action="mortgage_calculator.php" method="post">
    <label for="loan_amount">Loan Amount:</label><br>
    <input type="text" id="loan_amount" name="loan_amount" value="<?php echo $loan_amount; ?>"><br><br>

    <label for="interest_rate">Annual Interest Rate (%):</label><br>
    <input type="text" id="interest_rate" name="interest_rate" value="<?php echo $interest_rate; ?>"><br><br>

    <label for="loan_term">Loan Term (Years):</label><br>
    <input type="text" id="loan_term" name="loan_term" value="<?php echo $loan_term; ?>"><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($monthly_payment !== '') {
    if (is_numeric(str_replace(',', '', $monthly_payment))) {
        echo "<h2>Your Monthly Payment is: $" . $monthly_payment . "</h2>";
        echo "<h3>Total Principal Paid: $" . $loan_amount_formatted . "</h3>";
        echo "<h3>Total Interest Paid: $" . $total_interest_formatted . "</h3>";

        $principal_percentage = ($loan_amount / $total_payment) * 100;
        $interest_percentage = ($total_interest / $total_payment) * 100;

        echo '<div class="chart">';
        echo '<div class="bar principal-bar" style="width: ' . $principal_percentage . '%;">Principal</div>';
        echo '<div class="bar interest-bar" style="width: ' . $interest_percentage . '%;">Interest</div>';
        echo '</div>';

    } else {
        echo "<h2>" . $monthly_payment . "</h2>";
    }
}
?>

<?php include 'footer.php'; ?>