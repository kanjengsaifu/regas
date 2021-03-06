<?php echo $this->session->flashdata('msgSuccess')?>
<?php echo $this->session->flashdata('msgError')?>
<div>
	<h2>K3</h2>
	<?php echo form_error('id_evaluasi'); ?>
	<form method="POST" enctype="multipart/form-data">
		<div class="panel-group">
			<?php $nomor = 1; ?>
			<?php foreach ($quest_all as $key => $header) { ?>
			<div class="panel">
				<div class="panel-heading">
					<h3>Bagian <?php echo $nomor.'&nbsp;-&nbsp;'.$header['label'];?>
						<span style="font-size: 12px; font-weight:normal;">
							&nbsp;&nbsp;
							<a href="<?php echo site_url('admin/admin_k3/edit_header/'.$key)?>" class="editBtn"><i class="fa fa-cog"></i>Edit</a>&nbsp; | &nbsp;
							<a href="<?php echo site_url('admin/admin_k3/hapus_header/'.$key)?>" class="delBtn"><i class="fa fa-trash"></i>Hapus</a>
						</span>
					<h3><!-- Header Content -->
				</div>
				<?php if (isset($header['data'])) {?>
				<?php $no = 1;?>
				<?php foreach ($header['data'] as $keysq => $valuesq) {?>
				<div class="panel-body" id="<?php //echo $keysq;?>">
					<?php if (isset($valuesq['question'])) { ?>
					<h4 class="panel-title"><?php echo $nomor.'.'.$no.'&nbsp;-&nbsp;'.$valuesq['question'];?>
						<span style="font-size: 12px; font-weight:normal;">
							&nbsp;&nbsp;
							<a href="<?php echo site_url('admin/admin_k3/edit_sub_quest/'.$keysq)?>" class="editBtn"><i class="fa fa-cog"></i>Edit</a>&nbsp; | &nbsp;
							<a href="<?php echo site_url('admin/admin_k3/hapus_sub_quest/'.$keysq)?>" class="delBtn"><i class="fa fa-trash"></i>Hapus</a>
						</span>
					</h4><!-- Sub Header Content -->
					<?php $no++; }else{?>
		            <div class="tambahBtn">
						<a href="<?php echo site_url('admin/admin_k3/tambah_sub_quest/'.$key)?>"><i class="fa fa-plus-square-o"></i>&nbsp; Tambah Sub Judul</a>
					</div>
					<?php }?>
					<!-- Group Content -->
					<ol type="a" style="list-style-type: none;">
						<?php if (isset($valuesq['data'])) { ?>
						<?php foreach ($valuesq['data'] as $keyq => $valueq) {?>
						<!-- Content -->
						<li  id="<?php echo $keyq; ?>">
							<div class="fieldPanel">
							<span class="evaluasiSetting">
								<a href="<?php echo site_url('admin/admin_k3/edit_group_quest/'.$keyq)?>"><i class="fa fa-pencil-square-o"></i></a>
								&nbsp;|&nbsp;
								<a href="<?php echo site_url('admin/admin_k3/hapus_group_quest/'.$keyq)?>"><i class="fa fa-trash-o"></i></a>
							</span>
							<?php foreach ($valueq as $keydata => $valuedata) { ?>
								<p><?php echo $valuedata['value']; ?>
									<span style="font-size: 12px; font-weight:normal;">
										&nbsp;&nbsp;
										<a href="<?php echo site_url('admin/admin_k3/edit_quest/'.$keydata)?>" class="editBtn"><i class="fa fa-cog"></i>Edit</a>&nbsp; | &nbsp;
										<a href="<?php echo site_url('admin/admin_k3/hapus_quest/'.$keydata)?>" class="delBtn"><i class="fa fa-trash"></i>Hapus</a>
									</span>
								</p>
							<?php } ?>
								<div class="tambahBtn clearfix">
									<a href="<?php echo site_url('admin/admin_k3/tambah_quest/'.$keyq)?>"><i class="fa fa-plus-square-o"></i>&nbsp; Tambah Pertanyaan</a>
								</div>
							</div>
						</li>
						<!-- End of Content -->
						<?php } ?>

						<div class="tambahBtn clearfix">
							<form method="POST" enctype="multipart/form-data" class="newGroup">
								<input type="hidden" value="<?php echo $key;?>" name="id_ms_header">
								<input type="hidden" value="<?php echo $keysq;?>" name="id_sub_header">
								<?php echo form_dropdown('id_evaluasi', $evaluasi, $this->form->get_temp_data('id_evaluasi'),'class="newGroupDd"');?>
								<i class='fa fa-plus-square-o newGroupBlue'></i>&nbsp;<input type="submit" value="Tambah Kelompok Pertanyaan" name="newGroup" class="newGroupBtn">
							</form>
						</div>

						<?php }else{ ?>
						<div class="tambahBtn clearfix">
							<a href="<?php echo site_url('admin/admin_k3/tambah_group_quest/'.$key.'/'.$keysq)?>"><i class="fa fa-plus-square-o"></i>&nbsp; Tambah Kelompok Pertanyaan</a>
						</div>
						<?php } ?>
					</ol>
					<!-- End of Group Content -->
	            </div>
	            <?php } ?>
	            <div class="tambahBtn clearfix">
					<a href="<?php echo site_url('admin/admin_k3/tambah_sub_quest/'.$key)?>"><i class="fa fa-plus-square-o"></i>&nbsp; Tambah Sub Judul</a>
				</div>
	        	<?php }else{ ?>	        	
	            <div class="tambahBtn clearfix">
					<a href="<?php echo site_url('admin/admin_k3/tambah_sub_quest/'.$key)?>"><i class="fa fa-plus-square-o"></i>&nbsp; Tambah Sub Judul</a>
				</div>
	        	<?php } ?>
	        </div>
			<?php $nomor++; ?>
	        <?php } ?>
            <div class="tambahBtn clearfix">
				<a href="<?php echo site_url('admin/admin_k3/tambah_header')?>"><i class="fa fa-plus-square-o"></i>&nbsp; Tambah Judul</a>
			</div>
	    </div>
	</form>
</div>