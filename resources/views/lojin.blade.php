<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                /* http://meyerweb.com/eric/tools/css/reset/ 
        v2.0 | 20110126
        License: none (public domain)
        */

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
        body{
            background-color: lightseagreen;
        }
        .box{
            width: 350px;
            height: 350px;
            background-color: whitesmoke;
            margin-left: auto;
            margin-right: auto;

            border-radius: 15px;
            padding: 15px;
            box-sizing: border-box;
        }
        .box .username{
            padding: 15px;
            border-radius: 18px;
            font-size: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 80px;
        }
        .box .pwd{
            padding: 15px;
            border-radius: 18px;
            font-size: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen flex justify-center items-center">
    <div class="box">
        <input type="text" name="" id="" class="username" placeholder="email">
        <input type="password" name="" id="" class="pwd" placeholder="password">
        <button class="btn btn-info">Info</button>
        <button class="btn btn-success">Success</button>
        <button class="btn btn-warning">Warning</button>
        <button class="btn btn-error">Error</button>
        <input type="file" class="file-input w-full max-w-xs" />
        {{$nama}}
    </div>
</body>
</html>