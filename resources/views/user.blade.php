<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed, 
        figure, figcaption, footer, header, hgroup, 
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure, 
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        body {
            line-height: 1;
            background-color: #DEF2F1 ;
        }
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }
        .kiri{
            width: 20%;
            height: 100vh;
            background-color: #3AAFA9;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 30px;
            float: left;
            box-sizing: border-box;
        }
        .kiri h1{
            font-family: poppin;
            font-size: 32px;
            text-align: center;
            color: #005C5A;
            margin-bottom: 50px;
        }
        .kiri button{
            display: block;
            margin-bottom: 10px;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }
        .atas{
            width: 80%;
            height: 100px;
            float: left;
            padding-top: 50px;
            padding-right: 50px;
            border: 1px solid black;
            box-sizing: border-box;
            text-align: right;
        }
        .konten{
            width: 80%;
            height: 100%;
            padding: 50px;
            box-sizing: border-box;
            float: left;
        }
        #surat, #kas, #lapor{
            width: 100%;
            height: 100%;
            display: none;
        }
        .konten .box{
            width: 100%;
            height: 100%;
            background-color: whitesmoke;
            border-radius: 20px;
            padding: 30px;
            box-sizing: border-box;
            margin-bottom: 30px;
        }
        .konten h2{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 30px;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <div class="kiri">
    <h1>Pelayanan Desa RT 3 RW 6</h1>
        <button class="btn btn-accent" onclick="showDiv('surat')">Surat Pengantar</button>
        <button class="btn btn-accent" onclick="showDiv('kas')">Kas Warga</button>
        <button class="btn btn-accent" onclick="showDiv('lapor')">Wajib Lapor</button>
    </div>
    <div class="atas">
        <h2>Hallo</h2>
    </div>
    <div class="konten">
        <div class="surat" id="surat">
            <div class="box">
                <h2>ISI FORM</h2>
                <table>
                    <form action="">
                        <tr>
                                <td><label for="nokk">Nomor KK</label></td>
                                <td><input type="text" name="" id="" placeholder="Nomor Kartu Keluarga"></td>
                            </tr>
                            <tr>
                                <td><label for="nik">NIK</label></td>
                                <td><input type="text" name="" id="" placeholder="NIK"></td>
                            </tr>
                            <tr>
                                <td><label for="nama">Nama</label></td>
                                <td><input type="text" name="" id="" placeholder="Nama"></td>
                            </tr>
                            <tr>
                                <td><label for="keperluan">Keperluan</label></td>
                                <td><textarea name="" id=""></textarea></td>
                            </tr>
                    </form>
                </table>
            </div>
            <button class="btn btn-accent">Ajukan</button>
        </div>
            <div class="kas" id="kas">
            halo kas
        </div>
        <div class="lapor" id="lapor">
            <div class="box">
                <h2>ISI FORM</h2>
                <table>
                    <form action="">
                        <tr>
                            <td><label for="nik">NIK</label></td>
                            <td><input type="text" name="" id="" placeholder="NIK"></td>
                        </tr>
                        <tr>
                            <td><label for="nama">Nama</label></td>
                            <td><input type="text" name="" id="" placeholder="Nama"></td>
                        </tr>
                        <tr>
                            <td><label for="keperluan">Upload Foto</label></td>
                            <td><button>upload</button></td>
                        </tr>
                    </form>
                </table>
            </div>
            <button class="btn btn-accent">Ajukan</button>
        </div>
    </div>
    <script>
        function showDiv(divId) {
            // Sembunyikan semua div
            document.getElementById('surat').style.display = 'none';
            document.getElementById('kas').style.display = 'none';
            document.getElementById('lapor').style.display = 'none';
            
            // Tampilkan div yang dipilih
            document.getElementById(divId).style.display = 'block';
        }
    </script>
</body>
</html>