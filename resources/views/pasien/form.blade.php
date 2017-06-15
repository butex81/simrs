
@if($setting['form-method'] =='native')
	<div class="sbox">
		<div class="sbox-title">  
			<h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small>{{ $pageNote }}</small>
				<a href="javascript:void(0)" class="collapse-close pull-right btn btn-xs btn-danger" onclick="ajaxViewClose('#{{ $pageModule }}')"><i class="fa fa fa-times"></i></a>
			</h4>
	</div>

	<div class="sbox-content"> 
@endif	
			{!! Form::open(array('url'=>'pasien/save/'.SiteHelpers::encryptID($row['id']), 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ','id'=> 'pasienFormAjax')) !!}
			<div class="col-md-4">
						<fieldset><legend> Info Pasien</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group  " >
										<label for="No Rekam Medis" class=" control-label col-md-4 text-left"> No Rekam Medis </label>
										<div class="col-md-6">
										  {!! Form::text('no_rkm_medis', $row['no_rkm_medis'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Nama Pasien" class=" control-label col-md-4 text-left"> Nama Pasien <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('nm_pasien', $row['nm_pasien'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="No KTP" class=" control-label col-md-4 text-left"> No KTP <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('no_ktp', $row['no_ktp'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true', 'parsley-type'=>'number'   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Jenis Kelamin" class=" control-label col-md-4 text-left"> Jenis Kelamin </label>
										<div class="col-md-6">
										  
					<?php $jk = explode(',',$row['jk']);
					$jk_opt = array( 'L' => 'Laki - Laki' ,  'P' => 'Perempuan' , ); ?>
					<select name='jk' rows='5'   class='select2 '  > 
						<?php 
						foreach($jk_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['jk'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Tempat Lahir" class=" control-label col-md-4 text-left"> Tempat Lahir </label>
										<div class="col-md-6">
										  {!! Form::text('tmp_lahir', $row['tmp_lahir'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Tgl Lahir" class=" control-label col-md-4 text-left"> Tgl Lahir <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('tgl_lahir', $row['tgl_lahir'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Umur" class=" control-label col-md-4 text-left"> Umur </label>
										<div class="col-md-6">
										  {!! Form::text('umur', $row['umur'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Gol Darah" class=" control-label col-md-4 text-left"> Gol Darah </label>
										<div class="col-md-6">
										  
					<?php $gol_darah = explode(',',$row['gol_darah']);
					$gol_darah_opt = array( 'A' => 'A' ,  'B' => 'B' ,  'AB' => 'AB' ,  'O' => 'O' , ); ?>
					<select name='gol_darah' rows='5'   class='select2 '  > 
						<?php 
						foreach($gol_darah_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['gol_darah'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Agama" class=" control-label col-md-4 text-left"> Agama </label>
										<div class="col-md-6">
										  
					<?php $agama = explode(',',$row['agama']);
					$agama_opt = array( 'Islam' => 'Islam' ,  'Kristen Katolik' => 'Kristen Katolik' ,  'Kristen Protestan' => 'Kristen Protestan' ,  'Hindu' => 'Hindu' ,  'Budha' => 'Budha' , ); ?>
					<select name='agama' rows='5'   class='select2 '  > 
						<?php 
						foreach($agama_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['agama'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Pekerjaan" class=" control-label col-md-4 text-left"> Pekerjaan </label>
										<div class="col-md-6">
										  {!! Form::text('pekerjaan', $row['pekerjaan'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Stts Nikah" class=" control-label col-md-4 text-left"> Stts Nikah </label>
										<div class="col-md-6">
										  
					<?php $stts_nikah = explode(',',$row['stts_nikah']);
					$stts_nikah_opt = array( 'Single' => 'Single' ,  'Menikah' => 'Menikah' ,  'Duda' => 'Duda/Janda' , ); ?>
					<select name='stts_nikah' rows='5'   class='select2 '  > 
						<?php 
						foreach($stts_nikah_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['stts_nikah'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="No Tlp" class=" control-label col-md-4 text-left"> No Tlp </label>
										<div class="col-md-6">
										  {!! Form::text('no_tlp', $row['no_tlp'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset>
			</div>
			
			<div class="col-md-4">
						<fieldset><legend> Info Tambahan</legend>
									
									  <div class="form-group  " >
										<label for="Tgl Daftar" class=" control-label col-md-4 text-left"> Tgl Daftar </label>
										<div class="col-md-6">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('tgl_daftar', $row['tgl_daftar'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Asuransi" class=" control-label col-md-4 text-left"> Asuransi </label>
										<div class="col-md-6">
										  <select name='kd_pj' rows='5' id='kd_pj' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="No Kepesertaan" class=" control-label col-md-4 text-left"> No Kepesertaan </label>
										<div class="col-md-6">
										  {!! Form::text('no_peserta', $row['no_peserta'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Nama Ibu" class=" control-label col-md-4 text-left"> Nama Ibu </label>
										<div class="col-md-6">
										  {!! Form::text('nm_ibu', $row['nm_ibu'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="PDD Terakhir" class=" control-label col-md-4 text-left"> PDD Terakhir </label>
										<div class="col-md-6">
										  
					<?php $pnd = explode(',',$row['pnd']);
					$pnd_opt = array( '-' => '-' ,  'SD' => 'SD' ,  'SMP' => 'SMP' ,  'SMA' => 'SMA' ,  'D1' => 'D1' ,  'D2' => 'D2' ,  'D3' => 'D3' ,  'D4' => 'D4' ,  'S1' => 'S1' ,  'S2' => 'S2' ,  'S3' => 'S3' , ); ?>
					<select name='pnd' rows='5'   class='select2 '  > 
						<?php 
						foreach($pnd_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['pnd'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Kabupaten/Kota" class=" control-label col-md-4 text-left"> Kabupaten/Kota </label>
										<div class="col-md-6">
										  <select name='kd_kab' rows='5' id='kd_kab' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Kecamatan" class=" control-label col-md-4 text-left"> Kecamatan </label>
										<div class="col-md-6">
										  <select name='kd_kec' rows='5' id='kd_kec' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Kelurahan" class=" control-label col-md-4 text-left"> Kelurahan </label>
										<div class="col-md-6">
										  <select name='kd_kel' rows='5' id='kd_kel' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Alamat" class=" control-label col-md-4 text-left"> Alamat </label>
										<div class="col-md-6">
										  <textarea name='alamat' rows='5' id='alamat' class='form-control '  
				           >{{ $row['alamat'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset>
			</div>
			
			<div class="col-md-4">
						<fieldset><legend> Info Penanggung Jawab</legend>
									
									  <div class="form-group  " >
										<label for="Penanggung Jawab" class=" control-label col-md-4 text-left"> Penanggung Jawab <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='keluarga' value ='Ayah' required @if($row['keluarga'] == 'Ayah') checked="checked" @endif > Ayah </label>
					<label class='radio radio-inline'>
					<input type='radio' name='keluarga' value ='Ibu' required @if($row['keluarga'] == 'Ibu') checked="checked" @endif > Ibu </label>
					<label class='radio radio-inline'>
					<input type='radio' name='keluarga' value ='Istri' required @if($row['keluarga'] == 'Istri') checked="checked" @endif > Istri </label>
					<label class='radio radio-inline'>
					<input type='radio' name='keluarga' value ='Suami' required @if($row['keluarga'] == 'Suami') checked="checked" @endif > Suami </label>
					<label class='radio radio-inline'>
					<input type='radio' name='keluarga' value ='Saudara' required @if($row['keluarga'] == 'Saudara') checked="checked" @endif > Saudara </label> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Nama PNJ" class=" control-label col-md-4 text-left"> Nama PNJ <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('namakeluarga', $row['namakeluarga'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Pekerjaan PNJ" class=" control-label col-md-4 text-left"> Pekerjaan PNJ </label>
										<div class="col-md-6">
										  {!! Form::text('pekerjaanpj', $row['pekerjaanpj'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Kabupaten/Kota PNJ" class=" control-label col-md-4 text-left"> Kabupaten/Kota PNJ </label>
										<div class="col-md-6">
										  <select name='kabupatenpj' rows='5' id='kabupatenpj' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Kecamatan PNJ" class=" control-label col-md-4 text-left"> Kecamatan PNJ </label>
										<div class="col-md-6">
										  <select name='kecamatanpj' rows='5' id='kecamatanpj' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Kelurahan PNJ" class=" control-label col-md-4 text-left"> Kelurahan PNJ </label>
										<div class="col-md-6">
										  <select name='kelurahanpj' rows='5' id='kelurahanpj' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Alamat PNJ" class=" control-label col-md-4 text-left"> Alamat PNJ </label>
										<div class="col-md-6">
										  <textarea name='alamatpj' rows='5' id='alamatpj' class='form-control '  
				           >{{ $row['alamatpj'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset>
			</div>
			
												
								
						
			<div style="clear:both"></div>	
							
			<div class="form-group">
				<label class="col-sm-4 text-right">&nbsp;</label>
				<div class="col-sm-8">	
					<button type="submit" class="btn btn-primary btn-sm "><i class="icon-checkmark-circle2"></i>  {{ Lang::get('core.sb_save') }} </button>
					<button type="button" onclick="ajaxViewClose('#{{ $pageModule }}')" class="btn btn-success btn-sm"><i class="icon-cancel-circle2 "></i>  {{ Lang::get('core.sb_cancel') }} </button>
				</div>			
			</div> 		 
			{!! Form::close() !!}


@if($setting['form-method'] =='native')
	</div>	
</div>	
@endif	

	
</div>	
			 
<script type="text/javascript">
$(document).ready(function() { 
	
		$("#kd_pj").jCombo("{!! url('pasien/comboselect?filter=penjab:kd_pj:png_jawab') !!}",
		{  selected_value : '{{ $row["kd_pj"] }}' });
		
		$("#kd_kab").jCombo("{!! url('pasien/comboselect?filter=kabupaten:id:name') !!}",
		{  selected_value : '{{ $row["kd_kab"] }}' });
		
		$("#kd_kec").jCombo("{!! url('pasien/comboselect?filter=kecamatan:id:name') !!}&parent=kd_kab:",
		{  parent: '#kd_kab', selected_value : '{{ $row["kd_kec"] }}' });
		
		$("#kd_kel").jCombo("{!! url('pasien/comboselect?filter=kelurahan:id:name') !!}&parent=kd_kec:",
		{  parent: '#kd_kec', selected_value : '{{ $row["kd_kel"] }}' });
		
		$("#kabupatenpj").jCombo("{!! url('pasien/comboselect?filter=kabupaten_pnj:id:name') !!}",
		{  selected_value : '{{ $row["kabupatenpj"] }}' });
		
		$("#kecamatanpj").jCombo("{!! url('pasien/comboselect?filter=kecamatan_pnj:id:name') !!}&parent=kabupatenpj:",
		{  parent: '#kabupatenpj', selected_value : '{{ $row["kecamatanpj"] }}' });
		
		$("#kelurahanpj").jCombo("{!! url('pasien/comboselect?filter=kelurahan_pnj:id:name') !!}&parent=kecamatanpj:",
		{  parent: '#kecamatanpj', selected_value : '{{ $row["kelurahanpj"] }}' });
		 
	
	$('.editor').summernote();
	$('.previewImage').fancybox();	
	$('.tips').tooltip();	
	$(".select2").select2({ width:"98%"});	
	$('.date').datepicker({format:'yyyy-mm-dd',autoClose:true})
	$('.datetime').datetimepicker({format: 'yyyy-mm-dd hh:ii:ss'}); 
	$('input[type="checkbox"],input[type="radio"]').iCheck({
		checkboxClass: 'icheckbox_square-red',
		radioClass: 'iradio_square-red',
	});			
		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("pasien/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});
				
	var form = $('#pasienFormAjax'); 
	form.parsley();
	form.submit(function(){
		
		if(form.parsley('isValid') == true){			
			var options = { 
				dataType:      'json', 
				beforeSubmit :  showRequest,
				success:       showResponse  
			}  
			$(this).ajaxSubmit(options); 
			return false;
						
		} else {
			return false;
		}		
	
	});

});

function showRequest()
{
	$('.ajaxLoading').show();		
}  
function showResponse(data)  {		
	
	if(data.status == 'success')
	{
		ajaxViewClose('#{{ $pageModule }}');
		ajaxFilter('#{{ $pageModule }}','{{ $pageUrl }}/data');
		notyMessage(data.message);	
		$('#sximo-modal').modal('hide');	
	} else {
		notyMessageError(data.message);	
		$('.ajaxLoading').hide();
		return false;
	}	
}			 

</script>		 