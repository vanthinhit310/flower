<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('general.site_name') }} | @hasSection('title') @yield('title') @endif</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{asset('style/css/plugins.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('style/revolution/css/settings.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('style/revolution/css/layers.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('style/revolution/css/navigation.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('style/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('style/css/color/aqua.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('style/type/icons.css')}}">
  @stack('styles')
</head>
<body>
<section class="main-wp">
  @hasSection('content') @yield('content') @endif
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js" integrity="sha256-rsPUGdUPBXgalvIj4YKJrrUlmLXbOb6Cp7cdxn1qeUc=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('style/revolution/js/jquery.themepunch.tools.min.js?rev=5.0')}}"></script>
<script type="text/javascript" src="{{asset('style/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0')}}"></script>
<script type="text/javascript" src="{{asset('style/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('style/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('style/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('style/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('style/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script type="text/javascript" src="{{asset('style/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('style/js/scripts.js')}}"></script>
@stack('script')
</body>
</html>
