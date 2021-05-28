<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://yeonjoo8231.dothome.co.kr">
    <title>모바일 댓글 화면 구현</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>
<body>
    <div id="wrap">
        <section id="section">
            <div class="header">
                <p><a href="index.php"><i class="fas fa-chevron-left"></i></a></p>
                <p>댓글</p>
                <p><a href="index.php">본문보기</a></p>
            </div>
            <div class="commentBox">
                <!-- <ul class="list">

                </ul> -->
                <div class="inputBox">
                    <input type="text" placeholder="댓글을 입력해주세요" id="txt">
                    <button type="submit">등록</button>
                </div>
            </div>
            <div class="snsbg"></div>
            <ul class="snslogin">
                <li><span class="h3">SNS로 로그인</span>
                    <div class="snslistbox">
                        <h2><span>SNS로 로그인</span>해서 댓글쓰기</h2>
                        <ul class="snslist">
                            <li><a href="">네이버로 로그인</a></li>
                            <li><a href="">카카오톡으로 로그인</a></li>
                            <li><a href="">페이스북으로 로그인</a></li>
                            <li><a href="">구글로 로그인</a></li>
                            <li><a href="">트위터로 로그인</a></li>
                        </ul>
                        <button>닫기</button>
                    </div>
                </li>
                
            </ul>
        </section>
    </div>
    <div id="mobile">
        <p>이 사이트는 768px 이하 화면에서만 보입니다.</p>
    </div>
    <script src="js/index.js"></script>
</body>
</html>