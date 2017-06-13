

		 {!! Form::open(array('url'=>'spesialis/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Data Spesialisasi Dokter</legend>
				{!! Form::hidden('id', $row['id']) !!}
				<?php 
				$limited = isset($fields['kd_sps']['limited']) ? $fields['kd_sps']['limited'] :'';
				if(SiteHelpers::filterColumn($limited )) { ?>
												
									  <div class="form-group  " >
										<label for="Kode Spesialisasi" class=" control-label col-md-4 text-left"> Kode Spesialisasi <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('kd_sps', $row['kd_sps'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
				<?php } ?>
				<?php 
				$limited = isset($fields['nm_sps']['limited']) ? $fields['nm_sps']['limited'] :'';
				if(SiteHelpers::filterColumn($limited )) { ?>
												
									  <div class="form-group  " >
										<label for="Nama Spesialisasi" class=" control-label col-md-4 text-left"> Nama Spesialisasi <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('nm_sps', $row['nm_sps'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 
				<?php } ?></fieldset>
			</div>
			
			

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
