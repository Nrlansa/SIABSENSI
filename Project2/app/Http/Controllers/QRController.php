<?php

namespace App\Http\Controllers;

use App\Models\Admin\MasterData\Anggota;
use App\Models\Admin\MasterData\Mahasiswa;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;


class QRController extends Controller
{
    function __invoke()
    {
        $mahasiswa = auth()->guard('mahasiswa')->user();
        $result = Builder::create()
            ->writer(new PngWriter())
            ->writerOptions([])
            ->data($mahasiswa->nim)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->size(350)
            ->margin(10)
            ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->labelText($mahasiswa->nama)
            ->labelFont(new NotoSans(20))
            ->labelAlignment(new LabelAlignmentCenter())
            ->build();
        
        $data['img'] = $result->getDataUri();


        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        $data['list_anggota'] = Anggota::all();
        return view('mahasiswa.QrCodeGen', $data);
    }

    

}