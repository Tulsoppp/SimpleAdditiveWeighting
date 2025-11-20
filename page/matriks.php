<?php
$jumlahKriteria = getjumlahKriteria();
$skor = getSkor();
$maksSkor = getMaks();
$jumAlt = getAlternatif();
$kt = getKriteria();
$normalize = normalize();
?>

<h1>Matriks</h1>
<table>
    <thead>
        <tr>
            <th rowspan="2">Alternatif</th>
            <th colspan="<?= $jumlahKriteria['jumlah']?>"> Kriteria</th>
        </tr>
        <tr>
            <?php
            for($i = 1;$i<=$jumlahKriteria['jumlah'];$i++){
            ?>
            <th>C<?= $i?></th>
            <?php
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach($skor as $s ):?>
        <tr>
            <td>A<?= $no++?></td>
            <?php foreach($s as $st ):?>
                <td><?= $st['SKOR'] ?></td>
            <?php endforeach?>
        </tr>
        <?php endforeach?>
    </tbody>
    <tfoot>
        <tr>
            <th>Max</th>
        <?php foreach( $maksSkor as $maks ):?>
            <th><?= $maks['MAKS']?></th>
        <?php endforeach?>
            </tr>
    </tfoot>
</table>
<br>
<br>
<br>
<hr>
<br>
<h1>Matriks Ternormalisasi</h1>
<table>
    <thead>
        <tr>
            <th rowspan="2">Alternatif</th>
            <th colspan="<?= $jumlahKriteria['jumlah']?>"> Kriteria</th>
        </tr>
        <tr>
            <?php
            for($i = 1;$i<=$jumlahKriteria['jumlah'];$i++){
            ?>
            <th>C<?= $i?></th>
            <?php
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        
        ?>
        <?php $no=1; foreach($skor as $s ):?>
            <?php
            $ind = 0;
            ?>
        <tr>
            <td>A<?= $no++?></td>
            <?php foreach($s as $st ):?>
                <td><?= number_format($st['SKOR'] / $maksSkor[$ind]['MAKS'],3) ?></td>
                <?php
                $ind++;
        ?>
            <?php endforeach?>
        </tr>
        
        <?php endforeach?>
    </tbody>
</table>
<br>
<br>
<br>
<hr>
<br>
<h1>Kalkulasi</h1>
<table>
    <thead>
        <th colspan="3">Kalkulasi</th>
    </thead>
    <tbody>
        <?php $i=1; foreach( $normalize as $normal ):?>
            <tr>
                <td>A<?= $i++?></td>
                <td><?= getAlternatifName($normal['ID_ALTERNATIF'])['ALTERNATIF'] ?></td>
                <td><?= $normal['normalize'] ?></td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>
