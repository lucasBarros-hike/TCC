
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/quiz.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="icon" href="{{asset('images/dark_volpe.png')}}">
  <title>@yield('title') - Volpe</title>
</head>
<body>

@yield('standard')

<script src="{{asset('js/scriptQuiz.js') }}" type="module"></script>
<script src="{{asset('js/quiz.js') }}" ></script>
</body>
</html>