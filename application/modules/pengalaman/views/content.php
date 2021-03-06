<?php 
	if($this->utility->check_administrasi()>0){
		?>
	<p class="noticeMsg">Harap melengkapi data administrasi vendor.<br>Pilih menu Administrasi di samping atau klik <a href="<?php echo site_url('administrasi');?>">disini</a></p>
		<?php
	}
?>
<?php echo $this->session->flashdata('msgSuccess')?>
<?php echo $this->session->flashdata('klasifikasi')?>
<div class="btnTopGroup clearfix">
<a href="<?php echo site_url('pengalaman/siu');?>" class="btnBlue"><i class="fa fa-plus"></i> Tambah</a>
</div>
<div class="tableWrapper">
	<table class="tableData">
		<thead>
			<tr>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['job_name'] == 'asc') ? 'desc' : 'asc'; ?>&by=job_name">Nama Paket Pekerjaan<i class="fa fa-sort-<?php echo ($sort['job_name'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['id_bidang'] == 'asc') ? 'desc' : 'asc'; ?>&by=id_bidang">Bidang Pekerjaan<i class="fa fa-sort-<?php echo ($sort['id_bidang'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['id_sub_bidang'] == 'asc') ? 'desc' : 'asc'; ?>&by=id_sub_bidang">Sub Bidang Pekerjaan<i class="fa fa-sort-<?php echo ($sort['id_sub_bidang'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['job_location'] == 'asc') ? 'desc' : 'asc'; ?>&by=job_location">Lokasi<i class="fa fa-sort-<?php echo ($sort['job_location'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['job_giver'] == 'asc') ? 'desc' : 'asc'; ?>&by=job_giver">Pemberi Tugas<i class="fa fa-sort-<?php echo ($sort['job_giver'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['phone_no'] == 'asc') ? 'desc' : 'asc'; ?>&by=phone_no">No. Telp. Pemberi Tugas<i class="fa fa-sort-<?php echo ($sort['phone_no'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['contract_no'] == 'asc') ? 'desc' : 'asc'; ?>&by=contract_no">No. Kontrak<i class="fa fa-sort-<?php echo ($sort['contract_no'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['contract_start'] == 'asc') ? 'desc' : 'asc'; ?>&by=contract_start">Tanggal Kontrak<i class="fa fa-sort-<?php echo ($sort['contract_start'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['price_idr'] == 'asc') ? 'desc' : 'asc'; ?>&by=price_idr">Nilai Kontrak (Rp)<i class="fa fa-sort-<?php echo ($sort['price_idr'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['price_foreign'] == 'asc') ? 'desc' : 'asc'; ?>&by=price_foreign">Nilai Kontrak (Kurs Asing)<i class="fa fa-sort-<?php echo ($sort['price_foreign'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['contract_end'] == 'asc') ? 'desc' : 'asc'; ?>&by=contract_end">Tanggal Selesai Sesuai Kontrak<i class="fa fa-sort-<?php echo ($sort['contract_end'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['contract_file'] == 'asc') ? 'desc' : 'asc'; ?>&by=contract_file">Lampiran Dokumen Kontrak<i class="fa fa-sort-<?php echo ($sort['contract_file'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['bast_date'] == 'asc') ? 'desc' : 'asc'; ?>&by=bast_date">Tanggal Selesai Sesuai BAST<i class="fa fa-sort-<?php echo ($sort['bast_date'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td><a href="?<?php echo $this->utility->generateLink('sort','desc')?>&sort=<?php echo ($sort['bast_file'] == 'asc') ? 'desc' : 'asc'; ?>&by=bast_file">Lampiran Dokumen BAST<i class="fa fa-sort-<?php echo ($sort['bast_file'] == 'asc') ? 'desc' : 'asc'; ?>"></i></a></td>
				<td colspan="2">Action</td>
			</tr>
		</thead>
		<tbody>
		<?php 
		if(count($izin_list)){
			foreach($izin_list as $row => $value){
			?>
				<tr>
					<td><?php echo $value['job_name'];?></td>
					<td><?php echo $value['id_bidang'];?></td>
					<td><?php echo $value['id_sub_bidang'];?></td>
					<td><?php echo $value['job_location'];?></td>
					<td><?php echo $value['job_giver'];?></td>
					<td><?php echo $value['phone_no'];?></td>
					<td><?php echo $value['contract_no'];?></td>
					<td><?php echo $value['contract_start'];?></td>
					<td><?php echo $value['price_idr'];?></td>
					<td><?php echo $value['currency'].' '.$value['price_foreign'];?></td>
					<td><?php echo $value['contract_end'];?></td>
					<td><a href="<?php echo base_url('lampiran/contract_file/'.$value['contract_file']);?>"  target="_blank"><?php echo $value['contract_file'];?> <i class="fa fa-link"></i></a></td>
					<td><?php echo $value['bast_date'];?></td>
					<td><a href="<?php echo base_url('lampiran/bast_file/'.$value['bast_file']);?>"  target="_blank"><?php echo $value['bast_file'];?> <i class="fa fa-link"></i></a></td>
					<td class="actionBlock">
						<a href="<?php echo site_url('pengalaman/edit/'.$value['id'])?>" class="editBtn"><i class="fa fa-cog"></i>Edit</a> | 
						<a href="<?php echo site_url('pengalaman/hapus/'.$value['id'])?>" class="delBtn"><i class="fa fa-trash"></i>Hapus</a>
					</td>
				</tr>
			<?php 
			}
		}else{?>
			<tr>
				<td colspan="11" class="noData">Data tidak ada</td>
			</tr>
		<?php }
		?>
		</tbody>
	</table>
	
</div>
<div class="pageNumber">
	<?php echo $pagination ?>
</div>