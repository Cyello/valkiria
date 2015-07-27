<br />
@if( session('msg_sucesso') )
<div class="ls-alert-success ls-dismissable" role="alert">
    <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
    <center>
        {{ session('msg_sucesso') }}
    <center>
</div>
@endif

@if( session('msg_erro') )
<div class="ls-alert-danger ls-dismissable" role="alert">
    <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
    <center>
        { session('msg_erro') }}
    <center>
</div>
@endif
