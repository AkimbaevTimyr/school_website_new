<?php
use yii\helpers\Html;

?>
<div class="d-flex flex-column h-100" >
    <div class="d-flex h-100">
        <div class="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation" style="background-color: #293846;">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element p-h-lg p-l-md">
                                <?= Html::a('Онлайн школа', ['app/main'])?>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn">Курсы</button>
                                <div id="myDropdown" class="dropdown-content">
                                    <?php foreach ($courses as $course): ?>
                                        <button class="dropdown-content-button" onclick="myCourseFunction(<?= $course->id ?>)"><?=  $course->name ?></button><br />
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="main-body" style="background-color: rgb(243, 243, 244);">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0; height: 60px">
                <div class="navbar-header">
                </div>
                <ul class="nav navbar-top-links navbar-right ">
                    <div style="margin-right: 30px; font-size:20px; display: flex; margin-right: 30px; color: rgba(0, 0, 0, 0.55); align-items: center; cursor: pointer" onclick="exitFunction()">Выйти</div>
                </ul>
            </nav>
            <div>
                <div class="row p-w-xl">
                    <div class="col-lg-3">
                        <a href="/app/main">Назад</a><br/>
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5><?php echo $courseMaterial->name ?></h5>
                            </div>
                            <div class="ibox-content">
                                <?php echo $courseMaterial->description ?>
                                <?php if(!empty($link['link'])): ?>
                                    <p>
                                        <a href="<?php echo $link['link'] ?>" target="_blank">Ссылка</a>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="ibox-content">
                                <a class="text-decoration-none" href="/app/download-file?id=<?php echo $courseMaterial->id ?>">скачать материалы</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>




