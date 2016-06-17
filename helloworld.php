<?
    $no = $_GET[pageNo];
    switch($no)
    {
        case 1:
          $title = "Hello World! 출력";
          $submitStatus = "0";
          $status = "0";
          $example = "Ex) Helloworld! 를 출력";
          $description ="printf();문을 사용하여 Helloworld를 출력하세요!";
        break;

        case 2:
          $title = "사칙연산 계산기 만들기";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) 4 + 2 = 6, 4 - 2 = 4, 4 * 2 = 8, 4 / 2 = 2";
          $description ="scanf();입력문과 printf();출력문을 사용하여 만드세요!";
        break;

        case 3:
          $title = "1부터 100까지 출력";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) 1, 2, 3, . . . 98, 99, 100";
          $description ="for() 또는 while()등 반복문과 출력문을 이용하여 만드세요!";
        break;

        case 4:
          $title = "1부터 100까지의 합 출력";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) 1 + 2 + . . . + 100 = x";
          $description ="반복문과 출력문사용해서 만드세요!";
        break;

        case 5:
          $title = "1부터 100까지의 자연수 중 홀수만 출력";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) 1, 3, 5, . . ., 99";
          $description ="반복문, 출력문을 사용해서 만드세요!";
        break;

        case 6:
          $title = "1부터 100까지의 자연수 중 짝수만 출력";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) 2, 4, 6, . . . , 100";
          $description ="반복문과 출력문을 이용하여 만드세요!";
        break;

        case 7:
          $title = "1부터 100까지의 자연수 중 2의 배수만 출력";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) 2, 4, 6, 8 . . ., 100";
          $description ="반복문과 출력문을 사용하여 만드세요!";
        break;

        case 8:
          $title = "1부터 100까지의 자연수 중 소수 출력";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) 2, 3, 5, . . ., 97";
          $description ="조건문 if ~ else문, 출력문을 이용하여 만드세요!";
        break;

        case 9:
          $title = "1부터 100까지의 자연수 중 홀수의 합";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) 1 + 3 + . . . + 99";
          $description ="반복문, 출력문을 사용하여 만드세요!";
        break;

        case 10:
          $title = "1부터 100까지의 자연수 중 짝수의 합";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) 2 + 4 + . . . + 100예제";
          $description ="반복문, 출력문을 사용하여 만드세요!";
        break;

        case 11:
          $title = "사각형의 넓이 구하기";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) width * height = x";
          $description ="가로와 세로의 길이를 입력받아 그 값과 사각형의 넓일를 구하세요!";
        break;

        case 12:
          $title = "100개의 자연수 중 가장 큰 수 구하기";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) 1, 7, 40, 37 가장 큰 수 : 40";
          $description ="출력문, 반복문 사용, 필요시 배열또는 랜덤함수 사용아여 만드세요!";
        break;

        case 13:
          $title = "초를 입력받아서 시, 분 초로 변환하여 출력";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) 입력 : 100 출력 : 0시간 1분 40초";
          $description ="조건문을 사용하여 만드세요!";
        break;

        case 14:
          $title = "구구단 프로그램 만들기";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) 2 * 1 = 2 2 * 2 = 4 . . . 9 * 9 = 81";
          $description ="반복문과 출력문을 이용하여 만드세요!";
        break;

        case 15:
          $title = "구구단 프로그램 만들기 (입력한 단수만)";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) 입력 : 5 출력 : 5 * 1 = 5 5 * 2 = 10 . . . 5 * 9 = 45";
          $description ="반복문, 조건문을 사용하여 만드세요!";
        break;

        case 16:
          $title = "시간을 입력받아 초로 변환";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) 입력 : 1 출력 : 3600";
          $description ="조건문과 출력문을 사용하여 만드세요!";
        break;

        case 17:
          $title = "섭씨온도를 화씨로 변환";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) 입력 : 10 출력 : 50";
          $description ="출력문을 사용하여 만드세요";
        break;

        case 18:
          $title = "원의 넓이 구하기";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) 입력 : x 출력 : (x * x) * PI : y";
          $description ="출력문과 입력문을 이용하여 만드세요!";
        break;

        case 19:
          $title = "n 팩도리얼 구하기";
          $submitStatus = "0";
          $status = "0";
          $example = "EX) 입력 : 5 출력 : x 또는 5 * 4 * 3 * 2 * 1 : x";
          $description ="재귀함수 사용";
        break;

        case 20:
          $title = "피보나치 수열 출력(100까지)";
          $submitStatus = "0";
          $status = "0";
          $example = "'EX) 1, 1, 2,  . . . 100";
          $description ="재귀함수 사용";
        break;
    }
?>

<html>
<head>
  <title><?echo $title?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
  <center>
<?echo $description?><br><br>


<table border = "1">
<tr>
  <th>No.</th>
  <th>프로그램 이름</th>
  <th>제출 현황</th>
  <th>통과 현황</th>
</tr>

<tr>
  <td><?echo $no ?></td>
  <td><?echo $title?></td>
  <td><?echo $submitStatus?></td>
  <td><?echo $status?></td>
</tr>
</table>

<br><br><br>
<?echo $example?><br><br>

<form method = "post" action = "helloworld.php">
  <input type = "submit" style="width:50px;height:30px;" value="실행">
  <input type = "submit" style="width:50px;height:30px;" value="제출">
  <input type = "submit" style="width:50px;height:30px;" value="초기화">
  </form>

<textarea name = "codingArea" style="width:600px;height:500px;">
  여기에 코딩하세요.
</textarea> <br>

<textarea name = "codingArea" style="width:600px;height:100px;">
  실행화면
</textarea>
</center>
  </body>
</html>
