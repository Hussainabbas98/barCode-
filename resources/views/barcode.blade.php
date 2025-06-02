{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style type="text/css">

        img{
    
            padding-left: 20px;
    
        }
    
    </style>
    
    <div class="row">
    
        <div class="col-md-8 col-md-offset-2">
    
            <h1 class="text-primary" style="text-align: center;">Laravel Barcode Generator Using milon/barcode</h1>
    
        </div>
    
    </div>
    
    
    
    <div class="container text-center" style="border: 1px solid #a1a1a1;padding: 15px;width: 70%;">
    
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('110', 'C39')}}" alt="barcode" />
    
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('110', 'C39+')}}" alt="barcode" />
    
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('110', 'C39E')}}" alt="barcode" />
    
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('110', 'C39E+')}}" alt="barcode" />
    
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('110', 'C93')}}" alt="barcode" />
    
        <br/>
    
        <br/>
    
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('110', 'S25')}}" alt="barcode" />
    
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('110', 'S25+')}}" alt="barcode" />
    
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('110', 'I25')}}" alt="barcode" />
    
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('110', 'MSI+')}}" alt="barcode" />
    
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('110', 'POSTNET')}}" alt="barcode" />
    
        <br/>
    
        <br/>
    
        <img src="data:image/png;base64,{{DNS2D::getBarcodePNG('https://www.linkedin.com/in/hussain-rizvi-05a603243/', 'QRCODE')}}" alt="barcode" />
    
        <img src="data:image/png;base64,{{DNS2D::getBarcodePNG('https://github.com/Hussainabbas98', 'PDF417')}}" alt="barcode" /> 
    
        <img src="data:image/png;base64,{{DNS2D::getBarcodePNG('https://github.com/Hussainabbas98', 'QRCODE')}}" alt="barcode" />
    
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Barcode Generator</title>
    <style>
        .container {
            border: 1px solid #a1a1a1;
            padding: 20px;
            width: 80%;
            margin: auto;
            text-align: center;
        }

        img {
            margin-top: 20px;
            padding: 10px;
        }

        .barCodeimgdiv{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        #barcodeImage {
            display: none;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;" class="text-primary">Laravel Barcode Generator Using milon/barcode</h1>

    <div class="container">
        <form method="POST" action="{{ route('generate.barcode') }}">
            @csrf
            <div>
                <input type="text" name="data" placeholder="Enter text or URL" required style="width: 60%; padding: 10px;">
            </div>
            <br>
            <div>
                <select name="type" required style="padding: 10px;">
                    <option value="">-- Select Barcode Type --</option>
                    <optgroup label="1D Barcodes">
                        {{-- <option value="C39">Code 39</option> --}}
                        {{-- <option value="C39+">Code 39+</option> --}}
                        <option value="C93">Code 93</option>
                        {{-- <option value="I25">Interleaved 2 of 5</option> --}}
                        {{-- <option value="POSTNET">POSTNET</option> --}}
                        {{-- <option value="MSI+">MSI+</option> --}}
                    </optgroup>
                    <optgroup label="2D Barcodes">
                        <option value="QRCODE">QR Code</option>
                        <option value="PDF417">PDF417</option>
                    </optgroup>
                </select>
            </div>
            <br>
            <button type="submit" style="padding: 10px 20px;">Generate</button>
        </form>

        @if(session('barcode'))
            <div>
                <h3>Generated Barcode:</h3>
                <div class="barCodeimgdiv">
                <img id="barcodeImage" src="data:image/png;base64,{{ session('barcode') }}" alt="Generated Barcode">

                </div>
                <br>
                <a href="data:image/png;base64,{{ session('barcode') }}" download="barcode.png">
                    <button style="margin-top: 10px; padding: 10px 20px;">Download</button>
                </a>
            </div>
            <script>
                document.getElementById('barcodeImage').style.display = 'block';
            </script>
        @endif
    </div>
</body>
</html>
