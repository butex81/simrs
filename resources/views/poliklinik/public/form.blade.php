

		 {!! Form::open(array('url'=>'poliklinik/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-6">
						<fieldset><legend> Data Umum</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group  " >
										<label for="Kode Unit/Poliklinik" class=" control-label col-md-4 text-left"> Kode Unit/Poliklinik </label>
										<div class="col-md-6">
										  {!! Form::text('kd_poli', $row['kd_poli'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Nama Unit/Poliklinik" class=" control-label col-md-4 text-left"> Nama Unit/Poliklinik <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('nm_poli', $row['nm_poli'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset>
			</div>
			
			<div class="col-md-6">
						<fieldset><legend> Data Biaya</legend>
									
									  <div class="form-group  " >
										<label for="Biaya Registrasi" class=" control-label col-md-4 text-left"> Biaya Registrasi </label>
										<div class="col-md-6">
										  {!! Form::text('registrasi', $row['registrasi'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Biaya Registrasi Lama" class=" control-label col-md-4 text-left"> Biaya Registrasi Lama </label>
										<div class="col-md-6">
										  {!! Form::text('registrasilama', $row['registrasilama'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset>
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
