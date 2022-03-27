<div class="container">
    <div class="null">
    </div>
    <div class="content">
        <div class="halaman">
            <div class="judul-halaman">
                <h3>Halaman Latih Kerusakan <?= $data['kodeKerusakan'] ?></h3> 
                <div class="query">
                    <?php 
                    $selco=$data['selected']==$data['kodeKerusakan']?'selected':'' ;
                     $selal=$data['selected']=='all'?'selected':'' ;
                    ?>
                <label for="checkbox">Tampilkan Data</label>
                <select class="checkbox" name="showcode" id="checkbox">
                    <option <?=$selco?> value="<?=BASE_URL?>pelatihan/latih/<?=$data['kodeKerusakan']?>"><b>Hanya <?=$data['kodeKerusakan']?></b></option>
                    <option <?=$selal?> value="<?=BASE_URL?>pelatihan/latih/<?=$data['kodeKerusakan']?>+ALL"><b>Semua Data</b></option>
                </select>
                </div>
            </div>
            <div class="isi-halaman">

                <div class="tabel-small">
                    <?php
                    $class = null;
                    if (count($data['datapel']) === 0) {
                        $class = 'hide';
                        echo "Data pelatihan kerusakan " . $data['kodeKerusakan'] . " masih kosong";
                    } else { ?>
                        <table cellspacing="0" class="tabel">
                            <tr>
                                <td>No</td>
                                 <?php for ($a = 1; $a <= 32; $a++) { ?>
                                        <td><?= 'x' . $a?></td>
                                    <?php } ?>
                                <td>T</td>
                                <td>A</td>
                            </tr>
                            <?php $nomor = 1 ?>
                            <?php foreach ($data['datapel'] as $key => $value) : ?>
                                <tr class="tabel-isi">
                                    <td class="numbering"><b><?= $nomor ?></b></td>
                                    <?php for ($a = 1; $a <= 32; $a++) { ?>
                                        <?php
                                        $class = $value['x' . $a] == 1 ? "primer" : "cek";
                                        $icon = $value['x' . $a] == 1 ? "chek.svg" : "x.svg";
                                        ?>
                                        <td class="<?= $class ?>"><img src="<?=BASE_URL?>assets/icons/<?=$icon?>" alt=""></td>
                                    <?php } ?>
                                    <td><?= $value['kodeKerusakan'] ?></td>
                                    <td>
                                        <a href="<?=BASE_URL?>pelatihan/detaildatalatih/<?=$value['kodeKerusakan']?>+<?=$value['id']?>"><img src="<?= BASE_URL ?>assets/icons/edit.svg" alt=""></a><a href="scsdc" onclick="delet(event,{'url':'<?=BASE_URL?>pelatihan/hapusdataid/<?=$value['id']?>','kode':'<?=$value['kodeKerusakan']?>','id':'<?=$value['id']?>'})"><img src="<?= BASE_URL ?>assets/icons/hapus.svg" alt=""></a>
                                    </td>
                                </tr>
                                <?php $nomor++ ?>
                            <?php endforeach ?>
                        </table>
                    <?php  } ?> 
                </div>
                <div class="container-button">
                    <a class="btn-added" href="<?= BASE_URL ?>pelatihan/latih/<?= $data['kodeKerusakan'] ?>/tambah">Tambah</a>
                    <a class="btn-proses <?=$class ?>" href="<?= BASE_URL ?>pelatihan/prosesdata/<?= $data['kodeKerusakan'] ?>">Proses Latih Data</a>
                </div>
            </div>
        </div>

    </div>
</div>