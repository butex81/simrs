@extends('layouts.app')

@section('content')
<div class="page-content row">
	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox "> 
	<div class="sbox-title"> 

	 <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>

   		<a href="{{ URL::to('{class}?return='.$return) }}" class="tips btn btn-xs btn-default pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('{class}/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
		@endif 
	</div>
	<div class="sbox-content" style="background:#fff;"> 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		{form_view}
			</tbody>	
		</table>   

	 {masterdetailview}
	
	</div>
</div>	

	</div>
</div>
	  
@stop