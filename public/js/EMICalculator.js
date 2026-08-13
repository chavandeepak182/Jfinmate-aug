function calculateEMI() {
    let principal = parseFloat(document.getElementById('emi_loan_amt').value);
    let rate = parseFloat(document.getElementById('emi_rate').value);
    let tenureYears = parseFloat(document.getElementById('emi_tenure').value);

    if (isNaN(principal) || isNaN(rate) || isNaN(tenureYears)) {
        document.getElementById('emi_result').innerText = "Please enter valid numbers.";
        return;
    }

    let monthlyRate = rate / 12 / 100;
    let months = tenureYears * 12;
    let emi = principal * monthlyRate * Math.pow(1 + monthlyRate, months) / (Math.pow(1 + monthlyRate, months) - 1);
    
    document.getElementById('emi_result').innerText = `Monthly EMI: ₹${emi.toFixed(2)}`;
}