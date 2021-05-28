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
                <p>blog</p>
                <p>김연주의 블로그</p>
                <p><i class="fas fa-bars"></i></p>
            </div>
            <div class="contentBox">
                <div class="title">
                    <p>댓글 화면</p>
                    <h1>블로그, 게시판 등을 구현한다고 가정하게 해당 페이지의 댓글 화면을 구현합니다.</h1>
                    <p><span></span></p>
                    <p>김연주</p>
                </div>
                <div class="content">
                    <p>안녕하세요.</p>
                    <p>김연주의 블로그입니다.</p>
                    <p>댓글을 달아주시면 감사하겠습니다.</p>
                    <ul>
                        <li>로그인, 댓글에 대한 동작 (작성, 수정, 삭제, 좋아요, 싫어요), 금지어 기능, 도배 방지의 기능은 필수적으로 구현합니다.</li>
                        <li>별도 서버는 구현하지 않으셔도 괜찮습니다. 더미, 로컬 데이터로 동작확인만 되면됩니다.</li>
                        <li>SNS 로그인 역시 SNS 로그인 구현없이 더미데이터로 동작하여도 무방합니다</li>
                    </ul>
                    <p class="last">#댓글 화면 #구현 #블로그 #게시판</p>
                </div>
                <div class="bottom">
                    <p>
                        <i class="far fa-heart on"></i>
                        <!-- <i class="fas fa-heart"></i> -->
                    </p>
                    <a href="comment.php"><i class="far fa-comment-dots"></i></a>
                </div>
            </div>
        </section>
    </div>
    <div id="mobile">
        <p>이 사이트는 768px 이하 화면에서만 보입니다.</p>
    </div>
    <script src="js/index.js"></script>
</body>
</html>