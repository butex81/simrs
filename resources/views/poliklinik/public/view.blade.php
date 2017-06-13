<div class="m-t" style="padding-top:25px;">	
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-responsive" > 	

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
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	