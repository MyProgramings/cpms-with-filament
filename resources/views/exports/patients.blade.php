<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>بطاقات تعريفية</title>
    <style>
        @page {
            margin: 20px;
        }

        @font-face {
            font-family: 'xbriyaz';
            src: url('{{ storage_path('fonts/Amiri-Regular.ttf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'xbriyaz';
            font-size: 35px;
            direction: rtl;
            text-align: right;
        }

        table {
            border-spacing: 20px;
        }
        .card-body {
            padding: 10px 12px;
        }

        .label {
            font-weight: bold;
            color: #235863;
        }
    </style>
</head>
<body>

<table>
    @foreach ($patients->chunk(2) as $chunk)
        <tr>
            @foreach ($chunk as $patient)
                <td>
                    <div class="card">
                        <div class="card-header">
                            <img class="logo" src="{{ public_path('logocenters.jpg') }}" alt="logo">
                        </div>
                        <div class="card-body">
                            <div class="info-row"><span class="label">&nbsp;&nbsp;الاسم:</span> <span class="value">{{ $patient->name }}</span></div>
                            <div class="info-row"><span class="label">&nbsp;&nbsp;العمر:</span> <span class="value">{{ $patient->age }} Y</span></div>
                            <div class="info-row"><span class="label">&nbsp;&nbsp;التشخيص:</span> <span class="value">{{ $patient->status }}</span></div>
                            <div class="info-row"><span class="label">&nbsp;&nbsp;رقم الملف الطبي:</span> <span class="value">{{ $patient->file_number }} - {{ $patient->file_colors }}</span></div>
                            <div class="info-row"><span class="label">&nbsp;&nbsp;العنوان:</span> <span class="value">{{ $patient->permanent_address }}</span></div>
                        </div>
                        <div class="card-footer">
                            <img class="logo" src="{{ public_path('logocenter-footers.jpg') }}" alt="logo">
                        </div>
                    </div>
                </td>
            @endforeach

            @if ($chunk->count() < 2)
                <td></td>
            @endif
        </tr>
    @endforeach
</table>

</body>
</html>
