<!--
['tipo'=>'', 'titulo'=>'']

slot('botones')
slot('pie')

-->
<div class="box @isset($tipo){!! $tipo !!}" @endisset>
    @isset($titulo)
        <div class="box-header with-border">
            <h3 class="box-title">{!! $titulo !!}</h3>

            <div class="box-tools pull-right">
                @isset($botones){!! $botones !!}@endisset
            </div>
        </div>
    @endisset
<!-- /.box-header -->
    <div class="box-body">
        {{ $slot }}
    </div>
    <!-- /.box-body -->
    @isset($pie)
        <div class="box-footer clearfix">
            {!! $pie !!}
        </div>
@endisset
<!-- /.box-footer -->
</div>