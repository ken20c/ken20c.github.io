const a = 0

function header(){
    if(a++ === 0)
        {
        var html = "";
        html += '<header style="background-color: syan;">';
        html += '<p>自己紹介ウェブサイト</p>';
        html += '</header>';
        document.write(html);
        }
    }