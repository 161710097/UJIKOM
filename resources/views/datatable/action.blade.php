{!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message] ) !!} &nbsp;
<a  class="btn btn-warning btn-rounded btn-floating btn-outline" href="{{ $edit_url }}">Ubah</a> &nbsp;
{!! Form::submit('Hapus', ['class'=>'btn btn-danger btn-rounded btn-floating btn-outline']) !!}
<!-- @if($data->status == 1)
                  <form action="{{ route('produk.publish',$data->id) }}" method="post">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-rounded btn-floating btn-outline">UnPublish</button>
                  </form>
                  @elseif($data->status == 0)
                  <form action="{{ route('produk.publish',$data->id) }}" method="post">
                    {{ csrf_field() }}
                    <button class="btn btn-primary btn-rounded btn-floating btn-outline" type="submit">Publish</button>
                  </form>
                  @endif -->
{!! Form::close()!!}