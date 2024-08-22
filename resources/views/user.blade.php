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
        .atas ul li{
            display: inline-block;
            margin-left: 10px;
        }
        .konten{
            width: 80%;
            height: 100%;
            padding: 50px;
            box-sizing: border-box;
            float: left;
        }
        #surat, #kas, #lapor, #profil, #edit{
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
            font-size: 20px;
            color:  #3AAFA9;
        }
        .konten p{
            color:  #3AAFA9;
            text-align: center;
            font-size: 25px;
            text-transform: capitalize;
            margin-bottom: 30px;
        }
        .konten .judul{
            color:  #3AAFA9;
        }
        .konten .isi{
            color: black;
            opacity: 70%;
        }
        .konten .box-profil{
            margin-bottom: 30px;
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
        <ul>
            <li>Hallo {{$nama}}</li>
            <li><button onclick="showDiv('profil')">profil</button></li>
            <li><a href="#">Notif</a></li>
        </ul>
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
                                <td><textarea placeholder="Keperluan" class="textarea textarea-bordered textarea-xs w-full max-w-xs"></textarea></td>
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
                            <td><input type="file" class="file-input w-full max-w-xs" /></td>
                        </tr>
                    </form>
                </table>
            </div>
            <button class="btn btn-accent">Ajukan</button>
        </div>
        <div class="Profil" id="profil">
            <div class="box-profil">
                <h2>Profil</h2>
                <p>{{$nama}}</p>
                <table>
                    <tr>
                        <td class="judul">Nomor KK</td>
                    </tr>
                    <tr>
                        <td class="isi">123456789</td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td class="judul">NIK</td>
                    </tr>
                    <tr>
                        <td class="isi">123456789</td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td class="judul">Jenis Kelamin</td>
                    </tr>
                    <tr>
                        <td class="isi">Laki-laki</td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td class="judul">Tanggal Lahir</td>
                    </tr>
                    <tr>
                        <td class="isi">1/1/2024</td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td class="judul">Email</td>
                    </tr>
                    <tr>
                        <td class="isi">user@gmail.com</td>
                    </tr>
                </table>
            </div>
            <button onclick="showDiv('edit')">Edit</button>
        </div>
        <div class="edit" id="edit">
            <div class="edit-profil">
                <h2>Profil</h2>
                <form action="">
                    
                </form>
            </div>
        </div>
    </div>
    <script>
        function showDiv(divId) {
            // Sembunyikan semua div
            document.getElementById('surat').style.display = 'none';
            document.getElementById('kas').style.display = 'none';
            document.getElementById('lapor').style.display = 'none';
            document.getElementById('profil').style.display = 'none';
            document.getElementById('edit').style.display = 'none' ;
            
            // Tampilkan div yang dipilih
            document.getElementById(divId).style.display = 'block';
        }
        // document.getElementById('showprofil').addEventListener('click', function(event) {
        //     event.preventDefault(); // Mencegah aksi default dari link
        //     var myDiv = document.getElementById('profil');
        //     if (myDiv.style.display === 'none' || myDiv.style.display === '') {
        //         myDiv.style.display = 'block'; // Menampilkan div
        //     } else {
        //         myDiv.style.display = 'none'; // Menyembunyikan div
        //     }
        // });
    </script>
</body>
</html>