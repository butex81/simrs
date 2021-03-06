@if($setting['view-method'] =='native')
<div class="sbox">
	<div class="sbox-title">  
		<h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small>{{ $pageNote }}</small>
			<a href="javascript:void(0)" class="collapse-close pull-right btn btn-xs btn-danger" onclick="ajaxViewClose('#{{ $pageModule }}')">
			<i class="fa fa fa-times"></i></a>
		</h4>
	 </div>

	<div class="sbox-content"> 
@endif	

		<table class="table table-striped table-bordered" >
			<tbody>	
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Kode Dokter', (isset($fields['kd_dokter']['language'])? $fields['kd_dokter']['language'] : array())) }}</td>
						<td>{{ $row->kd_dokter}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nama Dokter', (isset($fields['nm_dokter']['language'])? $fields['nm_dokter']['language'] : array())) }}</td>
						<td>{{ $row->nm_dokter}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Jenis Kelamin', (isset($fields['jk']['language'])? $fields['jk']['language'] : array())) }}</td>
						<td>{{ $row->jk}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tempat Lahir', (isset($fields['tmp_lahir']['language'])? $fields['tmp_lahir']['language'] : array())) }}</td>
						<td>{{ $row->tmp_lahir}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tanggal Lahir', (isset($fields['tgl_lahir']['language'])? $fields['tgl_lahir']['language'] : array())) }}</td>
						<td>{{ $row->tgl_lahir}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Golongan Darah', (isset($fields['gol_drh']['language'])? $fields['gol_drh']['language'] : array())) }}</td>
						<td>{{ $row->gol_drh}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Agama', (isset($fields['agama']['language'])? $fields['agama']['language'] : array())) }}</td>
						<td>{{ $row->agama}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Alamat Tinggal', (isset($fields['almt_tgl']['language'])? $fields['almt_tgl']['language'] : array())) }}</td>
						<td>{{ $row->almt_tgl}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('No Telp/HP', (isset($fields['no_telp']['language'])? $fields['no_telp']['language'] : array())) }}</td>
						<td>{{ $row->no_telp}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status Nikah', (isset($fields['stts_nikah']['language'])? $fields['stts_nikah']['language'] : array())) }}</td>
						<td>{{ $row->stts_nikah}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Spesialis', (isset($fields['kd_sps']['language'])? $fields['kd_sps']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->kd_sps,'kd_sps','1:spesialis:kd_sps:nm_sps') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Alumni', (isset($fields['alumni']['language'])? $fields['alumni']['language'] : array())) }}</td>
						<td>{{ $row->alumni}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('No Ijin Praktek', (isset($fields['no_ijn_praktek']['language'])? $fields['no_ijn_praktek']['language'] : array())) }}</td>
						<td>{{ $row->no_ijn_praktek}} </td>
						
					</tr>
				
			</tbody>	
		</table>  
			
		 	

@if($setting['form-method'] =='native')
	</div>	
</div>	
@endif	

<script>
$(document).ready(function(){

});
</script>	