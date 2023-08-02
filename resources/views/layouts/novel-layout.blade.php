<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Book</title>
    <style>
        h1 {
            text-align: center;
            font-family: "Jost";
            font-size: 24pt;
            margin-bottom: 0.5in;
        }

        h2 {
            text-align: center;
            font-family: "Jost";
            margin-bottom: 0.5in;
            font-weight: 300;
            display: inline-block;
            padding: 0.1in 0.2in;
            border-bottom: 1px solid;
            line-height: 1em;
            font-size: 15pt;
        }

        p {
            text-indent: 1.5em;
            line-height: 1.5;
            font-family: "Baskerville";
        }

        .toc {
            margin-bottom: 0.5in;
        }

        .toc h3 {
            font-family: "Jost";
            font-size: 14pt;
            margin-bottom: 0.2em;
        }

        .toc ul {
            list-style-type: none;
            padding-left: 0;
        }

        .toc li {
            margin-bottom: 0.2em;
        }
    </style>
</head>

<body>
    <h1 id="novel-title">My Book</h1>

    <h2 id="novel-description">Description</h2>
    <p>This is the synopsis of my book.</p>

    <div class="toc" id="toc">
        <h2>Table of Contents</h2>
        <h3>Chapter 1: Introduction</h3>
        <ul>
            <li><a href="#chapter1-section1">Section 1</a></li>
            <li><a href="#chapter1-section2">Section 2</a></li>
        </ul>

        <h3>Chapter 2: Next Chapter</h3>
        <ul>
            <li><a href="#chapter2-section1">Section 1</a></li>
            <li><a href="#chapter2-section2">Section 2</a></li>
        </ul>
    </div>

    <h2 id="chapter1-section1">Chapter 1: Introduction</h2>
    <p>This is the content of Chapter 1, Section 1.</p>

    <h2 id="chapter1-section2">Chapter 1: Section 2</h2>
    <p>This is the content of Chapter 1, Section 2.</p>

    <h2 id="chapter2-section1">Chapter 2: Section 1</h2>
    <p>This is the content of Chapter 2, Section 1.</p>

    <h2 id="chapter2-section2">Chapter 2: Section 2</h2>
    <p>This is the content of Chapter 2, Section 2.</p>
</body>

</html>