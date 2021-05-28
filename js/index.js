$('.bottom > p').on('click', function(){
    $(this).find('i').removeClass('far').addClass('fas')
})



var cmList ='';
$.ajax({
    type : 'GET',
    url : 'comment.json',
    timeout : 3000,
    beforeSend : function(xhr){
        if (xhr.overrideMimeType){ 
            xhr.overrideMimeType('application/json')
        }
    },
    dataType : 'json',
    success : function(data) { 
        cmList = data
        dataPrint()
    },
    error : function(xhr) {
        alert(xhr.status + '/' +xhr.errorText)
    }
})

function dataPrint() {
    var list = '';
    for ( var i in cmList ) {
        list += `<li><div>${cmList[i].Textt}</div>`
        list += `<div><button>수정</button><button class="delete">삭제</button>`
        list += `<p><i class="far fa-thumbs-up"></i><span>0</span></p><p><i class="far fa-thumbs-down"></i><span>0</span></p></div></li>`
    }
    $('.commentBox').prepend(`<ul class="list">${list}</ul>`)
}

//삭제 버튼 누르면 삭제
$('.commentBox').on('click', 'ul.list li button.delete', function(e){
    e.preventDefault()
    var index = $(this).parents('li').index()
    cmList.splice(index, 1)
    $('ul.list').remove()
    dataPrint()
})



//데이터 직접 등록
$('.commentBox').on('click', '.inputBox button[type=submit]', function(e){
    e.preventDefault()
    if ( $('#txt').val() ==='') {
        alert('댓글을 작성해주세요 :)')
        return false
    }
    if ( $('#txt').val() ==='멍청이') {
        alert('사용할 수 없는 단어 입니다.')
        return false
    }
    var last = {
        Textt : $('#txt').val()
    }
    cmList.push(last)
    $('ul.list').remove()
    dataPrint()
})


$('.commentBox').on('click','ul.list li .far', function(e){
    var $this = $(this);
    var target = $this.next();
    var num = target.text();
    num++
    target.text(num);

})

$('.snslogin .h3').on('click', function(){
    $('.snslistbox').addClass('on')
    $('.snsbg').addClass('on')
})
$('.snslistbox button').on('click', function(){
    $('.snslistbox').removeClass('on')
    $('.snsbg').removeClass('on')
})