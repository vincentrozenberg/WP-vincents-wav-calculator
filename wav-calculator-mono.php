<style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, sans-serif;
        }

        .wav-calculator-container {
            background-color: #ffffff;
            padding: 24px;
            border-radius: 0px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.05);
            border: 1px solid #e5e5e5;
        }

        .wav-calculator-title {
            color: #000000;
            margin-bottom: 24px;
            font-size: 20px;
            font-weight: 500;
            letter-spacing: -0.2px;
        }

        .wav-calculator-input-group {
            margin-bottom: 20px;
        }

        .wav-calculator-label {
            display: block;
            margin-bottom: 8px;
            color: #000000;
            font-weight: 400;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .wav-calculator-input {
            width: 100%;
            padding: 12px;
            border: 1px solid #e5e5e5;
            border-radius: 0px;
            font-size: 16px;
            background-color: #ffffff;
        }

        .wav-calculator-input:focus {
            outline: none;
            border-color: #000000;
            box-shadow: none;
        }

        .wav-calculator-results {
            margin-top: 24px;
            padding: 20px;
            background-color: #fafafa;
            border-radius: 0px;
            border: 1px solid #e5e5e5;
        }

        .wav-calculator-result-item {
            margin-bottom: 12px;
            font-size: 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #333333;
        }

        .wav-calculator-result-item:last-child {
            margin-bottom: 0;
        }

        .wav-calculator-result-item strong {
            color: #000000;
            font-weight: 500;
        }

        .wav-calculator-radio-group {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
            margin-bottom: 20px;
        }

        .wav-calculator-radio-button {
            position: relative;
            text-align: center;
        }

        .wav-calculator-radio-button input[type="radio"] {
            display: none;
        }

        .wav-calculator-radio-button label {
            display: block;
            padding: 12px;
            background-color: #ffffff;
            border: 1px solid #e5e5e5;
            border-radius: 0px;
            cursor: pointer;
            transition: all 0.2s;
            margin: 0;
            font-size: 13px;
            text-transform: none;
            letter-spacing: 0;
        }

        .wav-calculator-radio-button input[type="radio"]:checked + label {
            background-color: #000000;
            color: white;
            border-color: #000000;
        }

        .wav-calculator-select-group {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
            margin-bottom: 20px;
        }

        .wav-calculator-select-button {
            position: relative;
        }

        .wav-calculator-select-button input[type="radio"] {
            display: none;
        }

        .wav-calculator-select-button label {
            display: block;
            padding: 12px;
            background-color: #ffffff;
            border: 1px solid #e5e5e5;
            border-radius: 0px;
            cursor: pointer;
            transition: all 0.2s;
            margin: 0;
            text-align: center;
            font-size: 13px;
            text-transform: none;
            letter-spacing: 0;
        }

        .wav-calculator-select-button input[type="radio"]:checked + label {
            background-color: #000000;
            color: white;
            border-color: #000000;
        }

        .wav-calculator-input-with-unit {
            position: relative;
            display: flex;
            align-items: center;
        }

        .wav-calculator-input-with-unit input {
            padding-right: 50px;
        }

        .wav-calculator-unit {
            position: absolute;
            right: 12px;
            color: #666666;
            font-size: 14px;
        }

        .wav-calculator-invalid {
            border-color: #999999;
            background-color: #fafafa;
        }

        .wav-calculator-invalid + .wav-calculator-unit {
            color: #999999;
        }

        .wav-calculator-invalid:focus {
            border-color: #999999;
        }

        @media (prefers-color-scheme: dark) {
            body {
                background-color: #000000;
                color: #ffffff;
            }

            .wav-calculator-container {
                background-color: #111111;
                border-color: #333333;
            }

            .wav-calculator-title, .wav-calculator-label {
                color: #ffffff;
            }

            .wav-calculator-input {
                background-color: #111111;
                border-color: #333333;
                color: #ffffff;
            }

            .wav-calculator-input:focus {
                border-color: #ffffff;
            }

            .wav-calculator-results {
                background-color: #1a1a1a;
                border-color: #333333;
            }

            .wav-calculator-result-item {
                color: #cccccc;
            }

            .wav-calculator-result-item strong {
                color: #ffffff;
            }

            .wav-calculator-radio-button label,
            .wav-calculator-select-button label {
                background-color: #111111;
                border-color: #333333;
                color: #ffffff;
            }

            .wav-calculator-radio-button input[type="radio"]:checked + label,
            .wav-calculator-select-button input[type="radio"]:checked + label {
                background-color: #ffffff;
                color: #000000;
                border-color: #ffffff;
            }

            .wav-calculator-unit {
                color: #999999;
            }

            .wav-calculator-invalid {
                border-color: #666666;
                background-color: #1a1a1a;
            }

            .wav-calculator-invalid + .wav-calculator-unit {
                color: #666666;
            }
        }
    </style>

    <div class="wav-calculator-container">
        <h1 class="wav-calculator-title">WAV Recording Time Calculator</h1>
        
        <div class="wav-calculator-input-group">
            <label class="wav-calculator-label">SD Card Size</label>
            <div class="wav-calculator-input-with-unit">
                <input type="number" id="wavCalculatorCardSize" class="wav-calculator-input" min="1" value="32" placeholder="Size in GB">
                <span class="wav-calculator-unit">GB</span>
            </div>
        </div>

        <label class="wav-calculator-label">Sample Rate</label>
        <div class="wav-calculator-radio-group">
            <div class="wav-calculator-radio-button">
                <input type="radio" id="wavCalculatorRate48" name="wavCalculatorSampleRate" value="48" checked>
                <label for="wavCalculatorRate48">48 kHz</label>
            </div>
            <div class="wav-calculator-radio-button">
                <input type="radio" id="wavCalculatorRate96" name="wavCalculatorSampleRate" value="96">
                <label for="wavCalculatorRate96">96 kHz</label>
            </div>
            <div class="wav-calculator-radio-button">
                <input type="radio" id="wavCalculatorRate192" name="wavCalculatorSampleRate" value="192">
                <label for="wavCalculatorRate192">192 kHz</label>
            </div>
        </div>

        <label class="wav-calculator-label">Bit Depth</label>
        <div class="wav-calculator-select-group">
            <div class="wav-calculator-select-button">
                <input type="radio" id="wavCalculatorBit16" name="wavCalculatorBitDepth" value="16">
                <label for="wavCalculatorBit16">16-bit</label>
            </div>
            <div class="wav-calculator-select-button">
                <input type="radio" id="wavCalculatorBit24" name="wavCalculatorBitDepth" value="24" checked>
                <label for="wavCalculatorBit24">24-bit</label>
            </div>
            <div class="wav-calculator-select-button">
                <input type="radio" id="wavCalculatorBit32" name="wavCalculatorBitDepth" value="32">
                <label for="wavCalculatorBit32">32-bit</label>
            </div>
        </div>

        <div class="wav-calculator-input-group">
            <label class="wav-calculator-label">Number of Tracks</label>
            <input type="number" id="wavCalculatorTracks" class="wav-calculator-input" min="1" value="1">
        </div>

        <div class="wav-calculator-results">
            <div class="wav-calculator-result-item">
                <span>Recording Time (<span id="wavCalculatorCardSizeDisplay">32</span> GB):</span>
                <strong id="wavCalculatorRecordingTime">--</strong>
            </div>
            <div class="wav-calculator-result-item">
                <span>Data Rate:</span>
                <strong id="wavCalculatorDataRate">--</strong>
            </div>
            <div class="wav-calculator-result-item">
                <span>Storage per Hour:</span>
                <strong id="wavCalculatorStorageRequired">--</strong>
            </div>
            <div class="wav-calculator-result-item">
            Note: Storage cards have slightly less usable space than their advertised capacity due to file system overhead. Plan accordingly when recording near maximum capacity.</div>
        </div>
    </div>

    <script>
        class WavCalculator {
            calculateRecordingTime(cardSizeGB, sampleRate, bitDepth, tracks = 1) {
                const totalBytes = cardSizeGB * 1000000000;
                const bytesPerSecond = (sampleRate * 1000) * (bitDepth / 8) * tracks;
                const totalSeconds = totalBytes / bytesPerSecond;
                
                const hours = Math.floor(totalSeconds / 3600);
                const minutes = Math.floor((totalSeconds % 3600) / 60);
                const seconds = Math.floor(totalSeconds % 60);
                
                const dataRateKbps = (bytesPerSecond * 8) / 1000;
                const dataRateMbps = dataRateKbps / 1000;
                
                const storagePerHour = (bytesPerSecond * 3600) / 1000000000;

                return {
                    hours,
                    minutes,
                    seconds,
                    formattedTime: `${hours}h ${minutes}m ${seconds}s`,
                    dataRateKbps: dataRateKbps.toFixed(1),
                    dataRateMbps: dataRateMbps.toFixed(2),
                    storagePerHour: storagePerHour.toFixed(2)
                };
            }
        }

        const wavCalculator = new WavCalculator();

        function wavCalculatorUpdateCalculation() {
            const cardSize = parseFloat(document.getElementById('wavCalculatorCardSize').value);
            const sampleRate = parseInt(document.querySelector('input[name="wavCalculatorSampleRate"]:checked').value);
            const bitDepth = parseInt(document.querySelector('input[name="wavCalculatorBitDepth"]:checked').value);
            const tracks = parseInt(document.getElementById('wavCalculatorTracks').value);

            const cardSizeInput = document.getElementById('wavCalculatorCardSize');
            const tracksInput = document.getElementById('wavCalculatorTracks');
            
            let isValid = true;

            if (!cardSize || cardSize <= 0) {
                cardSizeInput.classList.add('wav-calculator-invalid');
                isValid = false;
            } else {
                cardSizeInput.classList.remove('wav-calculator-invalid');
                document.getElementById('wavCalculatorCardSizeDisplay').textContent = cardSize;
            }

            if (!tracks || tracks < 1) {
                tracksInput.classList.add('wav-calculator-invalid');
                isValid = false;
            } else {
                tracksInput.classList.remove('wav-calculator-invalid');
            }

            if (!isValid) {
                document.getElementById('wavCalculatorRecordingTime').textContent = '--';
                document.getElementById('wavCalculatorDataRate').textContent = '--';
                document.getElementById('wavCalculatorStorageRequired').textContent = '--';
                return;
            }

            const result = wavCalculator.calculateRecordingTime(cardSize, sampleRate, bitDepth, tracks);

            document.getElementById('wavCalculatorRecordingTime').textContent = result.formattedTime;
            document.getElementById('wavCalculatorDataRate').textContent = 
                `${result.dataRateKbps} Kbps (${result.dataRateMbps} Mbps)`;
            document.getElementById('wavCalculatorStorageRequired').textContent = 
                `${result.storagePerHour} GB/hour`;
        }

        document.getElementById('wavCalculatorCardSize').addEventListener('input', wavCalculatorUpdateCalculation);
        document.getElementById('wavCalculatorTracks').addEventListener('input', wavCalculatorUpdateCalculation);
        
        document.querySelectorAll('input[name="wavCalculatorSampleRate"]').forEach(radio => {
            radio.addEventListener('change', wavCalculatorUpdateCalculation);
        });
        
        document.querySelectorAll('input[name="wavCalculatorBitDepth"]').forEach(radio => {
            radio.addEventListener('change', wavCalculatorUpdateCalculation);
        });

        wavCalculatorUpdateCalculation();
    </script>
