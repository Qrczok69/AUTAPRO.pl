<section id="kalkulator" class="section-padding bg-light">
    <div class="container">
        <div class="text-center">
            <h2 style="color: <?= COLOR_NAVY ?>; font-size: 32px;">Kalkulator rat</h2>
            <p style="color: #666; margin-top: 10px;">Oblicz szacunkową ratę leasingu lub kredytu.</p>
        </div>

        <div class="calculator-box">
            <form id="calcForm">
                <div class="form-group">
                    <label>Wartość pojazdu (zł)</label>
                    <input type="number" id="carValue" value="50000" min="10000" max="1000000">
                </div>
                <div class="form-group">
                    <label>Wpłata własna (%)}}</label>
                    <input type="number" id="downPayment" value="10" min="0" max="50">
                </div>
                <div class="form-group">
                    <label>Okres (miesiące)</label>
                    <select id="period">
                        <option value="24">24 miesiące</option>
                        <option value="36" selected>36 miesięcy</option>
                        <option value="48">48 miesięcy</option>
                        <option value="60">60 miesięcy</option>
                    </select>
                </div>
                <button type="button" onclick="calculate()" class="btn btn-primary" style="width: 100%;">Oblicz ratę</button>
            </form>

            <div id="result" class="calc-result" style="display: none;">
                <h3>Szacunkowa rata miesięczna:</h3>
                <p class="rate-amount"><span id="monthlyRate">0</span> zł netto</p>
                <small>*Kalkulacja ma charakter orientacyjny</small>
            </div>
        </div>
    </div>
</section>

<script>
function calculate() {
    const carValue = parseFloat(document.getElementById('carValue').value);
    const downPaymentPercent = parseFloat(document.getElementById('downPayment').value);
    const period = parseInt(document.getElementById('period').value);
    
    const downPayment = carValue * (downPaymentPercent / 100);
    const financed = carValue - downPayment;
    const interestRate = 0.08; // 8% rocznie
    const monthlyRate = (financed * (1 + interestRate * period / 12)) / period;
    
    document.getElementById('monthlyRate').textContent = monthlyRate.toFixed(2);
    document.getElementById('result').style.display = 'block';
}
</script>
