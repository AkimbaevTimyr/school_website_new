<?php
use yii\helpers\Html;

?>

<div>
    <div class="row p-w-xl">
        <div class="col-lg-3">
            <div class="ibox">
                <div class="ibox-title">
                    <h5><?php echo $courseMaterial->name ?></h5>
                </div>
                <div class="ibox-content">
                    <p>
                        <?php echo $courseMaterial->description ?>
                    </p>
                </div>
                <form onsubmit="handleSubmit(event)">
                    <div class="ibox-content d-flex">
                        <input class="form-control" id="link" placeholder="Ссылка на внешний источник" >
                        <button class="btn btn-primary" style="width: 100px; margin-left: 15px">Загрузить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    function handleSubmit(e){
        e.preventDefault();
        let link = $('#link').val();
        console.log(link)
        $.ajax({
            url: `/admin/update-link?link=`+link+"&"+"id=<?php echo $courseMaterial->id ?>",
            type: "POST",
            data: {link: link},
            contentType: false,
            processData: false,
            dataType: 'json',
            success : function(){

            },
            error : function () {

            },
        })
    }

    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }


    function myCourseFunction(id) {
        $.ajax({
            url: '/site/course?id='+id,
            method: "GET",
            success: function(data) {
                $("#main-body-content").html(data);
            }
        })
        document.getElementById('main-body-content').classList.add("show");
    }

    function exitFunction() {
        $.ajax({
            url: '/user/logout',
            method: "POST",
            success: function() {
                console.log('exit')
            }
        })
    }

    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    // openDropdown.classList.add('active');
                }
            }
        }
    }
</script>

