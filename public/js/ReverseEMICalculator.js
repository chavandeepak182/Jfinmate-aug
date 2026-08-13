function calculateReverseEMI() {
    let targetEMI = parseFloat(document.getElementById('rev_emi_target').value);
    let rate = parseFloat(document.getElementById('rev_rate').value);
    let tenureYears = parseFloat(document.getElementById('rev_tenure').value);

    if (isNaN(targetEMI) || isNaN(rate) || isNaN(tenureYears)) {
        document.getElementById('rev_result').innerText = "Please enter valid numbers.";
        return;
    }

    let monthlyRate = rate / 12 / 100;
    let months = tenureYears * 12;
    let principal = targetEMI * (Math.pow(1 + monthlyRate, months) - 1) / (monthlyRate * Math.pow(1 + monthlyRate, months));

    document.getElementById('rev_result').innerText = `Eligible Loan: ₹${principal.toFixed(2)}`;
}