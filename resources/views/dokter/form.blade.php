
@if($setting['form-method'] =='native')
	<div class="sbox">
		<div class="sbox-title">  
			<h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small>{{ $pageNote }}</small>
				<a href="javascript:void(0)" class="collapse-close pull-right btn btn-xs btn-danger" onclick="ajaxViewClose('#{{ $pageModule }}')"><i class="fa fa fa-times"></i></a>
			</h4>
	</div>

	<div class="sbox-content"> 
@endif	
			{!! Form::open(array('url'=>'dokter/save/'.SiteHelpers::encryptID($row['id']), 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ','id'=> 'dokterFormAjax')) !!}
			<div class="col-md-12">
						<fieldset><legend> Data Dokter</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group  " >
										<label for="Kode Dokter" class=" control-label col-md-4 text-left"> Kode Dokter </label>
										<div class="col-md-6">
										  {!! Form::text('kd_dokter', $row['kd_dokter'],array('class'=>'form-control', 'placeholder'=>'', 'readonly'   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Nama Dokter" class=" control-label col-md-4 text-left"> Nama Dokter <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('nm_dokter', $row['nm_dokter'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Jenis Kelamin" class=" control-label col-md-4 text-left"> Jenis Kelamin </label>
										<div class="col-md-6">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='jk' value ='L'  @if($row['jk'] == 'L') checked="checked" @endif > Laki-Laki </label>
					<label class='radio radio-inline'>
					<input type='radio' name='jk' value ='P'  @if($row['jk'] == 'P') checked="checked" @endif > Perempuan </label> 
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
										<label for="Tanggal Lahir" class=" control-label col-md-4 text-left"> Tanggal Lahir </label>
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
										<label for="Golongan Darah" class=" control-label col-md-4 text-left"> Golongan Darah </label>
										<div class="col-md-6">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='gol_drh' value ='O'  @if($row['gol_drh'] == 'O') checked="checked" @endif > O </label>
					<label class='radio radio-inline'>
					<input type='radio' name='gol_drh' value ='A'  @if($row['gol_drh'] == 'A') checked="checked" @endif > A </label>
					<label class='radio radio-inline'>
					<input type='radio' name='gol_drh' value ='B'  @if($row['gol_drh'] == 'B') checked="checked" @endif > B </label>
					<label class='radio radio-inline'>
					<input type='radio' name='gol_drh' value ='AB'  @if($row['gol_drh'] == 'AB') checked="checked" @endif > AB </label> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Agama" class=" control-label col-md-4 text-left"> Agama </label>
										<div class="col-md-6">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='agama' value ='Islam'  @if($row['agama'] == 'Islam') checked="checked" @endif > Islam </label>
					<label class='radio radio-inline'>
					<input type='radio' name='agama' value ='Kristen Katolik'  @if($row['agama'] == 'Kristen Katolik') checked="checked" @endif > Kristen Katolik </label>
					<label class='radio radio-inline'>
					<input type='radio' name='agama' value ='Kristen Protestan'  @if($row['agama'] == 'Kristen Protestan') checked="checked" @endif > Kristen Protestan </label>
					<label class='radio radio-inline'>
					<input type='radio' name='agama' value ='Hindu'  @if($row['agama'] == 'Hindu') checked="checked" @endif > Hindu </label>
					<label class='radio radio-inline'>
					<input type='radio' name='agama' value ='Budha'  @if($row['agama'] == 'Budha') checked="checked" @endif > Budha </label> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Alamat Tinggal" class=" control-label col-md-4 text-left"> Alamat Tinggal </label>
										<div class="col-md-6">
										  {!! Form::text('almt_tgl', $row['almt_tgl'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="No Telp" class=" control-label col-md-4 text-left"> No Telp </label>
										<div class="col-md-6">
										  {!! Form::text('no_telp', $row['no_telp'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Status Nikah" class=" control-label col-md-4 text-left"> Status Nikah </label>
										<div class="col-md-6">
										  
					<label class='radio radio-inline'>
					<input type='radio' name='stts_nikah' value ='Single'  @if($row['stts_nikah'] == 'Single') checked="checked" @endif > Single </label>
					<label class='radio radio-inline'>
					<input type='radio' name='stts_nikah' value ='Menikah'  @if($row['stts_nikah'] == 'Menikah') checked="checked" @endif > Menikah </label>
					<label class='radio radio-inline'>
					<input type='radio' name='stts_nikah' value ='Duda'  @if($row['stts_nikah'] == 'Duda') checked="checked" @endif > Duda/Janda </label> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Kode Spesialis" class=" control-label col-md-4 text-left"> Kode Spesialis </label>
										<div class="col-md-6">
										  <select name='kd_sps' rows='5' id='kd_sps' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Alumni" class=" control-label col-md-4 text-left"> Alumni </label>
										<div class="col-md-6">
										  {!! Form::text('alumni', $row['alumni'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="No Ijin Praktek" class=" control-label col-md-4 text-left"> No Ijin Praktek </label>
										<div class="col-md-6">
										  {!! Form::text('no_ijn_praktek', $row['no_ijn_praktek'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
	
		$("#kd_sps").jCombo("{!! url('dokter/comboselect?filter=spesialis:kd_sps:nm_sps') !!}",
		{  selected_value : '{{ $row["kd_sps"] }}' });
		 
	
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
			var removeUrl = '{{ url("dokter/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});
				
	var form = $('#dokterFormAjax'); 
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