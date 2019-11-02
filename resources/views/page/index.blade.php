@extends('app')
@section('title') Trang chủ @stop
@section('content')
  <div class="content-wrapper">
    @includeIf('page.partials.nav')
    <div class="offset"></div>
    @includeIf('page.partials.slider')


    @includeIf('page.partials.light_wrapper')

    <div class="offset"></div>
    @includeIf('page.partials.product')


    @includeIf('page.partials.customer_say')

    @includeIf('page.partials.contact')
  </div>

  @includeIf('page.partials.footer')
@stop
