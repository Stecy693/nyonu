<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $certificate_name }}</title>
    <style>
        @page {
            size: A4 portrait;
            margin: 0;
        }
        html, body {
            margin: 0;
            padding: 0;
            background: #ffffff;
            font-family: DejaVu Sans, Arial, sans-serif;
        }
        .sheet {
            box-sizing: border-box;
            width: 210mm;
           height: 297mm;
            margin: 0 auto;
            padding: 0;
            position: relative;
            background: #ffffff;
            overflow: hidden;
        }
        .bg-image {
            position: absolute;
            left: 0;
            top: 0;
            width: 210mm;
            height: 297mm;
            z-index: 0;
            object-fit: cover;
        }
       .content {
            position: relative;
            z-index: 1;
            width: 90%; /* largeur du bloc contenu */
            margin: 0 auto; /* centrage horizontal */
            text-align: center; /* centrage du texte */
            padding-top: 420px; /* espace en haut */
        }

        .intro {
            margin: 0;
            text-align: center;
            font-size: 20px;
            color: #111111;
        }
        .name {
            margin: 16px 0;
            text-align: center;
            font-size: 59px;
            font-weight: 800;
            color: #0a0a0a;
            line-height: 1.1;
        }
        .name-line {
            width: 320px;
            height: 2px;
            margin: 0 auto 24px;
            border-radius: 999px;
            background: #ba06bf;
        }
       .desc {
            margin: 3rem auto 0;
            max-width: 600px;
            font-size: 20px;
            line-height: 1.55;
            color: #232323;
        }
        .meta-row {
            width: 100%;
            margin-top: 70px;
            font-size: 0;
        }
        .meta-cell {
            width: 50%;
            display: inline-block;
            vertical-align: top;
            text-align: left;
        }

        .meta-cell.right {
            text-align: right;
        }
                .meta-value {
            margin: 0;
            font-size: 20px;
            color: #101010;
            line-height: 1;
        }
        .meta-value.badge {
            color: #ba06bf;
        }
        .meta-line {
            margin-top: 8px;
            border-bottom: 2px solid #000000;
            width: 85%;
        }
        .meta-cell.right .meta-line {
            margin-left: auto;
        }
        .meta-label {
            margin: 8px 0 0;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #555555;
        }
    </style>
</head>
<body>
    <main class="sheet">
        @if (!empty($certificate_background_data_uri))
            <img class="bg-image" src="{{ $certificate_background_data_uri }}" alt="">
        @endif
        <div class="content">
            <p class="intro">CE CERTIFICAT EST D&Eacute;CERN&Eacute; &Agrave;</p>
            <p class="name">{{ $first_name }} {{ $last_name }}</p>
            <div class="name-line"></div>

            <p class="desc">
                En reconnaissance de son engagement et de l'accomplissement du parcours Nyonu, ce certificat distingue sa capacité à incarner un
                <strong>{{ $leadership_type }}</strong>.
            </p>

            <div class="meta-row">
                <div class="meta-cell">
                    <p class="meta-value">{{ $date }}</p>
                    <div class="meta-line"></div>
                    <p class="meta-label">Date</p>
                </div>
                <div class="meta-cell right">
                    <p class="meta-value badge">{{ $badge_label }}</p>
                    <div class="meta-line"></div>
                    <p class="meta-label">Badge</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
