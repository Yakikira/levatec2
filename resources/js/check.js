document.getElementById('bt2').onclick=function(){
        var result = window.confirm('CLICK COMPLETE');
            switch (result) {
                case true:window.alert('削除します');
                    break;
                case false:window.alert('キャンセル');
                    break;
            }
}