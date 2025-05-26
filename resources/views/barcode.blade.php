<!DOCTYPE html>
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
</html>