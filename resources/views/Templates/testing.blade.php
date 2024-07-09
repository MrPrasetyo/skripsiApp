<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <div class="invoice-wrapper" id="print-area">
        <div class="invoice">
            <div class="invoice-container">
                <div class="invoice-head">
                    <div class="invoice-head-top">
                        <div class="invoice-head-top-left text-start">
                            <img src="images/logo.png">
                        </div>
                        <div class="invoice-head-top-right text-end">
                            <h3>Surat Keterangan Jalan</h3>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="invoice-head-middle">
                        <div class="invoice-head-middle-left text-start">
                            <p><span class="text-bold">Date</span>:
                                {{ \Carbon\Carbon::parse($data->created_at)->format('d-m-Y') }}</p>
                        </div>
                        <div class="invoice-head-middle-right text-end">
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="rules">
                        <div class="invoice-head-middle-left text-start">
                            <p class="text-bold">1. Rujukan</p>
                            <p>a. Undang-Undang Republik Indonesia Nomor 2 Tahun 2002 tentang Kepolisian
                                Negara Republik Indonesia ; dan </p>
                            <p>b. Pasal 71 ayat (1) huruf d dan Ayat (3) Undang-Undang Nomor 22 Tahun 2009 tentang Lalu
                                Lintas
                                dan Angkutan Jalan.</p>
                        </div>
                        <div class="invoice-head-middle-right text-end">
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="flex pt-5">
                        <p class="text-bold">2. <span>Merujuk hal tersebut diatas, Satlantas Polresta Barelang
                                memberikan
                                Surat Keterangan Jalan dengan identitas sebagai berikut : </span></p>
                    </div>
                    <div class="invoice-head-bottom">
                        <div class="invoice-head-bottom-left">
                            <ul>
                                <li class='text-bold'>Nomor Plat:</li>
                                <li>Nama Pemilik</li>
                                <li>Alamat Pemilik</li>
                                <li>Merk/Type</li>
                                <li>Jenis/Model</li>
                                <li>Warna</li>
                                <li>Tahun/Isi Silinder</li>
                                <li>Nomor Rangka</li>
                                <li>Nomor Mesin</li>
                                <li>Tujuan</li>
                                <li>Berangkat Tanggal</li>
                                <li>Berlaku sampai dengan</li>
                            </ul>
                        </div>
                        <div class="invoice-head-bottom-right">
                            <ul class="text-end">
                                <li class='text-bold'>{{ $data->nomor_plat }}</li>
                                <li>{{ $data->nama_pemilik }}</li>
                                <li>{{ $data->alamat_pemilik }}</li>
                                <li>{{ $data->merk }} / {{ $data->type }}</li>
                                <li>{{ $data->jenis }} / {{ $data->model }}</li>
                                <li>{{ $data->warna }}</li>
                                <li>{{ $data->tahun }} / {{ $data->isi_silinder }}</li>
                                <li>{{ $data->nomor_rangka }}</li>
                                <li>{{ $data->nomor_mesin }}</li>
                                <li>{{ $data->tujuan }}</li>
                                <li>{{ $data->berangkat_tanggal }}</li>
                                <li>
                                    @if (strpos($data->nomor_plat, 'BP') !== false)
                                        {{ \Carbon\Carbon::parse($data->berangkat_tanggal)->addMonths(3)->format('m/d/Y') }}
                                    @else
                                        Sekali Perjalanan
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex pt-5">
                    <p class="text-bold">3. <span>Surat jalan ini berlaku sejak tanggal dikeluarkan dengan catatan ”
                            Tidak berlaku sebagai pengganti STNK ”</span></p>
                </div>
                <div class="footer-ttd">
                    <div class="footer-grid">

                    </div>
                    @php
                    $months = [
                        1 => 'Januari',
                        2 => 'Februari',
                        3 => 'Maret',
                        4 => 'April',
                        5 => 'Mei',
                        6 => 'Juni',
                        7 => 'Juli',
                        8 => 'Agustus',
                        9 => 'September',
                        10 => 'Oktober',
                        11 => 'November',
                        12 => 'Desember'
                    ];
                    $today = \Carbon\Carbon::now();
                    $formattedDate = $today->day . ' ' . $months[$today->month] . ' ' . $today->year;
                @endphp
                    <div class="footer-grid-2">
                        <p>Batam, {{ $formattedDate }}</p>
                        <p>a.n. KASAT LANTAS POLRESTA BARELANG</p>
                        <p>WAKA</p>
                        <p>u.b.</p>
                        <br><br><br><br>
                        <p class="text-bold">FITRA YANTO</p>
                        <hr>
                        <p class="text-bold">AJUN INSPEKTUR POLISI DUA NRP 84070750</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="invoice-foot text-center">
        <div class="invoice-btns">
            <button type="button" class="invoice-btn" onclick="printInvoice()">
                <span>
                    <i class="fa-solid fa-print"></i>
                </span>
                <span>Print</span>
            </button>
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
