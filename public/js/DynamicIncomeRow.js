function addIncomeRow() {
    let container = document.getElementById('dynamic-income-container');
    let newRow = document.createElement('div');
    newRow.className = 'row';
    newRow.innerHTML = `
        <div class="col"><input type="text" placeholder="Income Description"></div>
        <div class="col"><input type="number" placeholder="Amount" oninput="updateTaxCalculation()"></div>
        <div class="col" style="flex:0 0 50px;"><button class="btn btn-danger" onclick="this.parentElement.parentElement.remove(); updateTaxCalculation();">X</button></div>
    `;
    container.appendChild(newRow);
}