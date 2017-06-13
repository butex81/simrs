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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Kode Unit/Poliklinik', (isset($fields['kd_poli']['language'])? $fields['kd_poli']['language'] : array())) }}</td>
						<td>{{ $row->kd_poli}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nama Unit/Poliklinik', (isset($fields['nm_poli']['language'])? $fields['nm_poli']['language'] : array())) }}</td>
						<td>{{ $row->nm_poli}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Biaya Registrasi', (isset($fields['registrasi']['language'])? $fields['registrasi']['language'] : array())) }}</td>
						<td>{{ $row->registrasi}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Biaya Registrasi Lama', (isset($fields['registrasilama']['language'])? $fields['registrasilama']['language'] : array())) }}</td>
						<td>{{ $row->registrasilama}} </td>
						
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