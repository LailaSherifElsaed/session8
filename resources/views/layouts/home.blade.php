<!DOCTYPE html>
<html lang="{{LaravelLocalization::getCurrentLocale()}}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">


<head>
  @include('includes.head')
</head>

<body >
  <div class="hero_area">
    @include('includes.header')
    @include('includes.slider')
  </div>
  @include('includes.aboutus')
  @include('includes.service')
  @include('includes.client')
  @include('includes.contact')
  @include('includes.team')
  @include('includes.info')
  @include('includes.footer')
  @include('includes.footerjs')
</body>

</html>