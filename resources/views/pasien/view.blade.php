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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('No Rekam Medis', (isset($fields['no_rkm_medis']['language'])? $fields['no_rkm_medis']['language'] : array())) }}</td>
						<td>{{ $row->no_rkm_medis}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nama Pasien', (isset($fields['nm_pasien']['language'])? $fields['nm_pasien']['language'] : array())) }}</td>
						<td>{{ $row->nm_pasien}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('No KTP', (isset($fields['no_ktp']['language'])? $fields['no_ktp']['language'] : array())) }}</td>
						<td>{{ $row->no_ktp}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Jenis Kel', (isset($fields['jk']['language'])? $fields['jk']['language'] : array())) }}</td>
						<td>{{ $row->jk}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tempat Lahir', (isset($fields['tmp_lahir']['language'])? $fields['tmp_lahir']['language'] : array())) }}</td>
						<td>{{ $row->tmp_lahir}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tgl Lahir', (isset($fields['tgl_lahir']['language'])? $fields['tgl_lahir']['language'] : array())) }}</td>
						<td>{{ $row->tgl_lahir}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nama Ibu', (isset($fields['nm_ibu']['language'])? $fields['nm_ibu']['language'] : array())) }}</td>
						<td>{{ $row->nm_ibu}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Alamat', (isset($fields['alamat']['language'])? $fields['alamat']['language'] : array())) }}</td>
						<td>{{ $row->alamat}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Gol Darah', (isset($fields['gol_darah']['language'])? $fields['gol_darah']['language'] : array())) }}</td>
						<td>{{ $row->gol_darah}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Pekerjaan', (isset($fields['pekerjaan']['language'])? $fields['pekerjaan']['language'] : array())) }}</td>
						<td>{{ $row->pekerjaan}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Stts Nikah', (isset($fields['stts_nikah']['language'])? $fields['stts_nikah']['language'] : array())) }}</td>
						<td>{{ $row->stts_nikah}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Agama', (isset($fields['agama']['language'])? $fields['agama']['language'] : array())) }}</td>
						<td>{{ $row->agama}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tgl Daftar', (isset($fields['tgl_daftar']['language'])? $fields['tgl_daftar']['language'] : array())) }}</td>
						<td>{{ $row->tgl_daftar}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('No Tlp', (isset($fields['no_tlp']['language'])? $fields['no_tlp']['language'] : array())) }}</td>
						<td>{{ $row->no_tlp}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Umur', (isset($fields['umur']['language'])? $fields['umur']['language'] : array())) }}</td>
						<td>{{ $row->umur}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('PDD Terakhir', (isset($fields['pnd']['language'])? $fields['pnd']['language'] : array())) }}</td>
						<td>{{ $row->pnd}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Penanggung Jawab', (isset($fields['keluarga']['language'])? $fields['keluarga']['language'] : array())) }}</td>
						<td>{{ $row->keluarga}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nama PNJ', (isset($fields['namakeluarga']['language'])? $fields['namakeluarga']['language'] : array())) }}</td>
						<td>{{ $row->namakeluarga}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Asuransi', (isset($fields['kd_pj']['language'])? $fields['kd_pj']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->kd_pj,'kd_pj','1:penjab:kd_pj:png_jawab') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('No Kepesertaan', (isset($fields['no_peserta']['language'])? $fields['no_peserta']['language'] : array())) }}</td>
						<td>{{ $row->no_peserta}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Kelurahan', (isset($fields['kd_kel']['language'])? $fields['kd_kel']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->kd_kel,'kd_kel','1:kelurahan:id:name') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Kecamatan', (isset($fields['kd_kec']['language'])? $fields['kd_kec']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->kd_kec,'kd_kec','1:kecamatan:id:name') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Kabupaten', (isset($fields['kd_kab']['language'])? $fields['kd_kab']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->kd_kab,'kd_kab','1:kabupaten:id:name') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Pekerjaan PNJ', (isset($fields['pekerjaanpj']['language'])? $fields['pekerjaanpj']['language'] : array())) }}</td>
						<td>{{ $row->pekerjaanpj}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Alamat PNJ', (isset($fields['alamatpj']['language'])? $fields['alamatpj']['language'] : array())) }}</td>
						<td>{{ $row->alamatpj}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Kelurahan PNJ', (isset($fields['kelurahanpj']['language'])? $fields['kelurahanpj']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->kelurahanpj,'kelurahanpj','1:kelurahan:id:name') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Kecamatan PNJ', (isset($fields['kecamatanpj']['language'])? $fields['kecamatanpj']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->kecamatanpj,'kecamatanpj','1:kecamatan:id:name') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Kabupaten PNJ', (isset($fields['kabupatenpj']['language'])? $fields['kabupatenpj']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->kabupatenpj,'kabupatenpj','1:kabupaten:id:name') }} </td>
						
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