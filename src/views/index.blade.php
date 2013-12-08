@extends(Config::get('views.default', 'layouts.default'))

@section('title')
CloudFlare
@stop

@section('controls')
<p class="lead">Here are your visitor statistics from CloudFlare:</p>
<hr>
@stop

@section('content')
<div id="data">
    <p class="lead"><i class="fa fa-refresh fa-spin fa-lg"></i> Loading...</p>
</div>
@stop

@section('js')
<script>
var cmsCloudFlareURL = {{ URL::route('cloudflare.data') }};
</script>
{{ Asset::scripts('cloudflare') }}
@stop
