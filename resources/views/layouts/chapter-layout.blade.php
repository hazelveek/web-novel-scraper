<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        body {
            counter-reset: page_num chap_num;
        }

        @page {
            margin-top: .7in;
            /* Getting an extra .12 inches padding on the bottom from ?? Whatever, hack! */
            margin-bottom: .58in;
            padding: 0;
            size: 5.5in 8.5in;
            counter-increment: page_num;

            @bottom-center {
                font-family: "Jost";
                font-weight: 300;
                content: counter(page_num);
                font-size: 9pt;
                position: relative;
                margin-top: -.35in;
            }
        }

        h2 {
            text-align: center;
            font-family: "Jost";
            margin-top: 1.4in;
            margin-bottom: .9in;
            font-weight: 300;
            display: inline-block;
            /* Pad box to position the "underline" that's rendered using the border */
            padding: 0.1in 0.2in;
            border-bottom: 1px solid;
            line-height: 1em;
            font-size: 15pt;
        }

        p {
            margin: 0;
            text-indent: 1.5em;
            font-size: 12pt;
            line-height: 14.3pt;
            text-align: justify;
            text-justify: inter-word;
            word-spacing: -.7px;
        }

        .chapter {
            text-align: left;
        }
    </style>
</head>

<body>
    <h2 id="chapter-title"></h2>
    <p id="translator"></p>
    <p id="editor"></p>
    <div class="container chapter" id="chapter-content"></div>
    <p id="upload-date"></p>
</body>

</html>
