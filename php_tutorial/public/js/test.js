
//ここにjavascriptコードを記載




let i = 4;
btn1.addEventListener('click', () => {

    //li要素を生成する
        //li要素にテキストを追加する
        
        const addlast = document.createElement('div');
        addlast.setAttribute("class", "child");
        addlast.setAttribute("id", `box${i}`);
        addlast.setAttribute("class", "cya");
        addlast.innerHTML = `<button id="${i}" onclick="deleteBtn(this)">削除</button>`;
        document.getElementById('dropbox1').appendChild(addlast);
        //li要素をul要素内に追加して表示する
        i++;
    })
    function deleteBtn(target) {
        var target_id = target.id;
        // var parent = document.getElementById('form_area');
        var ipt_id = document.getElementById("box" + target_id);
        console.log(ipt_id);
        // var tgt_id = document.getElementById(target_id);
        // parent.removeChild(tgt_id);	
        ipt_id.remove();
      }
 

