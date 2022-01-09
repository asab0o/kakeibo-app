<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kakeibo</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">家計簿</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">編集</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">グラフいれたい</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">カテゴリー設定</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 <div class="todayRecordAll mt-3">
   <label for="">今日の合計</label>
 </div>

 <form action="">
   <div class="mt-3">
    <div class="row mb-3">
      <label for="inputDate" class="col-sm-2 col-form-label">日付</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="inputDate">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputMoney" class="col-sm-2 col-form-label">金額</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="inputMoney">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputCategory-1" class="col-sm-2 col-form-label">カテゴリー１</label>
      <select class="form-select" aria-label="カテゴリー１">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="row mb-3">
      <label for="inputCategory-2" class="col-sm-2 col-form-label">カテゴリー２</label>
      <select class="form-select" aria-label="カテゴリー２">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
   </div>
   <button type="submit" class="btn btn-primary">作成</button>
 </form>

<div class="showGraph mt-3">グラフをいれたい！</div>

</body>
</html>