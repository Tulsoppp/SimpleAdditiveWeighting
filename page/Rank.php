<?php
$rank = getRanking();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $rank = getRankingFill($_POST['fill']);
}
?>
<h1>Ranking</h1>
<form action="" method="POST">
    <input type="text" class="fill" name="fill" value="<?=$_POST['fill']??'' ?>">
    <button type="submit">Filter</button>
</form>
<table>
    <thead>
        <th colspan="3">Ranking</th>
    </thead>
    <tbody>
        <?php $i=1; foreach( $rank as $normal ):?>
            <tr>
                <td><?= $i++?></td>
                <td><?= getAlternatifName($normal['ID_ALTERNATIF'])['ALTERNATIF'] ?></td>
                <td><?= $normal['normalize'] ?></td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>