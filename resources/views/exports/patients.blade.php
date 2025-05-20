<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>بطاقات تعريفية</title>
    <style>
        @page { margin: 20px; }

        @font-face {
            font-family: 'xbriyaz';
            src: url('{{ storage_path('fonts/Amiri-Regular.ttf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'xbriyaz';
            font-size: 12px;
            direction: rtl;
            text-align: right;
        }

        table {
            width: 100%;
            border-spacing: 10px;
            border: 1px solid #ffffff;
        }

        td {
            width: 50%;
            vertical-align: top;
        }

        .card {
            border: 1px solid #ccc;
        }

        .card-header {
            background-color: #409df4;
            padding: 5px;
            text-align: center;
        }

        .card-body {
            padding: 10px;
        }

        .card-footer {
            background-color: #409df4;
            height: 15px;
        }

        .info-row {
            margin-bottom: 5px;
        }

        .label {
            font-weight: bold;
            display: inline-block;
            width: 90px;
        }

        .value {
            display: inline-block;
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
                            <img src="{{ public_path('logocenter.jpg') }}" width="250px" alt="logo">
                        </div>
                        <div class="card-body" style="padding: 10px;">
                            <div class="info-row"><span class="label">الاسم:</span> <span class="value">{{ $patient->name }}</span></div>
                            <div class="info-row"><span class="label">العمر:</span> <span class="value">{{ $patient->age }} Y</span></div>
                            <div class="info-row"><span class="label">التشخيص:</span> <span class="value">{{ $patient->status }}</span></div>
                            <div class="info-row"><span class="label">رقم الملف:</span> <span class="value">{{ $patient->file_number }} - {{ $patient->file_colors }}</span></div>
                            <div class="info-row"><span class="label">العنوان:</span> <span class="value">{{ $patient->permanent_address }}</span></div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </td>
            @endforeach

            {{-- إذا كان عدد المرضى فردي، نضيف عموداً فارغاً --}}
            @if ($chunk->count() < 2)
                <td></td>
            @endif
        </tr>
    @endforeach
</table>

</body>
</html>
