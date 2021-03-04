<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <title>NewsCovid</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


  </head>
  <body>
    <div id="contenu">
    <section>
      <form  >

      @csrf
    <select id="a" name="" onchange="fct()" >
      @foreach ($liste as $pays )
        <option value=""></option>
        <option value="{{$pays}}">{{$pays}}</option>
      @endforeach
    </select>
    </form>
    </section>


    <section >

      @foreach ($data as $news )
        <div class="news">
        <div class="img-titre">
        <img src="{{$news['urlToImage']}}" alt="" width="100" height="100">
        <a href="{{ $news['url'] }}">{{$news['title']}} </a>  <div></div> </div>
<span class="description"> {{ $news['description'] }} </span>
</div>
        <br>


      @endforeach

    </section>


  </div>
  </body>
</html>
