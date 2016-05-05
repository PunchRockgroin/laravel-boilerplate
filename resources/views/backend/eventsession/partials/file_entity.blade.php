@include('backend.fileentity.partials.file_upload')
<div class="form-group">
{!! Html::checkboxswitch(
	'blind_update',
	'Is this an instance where the visitor brought in a file, but does not want or does not need to visit a Graphic Operator? ',
	'NO',
	[ 'data-on-color'=>'warning', 'data-off-color'=>'default',]
	)
!!}
</div>
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Event Session File Data</h3>
        {!! Form::hidden('primary_file_entity_id', isset($FileEntity) ? $FileEntity->id : null, ['class' => 'form-control']) !!}		
    </div><!-- /.box-header -->
    <div class="box-body">
        <div class="form-group">
            {!! Form::label('currentfilename', 'Current '.trans('fileentity.backend.form.filename.label'), ['class' => 'control-label']) !!}
            <div class="">
                {!! Form::text('currentfilename', isset($FileEntity) ? $FileEntity->filename : null, ['class' => 'form-control','readonly'=>'readonly', 'placeholder' => trans('fileentity.backend.form.filename.placeholder')]) !!}
            </div>
        </div>
        <div class='file-update-section hidden'>
			<div class="form-group">
            {!! Form::label('filename', 'New '.trans('fileentity.backend.form.filename.label'), ['class' => 'control-label']) !!}
            <div class="">
				{!! Form::hidden('temporaryfilename', null, ['class' => 'form-control']) !!}		
                {!! Form::text('filename', isset($FileEntity) ? $FileEntity->filename : null, ['class' => 'form-control', 'readonly'=>'readonly', 'placeholder' => trans('fileentity.backend.form.filename.placeholder')]) !!}
            </div>
			</div>
			<div class="form-group">
				{!! Form::label('next_version', trans('fileentity.backend.form.next_version.label'), ['class' => 'control-label']) !!}
				<div class="">
					{!! Form::versionRange('next_version', null, isset($nextVersion) ? $nextVersion : '0', ['class' => 'form-control']) !!}
					<div class="help-block">{{ trans('fileentity.backend.form.next_version.help_block') }}</div>
				</div>
			</div>
		</div>
        <div class="form-group">
            {!! Form::label('mime', 'Mime', ['class' => 'control-label']) !!}
            <div class="">
                {!! Form::text('mime', isset($FileEntity) ? $FileEntity->mime : null, ['class' => 'form-control','readonly'=>'readonly']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('storage_disk', 'Storage Disk', ['class' => 'control-label']) !!}
            <div class="">
                {!! Form::text('storage_disk', isset($FileEntity) ? $FileEntity->storage_disk : null,['class' => 'form-control','readonly'=>'readonly']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('path', 'Path', ['class' => 'control-label']) !!}
            <div class="">
                {!! Form::text('path', isset($FileEntity) ? $FileEntity->path : null,['class' => 'form-control','readonly'=>'readonly']) !!}
            </div>
        </div>
        
    </div>
    <div class="box-footer">
        <div class='clearfix'>
            <div class=" pull-right">
                @include('backend.eventsession.partials.actions')
            </div>
        </div>
    </div>
</div>