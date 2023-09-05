<!--jQuery-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!--DatePiccer（日付入力フォーム統一）-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<!--DatePiccer日本語化-->
<script src="js/datepicker-ja.js"></script>
<!--lightbox-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
<!--複数画像を並列に見せる-->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    const max_date = JSON.parse('<?php echo $max_date; ?>');
</script>
<!--DatePiccer読み込み-->
<script>
    //-----------------------------------------------------------------------------------------------
    // 定期点検の日付、長期休暇を選べないようにするはここで指定してください（"yyyy/mm/dd"で入力「,」で区切り
    //-----------------------------------------------------------------------------------------------
$(function() {
//JSON.parseを使って配列を受け取る
    const max_date = JSON.parse('<?php echo htmlspecialchars($max_date, ENT_QUOTES, 'UTF-8');?>');

//長期休暇はここに記入
    var disableDates = ["2022/08/13","2022/08/14","2022/08/15"];

//長期休暇の配列の後ろに、sql
    max_date.forEach(function( max_date2 ) {
    disableDates.push(max_date2); // pushメソッド：配列disableDatesの末尾に要素'max_date'を追加する
});

    console.log(disableDates);

// 第一希望用
    $('#datepicker1').datepicker({
        changeMonth: true,
        dateFormat: "yy年mm月dd日",
        beforeShowDay: function (date) {
            // 火曜日
            var disableDate = $.datepicker.formatDate('yy/mm/dd', date);
            if(date.getDay() == 2) {
                return [false, 'ui-state-disabled'];
            // 水曜日
            } else if (date.getDay() == 3) {
                return [false, 'ui-state-disabled'];
            // 特定日を選択できないようにする
            } else if (disableDates.indexOf(disableDate) !== -1) {
                return [false, 'ui-state-disabled'];
            // 他
            } else {
                return [true, ''];
            }
        }
    })

// 第二希望用
    $('#datepicker2').datepicker({
        changeMonth: true,
        dateFormat: "yy年mm月dd日",
        beforeShowDay: function (date) {
            // 火曜日
            var disableDate = $.datepicker.formatDate('yy/mm/dd', date);
            if(date.getDay() == 2) {
                return [false, 'ui-state-disabled'];
            // 水曜日
            } else if (date.getDay() == 3) {
                return [false, 'ui-state-disabled'];
            // 特定日を選択できないようにする
            } else if (disableDates.indexOf(disableDate) !== -1) {
                return [false, 'ui-state-disabled'];
            // 他
            } else {
                return [true, ''];
            }
        }
    })

//第三希望用
    $('#datepicker3').datepicker({
        changeMonth: true,
        dateFormat: "yy年mm月dd日",
        beforeShowDay: function (date) {
            // 火曜日
            var disableDate = $.datepicker.formatDate('yy/mm/dd', date);
            if(date.getDay() == 2) {
                return [false, 'ui-state-disabled'];
            // 水曜日
            } else if (date.getDay() == 3) {
                return [false, 'ui-state-disabled'];
            // 特定日を選択できないようにする
            } else if (disableDates.indexOf(disableDate) !== -1) {
                return [false, 'ui-state-disabled'];
            // 他
            } else {
                return [true, ''];
            }
        }
    })

//第四希望用
    $('#datepicker4').datepicker({
        changeMonth: true,
        dateFormat: "yy年mm月dd日",
        beforeShowDay: function (date) {
            // 火曜日
            var disableDate = $.datepicker.formatDate('yy/mm/dd', date);
            if(date.getDay() == 2) {
                return [false, 'ui-state-disabled'];
            // 水曜日
            } else if (date.getDay() == 3) {
                return [false, 'ui-state-disabled'];
            // 特定日を選択できないようにする
            } else if (disableDates.indexOf(disableDate) !== -1) {
                return [false, 'ui-state-disabled'];
            // 他
            } else {
                return [true, ''];
            }
        }
    })
});
</script>

<!--自作のJS-->
<script src="js/01_script.js"></script>

<!--承諾のJS-->
<script type="text/javascript">
    $('#checkBox').change(function(){
        if (this.checked) {
        $('#button').prop("disabled", false);
        } else {
        $('#button').prop("disabled", true);
        }
    });
</script>