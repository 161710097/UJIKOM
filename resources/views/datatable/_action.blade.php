{!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message] ) !!} &nbsp;
<a  class="btn btn-warning btn-rounded btn-floating btn-outline" href="{{ $edit_url }}">Ubah</a> &nbsp;
{!! Form::submit('Hapus', ['class'=>'btn btn-danger btn-rounded btn-floating btn-outline']) !!}
{!! Form::close()!!}